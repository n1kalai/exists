let $mainDiv = document.querySelector('.mainDiv');
let $button = document.querySelectorAll('.nexter');

//window.onload = fromLeft()

for (var i = 0; i < $button.length; i++) {

    console.log($button.length)
    $button[i].addEventListener('click', goLeft);

    function goLeft() {

        let $article = this.previousElementSibling;
        $article.classList.toggle('left');
        this.classList.toggle('fromleft')
        
    }
}
//$button.addEventListener('click', goLeft);
