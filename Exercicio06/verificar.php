<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $lado1 = $_POST["lado1"];
    $lado2 = $_POST["lado2"];
    $lado3 = $_POST["lado3"];

    // Verifica se os valores são numéricos e não negativos
    if (is_numeric($lado1) && is_numeric($lado2) && is_numeric($lado3) &&
        $lado1 > 0 && $lado2 > 0 && $lado3 > 0) {

        // Verifica as condições para formação de triângulo
        if ($lado1 < $lado2 + $lado3 && $lado2 < $lado1 + $lado3 && $lado3 < $lado1 + $lado2) {
            // Classifica o triângulo
            if ($lado1 == $lado2 && $lado2 == $lado3) {
                echo "<p>É um triângulo Equilátero (3 lados iguais).</p>";
            } elseif ($lado1 == $lado2 || $lado1 == $lado3 || $lado2 == $lado3) {
                echo "<p>É um triângulo Isósceles (2 lados iguais).</p>";
            } else {
                echo "<p>É um triângulo Escaleno (3 lados diferentes).</p>";
            }
        } else {
            echo "<p>Não é possível formar um triângulo com esses lados.</p>";
        }
    } else {
        echo "<p>Não é um triângulo, insira valores válidos.</p>";
    }
}
?>
