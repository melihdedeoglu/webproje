<?php



$mail = $_POST['mail'];


$password = $_POST['sifre'];
$mail1="@ogr.sakarya.edu.tr";
$mail2="@gmail.com";
$mail3="@sakarya.edu.tr";

if ( strstr($mail,$mail3) ||strstr($mail,$mail1)|| strstr($mail,$mail2 ) )
{ 
   header("location:anasayfa.html");   
} else {
   header("location:index.html");   
}

?>
