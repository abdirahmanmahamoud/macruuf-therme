<div class="footer-2">
    © Copyright <?php echo date('Y');?> <?php bloginfo('name');?>
</div>
<script>
let menuUl = document.querySelector('.header .right nav ul');
let menu = document.querySelector('.menu-icon');

menu.addEventListener('click',() =>{
    let menuClass = menu.classList[1];
    switch(menuClass){
        case 'fa-bars':
            menu.classList = 'fas fa-times menu-icon';
           menuUl.classList = 'menuUl';
        break;
        case 'fa-times':
            menu.classList = 'fas fa-bars menu-icon';
            menuUl.classList = 'menuUl action';
        break;
    }
})

    </script>
</body>
</html>