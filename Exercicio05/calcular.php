<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $quilometragem = $_POST["quilometragem"];
    $consumo = $_POST["consumo"];
    $preco = $_POST["preco"];

    // Garante que os valores sejam numéricos e não negativos
    if (is_numeric($quilometragem) && is_numeric($consumo) && is_numeric($preco) &&
        $quilometragem >= 0 && $consumo >= 0 && $preco >= 0) {

        $consumoMedio = number_format($quilometragem / $consumo, 1);
        $custoPorKilometro = number_format($preco * $consumoMedio, 2);

        echo "<p>Consumo médio Foi: $consumoMedio km/l</p>";
        echo "<p>Custo por quilômetro: R$ $custoPorKilometro</p>";
    } else {
        echo "<p>Por favor, insira valores válidos e não negativos.</p>";
    }
}
?>
