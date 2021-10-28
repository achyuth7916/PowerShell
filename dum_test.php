<!DOCTYPE html>
<html>
<head>
<title>Dashboard</title>
</head>
<body>

<h1>Welcome to admin page</h1>

<?php
echo $_POST['exec'];

echo ' '.$_POST['execution'];

echo ' '.$_POST['execution1'];

echo ' '.$_POST['emp_name'];

echo ' '.$_POST['emp_id'];

?>

<div>
	<a href='dump_adhoc.php' >Back</a>
</div> 
</body>
</html>