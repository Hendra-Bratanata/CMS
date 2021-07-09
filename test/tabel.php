<link type="text/css" rel="stylesheet" href="../plugin/bootstrap-4.6.0-dist/css/bootstrap.min.css">
<link rel="stylesheet" href="../plugin/font/css/all.min.css">



<?php
	include "../library/function_table.php";
	
	buka_tabel(array("Judul"));
	isi_tabel(1, array("Judul artikel pertama"), "#", 1);
	isi_tabel(2, array("Judul artikel kedua"), "#", 2);
	isi_tabel(3, array("Judul artikel ketiga"), "#", 3);
	tutup_tabel();
?>		
