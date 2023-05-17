<?php

$name= $_POST['isim'];
$eposta = $_POST['eposta'];
$password = $_POST['sifre'];
$cinsiyet = $_POST['cinsiyet'];
$tercih = $_POST['tercihler'];
$mesaj = $_POST['mesaj'];



$çıktı=' <p style="font-family:tahoma;font-size:130%;margin-top:5%;margin-left:30%;"> <b>İsminiz: </b>   '.' '.' '.$name.'   </p><br>
        <p style="font-family:tahoma;font-size:130%;margin-left:30%;"> <b>Mailiniz:</b>   '.' '.' '.$eposta.'   </p><br>
        <p style="font-family:tahoma;font-size:130%;margin-left:30%;"> <b>Şifreniz:</b>   '.' '.' '.$password.'  </p><br>
        <p style="font-family:tahoma;font-size:130%;margin-left:30%;"> <b>Cinsiyetiniz:</b>   '.' '.' '.$cinsiyet.' </p><br>
        <p style="font-family:tahoma;font-size:130%;margin-left:30%;"> <b>Sayfamı beğendiniz mi?:</b>   '.' '.' '.$tercih.' </p><br>
        <p style="font-family:tahoma;font-size:130%;margin-left:30%;"> <b>İstekleriniz:</b>   '.' '.' '.$mesaj.' </p><br> ';

echo $çıktı;

echo ' <p style="font-family:tahoma;font-size:130%;margin-left:30%;"> <b>Sevdiğiniz renkler: </b> </p>';

if(isset($_POST['renkler'])) {
    
    $renkler = $_POST['renkler'];
 
    foreach($renkler as $renk) {

        echo ' <p style="font-family:tahoma;font-size:130%;margin-left:30%;"> <b> * </b>'.$renk.'</p> ';

    }
}

echo '<div style="margin-left:30%;margin-top:5%;" > <a href="iletisim.html" > <button> iletişim sayfasına dön</button> </a> </div>';


?>