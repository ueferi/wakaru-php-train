<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
<?php
	$hand = ['ぐぅ','ちょき','ぱぁ'];//表示用配列
	$CPU = rand(0,2);//CPの手取得
	$user = intval($_REQUEST['hand']);//プレイヤーの手を取得
	//表示作成
	echo '<p>あなた：' , $hand[$user] , '</p>';
	echo '<p>コンピュータ：' , $hand[$CPU] , '</p>';
	//判定部分
	if($CPU == $user){//あいこのパターン
		echo 'あいこ';	
	//勝った時のパターン
	}else if(($user == 0 && $CPU == 1) || ($user == 1 && $CPU == 2) || ($user == 2 && $CPU == 0)){
		echo 'あなたの勝ち';	
	}else{//負けのパターン
		echo 'あなたの負け';
	}
	echo 'です。<br><br>';
/*	判定の別パターン
	$pattern = [['あいこ','勝ち','負け'],['負け','あいこ','勝ち'],['勝ち','負け','あいこ']];
	echo '<p>あなたの';
	echo $pattern[$user][$CPU];
	echo 'です。：配列パターン</p>';
*/
?>
<br>
<a href="index.php">再戦</a>
<hr>
</body>
</html>


