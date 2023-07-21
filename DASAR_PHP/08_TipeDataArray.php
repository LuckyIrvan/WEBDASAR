<?php

$values = array(1,1.2,"nama");
var_dump($values);

$tipe = ["Susan",12,1.2];
var_dump($tipe);

var_dump($values[0]); // - Menampilkan Data Arrays
$values[1] = 5.5; // - Merubah Data Arrays
var_dump($values[1]);
$values[] = "baru"; // - Menabah data arrays
var_dump($values[3]);
unset($values[2]);  // - Mengapus data arrays
var_dump(count($values)); // - Mengambil total data arrays

// Map = array

$biodata = array(
    "nama" => "LUCKY IRVAN",
    "kelas" => "S6A",
    "NPM"   => "202043500017"
);

var_dump($biodata["nama"]);
var_dump($biodata["kelas"]);
var_dump($biodata["NPM"]);

$biodata2 = [
    "nama" => "LUCKY IRVAN",
    "kelas" => "S6A",
    "NPM"   => "202043500017"
];
echo "\n";
var_dump($biodata2["nama"]);
var_dump($biodata2["kelas"]);
var_dump($biodata2["NPM"]);
echo "\n";

//Array of Arrays

$biodata3 = [
    "Jenis" => "Pribadi",
    "biodata" => [
        "nama" => "LUCKY IRVAN",
        "kelas" => "S6A",
        "NPM"   => "202043500017"
    ]
    ];

    var_dump($biodata3["biodata"]["nama"]);
    var_dump($biodata3["biodata"]["kelas"]);
    var_dump($biodata3["biodata"]["NPM"]);
    