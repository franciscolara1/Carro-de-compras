var nav = document.getElementById("nav");
let prevY = window.scrollY;
window.addEventListener('scroll', function(){
    if ( prevY < 20 ) {
        nav.classList.remove("verde");
        console.log("Volviendo al top");
    }
    else{
        nav.classList.add("bg-dark");
        console.log("Bajando");
    }
    prevY = window.scrollY;
});