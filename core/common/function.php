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

/**
 * 输出json
 */
function J($data){
  header('Content-type:text/json');
  return json_encode($data);
}

/**
 * 返回结果
 */
function R($code,$msg = '',$data = ''){
  if (!intval($code)) {
    return false;
  }
  $result = array();
  $result['code'] = $code; //反码状态，200正常，400往上都属错误
  $result['msg'] = $msg;
  $result['data'] = $data;
  return $result;
}

/**
* 图片地址替换成压缩URL
* @param string $content 内容
* @param string $suffix 后缀
*/
function getImgReplaceUrl($content="",$suffix=""){
  $pregRule = "/<[img|IMG].*?src=[\'|\"](.*?(?:[\.jpg|\.jpeg|\.png|\.gif|\.bmp]))[\'|\"].*?[\/]?>/";
  $content = preg_replace($pregRule, '<img src="'.$suffix.'${1}" style="max-width:100%">', $content);
  return $content;
}

/**
 * curl，POST请求
 */
function CP($url,$data = null){
    $curl = curl_init();
    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, FALSE);
    curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, FALSE);
    if (!empty($data)){
        curl_setopt($curl, CURLOPT_POST, 1);
        curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
    }
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
    $output = curl_exec($curl);
    curl_close($curl);
    return $output;
}

/**
 * curl，GET请求
 */
function CG($url){
    //初始化
    $ch = curl_init();
    //设置选项，包括URL
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_HEADER, 0);
    //执行并获取HTML文档内容
    $output = curl_exec($ch);
    //释放curl句柄
    curl_close($ch);
    return $output;
}

/**
 * 数组 转 对象
 *
 * @param array $arr 数组
 * @return object
 */
function TB($arr) {
    if (gettype($arr) != 'array') {
        return;
    }
    foreach ($arr as $k => $v) {
        if (gettype($v) == 'array' || getType($v) == 'object') {
            $arr[$k] = (object)array_to_object($v);
        }
    }

    return (object)$arr;
}

/**
 * 对象 转 数组
 *
 * @param object $obj 对象
 * @return array
 */
function TA($obj) {
    $obj = (array)$obj;
    foreach ($obj as $k => $v) {
        if (gettype($v) == 'resource') {
            return;
        }
        if (gettype($v) == 'object' || gettype($v) == 'array') {
            $obj[$k] = (array)object_to_array($v);
        }
    }

    return $obj;
}

/**
 * 中文逗号（，）转英文逗号（,）;
 */
function commaEn($data){
   return preg_replace("/(\n)|(\s)|(\t)|(\')|(')|(，)/" ,',' ,$data);
}

