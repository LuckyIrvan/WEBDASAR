<?php
//Pak Joko memiliki rumah yang lantainya berbentuk persegi dengan panjang sisi 12
// m.Lantai tersebut akan dipasang keramik yang berbentuk persegi dengan panjang sisi 30
//cm.Hitunglah dengan bahasa PHP Jumlah keramik yang diperlukan untuk menutupi lantai
// tersebut adalah

// UKURAN RUMAH PAK JOKO = 12M = 12 X 12 = 144 M = 144 X 100 = 14400 CM ( PERSEGI )
// UKURAN KERAMIK = 30 X 30 = 900 CM ( PERSEGI )
// JUMLAH KERAMIK YANG DUBUTUH KAN = 14400 / 900 = 15=6 KERAMIK

//SYNTAK PHP

$pajang_rumah = 12;
$pajang_keramik = 30;


echo ("Pajang Rumah Pak Joko = " . $pajang_rumah . " m<br> ");
echo ("Pajang Keramik = " . $pajang_keramik . " cm<br> ");
echo ("Berapa keramik  yand dibutuh kan ? <br><br> ");

$luas_rumah = $pajang_rumah * $pajang_rumah;
echo ("Luas Rumah Pak Eko = " . $luas_rumah . " m<br> ");
$luas_rumah_cm = $luas_rumah * 100;
echo ("Luas Rumah Pak Eko = " . $luas_rumah_cm . " cm<br>");
$luas_keramik = 30 * 30;
echo ("Luas Keramik = " . $luas_keramik . "cm<br><br>");

$keramik = $luas_rumah_cm / $luas_keramik;

echo ("Keramik yang dibutuhkan = " . $keramik . " pcs <br>");
