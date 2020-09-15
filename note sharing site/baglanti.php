<?php
 
/*
Veritabanı bağlantımızı yapıyoruz
*/
 
$hostadresi = "localhost";
$kullaniciadi = "root";
$sifre = "12312312";
$veritabani = "mydb";
 
$baglanti = mysqli_connect($hostadresi,$kullaniciadi,$sifre,$veritabani);
if (mysqli_connect_errno())
{
echo "MySQL baðlantýsý baþarýsýz: " . mysqli_connect_error();
}
?>