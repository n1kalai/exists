let $mainDiv = document.querySelector('.mainDiv');
let $button = document.querySelectorAll('.nexter');
let $art = document.querySelectorAll('.inner');
let $parentArt = document.querySelectorAll('.sideBar');


//window.onload = fromLeft()


for (var i = 0; i < $button.length; i++) {


    $button[i].addEventListener('click', goLeft);



    function goLeft(e) {

        let $article = this.previousElementSibling;
        if (false) {
            //  bla bla
            console.log('f')

        } else {
            $article.classList.toggle('left');
            console.log(this)
        }

        $article.classList.toggle('left');
        this.innerHTML = "&#9776;"




    }
}

for (var i = 0; i < $art.length; i++) {
    $art[i].addEventListener('click', leeft)
}

function leeft(event) {
    this.classList.toggle('outer');
}
