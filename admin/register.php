<?php
include '../library/config.php';
if (isset($_GET['nama']) and isset($_GET['password'])) {
	$pass1 = $_GET['password'];
	$pass2 = $_GET['re_password'];
    
	if ($pass1 == $pass2) {
		
		$passMD = md5($pass1);
		$nama = $_GET['nama'];
		$sql = "INSERT INTO `user`(`nama`, `password`) VALUES ('$nama','$passMD')";
		$data = $mysqli->query($sql);
		var_dump($data);
		header("location:login.php");
	} else {
		
		echo '<div class="alert alert-info">
			<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
			<strong>Password Tidak sama</strong> Silahkan cek kembali password anda
		</div>
	';
		
	
	}
}
?>

<link type="text/css" rel="stylesheet" href="../plugin/bootstrap-4.6.0-dist/css/bootstrap.min.css">
<link rel="stylesheet" href="../plugin/font/css/all.css">
<div class="container-fluid">
	<div class="row">
		<div class="col-md-4 col-lg-4 form-login">
			<div class="card text-black">
				<div class="card-header bg-primary">
					<h4 class="card-title">REGISTER FORM</h4>
				</div>
				<div class="card-body">
					<?php
					include "../library/function_form.php";
					buka_form("register.php", 1, "edit");
					buat_textbox("Username", "nama", "", 12);
					buat_textbox("Password", "password", "", 12, "password");
					buat_textbox("RePassword", "re_password", "", 12, "password");
					tutup_form("login.php", "Back", "Register");
					?>
				</div>
			</div>
		</div>
	</div>
</div>
<style>
	body {
		background-image: url("../media/hotel-wallpaper.png");
	}

	.form-login {
		margin: auto;
		padding: 10px;
		box-shadow: 2px 2px 25px 5px black;
		border-radius: 10px 10px;
	}

	.row {
		margin-top: 30px;

	}
</style>