
    
        //MENU RESPONSIVO
        window.onload = 
         document.querySelector('.menuMobile').addEventListener('click', function()
        {
         if(document.querySelector('.menu nav ul').style.display == 'flex')
         {
             document.querySelector('.menu nav ul').style.display = 'none';
             document.querySelector('.menu nav ul').style.opacity = '';
             document.querySelector('.containerSection').style.marginTop = '';
             document.querySelector('.containerSection').style.transition = '1s';
         }
         else
             {
                 document.querySelector('.menu nav ul').style.display ='flex';
                 document.querySelector('.menu nav ul').style.opacity = '0.9';
                 document.querySelector('.containerSection').style.marginTop = '160px';
                 document.querySelector('.containerSection').style.transition = '1s';
             }
         });
