
<?php

session_start();
     require "vendor/autoload.php";
    require_once "modelo/conexao.class.php";
    require_once "modelo/curriculo.class.php";
    require_once "modelo/curriculoDAO.class.php";
    require_once "modelo/usuario.class.php";
    require_once "modelo/usuarioDAO.class.php";

    $html = "";
    $curriculo = new Curriculo();
    $curriculoDAO = new curriculoDAO();
    $curriculoUsuario = $curriculoDAO->buscarCurriculo($curriculo);
    
    if($curriculoUsuario)
    {
        foreach($curriculoUsuario as $usuario)
        {
            //TRATAMENTO DAS DATAS
            $data_nascimento = $usuario->data_nascimento;
            $idade = new DateTime($data_nascimento);
            $idadeResultado = $idade->diff(new DateTime(date('Y-m-d')));
            //DATA CONCLUSÃO CURSO TÉCNICO
            $dataConclusaoTecnico = $usuario->ano_conclusao_tecnico;
            $tecnicoConclusaoCurso = new DateTime($dataConclusaoTecnico);
            $resultadoConclusaoData = $tecnicoConclusaoCurso->format('m/Y');
            //FIM DATA CURSO TÉCNICO
            //DATA CONCLUSAO SUPERIOR
            $dataConclusaoSuperior = $usuario->ano_conclusao_superior;
            $superiorConclusaoCurso = new DateTime($dataConclusaoSuperior);
            $conclusaoDataSuperior = $superiorConclusaoCurso->format('m/Y');
            //FIM DATA CONCLUSAO SUPERIOR
            //EXPERIÊNCIA PROFISSIONAL
            $experienciaProfissional = $usuario->exper_profissional_dataInicio;
            $experProfiDataInicio = new DateTime($experienciaProfissional);
            $experienciaInicial = $experProfiDataInicio->format('m/Y');
            //FIM
            $experDataFim = $usuario->exper_profissional_dataFim;
            $profissaoExperFim = new DateTime($experDataFim);
            $experienciaFim = $profissaoExperFim->format('m/Y');
            //EXPERIENCIA DATA FIM
            //ATIVIDADE COMPLEMENTAR
            $conclusaoAtividadeComplementar = $usuario->ano_conclusao_atividadeComplementar;
            $conclusaoAtividadeC = new DateTime($conclusaoAtividadeComplementar);
            $atividadeComplementar = $conclusaoAtividadeC->format('m/Y');
            //FIM


            $html.= '<p class="nomePrincipal">' .$usuario->nome .'</p>';
            $html.= "<hr class='linhaNome'/>";
            $html.= "<p class='DadosPessoais'>";
            $html.= 'Rua ' .$usuario->rua .', '.$usuario->numero_residencia .' ';
            $html.= ' - '.$usuario->bairro .' - ';
            $html.= ' '.$usuario->cidade.' - '.$usuario->uf . ' - ';
            $html.= 'CEP: '.$usuario->cep.'<br/>';
            $html.= 'Telefone: '.$curriculo->formatarTelefone($usuario->telefone).' ';
            $html.= 'E-mail: '.$usuario->email;
            $html.= ' Idade: '.$idadeResultado->format('%y anos').'<br/>';
            $html.= 'Estado Civil: ' .$usuario->estado_civil.'</p>';
            $html.= '<div class="DadosPessoais"> <b>Objetivo: '.$usuario->objetivo.'</b>'.'</div>';
            $html.= '<div class="tituloFormacao">
                        <h3 class="formacaoAcademica">Formação Acadêmica</h3>';
                    '</div>';
            $html.= '<ul>';
            $html.= '<li>'.$usuario->curso_tecnicoNome.' - ';
            $html.= $usuario->tecnico_instituicao.'/';
            $html.= $usuario->uf.' ';
            $html.= 'conclusão em '. $resultadoConclusaoData;
            $html.= '</li><br/>';
            $html.= '<li>';
            $html.= $usuario->curso_superiorNome.' - ';
            $html.= $usuario->instituicao_superior.'/';
            $html.= $usuario->uf.' ';
            $html.= 'conclusão em '.$conclusaoDataSuperior;
            $html.= '</li>';
            $html.= '</ul>';
            $html.='<div class="tituloExpProfissional">
                        <h3 class="experienciaProfissional">Experiência Profissional</h3>';
                  '</div>';
            $html.= '<ul>';
            $html.= '<li>'.$experienciaInicial.' - ';
            $html.=  $experienciaFim.' - ';
            $html.=  $usuario->funcao.', ';
            $html.=  $usuario->remuneracao.', ';
            $html.=  'durante '.$usuario->descricao_funcao.' na ';
            $html.=  'empresa '.$usuario->meses_exper_profissional.', ';
            $html.=  $usuario->empresa;
            $html.= '</li>';
            $html.= '</ul>';
            $html.=  ' <div class="tituloQualificacoesProfissionais">
                        <h3 class="qualificacoesProfissionais">Qualificações e Atividades Complementares</h3>';
                    '</div>';
            $html.= '<ul>';
            $html.= '<li>'.$atividadeComplementar.' - ';
            $html.=  $usuario->instituicao_atividadeComplementar.' - ';
            $html.=  $usuario->remuneracao_atividadeComplementar.', ';
            $html.=  $usuario->descricao_atividadeComplementar.'<br/>';
            $html.=  'Carga Horária: '.$usuario->carga_horaria_atividadeComplementar;
            $html.= '</li>';
            $html.= '</ul>';
            $html.= '<div class="tituloInfoAdicionais">
                        <h3 class="informacoesAdicionais">Informações Adicionais</h3>';
                    '</div>';
            if($usuario->necessidade_especial === "Pessoa com Deficiência")
            {
                $html.= '<ul>';
                $html.= '<li>'.$usuario->necessidade_especial.' - ';
                $html.=  $usuario->descricao_deficiencia.' - ';
                $html.= 'CID '.$usuario->cid_deficiencia;
                $html.= '</li>';
                $html.= '<li>';
                $html.=  $usuario->descricao_acessibilidade;
                $html.= '</li>';
                $html.= '</ul>';
            }
           
        }
    }

     //use Mpdf\Mpdf;
    $mpdf = new \Mpdf\Mpdf(['mode' => 'utf-8', 'format' => 'A4-L']);
	$mpdf->SetDisplayMode('fullpage');
	$css = file_get_contents("css/style.css");
	$mpdf->WriteHTML($css,1);
	$mpdf->WriteHTML($html);
	$mpdf->Output();
?>
