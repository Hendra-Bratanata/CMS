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

		<style>
			.footer {
				position: fixed;
				left: 0;
				bottom: 0;
				width: 100%;
				background-color: darkslategray;
				color: white;
				text-align: center;
			}
			.sidebar{
				background-color: #151515;
				font-family:Arial, Helvetica, sans-serif;
			}
			.sidebar  a{
				color: honeydew;
			}
			.menu{
				background-color: darkslategray;
			}
			.menu nav{
				background-color: darkslategray;
				
			}
			.menu nav a{
				color: honeydew;
			}
			

		</style>
	</head>

	<body>

		<nav class="navbar navbar-inverse navbar-fixed-top menu">
			<div class="container-fluid ">
				<?php include "contoh_menu.php"; ?>

			</div>
		</nav>

		<section class="container-fluid ">
			<div class="row">
				<div class="col-md-2 col-sm-3 hidden-xs sidebar">
					<?php include "sidebar.php"; ?>
				</div>
				<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
					<!-- <?php include "content.php"; ?>  -->
				</div>
			</div>
		</section>



		<div class="footer">
			<p >Copyright &copy; Devcamp. All right reserved.</p>
		</footer>
		<script type="text/javascript" src="../plugin/bootstrap-4.6.0-dist/js/bootstrap.min.js"></script>
	</body>

	</html>

<?php
}

?>