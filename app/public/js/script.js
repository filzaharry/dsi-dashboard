const header = document.querySelector("header");
const backToTo=document.querySelector('.scroll-top');

window.addEventListener("scroll", function () {
    header.classList.toggle("sticky",window.scrollY>100);
    if(window.scrollY>100){
        backToTo.style.display="flex";
    }else{
        backToTo.style.display="none";
    };
});

let menu = document.querySelector('#menu-icon');
let navlist = document.querySelector('.navlist');

menu.onclick = () => {
    menu.classList.toggle('bx-x');
    navlist.classList.toggle('open');
}

window.onscroll = () => {
    menu.classList.remove('bx-x');
    navlist.classList.remove('open');
}

function prev(){
    document.getElementById('slider-container').scrollLeft -= 270;
}

function next()
{
    document.getElementById('slider-container').scrollLeft += 270;
}




