function openMenu() {
    var undo = document.getElementById("undo");
    var navbar = document.getElementById("forBurg");
    var burger = document.getElementById("burgerMenu");
    navbar.classList.toggle("open");
    burger.classList.toggle("close");
    if (undo.style.display = "block") {
        undo.style.display = "none";
    }
}

function showUndo() {
    var undo = document.getElementById("undo");
    if (undo.style.display = "none" && window.matchMedia("(max-width: 1025px)").matches) {

        undo.style.display = "block";

    } else { undo.style.display = "none" }
}

function clearUndo() {
    var undo = document.getElementById("undo");
    undo.style.display = "none";
}


