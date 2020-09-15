<?php
//veritabanı bağlantımızı yaptık
include('baglanti.php');
//veritabanı bağlantısı sağlanmaz ise hata verdirdik
if (mysqli_connect_errno())
{
echo "MySQL baðlantýsý baþarýsýz: " . mysqli_connect_error();
}
 
//kayit.php de ki formdan gelen kuladi ve sifre post verilerini $kuladi ve $sifre değişkenlerine eşitledik
$kuladi = $_POST['kuladi'];
$sifre = $_POST['sifre'];
if(($kuladi=="" && $sifre=="") || strlen($sifre) < 7 || !filter_var($kuladi, FILTER_VALIDATE_EMAIL)):
echo "<center>"."Lütfen Düzgün Şifre veya Kullanıcı adı Giriniz"."</br>"."<a href=index.html>GERİ DÖN</a>"."</center>";
else:
//Kayıt işlemini gerçekleştiriyoruz veritabanındaki kullaniciadi ve sifre yi formdan gelen değişkene atadığımız verilere eşitliyoruz
$kayit = "INSERT INTO kullanicilar(kullanici_adi, sifre) VALUES ('$kuladi','$sifre')";
$sonuc=mysqli_query($baglanti,$kayit);
//kayıt işlemi bitince giris.php ye yönlendiriyoruz
header("Location: index.html");
 endif;
?>