<?php session_start() ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/styleForm.css"/>
    <link rel="stylesheet" type="text/css" href="css/login.css"/>
    <title>Preencher Currículo</title>
    <style>
        .curriculo
        {
            background-color: #CCC;
        }
        .curriculo a
        {
            text-decoration: none;
            font-weight: 300;
        }
    </style>
</head>
    <?php
        require_once "modelo/conexao.class.php";
        require_once "modelo/curriculo.class.php";
        require_once "modelo/curriculoDAO.class.php";
        require_once "modelo/usuario.class.php";
        require_once "modelo/usuarioDAO.class.php";
        
        $usuarioDAO = new UsuarioDAO();
        $usuarioAutenticado = $usuarioDAO->buscarId($_SESSION['login']['id_usuario']);
       
    ?>
<body>
    <?php require_once "menu.php";?>
    
    <section  class="containerSection">
        <form action="actionCurriculo.php" class="formRegister" method="POST">
            <div class="dados_pessoais">
                <fieldset">
                   
                    <h1><?= "Seja muito bem-vindo, ".$usuarioAutenticado->email ?></h1>

                   <h3 title="Dados Pessoais"> <legend class="legend">Dados Pessoais</legend></h3>
                    
                    <input type="text" class="bordeErro inputPessoal"
                    name="nome" placeholder="Nome" autocomplete="off" />

                    <input type="email" name="email" class="  bordeErro inputPessoal"
                     placeholder="E-mail" autocomplete="off" />

                    <div class="break"></div>
                    <label for="">Sexo</label>
                    <div class="break"></div>
                    <input type="radio" id="masculino" name="sexo" value="Masculino">
                          <label for="masculino">Masculino</label>
                          <input type="radio" id="feminino" name="sexo" value="Feminino">
                          <label for="feminino">Feminino</label>
                    <div class="break"></div>
                    <label for="data">Data de Nascimento</label>
                    
                    <div class="break"></div>

                    <input type="date" name="data_nascimento" 
                    class="data bordeErro inputPessoal" id="data" autocomplete="off" />

                    <div class="break"></div>

                    <input type="text" class="bordeErro inputPessoal"
                     placeholder="Telefone" name="telefone" autocomplete="off"/>
                    
                    <input type="text" class=" bordeErro inputPessoal"
                        name="cep" placeholder="Cep"autocomplete="off" />

                    <input type="text" name="rua" class=" bordeErro inputPessoal"
                     placeholder="Rua" autocomplete="off"/>

                    <input type="text" class="bordeErro inputPessoal"
                     placeholder="Número de Residência" name="numero_residencia"/>

                    <input type="text" class="bordeErro inputPessoal"
                     placeholder="Bairro" name="bairro" autocomplete="off" />

                    <input type="text" name="cidade" class="bordeErro inputPessoal"
                     placeholder="Cidade" autocomplete="off" />

                    <input type="text" class="bordeErro inputPessoal" 
                     placeholder="UF" name="uf" autocomplete="off" />

                    <div class="break"></div>
                    <label for="estado_civil"> Estado Civil</label>
                    <div class="break"></div>
                    <select name="estado_civil" id="estado_civil">
                        <option value=""></option>
                        <option value="Solteiro">Solteiro</option>
                        <option value="Casado(a)">Casado(a)</option>
                        <option value="Viuvo(a)">Viuvo(a)</option>
                    </select>
                    <div class="break"></div>
                    <input type="text" class="bordeErro inputPessoal" 
                    name="objetivo" placeholder="Qual o seu Objetivo?" autocomplete="off" />
                        <div class="break"></div>

                        <h3 title="Escolaridasde"> <legend class="legend">Escolaridade</legend></h3>
                        <h5 title="Escolaridasde"> <legend class="legend">Ensino Fundamental</legend></h5>
                        <div class="break"></div>

                        <input type="text" name="ensino_fundamental" 
                        class="bordeErro inputPessoal"
                        placeholder="Ensino Fundamental-Nome da Escola" autocomplete="off" />

                     <input type="text" class="bordeErro inputPessoal" 
                    placeholder="Serié Atual" name="serie_fundamental" autocomplete="off" />
                    <div class="break"></div>
     
                    <h5 title="Escolaridasde"> <legend class="legend">Ensino Médio</legend></h5>
                    <div class="break"></div>
                     
                    <input type="text" name="ensinoMedio_instituicao" 
                        class="bordeErro inputPessoal"
                        placeholder="Ensino Médio-Nome Instituição" autocomplete="off" />

                        <div class="break"></div>

                     <input type="text" class="bordeErro inputPessoal" 
                        placeholder="Ano Regular-Ensino Médio" name="serie_ensinoMedio" autocomplete="off" />
                        <div class="break"></div>

                    <div class="break"></div>
                    <label for="conclusao">Ano de Conclusão Ensino Médio</label>
                    <div class="break"></div>
                    <input type="date" class="data bordeErro inputPessoal" 
                        id="conclusao" placeholder="Ano de Conclusão"
                        name="ano_conclusao_ensinoMedio" autocomplete="off" />

                    <h3 title="Formação Academica"><legend class="legend">Formação Academica</legend></h3>
                    <h5 title="Escolaridasde"> <legend class="legend">Ensino Técnico</legend></h5>
                    <input type="text" name="curso_tecnicoNome" 
                    class="bordeErro inputPessoal"
                     placeholder="Nome do Curso Técnico" autocomplete="off" />

                    <div class="break"></div>

                     <input type="text" class="bordeErro inputPessoal" name="tecnico_instituicao"
                        placeholder="Nome da Instituição Técnica" autocomplete="off" />

                    <div class="break"></div>
                    <label for="conclusao">Data de Conclusão</label>
                    <div class="break"></div>
                    <input type="date" class="data bordeErro inputPessoal" 
                        id="conclusao" placeholder="Ano de Conclusão"
                        name="ano_conclusao_tecnico" autocomplete="off" />

                    <div class="break"></div>
                    <h5 title="Escolaridasde"> <legend class="legend">Ensino Superior</legend></h5>
                    <input type="text" name="curso_superiorNome" 
                    class="bordeErro inputPessoal"
                     placeholder="Nome do Curso Superior" autocomplete="off"/>

                    <div class="break"></div>

                     <input type="text"name="instituicao_superior" class="bordeErro inputPessoal" 
                        placeholder="Nome da Instituição Superior" autocomplete="off" />
                    <div class="break"></div>

                    <label for="ano_conclusao_superior">Data de Conclusao</label>
                    <div class="break"></div>
                    <input type="date" id="ano_conclusao_superior" class="data bordeErro inputPessoal" 
                        id="conclusao" placeholder="Ano de Conclusão do Curso Superior"
                        name="ano_conclusao_superior" autocomplete="off" />
                        <div class="break"></div><br>
                    
                    <h3 title="Experiência Profissional"><legend class="legend">Experiência Profissional</legend></h3>
                    <div class="break"></div>
                    <label for="data_inicio_exper">Data de Início Experiência Profissional</label>
                    <div class="break"></div>
                    <input type="date" id="data_inicio_exper" name="exper_profissional_dataInicio"
                    class="data bordeErro inputPessoal" autocomplete="off" />

                    <div class="break"></div>
                    <label for="data_fim_exper">Data de Final de Experiência Profissional</label>
                    <div class="break"></div>
                    <input type="date" id="data_fim_exper" name="exper_profissional_dataFim"
                    class="data bordeErro inputPessoal" autocomplete="off" />

                    <div class="break"></div>
                    <input type="text" name="funcao" placeholder = "Função Exercida"
                    class="bordeErro inputPessoal" autocomplete="off" />

                    <div class="break"></div>
                    <input type="text" name="remuneracao" placeholder = "A Função foi remunerada"
                    class="data bordeErro inputPessoal" autocomplete="off" />
                    
                    <div class="break"></div>
                    <input type="text" name="meses_exper_profissional" placeholder = "Meses de experiência profissional nessa atividade"
                    class="bordeErro inputPessoal" autocomplete="off" />

                    <input type="text" name="empresa" placeholder = " Nome da Empresa que trabalhou"
                    class="bordeErro inputPessoal" autocomplete="off" />

                    <input type="text" name="descricao_funcao" placeholder = "Descrição da Função exercida"
                    class="bordeErro inputPessoal" autocomplete="off" />

                    <h3 title="Qualificações e Atividades Complementares"><legend class="legend">Qualificações e Atividades Complementares</legend></h3>
                    <div class="break"></div>
                    <label for="ano_conclusao_atividadeComplementar">Ano de Conclusão da Atividade Complementar</label>
                    <div class="break"></div>
                    <input type="date" name="ano_conclusao_atividadeComplementar"
                    class="data bordeErro inputPessoal" autocomplete="off" />
                    <div class="break"></div>

                    <input type="text" name="instituicao_atividadeComplementar" placeholder = "Nome da Instituição"
                    class="bordeErro inputPessoal" autocomplete="off"/>
                    <div class="break"></div>

                    <input type="text" name="remuneracao_atividadeComplementar" placeholder = "Atividade foi Remunerada"
                    class="bordeErro inputPessoal" autocomplete="off" />
                    <div class="break"></div>

                    <input type="text" name="descricao_atividadeComplementar" placeholder = "Descrição da Atividade Complementar"
                    class="bordeErro inputPessoal" autocomplete="off"/>
                    <div class="break"></div>

                    <input type="text" name="carga_horaria_atividadeComplementar" 
                        placeholder = "Carga Horária da Atividade Complementar"
                        class="bordeErro inputPessoal" />
                    <div class="break"></div>

                    <h3 title="Informações Adicionais"><legend class="legend">Informações Adicionais</legend></h3>
                    <div class="break"></div>
                    <label for="em_curso">É Pessoa com Deficiência?</label>
                    <div class="break"></div>
                    <input type="radio" id="masculino" 
                    name="necessidade_especial" value="Pessoa com Deficiência">
                          <label for="masculino">Sim</label>
                          <input type="radio" id="feminino"
                         name="necessidade_especial" value="">
                          <label for="feminino">Não</label>
                    <div class="break"></div>
                    
                        <input type="text" class="bordeErro inputPessoal" 
                        placeholder="Categoria da Deficiencia, por exemplo, Baiva Visão"
                         name="descricao_deficiencia"/>

                    <input type="text" class="bordeErro inputPessoal" 
                        placeholder="CID da doença" name="cid_deficiencia" />
                        
    </p><label>Descrição/Recursos para Acessbilidade</label><p>

                    <textarea name="descricao_acessibilidade"
                     id="descricao_acessibilidade" name="descricao_acessibilidade"></textarea>
                </fieldset>
            </div>    
            <div class="break"></div>       
            <input type="submit" class="submitInput" value="Enviar" />
            <a href="exibirCurriculo.php"  class="submitInput curriculo">Curriculo</a>
        </form>
    </section>
    <?php require_once "footer.php";?>
   
</body>

</html>