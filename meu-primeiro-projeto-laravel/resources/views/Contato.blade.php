<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contato</title>
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
        .contact-info, .contact-form {
            background: #fff;
            padding: 2rem;
            margin-bottom: 2rem;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .contact-info h2, .contact-form h2 {
            margin-top: 0;
        }
        .contact-info p {
            margin: 0.5rem 0;
        }
        .contact-form input, .contact-form textarea {
            width: 100%;
            padding: 0.75rem;
            margin: 0.5rem 0;
            border: 1px solid #ddd;
            border-radius: 4px;
        }
        .contact-form button {
            background: #333;
            color: #fff;
            border: none;
            padding: 0.75rem 1.5rem;
            border-radius: 4px;
            cursor: pointer;
            font-size: 1rem;
        }
        .contact-form button:hover {
            background: #555;
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
        <h1>Entre em Contato</h1>
    </header>
    <div class="container">
        <a href="/home" class="back-button">Voltar para a Home</a>
        <div class="contact-form">
            <h2>Formulário de Contato</h2>
            <form action="enviar_formulario.php" method="post">
                <label for="nome">Nome:</label>
                <input type="text" id="nome" name="nome" required>
                
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
                
                <label for="mensagem">Mensagem:</label>
                <textarea id="mensagem" name="mensagem" rows="5" required></textarea>
                
                <button type="submit">Enviar</button>
            </form>
        </div>
        
    </div>
        <div class="contac
