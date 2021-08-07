
<?php
    if(!defined("INDEX")) header('location: index.php');

	$_SESSION['leveluser'] = "admin";

	buat_menu("dashboard", "home", "Dashboard", array("admin", "author"));
	buka_dropdown("list-alt", "Artikel", array("admin", "author"));
		buat_submenu("artikel", "Artikel", array("admin", "author"));
		buat_submenu("kategori", "Kategori", array("admin", "author"));
		buat_submenu("tag", "Tag", array("admin", "author"));
	tutup_dropdown(array("admin", "author"));
	buat_menu("halaman", "file", "Halaman", array("admin","author"));
	buat_menu("About", "address-card", "About", array("admin", "author"));
?>		
	</ul>
</div>
