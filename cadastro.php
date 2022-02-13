<?php 
    session_start();

    if(isset($_SESSION['login']['id_usuario']) && !empty($_SESSION['login']['id_usuario'])) {
        header("Location: login.php");
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
    <title>Cadastrar-se</title>
</head>

<?php
    
    require_once "modelo/conexao.class.php";
    require_once "modelo/usuario.class.php";
    require_once "modelo/usuarioDAO.class.php";

    if($_POST)
    {
        $usuarioCadastro = new Usuario(null, $_POST['email'], $_POST['senha']);
        $usuarioDAO = new usuarioDAO();

        $usuarioCadastrado = $usuarioDAO->cadastrarUsuario($usuarioCadastro);

        if($usuarioCadastrado['status'] === 'success') {
            echo "<script> alert('Cadastro Realizado com Sucesso') </script>";
            $_SESSION['login'] = $usuarioCadastrado['response'];

            header("Location: login.php");
            exit;
        }
        
        require_once "cadastro.php";
    }
    
?>
<body>
    <?php require_once "menu.php";?>
<body>
    <section>
       
        <form action="" method="POST" class="containerSection">

             <fieldset class="containerFieldset">
                <legend>Cadastre-se</legend>
                    <input type="email" required class="inputSub" name="email" placeholder="Email">

                    <input type="password" required class="inputSub" name="senha" placeholder="Senha">
                   
                    <input type="password" required class="inputSub" name="confirma_senha" placeholder="Confirmar Senha"/>
                   <!-- <div id="check">
                        <input type="checkbox" required name="accept">
                        <label>Aceitar os termos de uso</label>
                        <a href="#">Ler os termos</a>
                    </div>-->
                    <div class="break"></div>
                    <input type="submit" class="btnCadastro inputSubmit cadastroInput" value="Salvar"/>
                </fieldset>
                </form>
    </section>
    <div class="break"></div>
    <?php require_once "footer.php";?>
    <script src="js/formulario.js"></script>
</body>
</html>