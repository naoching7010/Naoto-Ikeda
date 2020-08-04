<?php

// サニタイズ
function h($str) {
    return htmlspecialchars($str);
}

// エラーメッセージを格納する配列
$err_msg = array();
define('MSG01', '入力必須です');
define('MSG02', 'Emailの形式で入力してください');
define('MSG03', '文字以下で入力してください');
//未入力チェック
function validRequired($str, $key)
{
    global $err_msg;
    if (empty($str)) {
        $err_msg[$key] = MSG01;
    }
}
//Email形式チェック
function validEmail($str, $key)
{
    global $err_msg;
    if (!preg_match("/^([a-zA-Z0-9])+([a-zA-Z0-9\._-])*@([a-zA-Z0-9_-])+([a-zA-Z0-9\._-]+)+$/", $str)) {
        $err_msg[$key] = MSG02;
    }
}

//最大文字数チェック
function validMaxLen($str, $key, $max = 255)
{
    global $err_msg;
    if (mb_strlen($str) > $max) {
        $err_msg[$key] = $max . MSG03;
    }
}