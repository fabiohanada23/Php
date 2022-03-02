<?php

function soma(int ...$valores):string{

    return array_sum($valores);

}

echo var_dump(soma(2, 2));
echo "<br>";
echo soma(4, 2);
echo "<br>";
echo soma(5.1, 2.5);
echo "<br>";

?>
