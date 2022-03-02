<?php

function soma(int ...$valores){

    return array_sum($valores);

}

echo soma(2, 2);
echo "<br>";
echo soma(4, 2);
echo "<br>";
echo soma(5.1, 2.5);
echo "<br>";

?>
