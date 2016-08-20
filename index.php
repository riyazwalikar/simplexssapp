<html>
<head>
<title>
	Simple Reflected XSS Application
</title>
</head>
<body>
<h2>Simple XSS app</h2>
<div>
<h3>Contexts:</h3>
<ul>
<li><a href="html.php?v=Inject Here">HTML Context</a></li>
<li><a href="element.php?v=Inject Here">HTML Element Context</a></li>
<li><a href="script.php?v=Inject Here">Script Context</a></li>
</ul>
</div>
<div style="color:red">
<?php
error_reporting(0);

if (isset($_GET['msg'])){
	print $_GET['msg'];
}
?>
</div>
</body>
</html>