
<header>
<?php
       
        if(isset($_SESSION['login']['id_usuario']) && !empty($_SESSION['login']['id_usuario']))
        {
            echo '<div class="containerHeader">
                <div class="logo"></div>
                <div class="menu">
                    <nav>
                        <div class="menuMobile">
                            <div class="linhaMenu"></div>
                            <div class="linhaMenu"></div>
                            <div class="linhaMenu"></div>
                        </div>
                        <ul>
                        <li class="active"><a href="index.php">Home</a></li>
                        <li><a href="#">MODELOS</a></li>
                        <li><a href="preencherCurriculo.php">PREENCHER CURRÍCULO</a></li>
                        <li><a href="logout.php">SAIR</a></li>
                    </ul>
                </nav>
             </div>
            ';
        }
        else
        {
            echo'
                 <div class="containerHeader">
            <div class="logo"></div>
        <div class="menu">
            <nav>
                <div class="menuMobile">
                    <div class="linhaMenu"></div>
                    <div class="linhaMenu"></div>
                    <div class="linhaMenu"></div>
                </div>
                <ul>
                    <li class="active"><a href="index.php">Home</a></li>
                    <li><a href="login.php">Login</a></li>
                    <li><a href="cadastro.php">Cadastre-se</a></li>
                </ul>
            </nav>
        </div>
            ';
        }
?>
</header>