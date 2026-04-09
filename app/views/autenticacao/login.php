<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form action="<?= URL_BASE ?>/logar" method="post">
        <label for="">email</label>
        <input type="text" name="email" id="">

        <br>

        <label for="">senha</label>
        <input type="password" name="senha" id="">

        <button type="submit">enviar</button>
    </form>
    
</body>
</html>