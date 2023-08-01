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
// for ($i=1; $i<=365; $i++){
//     $day = date ('n/j(D)', strtotime ('+'.$i.'day'));
//     print ($day."\n");
// }
// print ("\n");

// $i = 1;
// while ($i <= 365){
//     $day = date ('n/j(D)', strtotime ('+'.$i.'day'));
//     print ($day."\n");
//     $i++;
// }

$week_name = ['日', '月', '火', '水', '木', '金', '土'];
print ('今日は'.$week_name[date('w')].'曜日です');

print ("\n");
$generation = ['10代以下', '20代', '30代', '40代', '50代', '60代以上'];
print ($generation[2]);

print ("\n");
$fruits = [
    'apple' => 'りんご',
    'grape' => 'ぶどう',
    'lemon' => 'レモン',
    'tomato' => 'トマト',
    'peach' => 'もも',
];
foreach ($fruits as $english => $japanese) {
    print ($english.':'.$japanese."\n");
}

$platforms = [
    'win' => 'Windows',
    'mac' => 'Macintosh',
    'iphone' => 'iPhone',
    'ipad' => 'iPad',
    'android' => 'Android',
];
foreach ($platforms as $key => $val) {
    print ($key.':'.$val."\n");
}

if (date('G')<9){
    print('※現在受付時間外です');
} else {
    print ('ようこそ');
}

print ("\n");
$answer=0;
if ($answer==0){
    print('1以上の数字を指定してください');
}
?>
<br>
3,000円のものから、100円値引きした場合は、
<?php print (floor(100/3000*100));?>%引きです
■その他計算
元の計算式→<?php print (100/3000*100);?>

切り上げ(ceil)→<?php print (ceil(100/3000*100));?>

四捨五入(round)→<?php print (round(100/3000*100));?>
<br>
<?php
$date = sprintf('%04d年%02d月%02d日', 2018, 1, 23);
print($date);
?>
</pre>
</main>
</body>    
</html>