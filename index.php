<?php 
    session_start();
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
<body>
    <?php require_once "menu.php";?>
    <section class="containerSection">
            <article class="containerArticleIMG">
                <div class="imagem">
                    <img src="imagens/staff-7.jpg" 
                    title="ImagemON"alt=""/>
                </div>

                <div class="imagem">
                    <img src="imagens/staff-7.jpg" 
                    title="ImagemON"alt=""/>
                </div>

                <div class="imagem">
                    <img src="imagens/staff-7.jpg" 
                    title="ImagemON"alt=""/>
                </div>
                
                <div class="imagem">
                <img src="imagens/staff-7.jpg" 
                    title="ImagemON"alt=""/>
                </div>
                <div class="imagem">
                <img src="imagens/staff-7.jpg" 
                    title="ImagemON"alt=""/>
                </div>
                <div class="imagem">
                <img src="imagens/staff-7.jpg" 
                    title="ImagemON"alt=""/>
                </div>
            </article>
        <main class="mainContainer">
            <div class="testeMain">MAIN</div>
            <aside class="asideContainer">
                <ul>
                    <li class="active"><a href="paginaInicial.php">Home</a></li>
                    <li><a href="login.php">Login</a></li>
                    <li><a href="cadastro.php">Cadastro</a></li>
                    <li><a href="preencherCurriculo.php">Curriculum</a></li>
                </ul>
            </aside>
        </main>
    </section>
    <div class="break"></div>
    <?php require_once "footer.php";?>
</body>
</html>