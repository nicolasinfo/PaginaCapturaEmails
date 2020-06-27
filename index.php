<!DOCTYPE html>
<html lang="pt/br">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <title>CapturaEmail</title>


</head>

<body>

    <div class="txt"><p> QUER DESCOBRIR COMO SER UM GÊNIO DO MARKETING DIGITAL ? </br> </br> INSIRA SEU MELHOR EMAIL PARA RECEBER O EBOOK E APRENDER AGORA MESMO! </p></div>

    <div class="imgebook"> <img src="./imagens/imgebook.png"></div>

    <form action="server/script.php" method="POST">
    <div class = "campo">
        <input type="email" id="email" name="email" placeholder="Insira seu melhor email !" required="required" autocomplete="off" required>
    </div>

    <div class="botao">
        <input name="submit" value="Enviar" class="button" type="submit">
    </div>
    </form>

</body>
</html>
