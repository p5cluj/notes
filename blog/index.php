<?php
require_once 'core/Bootstrap.php';
$user = new Bootstrap('loged');
$uri =  (isset($_GET['uri'])) ? $user->getUry($_GET['uri']) : 'index';
$user->menuCheck(rtrim($uri,'/'));
die;
?>
<!DOCTYPE html>
<html>
<title>index</title>
<head>
<link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body>

<div id="wrapper">
	<div id="header">
		<h1>Blog template</h1>
	</div>
	<div id="menu">
		<div id="index" onclick="window.location.href='<?php echo BASE_URL ?>/'">index</div>
		<div id="index" onclick="window.location.href='<?php echo BASE_URL ?>/login'">login</div>
		<div id="index" onclick="window.location.href='<?php echo BASE_URL ?>/old-post'">old post</div>
	</div>
	<div id="body">
		<div id="b-reques"></div>
	</div>

	<div id="footer">

	</div>
</div>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script type="text/javascript" src="js/custom.js"></script>
<script type="text/javascript">


</script>
</body>
</html>