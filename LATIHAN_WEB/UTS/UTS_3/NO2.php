<?php
// Buatlah sebuah konstanta dengan nama PHI, yang berisikan nilai 3.14
// Kemudian buatlah script PHP untuk mensimulasikan perhitungan volume tabung dan
// mencetak output berupa hasil perhitungan volume ke layar, apabila diketahui rumus untuk
// menghitung volume tabung adalah PHI x r2 x t


// Script php 

define("PHI", 3.14);
$r = 7;
$t = 7;
$volume = PHI * pow($r, 2) * $t;
echo ("Perhitungan Volume Tabung <br><br>");
echo ("PHI = " . PHI . "<br>");
echo ("Jari-Jari = " . $r . "<br>");
echo ("Tinggi = " . $t . "<br><br>");
echo ("Volume Tabung = " . $volume);
