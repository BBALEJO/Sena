let navbarhid = document.querySelector(".navbar-hid");
let navbar = document.querySelector(".navbar");
let main = document.querySelector(".main");
let cont = document.querySelector(".contacto");
//se declaran la variables dpeendiendo de cada uno
//queryselector es para selecciona a cualquier elemento pero solo el primero con esta 

//addevenlist es para que la pagina escuche a lo que se va a hacer
navbarhid.addEventListener("click", () => {
    navbar.classList.toggle("visible");
    if (navbar.classList.contains("visible")) {
        navbar.style.left= "0px";
    }else{
        navbar.style.left = "100%";
    }
});
window.addEventListener("resize", () => {
    if(window.matchMedia("(min-width: 778px)").matches){
        navbar.style.left = "0";
    }else{
        navbar.style.left = "100%";
    }
});

