document.addEventListener('DOMContentLoaded', function(){
    eventoListeners();

    darkMode();
})

function eventoListeners(){
    const mobilMenu = document.querySelector('.movil-menu');

    mobilMenu.addEventListener('click', navegacionResponsive);
}

function navegacionResponsive(e){
    const navegacion = document.querySelector('.navegacion');

    if(navegacion.classList.contains('mostrar')){
        navegacion.classList.remove('mostrar');
    }else{
      navegacion.classList.add('mostrar');  
    }
}

//DarkMode 
function darkMode(){
    const btn_darkMode = document.querySelector('.dark-mode');

    btn_darkMode.addEventListener('click',function(){
        document.body.classList.toggle('dark-mode-body');
    });
}