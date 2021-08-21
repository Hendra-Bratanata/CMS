<?php
session_start();
ob_start();
define("INDEX", true);

//Panggil semua file yang diperlukan pada folder library
include "../library/config.php";
include "../library/function_menu.php";
include "../library/function_table.php";
include "../library/function_form.php";

//Mengatur batas timeout
$timeout = $_SESSION['timeout'];
if (time() < $timeout) {
	$_SESSION['timeout'] = time() + 5000;
} else {
	$_SESSION['login'] = 0;
}

//Mengecek status login
if (empty($_SESSION['username']) or empty($_SESSION['password']) or $_SESSION['login'] == 0) {
	header('location: login.php');
} else {
?>

	<html>

	<head>
		<title>Halaman Administrator</title>

		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1.0" />
		<link rel="stylesheet" type="text/css" href="../plugin/bootstrap-4.6.0-dist/css/bootstrap.min.css" />
		<script src="../plugin/font/css/all.css"></script>
		<script type="text/javascript" src="../plugin/jquery-3.6.0/jquery-3.6.0.min.js"></script>
		<link rel="stylesheet" href="contoh.css">
	</head>

	<body>
	

		<!-- div 2 -->
		<div class="container-fluid ">
			<div class="row">
				<div class="col-md-2 col-sm-6 hidden-xs" id="menuSamping">
					<?php include "sidebar.php"; ?>
				</div>
				<div class="col-sm-6 col-md-10">
					<?php include "contoh_menu.php"; ?>
					<!-- <?php include "content.php"; ?>  -->
				</div>
			</div>
		</div>

		<!-- div 3 -->
		<div class="footer">
			<p>Copyright &copy; Devcamp. All right reserved.</p>
			</footer>



		<script type="text/javascript" src="../plugin/bootstrap-4.6.0-dist/js/bootstrap.min.js"></script>
	</body>

	</html>

<?php
}

?>