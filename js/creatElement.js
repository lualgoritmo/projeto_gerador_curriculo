
    (function()
    {
        'use-strict'
        
        document.querySelector('.selecionar').addEventListener('change', function(e)
        {
            e.preventDefault();
            let select = e.target;
            if(select.value === 'Medio')
            {            
                         adcMedio();
                         e.preventDefault();
            }
           
            else if(select.value === 'Tecnico')
             {   
                   adcTecnico();
                   e.preventDefault();
                   let $btnApagarTecnico = document.querySelector('button');
          
                   $btnApagarTecnico.addEventListener('click', function(e)
                   {
                       let $btnTecnico = document.querySelectorAll('.removerTecnico');
                           $btnTecnico;
                       if($btnTecnico)
                       {
                            e.preventDefault();
                            console.log('BTNT', $btnTecnico);
                            $btnTecnico.forEach(tecnico => 
                            {
                                tecnico.remove();
                            });
                       }
                   });
             }
 
            else if(select.value === 'Superior')
            {    
                        
                adcSuperior();
                let $btnApagarSuperior = document.querySelector('button');
                    e.preventDefault();
                    $btnApagarSuperior.addEventListener('click', function(e)
                    {   
                        let $btnSuperior = document.querySelectorAll('.removerSuperior');
                            e.preventDefault()
                        if($btnSuperior)
                        {
                             $btnSuperior.forEach(superior => 
                             {
                                 superior.remove();
                                 console.log('A', superior);
                             });
                            
                        }

                    });
                        
             } 
        });
 
            function adcMedio()
            {
                let $breakNomeEnsinoMedio = document.querySelector('.break');
                     $breakNomeEnsinoMedio = $breakNomeEnsinoMedio.cloneNode(true);

                 let $divNomeEnsinoMedio = document.querySelector('.escolaridade');
                 let inputNomeEnsinoMedio = document.createElement('input');
                         inputNomeEnsinoMedio.placeholder = 'Nome da Escola - Ensino Médio';
                         inputNomeEnsinoMedio.type = 'text';
                         inputNomeEnsinoMedio.title = 'Nome da Escola - Ensino Médio';
                         inputNomeEnsinoMedio.className = `disabled maiorEscola 
                            bordeErro inputPessoal`;
                         $divNomeEnsinoMedio.appendChild(inputNomeEnsinoMedio);
                         document.querySelector('.escolaridade').appendChild($breakNomeEnsinoMedio);
                         
                         let $breakLabelDataMedio = document.querySelector('.break');
                         $breakLabelDataMedio = $breakLabelDataMedio.cloneNode(true);

                         let $labelDataEnsinoMedio = document.querySelector('.escolaridade');
                         let labelConclusaoEnsinoMedio = document.createElement('label');
                             labelConclusaoEnsinoMedio.innerText = `Conclusão Ensino Médio`;
                             labelConclusaoEnsinoMedio.className = 'labelEnsinoMedio';
                             labelConclusaoEnsinoMedio.title = `Data Início do Curso`;
                             $labelDataEnsinoMedio.appendChild(labelConclusaoEnsinoMedio);

                             document.querySelector('.escolaridade').appendChild($breakLabelDataMedio);
                             
                             let $breakDataConclusaoMedio = document.querySelector('.break');
                             $breakDataConclusaoMedio = $breakDataConclusaoMedio.cloneNode(true);

                             let $divDataConclusaoMedio = document.querySelector('.escolaridade');
                             let inputConclusaoMedio = document.createElement('input');

                             inputConclusaoMedio.type = 'date';
                             inputConclusaoMedio.title = 'Escreva data de conclusão ensino Médio';
                             inputConclusaoMedio.className = `bordeErro inputPessoal 
                                inputDate`;
                             $divDataConclusaoMedio .appendChild(inputConclusaoMedio);
                              document.querySelector('.disabled').disabled = true;
                              document.querySelector('.escolaridade').appendChild($breakDataConclusaoMedio);  
            }

            function adcTecnico()
            {
                let $divNomeInstituicaoTecnica = document.querySelector('.escolaridade');
                let inputNomeInstituicaoTecnica = document.createElement('input');
                        inputNomeInstituicaoTecnica.placeholder = `Nome da Instituição Técnica`;
                        inputNomeInstituicaoTecnica.type = 'text';
                        inputNomeInstituicaoTecnica.title = `Nome da Instituição Técnica`;
                        inputNomeInstituicaoTecnica.className = `maiorEscola bordeErro inputPessoal removerTecnico`;
                        $divNomeInstituicaoTecnica.appendChild(inputNomeInstituicaoTecnica);

                let $divBreakEnsinoTecnico = document.querySelector('.break');
                    $divBreakEnsinoTecnico.classList.add('removerTecnico');
                    $divBreakEnsinoTecnico = $divBreakEnsinoTecnico.cloneNode(true);

                let $divEnsinoTecnico = document.querySelector('.escolaridade');
                let inputEnsinoTecnico = document.createElement('input');
                    inputEnsinoTecnico.placeholder = `Nome do Curso Técnico`;
                    inputEnsinoTecnico.type = 'text';
                    inputEnsinoTecnico.title = `Nome do Curso Técnico`;
                    inputEnsinoTecnico.className = `disabled maiorEscola 
                    bordeErro inputPessoal removerTecnico`;
                    $divEnsinoTecnico.appendChild(inputEnsinoTecnico);
                    document.querySelector('.escolaridade').appendChild($divBreakEnsinoTecnico);

                let $divBreakLabelIT = document.querySelector('.break');
                    $divBreakLabelIT.classList.add('removerTecnico');
                    $divBreakLabelIT = $divBreakLabelIT.cloneNode(true);

                let $divLabelDataInicio = document.querySelector('.escolaridade');
                let labelDataInicoCursoT = document.createElement('label');
                        labelDataInicoCursoT.innerText = `Data Início do Curso`;
                        labelDataInicoCursoT.className = `removerTecnico`;
                        labelDataInicoCursoT.title = `Data Início do Curso`;
                        $divLabelDataInicio.appendChild(labelDataInicoCursoT);
                        document.querySelector('.escolaridade').appendChild($divBreakLabelIT); 
                    
                let $divBreakDataInicioT = document.querySelector('.break');
                    $divBreakDataInicioT.classList.add('removerTecnico');
                    $divBreakDataInicioT = $divBreakDataInicioT.cloneNode(true);
        
                let $divDataInicioCursoT = document.querySelector('.escolaridade');
                let inputTecnicoDataInicio = document.createElement('input');
                        inputTecnicoDataInicio.type = 'date';
                        inputTecnicoDataInicio.title = 'Data Inicio de Curso';
                        inputTecnicoDataInicio.className = `maior bordeErro inputPessoal removerTecnico`;
                        $divDataInicioCursoT .appendChild(inputTecnicoDataInicio);
                        document.querySelector('.escolaridade').appendChild($divBreakDataInicioT);

                let $divBreakDataClonclusaoT = document.querySelector('.break');
                    $divBreakDataClonclusaoT.classList.add('removerTecnico');
                    $divBreakDataClonclusaoT = $divBreakDataClonclusaoT.cloneNode(true);
        
                let $breakDataConclusaoT = document.querySelector('.break');
                let $labelDataConclusaoCurso = document.querySelector('.escolaridade');
                let labelDataFimCurso = document.createElement('label')
                        labelDataFimCurso.innerText = `Data de Conclusão do Curso`;
                        labelDataFimCurso.className = 'labelDate removeBTN removerTecnico';
                        labelDataFimCurso.title = `Data de Conclusão do Curso`;
                        $labelDataConclusaoCurso.appendChild(labelDataFimCurso);
                        document.querySelector('.escolaridade').appendChild($breakDataConclusaoT);

                let $breakBotao = document.querySelector('.break');
                    $breakBotao.classList.add('removerTecnico');
                    $breakBotao = $breakBotao.cloneNode(true);
                    
                let $divDataFim = document.querySelector('.escolaridade');
                let inputDataFim = document.createElement('input');
                        inputDataFim.type = 'date';
                        inputDataFim.title = 'Data Conclusão';
                        inputDataFim.className = `maior bordeErro inputPessoal removerTecnico`;
                        $divDataFim.appendChild(inputDataFim);
                        document.querySelector('.escolaridade').appendChild($breakBotao);
                
                const $divBtnTecnico = document.querySelector('.escolaridade');
                const btnTecnico = document.createElement('button');
                        btnTecnico.title = "Remover Item Selecionado";
                        btnTecnico.value = "Remover";
                        btnTecnico.innerText = "Apagar";
                        btnTecnico.className = "removerTecnico";
                        $divBtnTecnico.appendChild(btnTecnico);
                
                let $breakBtnFimTecnico = document.querySelector('.break');
                $breakBtnFimTecnico.classList.add('removerTecnico');
                $breakBtnFimTecnico = $breakBtnFimTecnico.cloneNode(true);

                document.querySelector('.escolaridade').appendChild($breakBtnFimTecnico);
            }

            function adcSuperior()
            {
                let $breakSuperior = document.querySelector('.break');
                    $breakSuperior.classList.add('removerSuperior');
                    $breakSuperior = $breakSuperior.cloneNode(true);

                let $divSuperiorFaculdade = document.querySelector('.escolaridade');
                let inputEnsinoSuperior = document.createElement('input');
                    inputEnsinoSuperior.placeholder = 'Nome da Faculdade';
                    inputEnsinoSuperior.type = 'text';
                    inputEnsinoSuperior.title = 'Nome da Faculdade';
                    inputEnsinoSuperior.className = `maiorEscola bordeErro 
                        inputPessoal removerSuperior`;
                    $divSuperiorFaculdade.appendChild(inputEnsinoSuperior);
                    document.querySelector('.escolaridade').appendChild($breakSuperior);

                let $breakSuperiorCurso = document.querySelector('.break');
                    $breakSuperiorCurso.classList.add('removerSuperior');
                    $breakSuperiorCurso = $breakSuperiorCurso.cloneNode(true);

                let $divSuperiorFaculdadeCurso = document.querySelector('.escolaridade');
                let inputEnsinoSuperiorCurso = document.createElement('input');
                        inputEnsinoSuperiorCurso.placeholder = 'Nome da Faculdade';
                        inputEnsinoSuperiorCurso.type = 'text';
                        inputEnsinoSuperiorCurso.title = 'Nome do Curso';
                        inputEnsinoSuperiorCurso.className = `maiorEscola bordeErro 
                            inputPessoal removerSuperior`;
                        $divSuperiorFaculdadeCurso.appendChild(inputEnsinoSuperiorCurso);
                        document.querySelector('.escolaridade').appendChild($breakSuperiorCurso);
               
                let $breakLabelDataInicio = document.querySelector('.break');
                    $breakLabelDataInicio.classList.add('removerSuperior');
                    $breakLabelDataInicio = $breakLabelDataInicio.cloneNode(true);

                let $divLabelDataInicio = document.querySelector('.escolaridade');
                let labelDataInicio = document.createElement('label');
                        labelDataInicio.innerText = 'Data Início do Curso';
                        labelDataInicio.className = `removerSuperior`;
                        labelDataInicio.title = 'Data Inicio do Curso ';
                        $divLabelDataInicio.appendChild(labelDataInicio);
                        document.querySelector('.escolaridade').appendChild($breakLabelDataInicio);

                let $breakInputDataIS = document.querySelector('.break');
                    $breakInputDataIS.classList.add('removerSuperior');
                    $breakInputDataIS = $breakInputDataIS.cloneNode(true);

                let $divInputDataInicio = document.querySelector('.escolaridade');
                let inputDataInicioSUP = document.createElement('input');
                        inputDataInicioSUP.type = 'date';
                        inputDataInicioSUP.name = 'data_inicio_SUP';
                        inputDataInicioSUP.innerText = 'Data de Conclusão do Curso Superior';
                        inputDataInicioSUP.className = `bordeErro inputPessoal removerSuperior`;
                        inputDataInicioSUP.title = `Data Início do Curso Superior`;
                        $divInputDataInicio.appendChild(inputDataInicioSUP);
                        document.querySelector('.escolaridade').appendChild($breakInputDataIS);

                let $breakInputDataSFIM = document.querySelector('.break');
                    $breakInputDataSFIM.classList.add('removerSuperior');
                    $breakInputDataSFIM = $breakInputDataSFIM.cloneNode(true);

                let $divLabelDataFimSUP = document.querySelector('.escolaridade');
                let labelDataFimS = document.createElement('label');
                         labelDataFimS.innerText = 'Data de Conclusão do Curso';
                         labelDataFimS.className = `borderErro inputPessoal
                            removerSuperior`;
                         labelDataFimS.title = 'Data Conclusão do Curso';
                         $divLabelDataFimSUP.appendChild(labelDataFimS);
                         document.querySelector('.escolaridade').appendChild( $breakInputDataSFIM);

                let $breakDataFSUP = document.querySelector('.break');
                    $breakDataFSUP.classList.add('removerSuperior');
                    $breakDataFSUP = $breakDataFSUP.cloneNode(true);
     
                let $divInputDataFimSUP = document.querySelector('.escolaridade');
                let inputDataFimS = document.createElement('input');
                    inputDataFimS.type = 'date';
                    inputDataFimS.title = 'Data Conclusão FINALPORRA';
                    inputDataFimS.className = `bordeErro inputPessoal removerSuperior`;
                    inputDataFimS.name = `data_fim_curso`;
                    $divInputDataFimSUP.appendChild(inputDataFimS);
                    document.querySelector('.escolaridade').appendChild($breakDataFSUP);


                    let $breakBtnSUP = document.querySelector('.break');
                          $breakBtnSUP.classList.add('removerSuperior');
                          $breakBtnSUP = $breakDataFSUP.cloneNode(true);

                    const $divBtnSup = document.querySelector('.escolaridade');
                    const btnSuperior = document.createElement('button');
                               btnSuperior.title = "Remover Item Selecionado";
                               btnSuperior.value = "Remover";
                               btnSuperior.innerText = "Apagar";
                               btnSuperior.className = "removerSuperior";
                               $divBtnSup.appendChild(btnSuperior);
                               document.querySelector('.escolaridade').appendChild($breakBtnSUP);   
            }
           /*BOA PARA USAR document.addEventListener('click', function(e)
            {
                e.preventDefault();
                let elemento = e.target;
                
                if(elemento.classList.contains('removerTecnico'))
                {
                    
                    elemento.parentElement.remove();
                    console.log("Parente Element", elemento.parentElment);
                }
            });*/
        
    })()           