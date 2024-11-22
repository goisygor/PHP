<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <style>
        html, body {
            height: 100%;
            margin: 0;
            padding: 0;
        }
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            display: flex;
            flex-direction: column;
            text-align: center;
        }
        header {
            background: #008000	;
            color: #fff;
            padding: 1rem 0;
        }
        .container {
            width: 80%;
            margin: auto;
            padding: 2rem 0;
            flex: 1;
        }
        .home-link {
            display: block;
            width: fit-content;
            margin: 1rem auto;
            padding: 1rem 2rem;
            background: #007bff;
            color: #fff;
            text-decoration: none;
            border-radius: 4px;
            font-size: 1.25rem;
        }
        .home-link:hover {
            background: #0056b3;
        }
        footer {
            background: #008000	;
            color: #fff;
            padding: 1rem 0;
        }
        footer p {
            margin: 0;
            font-size: 0.875rem;
        }
        footer a {
            color: #007bff;
            text-decoration: none;
        }
        footer a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <header>
        <h1>Bem-vindo à Nossa Página Inicial</h1>
    </header>
    <div class="container">
        <a href="/produtos" class="home-link">Ver Produtos</a>
        <a href="/contato" class="home-link">Contato</a>
    </div>
    <footer>
        <p>&copy; 2024 Sua Empresa. Todos os direitos reservados.</p>
        <p><a href="/politica-de-privacidade">Política de Privacidade</a> | <a href="/termos-de-uso">Termos de Uso</a></p>
    </footer>
</body>
</html>
