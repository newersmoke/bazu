<?
include_once 'calculator.php';

$calculation = new Calculator();

$calculation->operation('minus', 20);

$calculation->operation('plus', 20);

if ($calculation->result === 0) {
    $calculation->operation('plus', 42);
}

echo $calculation->result;

?>