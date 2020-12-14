<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Malgado Miamala app</title>
</head>
<body>
<h1>THIS IS A SIMPLE CALCULATOR MADE FROM ONE OF TOTARIALS</h1>
<form>
	<input type="text" name="num1" placeholder="Nambari ya Kwanza">
	<input type="text" name="num2" placeholder="Nambari ya Pili">
	<input type="password" name="num4" placeholder="Nambari ">
	<select name = "juju">
		<option>None</option>
		<option>Add</option>
		<option>Subtract</option>
		<option>Multiply</option>
		<option>Divide</option>
	</select>
	<br>
	<button type="submit" name="submit" value="submit">Calculate</button>
</form>
<p>
<h2>ANSWER FOR THE SELECTED OPERATION IS :</h2> </p>

<?php 
if (isset($_GET['submit']))
{
$result1 = $_GET['num1'];
$result2 = $_GET['num2'];
$operatorr = $_GET['juju'];
switch ($operatorr) {
	case 'None':
		# code...
		Echo "PLease select Operation";
		break;
	case 'Add':
		# code...
		Echo $result1 + $result2;
		break;
	case 'Subtract':
		# code...
		Echo $result1 - $result2;
		break;
		case 'Multiply':
		# code...
		Echo $result1 * $result2;
		break;
		case 'Divide':
		# code...
		Echo $result1 / $result2;
		break;
	}
}
 ?>

</body>
</html>