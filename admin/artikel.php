<script type="text/javascript" src="../plugin/tinymce/tinymce.min.js"></script>
<script type="text/javascript" src="js/tinymce_conf.js"></script>


<?php

if(!defined("INDEX")) header('location: ../index.php');
$link = "?content=artikel";
$aksi = "edit";
		
			buka_form($link,'id_artikel', strtolower($aksi));
				buat_textbox("Judul Artikel", "judul", 'judul', 10);
				buat_textarea("Isi Artikel", "isi",'isi', "richtext");
			
			tutup_form($link,"bebas","bebas");
	
	
	
?>