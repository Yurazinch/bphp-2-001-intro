<?php
// $variable = 3.14;
// $variable = 3;
$variable = 'one';
// $variable = true;
// $variable = null;
// $variable = [];

switch (true) {
    case is_bool($variable) === true:
        $type = 'bool';
        break;
    case is_float($variable) === true:
        $type = 'float';
        break;
    case is_int($variable) === true:
        $type = 'int';
        break;
    case is_string($variable) === true:
        $type = 'string';
        break;
    case is_null($variable) === true:
        $type = 'null';
        break;
    default: $type = 'other';
}

echo "type is $type";
?>