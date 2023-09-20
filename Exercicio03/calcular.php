	<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $dividendo = $_POST["dividendo"];
    $divisor = $_POST["divisor"];

    // Garante que o divisor não seja zero
    if ($divisor != 0) {
        $quociente = 0;

        while ($dividendo >= $divisor) {
            $dividendo -= $divisor;
            $quociente++;
        }

        $restante = $dividendo;

        echo "<p>O resultado da divisão é: $quociente</p>";
        echo "<p>O restante da divisão é: $restante</p>";
    } else {
        echo "<p>O divisor não pode ser zero.</p>";
    }
}
?>
