let $days = document.querySelector('.span1').textContent;
var days = parseInt($days);
var interval = setInterval(function (event) {

    days = days - 0.1;
    document.getElementsByClassName('span1')[0].innerHTML = days.toFixed(0) + "დღე";
}, 100 * 60 * 60 * 24) // 1 dGe

let $hours = document.querySelector('.span2').textContent;
var hours = parseInt($hours);
var interval2 = setInterval(function (event) {
    hours = hours - 0.1;
    document.getElementsByClassName('span2')[0].innerHTML = hours.toFixed(0) + "სთ";
    console.log(hours)
}, 100 * 60 * 60)


let $figure = document.querySelectorAll('.imagesforSlide');
let $article = document.querySelector('.sectionFooter > article');

for (var i = 0; i < $figure.length; i++) {
    $figure[i].style.bottom = $article.scrollHeight - 53 + "px";

}
