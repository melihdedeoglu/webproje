<?php

$mail = $_POST['mail'];
$password = $_POST['sifre'];


$text = '<font face="verdana" style="font-size:12.px">'.'Anasayfaya yönlendiriliyorsunuz.'.'</font>';

$mesaj='<p style="color:red;font-family:tahoma;font-weight:bold;font-size:250%;margin:10%;"> Hoşgeldiniz "  '.' '.' '.$password.' "  </p>';


if ( $mail == "g221210023@ogr.sakarya.edu.tr" && $password == "g221210023" )
{ 
    echo $text;
   echo $mesaj;  
   
   header("Refresh: 2; url=http://odev.infinityfreeapp.com/anasayfa.html");   
} else {
   header("location:index.html");   
}

?>
