<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recebe o tamanho da área em metros quadrados
    $area = $_POST['area'];

    // Define as constantes
    $cobertura_por_litro = 6;
    $litros_por_lata = 18;
    $litros_por_galao = 3.6;
    $preco_lata = 80;
    $preco_galao = 25;

    // Calcula a quantidade necessária de tinta em litros
    $litros_necessarios = $area / $cobertura_por_litro;

    // Calcula o número de latas e galões necessários para cada opção
    $latas_apenas = ceil($litros_necessarios / $litros_por_lata);
    $galoes_apenas = ceil($litros_necessarios / $litros_por_galao);
    $combinacao = ceil($litros_necessarios / ($litros_por_lata + $litros_por_galao));

    // Calcula os preços para cada opção
    $preco_latas_apenas = $latas_apenas * $preco_lata;
    $preco_galoes_apenas = $galoes_apenas * $preco_galao;
    $preco_combinacao = $combinacao * $preco_lata;

    // Exibe os resultados
    echo "<h2>Resultados:</h2>";
    echo "<p>Comprar apenas latas de 18 litros: $latas_apenas lata(s) por R$ $preco_latas_apenas</p>";
    echo "<p>Comprar apenas galões de 3,6 litros: $galoes_apenas galão(ões) por R$ $preco_galoes_apenas</p>";
    echo "<p>Misturar latas e galões (melhor combinação): $combinacao lata(s) por R$ $preco_combinacao</p>";
}
?>
