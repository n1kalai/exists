let $profileModal = document.querySelector('.profile'); // modaluri fanjara
let $modalForms = document.querySelector('.profLay'); // registraciis formis fanjris zoma
let $logIn = document.getElementsByClassName('forReg')[0]; // Shesvla [gilaki]
let $regIst = document.getElementsByClassName('forReg')[1]; //Registracia [gilaki]
let $person = document.querySelector('.iAmPers'); //Fizikuri Piris [gilaki]
let $company = document.querySelector('.iAmComp'); //Kompaniis [gilaki]
let $logInForm = document.querySelector('.logInForm'); // Shesvlis Forma
let $askUser = document.querySelector('.whichOne') // FIzpir Tu IurPir Block
let $regDiv = document.querySelector('.fizPi'); //Fizikuri Piris Registraciis Forma
let $bg = document.querySelector('.back');


$logIn.addEventListener('click', function (event) {

    $regDiv.classList.add('hide');
    $logInForm.classList.remove('hide')
    $bg.style.marginLeft = null;
    $modalForms.style.height = "50%";
    $askUser.classList.add('hide');
})

$regIst.addEventListener('click', function (event) {
    $logInForm.classList.add('hide');
    $askUser.classList.remove('hide');
    $bg.style.marginLeft = "50%";
    $bg.style.transition = "all .4s";
    $regDiv.classList.add('hide');
})

$person.addEventListener('click', function (event) {
    $askUser.classList.add('hide');
    $regDiv.classList.remove('hide');
    $modalForms.style.height = screen.availHeight + "px";
    $modalForms.style.marginTop = 0;
})
