let $mainDiv = document.querySelector('.mainDiv');
let $button = document.querySelectorAll('.nexter');




//window.onload = fromLeft()


for (var i = 0; i < $button.length; i++) {


    $button[i].addEventListener('click', goLeft);



    function goLeft(e) {

        let $article = this.previousElementSibling;
        $article.classList.toggle('left');
        this.classList.toggle('fromleft')
        if (this.classList.contains('fromleft')) {
            this.innerHTML = '&#9776;'
        } else {
            this.innerHTML = '&#10006;'
            this.style.cursor = "crosshair";
        }


    }
}
