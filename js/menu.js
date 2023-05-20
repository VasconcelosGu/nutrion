const menuButton = document.querySelector('.toggle-menu');
const menu = document.querySelector('.header-nav');

function toggleMenuIconWhenIsOpen() {
    const menuIcon = document.querySelector('.toggle-menu i')
        if (menu.classList.contains('active')){
            menuIcon.classList.remove('fa-bars')
            menuIcon.classList.add('fa-times')
        }else{
            menuIcon.classList.remove('fa-times')
            menuIcon.classList.add('fa-bars')
        }
}

function toggleMenu(){
    menuButton.addEventListener('click', () => {
        menuButton.classList.toggle('active');
        menu.classList.toggle('active');   
        
        toggleMenuIconWhenIsOpen()
    })
}


function closeWhenMenuElementCliked(){
    const elementoNav = document.querySelectorAll('.elemento-nav');

elementoNav.forEach((elemento) => (
    elemento.addEventListener('click' ,() =>{
        menuButton.classList.remove('active');
        menu.classList.remove('active');
        toggleMenuIconWhenIsOpen()
    })
))
}


function closeMenuWhenWindowCliked(){
    document.addEventListener('click', (event) => {
        // Verifique se o elemento clicado é o botão do menu ou qualquer elemento dentro do menu
        const isClickInsideMenu = menu.contains(event.target) || menuButton === event.target || menuButton.children[0] === event.target;
        
        // Se o clique ocorrer fora do menu, o menu deve ser fechado
        if (!isClickInsideMenu) {
            menu.classList.remove('active');
        }
        toggleMenuIconWhenIsOpen()
    });
}


function closeMenuWhenScroll(){
    window.addEventListener('scroll', ()=>{
        if(window.scrollY > 0){
        menu.classList.remove('active');
        }
        toggleMenuIconWhenIsOpen()
    });
}

toggleMenu()
closeWhenMenuElementCliked()
closeMenuWhenWindowCliked()
closeMenuWhenScroll()
