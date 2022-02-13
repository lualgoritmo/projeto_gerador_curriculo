<?php 
    session_start();

    if(isset($_SESSION['login']['id_usuario']) && !empty($_SESSION['login']['id_usuario'])) {
        header("Location: index.php");
        exit;
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/styleForm.css">
    <link rel="stylesheet" type="text/css" href="css/login.css">
    <title>Login</title>
</head>

<body>

   <?php require_once "menu.php";?>
   <section>
    <div class="container">

        <form action="actionLogin.php" method="POST" class="containerSection">
            <fieldset class="containerFieldset">
            <legend>Faça o seu Login</legend>
                <div>
                    <input type="email" required class="inputSub" name="email" 
                    autocomplete="off"  autofocus placeholder="Email" />
                    <div class="break"></div>

                    <input type="password" required class="inputSub" name="senha"
                      autocomplete="off" placeholder="Senha" autofocus />
                    <div class="break"></div><br/>


                    <input type="submit" class="inputSubmit cadastroInput" value="Entrar"/>
                    <div class="break"></div>
                    Não tem cadastro? <a href="cadastro.php">Cadastre-se</a>
                </div>
            </fieldset>
            </form>
    </div>

   </section>
   <?php require_once "footer.php";?>
</body>

</html>