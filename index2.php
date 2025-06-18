<?php
// $variable = 3.14;
// $variable = 3;
// $variable = 'one';
$variable = true;
// $variable = null;
// $variable = [];

if (is_bool($variable) === true) {
    $type = 'bool';
} elseif (is_float($variable) === true) {
    $type = 'float';
} elseif (is_int($variable) === true) {
    $type = 'int';
} elseif (is_string($variable) === true) {
    $type = 'string';
} elseif (is_null($variable) === true) {
    $type = 'null';
} else {
    $type = 'other';
}


//  Ваш программный код, в котором переменной $type
//  присваивается одно из значений: bool, float, 
//  int, string, null или other

echo "type is $type";
?>