<?php
session_start();
include("baglanti.php"); //veritabanını ekliyoruz
 
// giriş formundan gelen kullanıcı adı (kuladi) ve şifre(sifre) değişkenlere atıyoruz
$username=$_POST['kuladi'];
$password=$_POST['sifre'];
 
//kullanıcı adı ve şifeyi sorguluyoruz
$sql="SELECT * FROM kullanicilar WHERE kullanici_adi='$username' and sifre='$password'";
$result=mysqli_query($baglanti,$sql);
$row=mysqli_fetch_array($result,MYSQLI_ASSOC);
 
//Eğer sorgulanan kullanıcı adı var ise bir oturum oluşturup home.php ye yönlendiriyoruz
//Yok ise hata verdiriyoruz.
 
if(mysqli_num_rows($result) == 1)
{
$_SESSION['username'] = $username; // Initializing Session
header("location: index2.html"); // Redirecting To Other Page
}else
{
	
echo "<center>"."Şifreniz veya Kullanıcı adınız yanlış"."</br>"."<a href=index.html>GERİ DÖN</a>"."</center>";
}
?>