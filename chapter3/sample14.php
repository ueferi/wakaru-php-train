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
<h2>Practice</h2>
<pre>
<?php
// $news = file_get_contents('./news_data/news.txt');
// print($news);
$doc = file_get_contents('./news_data/news.txt');
$doc .= "<br>2023-07-12 ニュースを追加しました";
file_put_contents('./news_data/news.txt', $doc);
readfile('./news_data/news.txt');
?>
</pre>
</main>
</body>    
</html>