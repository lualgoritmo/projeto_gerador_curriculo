
   
   const $cep = document.querySelector('#cep');
   function showCEP(result)
   {
       for(const camp in result)
       {
           if(document.querySelector('#'+camp))
           {
               document.querySelector('#'+camp).value = result[camp];
           }
       }
   }
   $cep.addEventListener('blur', event =>
   {
        const getCEP = async () =>
        {
            const searchZipCode = $cep.value;
            const response = await fetch(`https://viacep.com.br/ws/${searchZipCode}/json/`);
            return await response.json();
        }


        const cepCodeIdentified = async result =>
        {
            result = await getCEP();
            showCEP(result);
        }

        cepCodeIdentified();
   });

   
   
   
   /*$btnCadastro = document.querySelector('.btnCadastro');
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

    validar();*/
    