

<link type="text/css" rel="stylesheet" href="../plugin/bootstrap-4.6.0-dist/css/bootstrap.min.css">
<link rel="stylesheet" href="../plugin/font/css/all.css">
<script src="../plugin/jquery-3.6.0/jquery-3.6.0.min.js"></script>
<script type="text/javascript" src="../plugin/bootstrap-4.6.0-dist/js/bootstrap.min.js"></script>

<div class="navbar navbar-expand-lg navbar-light bg-light">
	<ul class="navbar-nav mr-auto mt-2 mt-lg-0">
<?php
	include "../library/function_menu.php";
	session_start();
	$_SESSION['leveluser'] = "author";

	buat_menu("dashboard", "home", "Dashboard", array("admin", "author"));
	buka_dropdown("list-alt", "Artikel", array("admin", "author"));
		buat_submenu("artikel", "Artikel", array("admin", "author"));
		buat_submenu("kategori", "Kategori", array("admin", "author"));
		buat_submenu("tag", "Tag", array("admin", "author"));
	tutup_dropdown(array("admin", "author"));
	buat_menu("halaman", "file", "Halaman", array("admin", "author"));
?>		
	</ul>
</div>
