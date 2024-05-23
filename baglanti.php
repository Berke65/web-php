<?php 
$use = "localhost";
$vtKullanici = "root";
$vtSifre = "";
$vtAdi = "dervis";
$baglan = mysqli_connect($use,$vtKullanici,$vtSifre,$vtAdi);
if(!$baglan)
{
    die ("baglanti basarisiz" . mysqli_connect_error());
}
else

?>