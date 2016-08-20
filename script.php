<?php
error_reporting(0);
?>
<html>
<head>
	<title>
		Simple Reflected XSS Application - Script Context
	</title>
</head>
<body>

<div style="color:red">
<h1>Welcome bob!</h1> 
</div>
<script>
var a = "apple";
var b = "<?php
if (isset($_REQUEST['lname'])){
	print $_REQUEST['lname'];
}
?>";
</script>
<br />
<br />
<a href="index.php">Go back to Index page</a>
</body>
</html>