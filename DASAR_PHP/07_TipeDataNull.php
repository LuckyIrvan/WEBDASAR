<?php
//mengecek apakah null
//is_null($Variable) ;

//mengecek apakah tidak null / ada
//isset($Variable);

//Menghapus Variables
$contoh = 123;
unset($contoh);

$name = "LUCKY";
$npm = 202043500017;

echo "Name = ";
echo $name;
echo "\n";
echo "NPM = ";
echo $npm;
echo "\n";
echo "Is Name Null = ";
var_dump(is_null($name)) ;
echo "Is NPM Null = ";
var_dump(is_null($npm)) ;
echo "\n";

$name = null;
$npm = null;

echo "Name = ";
echo $name;
echo "\n";
echo "NPM = ";
echo $npm;
echo "\n";
echo "Is Name Null = ";
var_dump(is_null($name)) ;
echo "Is NPM Null = ";
var_dump(is_null($npm)) ;
echo "\n";




