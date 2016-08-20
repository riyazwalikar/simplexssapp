<?php
error_reporting(0);
?>
<html>
<head>
	<title>
		Simple Reflected XSS Application - HTML Element Context
	</title>
</head>
<body>

<div style="color:red">
<h1>Welcome bob!</h1> 
</div>
<form action="element.php">
Please enter your last name: <input name="lname" id="lname" value="<?php
if (isset($_REQUEST['lname'])){
	print $_REQUEST['lname'];
}
?>">
<br />
<input type="submit" value="Submit">
</form>
<br />
<a href="index.php">Go back to Index page</a>
</body>
</html>