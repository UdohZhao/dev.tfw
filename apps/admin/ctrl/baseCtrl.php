<?php
namespace apps\admin\ctrl;
use core\lib\conf;
class baseCtrl extends \core\icunji{
  public $userinfo;
  // 构造方法
  public function _initialize(){
    //控制器初始化
    if(method_exists($this,'_auto'))
        $this->_auto();
    // session
    if (!isset($_SESSION['userinfo'])) {
      header('Location:/admin/login/index');
      die;
    } else {
      // 用户session信息模版输出
      $this->userinfo = $_SESSION['userinfo'];
      $this->assign('userinfo',$_SESSION['userinfo']);
      // 后台名称模版输出
      $this->assign('websiteName',conf::get('WEBSITE_NAME','admin'));
    }
  }

  // 删除文件
  public function delFile(){
    // Ajax
    if (IS_AJAX) {
      $filePath = ICUNJI.$_POST['filePath'];
      if (unlink($filePath)) {
        echo json_encode(true);
        die;
      } else {
        echo json_encode(false);
        die;
      }
    }
  }

  // 批量上传文件
  public function fileUpload(){
    // Make sure file is not cached (as it happens for example on iOS devices)
    header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
    header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
    header("Cache-Control: no-store, no-cache, must-revalidate");
    header("Cache-Control: post-check=0, pre-check=0", false);
    header("Pragma: no-cache");


    // Support CORS
    // header("Access-Control-Allow-Origin: *");
    // other CORS headers if any...
    if ($_SERVER['REQUEST_METHOD'] == 'OPTIONS') {
        exit; // finish preflight CORS requests here
    }


    if ( !empty($_REQUEST[ 'debug' ]) ) {
        $random = rand(0, intval($_REQUEST[ 'debug' ]) );
        if ( $random === 0 ) {
            header("HTTP/1.0 500 Internal Server Error");
            exit;
        }
    }

    // header("HTTP/1.0 500 Internal Server Error");
    // exit;


    // 5 minutes execution time
    @set_time_limit(5 * 60);

    // Uncomment this one to fake upload time
    // usleep(5000);

    // Settings
    // $targetDir = ini_get("upload_tmp_dir") . DIRECTORY_SEPARATOR . "plupload";
    $targetDir = 'uploads';
    $uploadDir = 'uploads' . DIRECTORY_SEPARATOR . date('Y-m-d');

    $cleanupTargetDir = true; // Remove old files
    $maxFileAge = 5 * 3600; // Temp file age in seconds


    // Create target dir
    if (!file_exists($targetDir)) {
        @mkdir($targetDir);
    }

    // Create target dir
    if (!file_exists($uploadDir)) {
        @mkdir($uploadDir);
    }

    // Get a file name
    if (isset($_REQUEST["name"])) {
        $fileName = $_REQUEST["name"];
    } elseif (!empty($_FILES)) {
        $fileName = $_FILES["file"]["name"];
    } else {
        $fileName = uniqid("file_");
    }
    $ex_name = substr($fileName,strripos($fileName,'.'));//后缀名
    $filePath = $targetDir . DIRECTORY_SEPARATOR . $fileName;
    $fileName = time() . rand() .$ex_name;
    $uploadPath = $uploadDir . DIRECTORY_SEPARATOR . $fileName;

    // Chunking might be enabled
    $chunk = isset($_REQUEST["chunk"]) ? intval($_REQUEST["chunk"]) : 0;
    $chunks = isset($_REQUEST["chunks"]) ? intval($_REQUEST["chunks"]) : 1;


    // Remove old temp files
    if ($cleanupTargetDir) {
        if (!is_dir($targetDir) || !$dir = opendir($targetDir)) {
            die('{"jsonrpc" : "2.0", "error" : {"code": 100, "message": "Failed to open temp directory."}, "id" : "id"}');
        }

        while (($file = readdir($dir)) !== false) {
            $tmpfilePath = $targetDir . DIRECTORY_SEPARATOR . $file;

            // If temp file is current file proceed to the next
            if ($tmpfilePath == "{$filePath}_{$chunk}.part" || $tmpfilePath == "{$filePath}_{$chunk}.parttmp") {
                continue;
            }

            // Remove temp file if it is older than the max age and is not the current file
            if (preg_match('/\.(part|parttmp)$/', $file) && (@filemtime($tmpfilePath) < time() - $maxFileAge)) {
                @unlink($tmpfilePath);
            }
        }
        closedir($dir);
    }


    // Open temp file
    if (!$out = @fopen("{$filePath}_{$chunk}.parttmp", "wb")) {
        die('{"jsonrpc" : "2.0", "error" : {"code": 102, "message": "Failed to open output stream."}, "id" : "id"}');
    }

    if (!empty($_FILES)) {
        if ($_FILES["file"]["error"] || !is_uploaded_file($_FILES["file"]["tmp_name"])) {
            die('{"jsonrpc" : "2.0", "error" : {"code": 103, "message": "Failed to move uploaded file."}, "id" : "id"}');
        }

        // Read binary input stream and append it to temp file
        if (!$in = @fopen($_FILES["file"]["tmp_name"], "rb")) {
            die('{"jsonrpc" : "2.0", "error" : {"code": 101, "message": "Failed to open input stream."}, "id" : "id"}');
        }
    } else {
        if (!$in = @fopen("php://input", "rb")) {
            die('{"jsonrpc" : "2.0", "error" : {"code": 101, "message": "Failed to open input stream."}, "id" : "id"}');
        }
    }

    while ($buff = fread($in, 4096)) {
        fwrite($out, $buff);
    }

    @fclose($out);
    @fclose($in);

    rename("{$filePath}_{$chunk}.parttmp", "{$filePath}_{$chunk}.part");

    $index = 0;
    $done = true;
    for( $index = 0; $index < $chunks; $index++ ) {
        if ( !file_exists("{$filePath}_{$index}.part") ) {
            $done = false;
            break;
        }
    }
    if ( $done ) {
        if (!$out = @fopen($uploadPath, "wb")) {
            die('{"jsonrpc" : "2.0", "error" : {"code": 102, "message": "Failed to open output stream."}, "id" : "id"}');
        }

        if ( flock($out, LOCK_EX) ) {
            for( $index = 0; $index < $chunks; $index++ ) {
                if (!$in = @fopen("{$filePath}_{$index}.part", "rb")) {
                    break;
                }

                while ($buff = fread($in, 4096)) {
                    fwrite($out, $buff);
                }

                @fclose($in);
                @unlink("{$filePath}_{$index}.part");
            }

            flock($out, LOCK_UN);
        }
        @fclose($out);
    }

    // 写入session
    //file_put_contents('upload.txt', '/admin/'.$uploadPath.',', FILE_APPEND);
    $_SESSION['uploadPath']['slideshow'][] = '/admin/'.$uploadPath;

    // Return Success JSON-RPC response
    die('{"jsonrpc" : "2.0", "result" : null, "id" : "id"}');
  }

}