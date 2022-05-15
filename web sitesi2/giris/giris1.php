<?php

if (isset($_POST['email'], $_POST['password'] )){
    $email=$_POST['email'];
    $password=$_POST['password'];

    if($email=='b211210025@sakarya.edu.tr' && $password=='b211210025'){
        session_start();
        $_SESSION['email']='b211210025@sakarya.edu.tr';
        $_SESSION['password']='b211210025';
        echo "Hoşgeldiniz b211210025! "
;        exit();
    }else{
       
        header("Location:giris.html");
        exit();
    }
}
?>