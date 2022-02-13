<?php
    class Curriculo
    {
        private $id_curriculo;
        private $id_usuario;
        private $nome;
        private $email;
        private $sexo;
        private $data_nascimento;
        private $telefone;
        private $cep;
        private $rua;
        private $numero_residencia;
        private $bairro;
        private $cidade;
        private $uf;
        private $estado_civil;
        private $objetivo;
        private $ensino_fundamental;
        private $serie_fundamental;
        private $ensinoMedio_instituicao;
        private $serie_ensinoMedio;
        private $ano_conclusao_ensinoMedio;
        private $curso_tecnicoNome;
        private $tecnico_instituicao;
        private $ano_conclusao_tecnico;
        private $curso_superiorNome;
        private $instituicao_superior;
        private $ano_conclusao_superior;
        private $exper_profissional_dataInicio;
        private $exper_profissional_dataFim;
        private $funcao;
        private $remuneracao;
        private $meses_exper_profissional;
        private $empresa;
        private $descricaoFuncao;
        private $anoConclusaoAtividadeComplementar;
        private $instituicaoAtividadeComplementar;
        private $remuneracaoAtividadeComplementar;
        private $descricaoAtividadeComplementar;
        private $cargaHorariaAtividadeComplementar;
        private $necessidadeEspecial;
        private $descricaoDeficiencia;
        private $cidDeficiencia;
        private $descricaoAcessibilidade;
        
        public function __construct($id_curriculo = null, $id_usuario = null, $nome = null,
            $email = null, $sexo = null, $data_nascimento = null,
            $telefone = null, $cep = null, $rua = null,
            $numero_residencia = null, $bairro = null,
            $cidade = null, $uf = null, $estado_civil = null,
            $objetivo = null, $ensino_fundamental = null, $serie_fundamental = null,
            $ensinoMedio_instituicao = null, $serie_ensinoMedio = null,
            $ano_conclusao_ensinoMedio = null, $curso_tecnicoNome = null,
            $tecnico_instituicao = null, $ano_conclusao_tecnico = null,
            $curso_superiorNome = null, $instituicao_superior = null,
            $ano_conclusao_superior = null, $exper_profissional_dataInicio = null,
            $exper_profissional_dataFim = null, $funcao = null,
            $remuneracao = null, $meses_exper_profissional = null,
            $empresa = null, $descricaoFuncao = null, 
            $anoConclusaoAtividadeComplementar = null, $instituicaoAtividadeComplementar = null,
            $remuneracaoAtividadeComplementar = null, $descricaoAtividadeComplementar = null,
            $cargaHorariaAtividadeComplementar = null, $necessidadeEspecial = null,
            $descricaoDeficiencia = null, $cidDeficiencia = null,
            $descricaoAcessibilidade = null)
        {
            $this->id_curriculo = $id_curriculo;
            $this->id_usuario = $id_usuario;
            $this->nome = $nome;
            $this->email = $email;
            $this->sexo = $sexo;
            $this->data_nascimento = $data_nascimento;
            $this->telefone = $telefone;
            $this->cep = $cep;
            $this->rua = $rua;
            $this->numero_residencia = $numero_residencia;
            $this->bairro = $bairro;
            $this->cidade = $cidade;
            $this->uf = $uf;
            $this->estado_civil = $estado_civil;
            $this->objetivo = $objetivo;
            $this->ensino_fundamental = $ensino_fundamental;
            $this->serie_fundamental = $serie_fundamental;
            $this->ensinoMedio_instituicao = $ensinoMedio_instituicao;
            $this->serie_ensinoMedio = $serie_ensinoMedio;
            $this->ano_conclusao_ensinoMedio = $ano_conclusao_ensinoMedio;
            $this->curso_tecnicoNome = $curso_tecnicoNome;
            $this->tecnico_instituicao = $tecnico_instituicao;
            $this->ano_conclusao_tecnico = $ano_conclusao_tecnico;
            $this->curso_superiorNome = $curso_superiorNome;
            $this->instituicao_superior = $instituicao_superior;
            $this->ano_conclusao_superior = $ano_conclusao_superior;
            $this->exper_profissional_dataInicio = $exper_profissional_dataInicio;
            $this->exper_profissional_dataFim = $exper_profissional_dataFim;
            $this->funcao = $funcao;
            $this->remuneracao = $remuneracao;
            $this->meses_exper_profissional = $meses_exper_profissional;
            $this->empresa = $empresa;
            $this->descricaoFuncao = $descricaoFuncao;
            $this->anoConclusaoAtividadeComplementar = $anoConclusaoAtividadeComplementar;
            $this->instituicaoAtividadeComplementar = $instituicaoAtividadeComplementar;
            $this->remuneracaoAtividadeComplementar = $remuneracaoAtividadeComplementar;
            $this->descricaoAtividadeComplementar = $descricaoAtividadeComplementar;
            $this->cargaHorariaAtividadeComplementar = $cargaHorariaAtividadeComplementar;
            $this->necessidadeEspecial = $necessidadeEspecial;
            $this->descricaoDeficiencia = $descricaoDeficiencia;
            $this->cidDeficiencia = $cidDeficiencia;
            $this->descricaoAcessibilidade = $descricaoAcessibilidade;
        }

        public function getIdCurriculo()
        {
            return $this->id_curriculo;
        }
        public function getIdUsuario()
        {
            return $this->id_usuario;
        }

        public function getNome()
        {
            return $this-> nome;
        }
        public function setNome($nome)
        {
            $this-> nome = trim($nome);
        }

        public function getEmail()
        {
            return $this-> email;
        }
        public function setEmail($email)
        {
            $this-> email = strtolower(trim($email));
        }

        public function getSexo()
        {
            return $this-> sexo;
        }
        public function setSexo($sexo)
        {
            $this-> sexo = $sexo;
        }

        public function getDataNascimento()
        {
            return $this-> data_nascimento;
        }
        public function setDataNascimento($data_nascimento)
        {
            $this-> data_nascimento = $data_nascimento;
        }

        public function getTelefone()
        {
            return $this-> telefone;
        }
        public function setTelefone($telefone)
        {
            $this-> telefone = $telefone;
        }

        public function getCep()
        {
            return $this-> cep;
        }
        public function setCep($cep)
        {
            $this-> cep =  $cep;
        }

        public function getRua()
        {
            return $this-> rua;
        }
        public function setRua($rua)
        {
            $this-> rua =  $rua;
        }

        public function getNumeroResidencia()
        {
            return $this-> numero_residencia;
        }
        public function setNumeroResidencia($numero_residencia)
        {
            $this-> numero_residencia =  $numero_residencia;
        }

        public function getBairro()
        {
            return $this-> bairro;
        }
        public function setBairro($bairro)
        {
            $this-> bairro =  trim($bairro);
        }

        public function getCidade()
        {
            return $this-> cidade;
        }
        public function setCidade($cidade)
        {
            $this-> cidade =  $cidade;
        }

        public function getUf()
        {
            return $this-> uf;
        }
        public function setUf($uf)
        {
            $this-> uf =  $uf;
        }

        public function getEstadoCivil()
        {
            return $this-> estado_civil;
        }
        public function setEstadoCivil($estado_civil)
        {
            $this-> estado_civil =  $estado_civil;
        }

        public function getObjetivo()
        {
            return $this-> objetivo;
        }
        public function setObjetivo($objetivo)
        {
            $this-> objetivo =  $objetivo;
        }

        public function getEnsinoFundamental()
        {
            return $this-> ensino_fundamental;
        }
        public function setEnsinoFundamental($ensino_fundamental)
        {
            $this-> ensino_fundamental = trim($ensino_fundamental);
        }

        public function getSerieEnsinoFundamental()
        {
            return $this-> serie_fundamental;
        }
        public function setSerieEnsinoFundamental($serie_fundamental)
        {
            $this-> serie_fundamental = $serie_fundamental;
        }

        public function getEnsinoMedioInstituicao()
        {
            return $this-> ensinoMedio_instituicao;
        }
        public function setEnsinoMedioInsticao($ensinoMedio_instituicao)
        {
            $this-> ensinoMedio_instituicao = $ensinoMedio_instituicao;
        }

        public function getSerieEnsinoMedio()
        {
            return $this-> serie_ensinoMedio;
        }
        public function setSerieEnsinoMedio($serie_ensinoMedio)
        {
            $this-> serie_ensinoMedio = $serie_ensinoMedio;
        }

        public function getAnoConlusaoEnsinoMedio()
        {
            return $this-> ano_conclusao_ensinoMedio;
        }
        public function setAnoConlusaoEnsinoMedio($ano_conclusao_ensinoMedio)
        {
            $this-> ano_conclusao_ensinoMedio = $ano_conclusao_ensinoMedio;
        }

        public function getCursoTecnicoNome()
        {
            return $this-> curso_tecnicoNome;
        }
        public function setCursoTecnicoNome($curso_tecnicoNome)
        {
            $this-> curso_tecnicoNome = $curso_tecnicoNome;
        }

        public function getTecnicoInstituicao()
        {
            return $this-> tecnico_instituicao;
        }
        public function setTecnicoInstituicao($tecnico_instituicao)
        {
            $this-> tecnico_instituicao = $tecnico_instituicao;
        }

        public function getAnoConclusaoTecnico()
        {
            return $this-> ano_conclusao_tecnico;
        }
        public function setAnoConclusaoTecnico($ano_conclusao_tecnico)
        {
            $this-> ano_conclusao_tecnico = $ano_conclusao_tecnico;
        }

        public function getCursoSuperiorNome()
        {
            return $this-> curso_superiorNome;
        }
        public function setCursoSuperiorNome($curso_superiorNome)
        {
            $this-> curso_superiorNome = $curso_superiorNome;
        }

        public function getInstituicaoSuperior()
        {
            return $this-> instituicao_superior;
        }
        public function setInstituicaoSuperior($instituicao_superior)
        {
            $this-> instituicao_superior = $instituicao_superior;
        }
        
        public function getAnoConclusaoSuperior()
        {
            return $this-> ano_conclusao_superior;
        }
        public function setAnoConclusaoSuperior($ano_conclusao_superior)
        {
            $this-> ano_conclusao_superior = $ano_conclusao_superior;
        }

        public function getExperProfDataInicio()
        {
            return $this-> exper_profissional_dataInicio;
        }
        public function setExperProfDataInicio($exper_profissional_dataInicio)
        {
            $this-> exper_profissional_dataInicio = $exper_profissional_dataInicio;
        }

        public function getExperProfDataFim()
        {
            return $this-> exper_profissional_dataFim;
        }
        public function setExperProfDataFim($exper_profissional_dataFim)
        {
            $this-> exper_profissional_dataFim = $exper_profissional_dataFim;
        }

        public function getFuncao()
        {
            return $this-> funcao;
        }
        public function setFuncao($funcao)
        {
            $this-> funcao = $funcao;
        }

        public function getRemuneracao()
        {
            return $this-> remuneracao;
        }
        public function setRemuneracao($remuneracao)
        {
            $this-> remuneracao = $remuneracao;
        }

        public function getMesesExpProfissional()
        {
            return $this-> meses_exper_profissional;
        }
        public function setMesesExpProfissional($meses_exper_profissional)
        {
            $this-> meses_exper_profissional = $meses_exper_profissional;
        }

        public function getEmpresa()
        {
            return $this-> empresa;
        }
        public function setEmpresa($empresa)
        {
            $this-> empresa = $empresa;
        }
        /**
         * Get the value of descricaoFuncao
         */ 
        public function getDescricaoFuncao()
        {
            return $this->descricaoFuncao;
        }

        public function setDescricaoFuncao($descricaoFuncao)
        {
               $this->descricaoFuncao = $descricaoFuncao;
        }

        

        /**
         * Get the value of anoConclusaoAtividadeComplementar
         */ 
        public function getAnoConclusaoAtividadeComplementar()
        {
                return $this->anoConclusaoAtividadeComplementar;
        }

        public function setAnoConclusaoAtividadeComplementar($anoConclusaoAtividadeComplementar)
        {
                $this->anoConclusaoAtividadeComplementar = $anoConclusaoAtividadeComplementar;
        }

        /**
         * Get the value of instituicaoAtividadeComplementar
         */ 
        public function getInstituicaoAtividadeComplementar()
        {
                return $this->instituicaoAtividadeComplementar;
        }

        public function setInstituicaoAtividadeComplementar($instituicaoAtividadeComplementar)
        {
                $this->instituicaoAtividadeComplementar = $instituicaoAtividadeComplementar;

        }

        /**
         * Get the value of remuneracaoAtividadeComplementar
         */ 
        public function getRemuneracaoAtividadeComplementar()
        {
                return $this->remuneracaoAtividadeComplementar;
        }

        public function setRemuneracaoAtividadeComplementar($remuneracaoAtividadeComplementar)
        {
                $this->remuneracaoAtividadeComplementar = $remuneracaoAtividadeComplementar;
        }

        /**
         * Get the value of descricaoAtividadeComplementar
         */ 
        public function getDescricaoAtividadeComplementar()
        {
                return $this->descricaoAtividadeComplementar;
        }

        public function setDescricaoAtividadeComplementar($descricaoAtividadeComplementar)
        {
                $this->descricaoAtividadeComplementar = $descricaoAtividadeComplementar;

        }

        /**
         * Get the value of cargaHorariaAtividadeComplementar
         */ 
        public function getCargaHorariaAtividadeComplementar()
        {
                return $this->cargaHorariaAtividadeComplementar;
        }

        public function setCargaHorariaAtividadeComplementar($cargaHorariaAtividadeComplementar)
        {
                $this->cargaHorariaAtividadeComplementar = $cargaHorariaAtividadeComplementar;

        }

        /**
         * Get the value of necessidadeEspecial
         */ 
        public function getNecessidadeEspecial()
        {
                return $this->necessidadeEspecial;
        }

        public function setNecessidadeEspecial($necessidadeEspecial)
        {
                $this->necessidadeEspecial = $necessidadeEspecial;
        }

        /**
         * Get the value of descricaoDeficiencia
         */ 
        public function getDescricaoDeficiencia()
        {
                return $this->descricaoDeficiencia;
        }

        public function setDescricaoDeficiencia($descricaoDeficiencia)
        {
                $this->descricaoDeficiencia = $descricaoDeficiencia;
        }

        /**
         * Get the value of cidDeficiencia
         */ 
        public function getCidDeficiencia()
        {
                return $this->cidDeficiencia;
        }

        public function setCidDeficiencia($cidDeficiencia)
        {
                $this->cidDeficiencia = $cidDeficiencia;
        }

        /**
         * Get the value of descricaoAcessibilidade
         */ 
        public function getDescricaoAcessibilidade()
        {
                return $this->descricaoAcessibilidade;
        }

        public function setDescricaoAcessibilidade($descricaoAcessibilidade)
        {
                $this->descricaoAcessibilidade = $descricaoAcessibilidade;
        }

        //FORMATAR TELEFONE
        function formatarTelefone($n)
        {
            $tam = strlen(preg_replace("/[^0-9]/", "", $n));
            
            if ($tam == 13) {
                // COM CÓDIGO DE ÁREA NACIONAL E DO PAIS e 9 dígitos
                return "+".substr($n, 0, $tam-11)." (".substr($n, $tam-11, 2).") ".substr($n, $tam-9, 5)."-".substr($n, -4);
            }
            if ($tam == 12) {
                // COM CÓDIGO DE ÁREA NACIONAL E DO PAIS
                return "+".substr($n, 0, $tam-10)." (".substr($n, $tam-10, 2).") ".substr($n, $tam-8, 4)."-".substr($n, -4);
            }
            if ($tam == 11) {
                // COM CÓDIGO DE ÁREA NACIONAL e 9 dígitos
                return " (".substr($n, 0, 2).") ".substr($n, 2, 5)."-".substr($n, 7, 11);
            }
            if ($tam == 10) {
                // COM CÓDIGO DE ÁREA NACIONAL
                return " (".substr($n, 0, 2).") ".substr($n, 2, 4)."-".substr($n, 6, 10);
            }
            if ($tam <= 9) {
                // SEM CÓDIGO DE ÁREA
                return substr($n, 0, $tam-4)."-".substr($n, -4);
            }
        }
            
    }
?>













