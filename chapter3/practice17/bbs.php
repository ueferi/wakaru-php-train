<!doctype html>
<html lang="ja">
<head>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="../css/style.css">

<title>よくわかるPHPの教科書</title>
</head>
<body>
<header>
<h1 class="font-weight-normal">よくわかるPHPの教科書</h1>    
</header>

<main>
<h2>Bulletin Board Practice</h2>
<pre>
<?php
//ファイルがない状態で起動するとエラーになります
$doc = file_get_contents('bbs.txt');
//送信されてきたデータを取得してファイルに書きこみます
$doc .= "<hr>".htmlspecialchars($_REQUEST['my_name'], ENT_QUOTES);
//REQUESTはGETとPOSTの両方
//ENTはENTITYのこと
file_put_contents('bbs.txt', $doc);
readfile('bbs.txt');
?>
</pre>
</main>
</body>    
</html>