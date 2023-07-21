<?php
$a = 0;
$b = 4;
$c = $a < $b;
// $c = 0 < 4 = true ( karena true = 1)
// $c = 1
echo "$a < $b : $c";
// 0 < 4 : 1( true ) BEDA
echo "<hr>";
$c = $a == $b;
// $c = 0 == 4 = false ( karena false = 0)
echo "$a == $b : $c";
// $c = 0 == 4 : 0 ( false ) BEDA
echo "<hr>";
$c = $a >= $b;
// $c = 0 >= 4 =  false ( karena false = 0 ) BEDA
echo "$a >= $b : $c"; 
// 0 >= 4 : 0  ( false ) BEDA

// karena false -> 0 && true -> 1
