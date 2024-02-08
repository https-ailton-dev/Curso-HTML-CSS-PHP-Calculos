<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/estilo.css">
    <title>Desenvolvimento Web</title>

    <style type="text/css">
        .formulario{
            background-color: #808080;
            color: #fff;
            text-shadow: 1px 1px #000;
            padding: 10px;
            font-size: 1.8rem;
        }
        input{
            font-size: 1.7rem;
            padding: 4px;
            border-radius: 10px;
        }
    </style>

</head>
<body>

    <header>
        <h3>Programação Web</h3>
        <h4>Desenvolvimento Ailton Daniel</h4>
    </header>
    <br>
    <section >
        <h1>Projeto Desenvolvido por Ailton Daniel</h1><br>

        <div class="formulario">

            <form action="analise.php" method="get" target="">
                <label for="nome">Nome:</label><br>
                <input type="text" id="nome" name="nome" placeholder="Insira seu nome">
                <br><br>
                <label for="salario">Salário:</label><br>
                <input type="text" id="salario" name="salario" placeholder="Insira seu salário atual">
                <br><br>
                <input type="submit" name="Enviar"><br>
            </form>
        </div>

    </section>
    <br>

    <footer>
        <h3>Desenvolvedor Ailton Daniel</h3>
        <h4>Projeto Site HTML, CSS & PHP</h4>
        <br>
        <p class="texto-rodape"><strong>Contatos</strong></p>
        <p class="texto-rodape">Email: ailton.developer@gmail.com</p>
        <p class="texto-rodape">WhatsApp: (11) 96312-1285</p>
    </footer>
    
</body>
</html>