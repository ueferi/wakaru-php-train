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
$file = file_get_contents('https://h2o-space.com/feed/json');
$json = json_decode($file);
foreach ($json->items as $item):
?>
・<a href="<?php print($item->link);?>"><?php print($item->title);?></a>
<?php
endforeach;
?>
<?php
$json_sample = [
    'title' => 'JSONサンプル',
    'items' => [
        'item01' => '1つめ',
        'item02' => '2つめ'
    ]
];

$file = json_encode($json_sample, JSON_UNESCAPED_UNICODE);
file_put_contents('./json_sample.json', $file);
?>

</pre>
</main>
</body>    
</html>