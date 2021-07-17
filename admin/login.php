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
					buat_textbox("Username", "nama", "",12);
					buat_textbox("Password", "password", "",12,"password");
					tutup_form("#","Login");
					?>
				</div>
			</div>
		</div>
	</div>
</div>
<style>
body{
	background-image: url("../media/hotel-wallpaper.png");
}
.form-login{
	margin: auto;
	padding: 10px;
	box-shadow: 2px 2px 25px 5px black;
	border-radius: 10px 10px;
}
.row{
	margin-top: 30px;
	
}


</style>