<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
<?php
$name=$_GET['name'];
echo $name;
echo '<br>';
$name2=$_GET['name2'];
echo $name2;
echo '<br>';
$name3=$_GET['name3'];
echo $name3;
echo '<br>';
$name4=$_GET['name4'];
echo $name4;
echo '<br>';
$name5=$_GET['name5'];
echo $name5;
?>
<form action="index.php" method="get">
    Название: <input type="text" name="name"><br>
    Название: <input type="text" name="name2"><br>
    Название: <input type="text" name="name3"><br>
    Название: <input type="text" name="name4"><br>
    Название: <input type="text" name="name5"><br>
<input type="submit" value="добавить">
</form>
</body>
</html>