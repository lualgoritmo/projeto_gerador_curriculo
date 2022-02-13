/*
    (function()
    {
        'use-strict'

         //CLONAR ELEMENTOS A SEREM PREENCHIDOS
    var $btnMais = document.querySelector('.btnMais');
    var $btnMenos= document.querySelector('.btnMenos');

    $btnMais.addEventListener('click', function(e)
    {   
        e.preventDefault();
        let $inputOriginal = document.querySelector('.inputOriginal');
            $inputOriginal = $inputOriginal.cloneNode(true);
            $inputOriginal.className = "maior bordeErro inputPessoal removeInput";
            
        let $inputOrigTec = document.querySelector('.inputOrigTec');
            $inputOrigTec = $inputOrigTec.cloneNode(true);
            $inputOrigTec.className = "maior bordeErro inputPessoal removeInpTec";

            let $inputDate = document.querySelector('.inputDate');
                $inputDate = $inputDate.cloneNode(true);
                $inputDate.className = "bordeErro inputPessoal removeDate";
            
                let $divBreak = document.querySelector('.break');
                    $divBreak = $divBreak.cloneNode(true);  

            document.querySelector('.inputOriginal').after($inputOriginal);
            document.querySelector('.inputOrigTec').after($inputOrigTec);
            document.querySelector('.inputOrigTec').appendChild($divBreak);
            document.querySelector('.inputDate').after($inputDate);

    $btnMenos.addEventListener('click', function(e)
    {
        e.preventDefault();
        document.querySelector('.removeInput').remove();
        document.querySelector('.removeInpTec').remove();
        document.querySelector('.removeDate').remove();
    });
    })()*/        
            
    
        
   
    