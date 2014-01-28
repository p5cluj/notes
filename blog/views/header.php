<?php
require_once 'core/Bootstrap.php';
$user = new Bootstrap();
$uri =  (isset($_GET['url'])) ? $user->getUry($_GET['url']) : 'index';
$data = $user->menuCheck(rtrim($uri,'/'));
?>
<!DOCTYPE html>
<html>
<title><?php echo $data['title']; ?></title>
<head>
<link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body>

<div id="wrapper">
	<div id="header">
		<h1>Blog template</h1>
	</div>
	<div id="menu">
		<div id="index" <?php if($data['selectable']=='index'){ echo 'class="selectable"'; } ?> onclick="window.location.href='<?php echo BASE_URL ?>/'">index</div>
		<div id="index" <?php if($data['selectable']=='login'){ echo 'class="selectable"'; } ?> onclick="window.location.href='<?php echo BASE_URL ?>/login'">login</div>
		<div id="index" <?php if($data['selectable']=='old post'){ echo 'class="selectable"'; } ?> onclick="window.location.href='<?php echo BASE_URL ?>/old-post'">old post</div>
	</div>