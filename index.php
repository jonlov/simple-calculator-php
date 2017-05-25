<?php 

if($_POST['submit'] == 'Calculate') {
	if($_POST['msg'] == 'sum'){
	$msg = 'sum';
	$total = $_POST['num-1']+$_POST['num-2'];
		
	}
	if($_POST['msg'] == 'subtract'){
	$msg = 'subtraction';
	$total = $_POST['num-1']+$_POST['num-2'];
		
	}
	if($_POST['msg'] == 'multiply'){
	$msg = 'multiplication';
	$total = $_POST['num-1']+$_POST['num-2'];
		
	}
	if($_POST['msg'] == 'divide'){
	$msg = 'division';
	$total = $_POST['num-1']+$_POST['num-2'];
		
	}
}

 ?>
<html>
<head>
<title>Calculator</title>

</head>
<body>
<center>
<?php 
if(empty($msg)) {
 ?>
<form action="index.php" method="post" name="calculator">
<br>
<label>Number 1</label>
<input type="text" name="num-1">
<br>
<label>Number 2</label>
<input type="text" name="num-2">
<br>
<label>Sum</label>
<input type="radio" name="msg" value="sum">
<br>
<label>Subtract</label>
<input type="radio" name="msg" value="subtract">
<br>
<label>Multiply</label>
<input type="radio" name="msg" value="multiply">
<br>
<label>Divide</label>
<input type="radio" name="msg" value="divide">
<br>
<input type="submit" name="submit" value="Calculate">

</form>
<?php 
} else {
 ?>
Total of the <?php echo $msg; ?> is <?php echo $total; ?>
<br>
<a href="index.php">Make another calculation</a>
<?php 
}
 ?>
</center>

</body>
</html>