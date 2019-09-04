function MudarEstado(el) {
    var display = document.getElementById(el).style.display;

    document.getElementById(el).style.display = display == "none" ? "block" : "none";
}