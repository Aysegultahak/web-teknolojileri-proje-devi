<?php
    if(isset($_POST['isim'])&&($_POST['Soyisim'])&&($_POST['email'])&&($_POST['aciklama'])&&($_POST['secenek'])){
        $email=$_POST['email'];
        $isim=$_POST['isim'];
        $soyisim=$_POST['Soyisim'];
        $aciklama=$_POST['aciklama'];
        $secenek=$_POST['secenek'];

        $file=fopen("iletisim.txt","a") or die("dosya açılamadı");
        fwrite($file,$isim);
        fwrite($file,$soyisim);
        fwrite($file,$email);
        fwrite($file,$aciklama);
        fwrite($file,$secenek);
        fclose($file);
        header("Location:iletisim.html");

    }
?>
