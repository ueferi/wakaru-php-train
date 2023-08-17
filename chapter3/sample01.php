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
print('PHPを勉強中です！');
print("\n");

print (123+2*5/3);
print("\n");

print('現在は'.date('G時i分s秒').'です');
print("\n");
print('今日は'.date('Y年n月j日').'です');
print("\n");
$today = new DateTime();
print('現在は'.$today->format('G時i分s秒').'です');
print("\n");

$sum = 100+1050+200;
?>
合計金額は:<?php print ($sum);?>円です
税込金額は:<?php print ($sum*1.08);?>円です
<?php
$sum = 8+2;
echo ($sum);
print("\n");

// for ($i=1; $i<=365; $i++){
//     print($i."\n");
// }

for ($i=100; $i>=1; $i=$i-2){
    print("$i\n");
}

?>
</pre>
</main>
</body>    
</html>