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


if($_POST['employee'] == 'mahesh'){

		echo ' '.$_POST['emp_name'];

		echo ' '.$_POST['emp_id'];
}
elseif($_POST['employee'] == 'arun'){

		echo ' '.$_POST['emp_name1'];

		echo ' '.$_POST['emp_id1'];
}
?>

<div>
	<a href='dump_adhoc.php' >Back</a>
</div> 
</body>
</html>