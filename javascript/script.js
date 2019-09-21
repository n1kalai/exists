let $mainDiv = document.querySelector('.mainDiv');
let $button = document.querySelectorAll('.nexter');
let $art = document.querySelectorAll('.inner');
let $parentArt = document.querySelectorAll('.sideBar');


//window.onload = fromLeft()


for (var i = 0; i < $button.length; i++) {


    $button[i].addEventListener('click', goLeft);



    function goLeft(e) {
        console.log(e)
        e.preventDefault();
        console.log(e)
        let $article = this.previousElementSibling;

        $article.classList.toggle('left');
        this.classList.toggle('fromleft')
        if (this.classList.contains('fromleft')) {
            this.innerHTML = '&#9776;'
        }


    }
}

for (var i = 0; i < $art.length; i++) {
    $art[i].addEventListener('click', leeft)
}

function leeft(event) {
    this.classList.toggle('outer');
}
