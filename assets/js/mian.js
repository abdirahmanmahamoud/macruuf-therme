let menuUl = document.querySelector('#menuUl');
let menu = document.querySelector('.menu-icon');

menu.addEventListener('click',() =>{
    let menuClass = menu.classList[1];
    switch(menuClass){
        case 'fa-bars':
            menu.classList = 'fas fa-times menu-icon';
           menuUl.classList = 'action';
        break;
        case 'fa-times':
            menu.classList = 'fas fa-bars menu-icon';
            menuUl.classList = '';
        break;
    }
})
alert('asc')