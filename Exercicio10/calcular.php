<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $valor = $_POST["valor"];

    // Verifica se o valor é um número
    if (is_numeric($valor)) {
        $percentagem5 = $valor * 0.05; // 5% do valor
        $percentagem50 = $valor * 0.5; // 50% do valor

        echo "<!DOCTYPE html>";
        echo "<html>";
        echo "<head>";
        echo "<title>Resultado</title>";
        echo "</head>";
        echo "<body>";
        echo "<h1>Resultado</h1>";
        echo "<p>5% de $valor é igual a $percentagem5</p>";
        echo "<p>50% de $valor é igual a $percentagem50</p>";
        echo "</body>";
        echo "</html>";
    } else {
        echo "Por favor, insira um valor numérico válido.";
    }
}
?>

