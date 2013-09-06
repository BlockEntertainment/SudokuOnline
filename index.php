<? session_start(); ob_start();
	require("db_connect.php");
	if(isset($_SESSION["user"])){mysql_query("UPDATE *****.***** SET last_ip = '".ip2long($_SERVER['REMOTE_ADDR'])."', current_page = 'Home' WHERE id = '".$_SESSION["user"]."'");}
?>
<head>
	<link href='css/layout.css' type='text/css' rel='stylesheet' media='all'/>
	<title>Home - Sudoku</title>
</head>
<body>
	<? require("db_connect.php"); ?>

	<div class="topMenu">
		<? require("inc/menu.inc.php"); ?>
	</div>

	<div class="leftContainer">
		<? require("inc/leftContainer.inc.php"); ?>
	</div>

	<div class="main">
		<?
			if(!isset($_SESSION["user"])){require("login.php");}else{
			if(isset($_SESSION["user"])){require("inc/main.inc.php");}}
		?>
	</div>

</body>
