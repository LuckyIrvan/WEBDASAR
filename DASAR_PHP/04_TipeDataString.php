<?php
// Tipe Data String
// ' ' -> single quotes
// " " -> double quotes
// \t -> Untuk TAB
// \n -> newline / enter

echo 'Name : ';
echo 'LUCKY IRVAN';
echo  "\n";

echo "Name : ";
echo "LUCKY\t IRVAN \n";

//Heredoc membuat String pajang / Multiline

echo <<<ISI
    HEREDOC MEMBUAT STRING PAJANG / MULTILINE
    CARA 3 SELAIM \N 
    TERIMA KASIH

ISI;

//Nowdoc tidak memiliki parsing seperti Heredoc / Double Qoutes
echo <<<'ISI'
    Nowdoc tidak memiliki parsing seperti Heredoc / Double Qoutes
    CARA 3 SELAIM \N 
    TERIMA KASIH
    
ISI;
