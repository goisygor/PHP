<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $numero = $_POST["numero"];

    // Garante que o número seja um número inteiro não negativo
    if (is_numeric($numero) && $numero >= 0 && filter_var($numero, FILTER_VALIDATE_INT)) {
        $fatorial = 1;
        $passos = "";

        for ($i = 1; $i <= $numero; $i++) {
            $fatorial *= $i;

            if ($i == 1) {
                $passos .= "$i";
            } else {
                $passos .= " · $i";
            }
        }

        echo "<p>O resultado desse Fatorial Foi: $passos = $fatorial</p>";
    } else {
        echo "<p>Por favor, insira um número inteiro não negativo.</p>";
    }
}
?>
