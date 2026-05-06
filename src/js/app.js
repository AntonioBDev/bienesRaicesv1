document.addEventListener('DOMContentLoaded', function(){
    eventoListeners();
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