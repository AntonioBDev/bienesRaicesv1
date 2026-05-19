document.addEventListener('DOMContentLoaded', function () {
    eventoListeners();
    darkModeListener();
    darkMode();
})

function eventoListeners() {
    const mobilMenu = document.querySelector('.movil-menu');

    mobilMenu.addEventListener('click', navegacionResponsive);
}

function navegacionResponsive(e) {
    const navegacion = document.querySelector('.navegacion');

    if (navegacion.classList.contains('mostrar')) {
        navegacion.classList.remove('mostrar');
    } else {
        navegacion.classList.add('mostrar');
    }
}

//DarkMode 
function darkModeListener(){
    const estadoDarkMode = localStorage.getItem('estadoDarkMode') ?? 'false';

    if(estadoDarkMode == 'true'){
        document.body.classList.add('dark-mode-body');
    }
}

function darkMode() {
    const btn_darkMode = document.querySelector('.dark-mode');

    btn_darkMode.addEventListener('click', function () {
        document.body.classList.toggle('dark-mode-body');

        if(document.body.classList.contains('dark-mode-body')){
            const estadoDarkmode = document.body.classList.contains('dark-mode-body');

            localStorage.setItem('estadoDarkMode', estadoDarkmode);

            
        }else{
            localStorage.removeItem('estadoDarkMode');
        }
    });

}

