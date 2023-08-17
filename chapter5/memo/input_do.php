<?php require('dbconnect.php'); ?>
<!doctype html>
<html lang="ja">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/style.css">

    <title>よくわかるPHPの教科書</title>
</head>

<body>
    <header>
        <h1 class="font-weight-normal">よくわかるPHPの教科書</h1>
    </header>

    <main>
        <h2>フォームからの情報を保存する</h2>
        <pre>
<?php
//先頭のrequireで共通プログラムにしているためコメントアウト
// try {
//     $db = new PDO('mysql:dbname=mydb;host=localhost;charset=utf8', 'root', '');
// } catch (PDOException $e) {
//     echo 'DB接続エラー： ' . $e->getMessage();
// }
//prepareメソッド セキュリティ対策として入力値の無害化
$statement = $db->prepare('INSERT INTO memos SET memo=?, created_at=NOW()');
$statement->execute(array($_POST['memo']));
//$POSTにhtmlspetialcharsを付け加えるとより安全 長くなるから省略してるっぽい
echo 'メモが登録されました';

$statement = $db->prepare('SELECT*FROM memos LIMIT?');
$limit = 5;
$statement->bindParam(1, $limit, PDO::PARAM_INT);
$statement->execute();
?>
</pre>
    </main>
</body>

</html>