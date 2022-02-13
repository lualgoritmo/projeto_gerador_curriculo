<?php 
    session_start();
    require_once "modelo/conexao.class.php";
    require_once "modelo/curriculo.class.php";
    require_once "modelo/curriculoDAO.class.php";
    require_once "modelo/usuario.class.php";
    require_once "modelo/usuarioDAO.class.php";

    /*$curriculoIdDAO = new CurriculoDAO();
    $curriculoIdDAO->inserirCurriculo($_SESSION['login']);
    var_dump($curriculoIdDAO);*/

        if($_POST)
        {
            if(isset($_POST['sexo']))
            {
                $inserirCurriculo = new Curriculo(null,
                 $_SESSION['login']['id_usuario'], 
                $_POST['nome'],
                 $_POST['email'],
                 $_POST['sexo'],
                $_POST['data_nascimento'], 
                $_POST['telefone'],
                 $_POST['cep'], 
                 $_POST['rua'],
                $_POST['numero_residencia'], 
                $_POST['bairro'], 
                $_POST['cidade'],
                $_POST['uf'],
                $_POST['estado_civil'], 
                $_POST['objetivo'],
                $_POST['ensino_fundamental'],
                $_POST['serie_fundamental'],
                $_POST['ensinoMedio_instituicao'],
                $_POST['serie_ensinoMedio'],
                $_POST['ano_conclusao_ensinoMedio'],
                $_POST['curso_tecnicoNome'],
                $_POST['tecnico_instituicao'],
                $_POST['ano_conclusao_tecnico'],
                $_POST['curso_superiorNome'],
                $_POST['instituicao_superior'],
                $_POST['ano_conclusao_superior'],
                $_POST['exper_profissional_dataInicio'],
                $_POST['exper_profissional_dataFim'],
                $_POST['funcao'],
                $_POST['remuneracao'],
                $_POST['meses_exper_profissional'],
                $_POST['empresa'],
                $_POST['descricao_funcao'],
                $_POST['ano_conclusao_atividadeComplementar'],
                $_POST['instituicao_atividadeComplementar'],
                $_POST['remuneracao_atividadeComplementar'],
                $_POST['descricao_atividadeComplementar'],
                $_POST['carga_horaria_atividadeComplementar'],
                $_POST['necessidade_especial'],
                $_POST['descricao_deficiencia'],
                $_POST['cid_deficiencia'],
                $_POST['descricao_acessibilidade']);
                $curriculoDAO = new curriculoDAO();
                $curriculoDAO->inserirCurriculo($inserirCurriculo);
                //echo '<script>window.location.href = "index.php?controle=controleUsuario&metodo=cadastrarFuncionario";</script>';
            }
            echo"<script>
            alert('Curriculo Inserido com Sucesso')
            return window.location.href = 'preencherCurriculo.php';
        </script>";
        }
        else
        {
            echo"<script>alert('ERRO')</script>";
            echo '<script>return window.location.href = "preencherCurriculo.php"</script>';
        }
    ?>





