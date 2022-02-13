
   
   $btnCadastro = document.querySelector('.btnCadastro');


    function validar(formulario)
    {
       
       
        let retorno = true;
        for(let x = 0; x < formulario.length; x++)
        {
            if(formulario[x].type !== "submit")
            {
                if(formulario[x].value == "")
                {
                    alert("Preencha o campo: " + formulario[x].placeholder);
                    console.log(formulario[x].placeholder);
                    retorno = false;
                }
            }
        }
        return retorno;
    }

    validar();
    