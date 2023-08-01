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
    <h2>チェックボックスの値を取得する</h2>
    <pre>
ご予約日：
<!-- <?php
      foreach ($_POST['reserve'] as $reserve) {
        print(htmlspecialchars($reserve, ENT_QUOTES) . ' ');
      }
      ?> -->
<?php
//先生の回答
//htmlspecialcharsが長いので縮めてhscという関数を作った
//関数の書き方はJSと同じ
function hsc($str)
{
  return htmlspecialchars($str, ENT_QUOTES);
}
foreach ($_POST['reserve'] as $reserve) {
  print(hsc($reserve) . ':');
}
?>
<!-- 1個選択の時はそのまま、2個以上選択した時はカンマで区切るようにしたい
ただし、文末にはカンマをつけない
チェックされたチェックボックスの数え方を調べる -->
</pre>
  </main>
</body>

</html>