
<?php 
include "../library/config.php";
session_start();
if(isset($_POST['nama']) AND isset($_POST['password'])){
    $dataNamaDariInputUser = $_POST['nama'];
    $dataPassDariInputUser = $_POST['password'];
    $cek = 0;
    $dataDariDatabase = $mysqli->query(" SELECT * FROM `user` ");
    while($data = $dataDariDatabase->fetch_array()){
        $dataNamaDariDatabase = $data['nama'];
        $dataPassDariDatabase = $data['password'];
        $dataEmailDariDatabase = $data['email'];
        $dataIddariDatabase = $data['id'];
       

        if($dataNamaDariDatabase == $dataNamaDariInputUser){
            $cek += 1;
            if($dataPassDariDatabase == $dataPassDariInputUser){
                $_SESSION['username']     = $dataNamaDariDatabase;
                $_SESSION['password']     = $dataPassDariDatabase;
                $_SESSION['iduser']       = $dataIddariDatabase;
                  
                $_SESSION['timeout'] = time()+1000;
                $_SESSION['login'] = 1;
                header('location: index.php ');
            }
            else{
                echo '<div class="alert alert-primary" role="alert">
                    <strong>Password Salah</strong>
                </div>';
            }
        }
    }
    if($cek <= 0 ){
        echo  '<div class="alert alert-danger" role="alert">
             <strong>User Tidak Terdaftar</strong>User Tidak Terdaftar   </div>';
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
                    <h4 class="card-title">LOGIN FORM</h4>
                </div>
                <div class="card-body">
                    <?php
                    include "../library/function_form.php";
                    buka_form("login.php", 1, "edit");
                    buat_textbox("Username", "nama", "", 12);
                    buat_textbox("Password", "password", "", 12, "password");
                    tutup_form("register.php", "Register", "Login");
                    ?>
                </div>
            </div>
        </div>X 
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