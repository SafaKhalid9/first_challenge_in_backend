<?php
$name = '';
if($_SERVER['REQUEST_METHOD'] == "POST"){
	$name = isset($_POST['name']) ?
	trim($_POST['name']) : '';

}
elseif (isset($_GET['name'])){
	$name = trim($_GET['name']);
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Greeting Page</title>
	<style>
		body{
			font-family: Arial, sans-serif;
			background-color: #eee;
			text-align: center;
			padding-top: 100px;
		}
		h2{
			color: blue;
		}
	</style>
</head>

<body>
	<?php
	if(!empty($name)){
	echo "<h2> hello " . $name . "</h2>";
	}
	else{
		echo "<h3> Please enter your name: </h3>";
		echo '<form action="greeting.php" method="post">
				<input type="text"  name="name" required>
				<input type="submit" value="Submit">
		</form>';
	}
	?>
</body>
</html>

