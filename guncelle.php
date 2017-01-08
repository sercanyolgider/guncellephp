<?php

include("ayar.php");

$kullaniciadi = $_POST["kadi"];
$yeniparola = $_POST["pass"];

$update = mysql_query("UPDATE uyeler SET parola = '$yeniparola' WHERE kadi= '$kullaniciadi'");

if ($update)
{
    echo "Guncelleme islemi basarili Bir sekilde Gerceklestirildi";
}
else
{
    echo "Hata";
}
?>