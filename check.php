<?php

/**
 * $_POST
 *  post送信されたデータを格納するスーパーグローバル変数
 *  データは連想配列形式で入っている
 *  ['key' => 'value']
 *  $_POST_['key'] // valueの内容が確認できます。
 *  valueにはユーザーが入力した内容
 *  keyにはname属性の値が入る
 * 
 * スーパーグローバル変数
 *  PHPでもともと定義されている変数
 * 
 * $_GET
 *  get送信されたデータを格納するスーパーグローバル変数
 */

$nickname = $_POST['nickname'];
echo $nickname;

$email = $_POST['email'];
echo $email;

$content = $_POST['content'];
echo $content;

// emailを$emailという変数に格納
// $emailを画面に表示

// お問い合わせ内容を$contentという変数に格納
// $contentを画面に表示

?>
<!DOCTYPE html>
<html lang="ja">

<head>
    <title>入力内容確認</title>
    <meta charset="utf-8">
</head>

<body>
    <h1>入力内容確認</h1>
</body>

</html>