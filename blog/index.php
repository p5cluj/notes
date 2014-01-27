<?php
require_once 'core/Bootstrap.php';
$user = new Bootstrap('loged');
$uri =  (isset($_GET['uri'])) ? $user->getUry($_GET['uri']) : 'index';
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
	<div id="body">
		<div id="b-reques">
			<?php echo $data['datacontent']; ?>
		</div>
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