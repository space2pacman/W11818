<? session_start(); ?>
<? header("Content-type: text/html; charset=utf-8");?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin blog</title>
	<meta charset="utf-8">
</head>
<body>

<?

$form = '<form action="" method="POST">
			<input name="header">
			<textarea name="content"></textarea>
			<input type="submit">
		</form>';

if($_SESSION["user"]) {
	echo $form;
} else {
	echo "Доступ закрыт";
}

	include("db.php");

	$header = $_POST["header"];
	$content = $_POST["content"];
	$date = Date("H:i:s");

	if(!empty($header) && !empty($content)) {
		mysql_query("INSERT INTO contents(header, content, date) VALUES('$header','$content','$date')");
	}
?>
</body>
</html>