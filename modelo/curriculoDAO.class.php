<?php
  
  class curriculoDAO extends conexao
    {

        function __construct()
        {
            parent::__construct();
        }

        //PREENCHER CURRICULO-USUARIO
        function inserirCurriculo($usuario)
        {   


            $sql = "INSERT INTO curriculo (id_usuario, 
            nome, email, sexo, data_nascimento, 
            telefone, cep, rua, numero_residencia,
             bairro, cidade, uf, estado_civil, objetivo,
              ensino_fundamental, serie_fundamental, 
              ensinoMedio_instituicao, 
              serie_ensinoMedio, ano_conclusao_ensinoMedio, 
              curso_tecnicoNome, tecnico_instituicao, 
              ano_conclusao_tecnico, curso_superiorNome, 
              instituicao_superior, ano_conclusao_superior, 
              exper_profissional_dataInicio, exper_profissional_dataFim, 
              funcao, remuneracao,descricao_funcao, meses_exper_profissional, 
              empresa, ano_conclusao_atividadeComplementar, 
              instituicao_atividadeComplementar, 
              remuneracao_atividadeComplementar, 
              descricao_atividadeComplementar, 
              carga_horaria_AtividadeComplementar, 
              necessidade_especial, 
              descricao_deficiencia, cid_deficiencia,
               descricao_acessibilidade)
                VALUES (
                    ?, ?, ?, ?, ?, ?, ?, ?, ?, ?,
                    ?, ?, ?, ?, ?, ?, ?, ?, ?, ?,
                    ?, ?, ?, ?, ?, ?, ?, ?, ?, ?,
                    ?, ?, ?, ?, ?, ?, ?, ?, ?, ?,
                    ?)";
            
            try
            {
                $curriculoPREE = $this->bd_curriculo->prepare($sql);
                $curriculoPREE->bindValue(1, $usuario->getIdUsuario());
                $curriculoPREE->bindValue(2, $usuario->getNome());
                $curriculoPREE->bindValue(3, $usuario->getEmail());
                $curriculoPREE->bindValue(4, $usuario->getSexo());
                $curriculoPREE->bindValue(5, $usuario->getDataNascimento());
                $curriculoPREE->bindValue(6, $usuario->getTelefone());
                $curriculoPREE->bindValue(7, $usuario->getCep());
                $curriculoPREE->bindValue(8, $usuario->getRua());
                $curriculoPREE->bindValue(9, $usuario->getNumeroResidencia());
                $curriculoPREE->bindValue(10, $usuario->getBairro());
                $curriculoPREE->bindValue(11, $usuario->getCidade());
                $curriculoPREE->bindValue(12, $usuario->getUf());
                $curriculoPREE->bindValue(13, $usuario->getEstadoCivil());
                $curriculoPREE->bindValue(14, $usuario->getObjetivo());
                $curriculoPREE->bindValue(15, $usuario->getEnsinoFundamental());
                $curriculoPREE->bindValue(16, $usuario->getSerieEnsinoFundamental());
                $curriculoPREE->bindValue(17, $usuario->getEnsinoMedioInstituicao());
                $curriculoPREE->bindValue(18, $usuario->getSerieEnsinoMedio());
                $curriculoPREE->bindValue(19, $usuario->getAnoConlusaoEnsinoMedio());
                $curriculoPREE->bindValue(20, $usuario->getCursoTecnicoNome());
                $curriculoPREE->bindValue(21, $usuario->getTecnicoInstituicao());
                $curriculoPREE->bindValue(22, $usuario->getAnoConclusaoTecnico());
                $curriculoPREE->bindValue(23, $usuario->getCursoSuperiorNome());
                $curriculoPREE->bindValue(24, $usuario->getInstituicaoSuperior());
                $curriculoPREE->bindValue(25, $usuario->getAnoConclusaoSuperior());
                $curriculoPREE->bindValue(26, $usuario->getExperProfDataInicio());
                $curriculoPREE->bindValue(27, $usuario->getExperProfDataFim());
                $curriculoPREE->bindValue(28, $usuario->getFuncao());
                $curriculoPREE->bindValue(29, $usuario->getRemuneracao());
                $curriculoPREE->bindValue(30, $usuario->getMesesExpProfissional());
                $curriculoPREE->bindValue(31, $usuario->getEmpresa());
                $curriculoPREE->bindValue(32, $usuario->getDescricaoFuncao());
                $curriculoPREE->bindValue(33, $usuario->getAnoConclusaoAtividadeComplementar());
                $curriculoPREE->bindValue(34, $usuario->getInstituicaoAtividadeComplementar());
                $curriculoPREE->bindValue(35, $usuario->getRemuneracaoAtividadeComplementar());
                $curriculoPREE->bindValue(36, $usuario->getDescricaoAtividadeComplementar());
                $curriculoPREE->bindValue(37, $usuario->getCargaHorariaAtividadeComplementar());
                $curriculoPREE->bindValue(38, $usuario->getNecessidadeEspecial());
                $curriculoPREE->bindValue(39, $usuario->getDescricaoDeficiencia());
                $curriculoPREE->bindValue(40, $usuario->getCidDeficiencia());
                 $curriculoPREE->bindValue(41, $usuario->getDescricaoAcessibilidade());
                $retorno=$curriculoPREE->execute();
                
                if(!$retorno)
                {
                    print_r('$retorno');
                    exit;
                    echo "<center><h3>Erro ao inserir usuário</h3></center>"; 
                    return;                 
                }
                else
                {
                    echo"<script>alert('Currículo inserido com Sucesso')</script>";
                    return;
                }
            }
            catch(Exception $e)
            {
                die($e->getMessage());
            }
            
        }
        //INICIO DO MÉTODO BUSCAR CURRICULO

        function buscarCurriculo($curriculo)
        {   
                $sql = "SELECT * FROM curriculo WHERE id_curriculo = :id_usuario";
                try
                {
                    $curriculoUsuario = $this->bd_curriculo->prepare($sql);
                    $curriculoUsuario->bindValue(":id_usuario",$_SESSION['login']['id_curriculo']);		  
                    $retorno = $curriculoUsuario->execute();
                    $this->bd_curriculo = null;
                    if(!$retorno)
                    {
                        echo "Erro ao buscar usuário";
                    }
                      else
                    {
                          $resultado = $curriculoUsuario->fetchAll(PDO::FETCH_OBJ);
                          return $resultado;
                    }

            }
            catch(Exception $e)
            {
                die($e->getMessage());
            }
        }
        //FIM DO MÉTODO BUSCAR CURRICULO
        
        //BUSCAR USUÁRIO POR ID
        function buscarUsuarioId($id)
        { 

            $sql = "SELECT * FROM usuario WHERE id_usuario = :id_usuario";
            
            try
            {

                $buscarId = $this->bd_curriculo->prepare($sql);
                $buscarId->bindValue(":id_usuario", $id);
                $buscarId->execute();

                
                if($buscarId->rowCount() > 0)
                {
                    $usuarios = $buscarId->fetchAll(PDO::FETCH_ASSOC);

                    foreach($usuarios as $usuario)
                    {
                        $buscarId = $this->bd_curriculo->prepare("SELECT * FROM curriculo WHERE id_usuario = :id_usuario");
                        $buscarId->bindValue(":id_usuario", $usuario['id_usuario']);
                        $buscarId->execute();

                        if($buscarId->rowCount() > 0)
                        {
                            $curriculoDoUsuario = $buscarId->fetchAll(PDO::FETCH_ASSOC);
                            $usuario['curriculo'] = $curriculoDoUsuario;
                        }
                    }
                    return $usuarios;
                }
            }
            catch(Exception $e)
            {
                die($e->getMessage());
            }
            
        }        
    }  

?>






