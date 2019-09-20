let $mainDiv = document.querySelector('.mainDiv');
let $button = document.querySelectorAll('.nexter');
let $images = document.querySelectorAll('.inner > IMG');



//window.onload = fromLeft()
if ($button[0].onclick) {
    console.log('clicked')
}

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
        }


    }
}


for (var j = 0; j < $images.length; j++) {
    $images[j].addEventListener('mouseover', function (e) {
        if (e.target) {
            e.preventDefault();
            this.style.pointerEvents = 'auto';
        }
    })
}
