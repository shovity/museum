<?php
	require('lang/Lang.php');
	$lang = new Lang('lang/en');
?>

<!DOCTYPE html>
<html lang="en">
<head>

	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<meta charset="UTF-8">
	<title><?php echo $lang->getString('museum'); ?></title>
	<link rel="stylesheet" type="text/css" href="css/app.css">
</head>
<body>
	<nav>
		<div class="logo">
			<span><?php echo $lang->getString('museum'); ?></span>
		</div>
	</nav>

	<p class="p"></p>

	Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
	consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
	cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
	proident, sunt in culpa qui officia deserunt mollit anim id est laborum.

	<img src="img/bg4.jpg" width="60%">
	Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
	consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
	cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
	proident, sunt in culpa qui officia deserunt mollit anim id est laborum.

	<div id="menu-icon" class="">
		<div></div>
		<div></div>
		<div></div>
	</div>

	<div id="player">
		<audio id="audio" src="mp3/mh.mp3" preload="auto"></audio>
		<div class="controls play"></div>
		<div class="progress"><div class="time"></div><div class="cur"></div></div>
	</div>

	<div id="menu">
		<ul class="tab">
		  <li><span class="enter"></span></li>
		  <li><span class="search"></span></li>
		  <li class="active"><span class="settings"></span></li>
		</ul>

		<ul id="setting" class="tab-content">
			<li>Home</li>
			<li>Enter id</li>
			<li>List item</li>
			<li>Facebook</li>
			<li>Youtube</li>
			<li>Profiles</li>
			<li>Settings</li>
			<li>About</li>
			<li>Home</li>
			<li>Enter id</li>
			<li>List item</li>
			<li>Facebook</li>
			<li>Youtube</li>
			<li>Profiles</li>
			<li>Settings</li>
			<li>About</li>
			<li>Home</li>
			<li>Enter id</li>
			<li>List item</li>
			<li>Facebook</li>
			<li>Youtube</li>
			<li>Profiles</li>
			<li>Settings</li>
			<li>About</li>
		</ul>
	</div>


	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/app.js"></script>
</body>
</html>