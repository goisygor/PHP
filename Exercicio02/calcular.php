<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $numero1 = $_POST["numero1"];
    $numero2 = $_POST["numero2"];
    $resultado = 0;

    // Garante que os números são inteiros positivos
    if (is_numeric($numero1) && is_numeric($numero2) && $numero1 >= 0 && $numero2 >= 0) {
        for ($i = 0; $i < $numero2; $i++) {
            $resultado += $numero1;
        }

        echo "<p>O resultado da multiplicação é: $resultado</p>";

        // Armazena o resultado atual na sessão para somas subsequentes
        session_start();
        if (!isset($_SESSION["total"])) {
            $_SESSION["total"] = 0;
        }
        $_SESSION["total"] += $resultado;

        echo "<p>O resultado total acumulado é: {$_SESSION['total']}</p>";
    } else {
        echo "<p>Por favor, insira dois números inteiros positivos.</p>";
    }
}
?>
