<link type="text/css" rel="stylesheet" href="../plugin/bootstrap-4.6.0-dist/css/bootstrap.min.css">
<link rel="stylesheet" href="../plugin/font/css/all.min.css">



<?php
	include "../library/function_table.php";
	include "../library/config.php";

	$dataDariDatabase = $mysqli->query("SELECT * FROM `user`");
	$ids = 1;
	
	buka_tabel(array("USER"));
	while($data = $dataDariDatabase->fetch_array()){

		$dataNamaDariDatabase = $data['nama'];
		$dataPassDariDatabase = $data['password'];
		$dataIdDariDatabase = $data['id'];

		isi_tabel($ids, array($dataNamaDariDatabase),"#",$dataIdDariDatabase);
		$ids += 1;
	}
	tutup_tabel();
?>		
