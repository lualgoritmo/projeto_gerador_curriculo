<?php
    session_start();
    require_once "modelo/conexao.class.php";
    require_once "modelo/usuario.class.php";
    require_once "modelo/usuarioDAO.class.php";
    
    //INSTANCIA USUÁRIO LOGIN e DAO
        if(!empty($_POST['email']) && !empty($_POST['senha']))
        {
            $email = addslashes($_POST['email']);
            $senha = $_POST['senha'];

            $usuario = new Usuario(null, $_POST['email'], $_POST['senha']);
            $usuarioDAO = new UsuarioDAO();

            $usuarioAutenticado = $usuarioDAO->fazerLogin($usuario);
            if($usuarioAutenticado)
            {
                header("Location:index.php");
                exit;
            }
            else
            {
               
                    echo "<script>alert('Usuário ou Senha estão errados')</script>";
                    echo '<script>window.location.href = "login.php"</script>';
                    // header("Location:login.php");
            }
        }
       
?>