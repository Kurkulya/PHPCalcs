<?php
$res = "";
if(is_array($_POST) && !empty($_POST))
{
	$a = $_POST['a'];
	$b = $_POST['b'];
	$op = $_POST['op'];
	$res = calc($a, $b, $op);
}
function calc($a, $b, $op)
{
	$result = 0;
	switch($op)
	{
		case '+': 
			$result = $a+$b; 
			break;
		case '-': 
			$result = $a-$b; 
			break;
		case '*': 
			$result = $a*$b; 
			break;
		case '/': 
			$result = $a/$b; 
			break;
		default: 
			$result = "Error";
	}
	return $result;
}
?>


<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	</head>
	<body>
		<form method="POST">
			<input type="number" name="a" style="width:45px" value="<?php echo $a; ?>">
			<input type="text" name="op" style="width:18px" value="<?php echo $op; ?>">
			<input type="number" name="b" style="width:45px" value="<?php echo $b; ?>">
			= <input type="text" name="resField" width="20" value="<?php echo $res; ?>" disabled>;
			<input type="submit" value="Calculate">
		</form>
	</body>
</html>


