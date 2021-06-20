<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Formulário</title>
</head>
<body>
    <h1>CADASTRO</h1>
    <div class="formulario">
        <form action="cadastro.php" method="post">
            Nome de usuário: <input type="text" name="nome">
                <?php if(isset($nome_erro)) { ?>
                    <p class="err"><?php echo $nome_erro ?></p>
                <?php } ?><br>
            E-mail: <input type="text" name="email">
                <?php if(isset($email_erro)) { ?>
                    <p class="err"><?php echo $email_erro ?></p>
                <?php } ?><br>
                    
            Telefone: <input type="tel" name="telefone">
                <?php if(isset($telefone_erro)) { ?>
                    <p class="err"><?php echo $telefone_erro ?></p>
                <?php } ?><br>
            Senha (mínimo 8 caracteres):
            <input type="password" name="senha">
            <?php if(isset($senha_erro)) { ?>
                    <p class="err"><?php echo $senha_erro ?></p>
                <?php } ?><br>
            <input type="submit" name="enviar">
        </form>
    </div>
</body>
</html>