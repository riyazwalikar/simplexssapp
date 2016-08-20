<?php
error_reporting(0);
?>
<html>
<head>
	<title>
		Simple Reflected XSS Application - HTML Context
	</title>
</head>
<body>

<div style="color:red">
<h1>Welcome 
<?php
if (isset($_GET['msg'])){
	print $_GET['msg'];
}
?>!
</h1>
</div>
<br />
<a href="index.php">Go back to Index page</a>
</body>
</html>