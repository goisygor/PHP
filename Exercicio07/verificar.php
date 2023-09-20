<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $numero = $_POST["mes"];

    // Verifica se o valor é um número inteiro entre 1 e 12
    if (is_numeric($numero) && $numero >= 1 && $numero <= 12 && filter_var($numero, FILTER_VALIDATE_INT)) {
        $meses = [
            1 => "Janeiro",
            2 => "Fevereiro",
            3 => "Março",
            4 => "Abril",
            5 => "Maio",
            6 => "Junho",
            7 => "Julho",
            8 => "Agosto",
            9 => "Setembro",
            10 => "Outubro",
            11 => "Novembro",
            12 => "Dezembro"
        ];

        echo "<p>O número $numero corresponde ao mês de " . $meses[$numero] . ".</p>";
    } else {
        echo "<p>Não existe um mês com o número informado. Por favor, insira um número entre 1 e 12.</p>";
    }
}
?>
