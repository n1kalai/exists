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

    } else {
        undo.style.display = "none"
    }
}

function clearUndo() {
    var undo = document.getElementById("undo");
    undo.style.display = "none";
}

$searchInput = document.getElementsByClassName('searchbg')[0]; //input veli
$searchLabel = document.querySelector('.searchbb'); //label for input
$searchButt = document.querySelector('.ser');
// searchze daklikebisas labelis gawelva 
$searchInput.addEventListener('click', function (event) {

    if (event.target == $searchInput) {
        $searchLabel.style.width = "150px";
        $searchLabel.style.borderRadius = "30px";
        $searchInput.style.animation = "none";
        $searchInput.style.paddingLeft = "26px";
        $searchButt.style.display = "block"
    }
}) // searchze daklikebisas labelis gawelvis kodis dasasruli

// sxvagan daklikebisas searchis pirvandeli forma
$searchInput.addEventListener('blur', function () {
    $searchLabel.style.width = "30px";
    $searchLabel.style.borderRadius = "100%";
    $searchInput.style.paddingLeft = 0;
    $searchInput.style.animation = null;
    $searchButt.style.display = "none"
}) // sxvagan daklikebisas searchis pirvandeli formis kodis dasasruli
