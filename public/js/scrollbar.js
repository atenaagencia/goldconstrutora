window.onscroll = function() {scrollFunction()};
function scrollFunction() {
    var element = document.getElementById("navbar")
    
    var toggle = document.getElementById("botao")
 
    if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
        element.classList.add("nav-scroll")
        element.style.boxShadow = "0 6px 10px -4px rgba(0, 0, 0, 0.15)"
    } else {
        element.style.boxShadow = "none"
        element.classList.remove("nav-scroll")
    }
}