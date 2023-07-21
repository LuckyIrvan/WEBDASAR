<?php
// integer ( 2147483647 - 32 bits / 9223372036854775807 - 64 bits)
// jika melebihi akan menjadi floating point
echo "Decimal : ";
var_dump(1234);

echo "Octal : ";
var_dump(0123);

echo "Hexadecimal : ";
var_dump(0x1A);

echo "Binary : ";
var_dump(0b111111);

echo "Underscore in number : ";
var_dump(1_234_567);

// floating

echo "Floating point : ";
var_dump(1.234);

echo "Floating Point dengan E notation Plus ( 1.2 x 1000 ) : ";
var_dump(1.2e3);

echo "Floating Point dengan E notation Minus ( 7 x 0.001 ) : ";
var_dump(7e-3);

echo "Underscore di Floating Point : ";
var_dump(1_234.456);

// integer ( 2147483647 - 32 bits / 9223372036854775807 - 64 bits)
// jika melebihi akan menjadi floating point

echo "Integer Overflow : ";
var_dump(2147483648);

echo "Integer Overflow : ";
var_dump(9223372036854775808);