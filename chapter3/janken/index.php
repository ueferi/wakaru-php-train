<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<style>
		input:checked + label {
  			opacity: 0.5;
			color:red;
		}
	</style>
</head>
<body>
<p>じゃんけんをしましょう</p>
<form action="janken-output.php" method="post">
	<p><input id="g" type="radio" name="hand" value="0" checked>
		<label for="g">ぐー</label>
	</p>
	<p><input id="c" type="radio" name="hand" value="1" >
		<label for="c">ちょき</label>
	</p>
	<p><input id="p" type="radio" name="hand" value="2" >
	<label for="p">ぱー</label>
	</p>
	<input type="submit" name="確定">
</form>

</body>
</html>

