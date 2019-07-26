<?php

// 別のファイルを読み込む
require_once('function.php');

// getできた場合は、index.htmlに戻す
// echo '<pre>';
// var_dump($_SERVER);
// die;
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    header('Location: index.html');
    exit;
}

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
$email = $_POST['email'];
$content = $_POST['content'];

if ($nickname == '') {
    $nickname_result = 'ニックネームが入力されていません。';
} else {
    $nickname_result = 'ようこそ、' . $nickname . '様';
}

if ($email == '') {
    $email_result = 'メールアドレスが入力されていません。';
} else {
    $email_result = 'メールアドレス：' . $email;
}

if ($content == '') {
    $content_result =  'お問い合わせ内容が入力されていません。';
} else {
    $content_result = 'お問い合わせ内容：' . $content;
}

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
    <p><?php echo h($nickname_result); ?></p>
    <p><?php echo h($email_result); ?></p>
    <p><?php echo h($content_result); ?></p>
    <button type="button" onclick="history.back()">戻る</button>
    <!-- thanks.phpにpost送信するボタン -->
    <?php if ($nickname != '' && $email != '' && $content != '') : ?>
        <form action="thanks.php" method="POST">
            <input type="hidden" name="nickname" value="<?php echo h($nickname); ?>">
            <input type="hidden" name="email" value="<?php echo h($email); ?>">
            <input type="hidden" name="content" value="<?php echo h($content); ?>">
            <input type="submit" value="OK">
        </form>
    <?php endif; ?>

</body>

</html>