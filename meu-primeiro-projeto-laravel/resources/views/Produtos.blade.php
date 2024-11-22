<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produtos</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        header {
            background: #008000	;
            color: #fff;
            padding: 1rem 0;
            text-align: center;
        }
        .container {
            width: 80%;
            margin: auto;
            overflow: hidden;
        }
        .product {
            background: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin: 1rem 0;
            padding: 1rem;
            display: flex;
            align-items: center;
            gap: 1rem;
        }
        .product img {
            max-width: 150px;
            border-radius: 8px;
        }
        .product-details {
            flex: 1;
        }
        .product-title {
            font-size: 1.5rem;
            margin: 0;
        }
        .product-description {
            font-size: 1rem;
            margin: 0.5rem 0;
        }
        .product-price {
            font-size: 1.25rem;
            color: #333;
            font-weight: bold;
        }
        .back-button {
            display: block;
            width: fit-content;
            margin: 1rem 0;
            padding: 0.75rem 1.5rem;
            background: #007bff;
            color: #fff;
            border: none;
            border-radius: 4px;
            text-align: center;
            text-decoration: none;
            font-size: 1rem;
            cursor: pointer;
        }
        .back-button:hover {
            background: #0056b3;
        }
    </style>
</head>
<body>
    <header>
        <h1>Nossos Produtos</h1>
    </header>
    <div class="container">
        <a href="/home" class="back-button">Voltar para a Home</a>
        <div class="product">
            <img src="produto1.jpg" alt="Produto 1">
            <div class="product-details">
                <h2 class="product-title">Produto 1</h2>
                <p class="product-description">Descrição detalhada do Produto 1. Inclui características principais e informações relevantes.</p>
                <p class="product-price">R$ 99,99</p>
            </div>
        </div>
        <div class="product">
            <img src="produto2.jpg" alt="Produto 2">
            <div class="product-details">
                <h2 class="product-title">Produto 2</h2>
                <p class="product-description">Descrição detalhada do Produto 2. Inclui características principais e informações relevantes.</p>
                <p class="product-price">R$ 129,99</p>
            </div>
        </div>
        <div class="product">
            <img src="produto3.jpg" alt="Produto 3">
            <div class="product-details">
                <h2 class="product-title">Produto 3</h2>
                <p class="product-description">Descrição detalhada do Produto 3. Inclui características principais e informações relevantes.</p>
                <p class="product-price">R$ 89,99</p>
            </div>
        </div>
    </div>
</body>
</html>
