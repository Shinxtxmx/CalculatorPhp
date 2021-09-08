<?php
if (empty($_GET)) {
    return 'Ничего не введено';
}
if (empty($_GET['x1'] || $_GET['x2'])) {
    return 'Не установлены аргументы';
}



$x1 = $_GET['x1'];
$x2 = $_GET['x2'];

switch ($_GET['operation']) {
    case '+' :
        $result = $x1 + $x2;
        break;
    case '-' :
        $result = $x1 - $x2;
        break;
    case '*' :
        $result = $x1 * $x2;
        break;
    case '/' :
        $result = $x1 / $x2;
        break;
   
}
    return $result;