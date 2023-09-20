<?php
echo "Números perfeitos até 1000:<br>";

for ($numero = 2; $numero <= 1000; $numero++) {
    $somaFatores = 0;

    for ($i = 1; $i <= $numero / 2; $i++) {
        if ($numero % $i == 0) {
            $somaFatores += $i;
        }
    }

    if ($somaFatores == $numero) {
        echo "$numero ";
    }
}
?>
