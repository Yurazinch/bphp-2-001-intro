<?php 
$current_file_name = basename(__FILE__);

function getLine() {
    return __LINE__;
}

$current_line_number = getLine();

echo "Имя текущего файла: $current_file_name \n";
echo "Номер текущей строки: $current_line_number \n";

// Многострочная переменная HereDoc

$poly_line = <<<EOD
Многострочная переменная может содержать несколько строк.
Переносы обрабатываются автоматичеки.\n
EOD;

echo $poly_line;

$a='Рыба';
$b='человек';

echo "$a рыбою сыта, а $b человеком";
?>