let $mainDiv = document.querySelector('.mainDiv');
let $button = document.querySelectorAll('.nexter');
let $art = document.querySelectorAll('.inner');
let $parentArt = document.querySelectorAll('.sideBar');


for (var i = 0; i < $art.length; i++) {

    $art[i].addEventListener('click', leeft)
}

function leeft(event) {
    if (event.target == this || event.target == this.lastElementChild) {
        console.log(this.lastElementChild)
        this.classList.toggle('outer');

    } else {
        event.stopPropagation();
    }

}
