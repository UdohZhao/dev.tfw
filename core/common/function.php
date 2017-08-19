<?php
use vendor\fileupload\fileupload;
/**
 * 浏览器友好的变量输出
 * @param mixed $var 变量
 * @param boolean $echo 是否输出 默认为True 如果为false 则返回输出字符串
 * @param string $label 标签 默认为空
 * @param boolean $strict 是否严谨 默认为true
 * @return void|string
 */
function see($var, $echo=true, $label=null, $strict=true) {
    $label = ($label === null) ? '' : rtrim($label) . ' ';
    if (!$strict) {
        if (ini_get('html_errors')) {
            $output = print_r($var, true);
            $output = '<pre>' . $label . htmlspecialchars($output, ENT_QUOTES) . '</pre>';
        } else {
            $output = $label . print_r($var, true);
        }
    } else {
        ob_start();
        var_dump($var);
        $output = ob_get_clean();
        if (!extension_loaded('xdebug')) {
            $output = preg_replace('/\]\=\>\n(\s+)/m', '] => ', $output);
            $output = '<pre>' . $label . htmlspecialchars($output, ENT_QUOTES) . '</pre>';
        }
    }
    if ($echo) {
        echo($output);
        return null;
    }else
        return $output;
}

/**
 * 是否是AJAx提交的
 * @return bool
 */
function isAjax(){
    if(isset($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest'){
        return true;
    }else{
        return false;
    }
}

/**
 * 是否是GET提交的
 * @return bool
 */
function isGet(){
    return $_SERVER['REQUEST_METHOD'] == 'GET' ? true : false;
}

/**
 * 是否是POST提交
 * @return bool
 */
function isPost() {
    return $_SERVER['REQUEST_METHOD'] == 'POST' ? true : false;
}

// PHP无敌加密
function enPassword($password){
    return md5(crypt($password,substr($password,0,2)));
}

// 上传文件
function upFiles($file){
    // 文件上传
    $up = new FileUpload();
    $res = array();
    if ($up->upload($file)) {
      $res['error'] = 0;
      // 多文件上传?
      if (is_array($up->getFileName())) {
        foreach ($up->getFileName() AS $k => $v) {
          $res['filepath'][] = '/admin/uploads/'.$v;
        }
        //$res['cover_path'] = serialize($res['cover_path']);
      } else {
        $res['filepath'] = '/admin/uploads/'.$up->getFileName();
      }
    } else {
      $res['error'] = 1;
      $res['msg'] = $up->getErrorMsg();
    }
    return $res;
}


//删除文件
function unlink_file($file_path){
    unlink(ICUNJI.$file_path);
}



