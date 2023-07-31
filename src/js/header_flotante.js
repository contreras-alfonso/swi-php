const header = document.querySelector('.header');

document.addEventListener('scroll',function(){
    const scrollY = window.scrollY;
    if(scrollY>0){
        header.classList.add('header_activo');
        return;
    }
    header.classList.remove('header_activo');
})