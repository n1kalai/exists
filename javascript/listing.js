let $lees = document.querySelectorAll('.detailed_list > li');
for (var i = 0; i < $lees.length; i++) {
    $lees[i].addEventListener('mouseover', function (event) {
        let ul = this.lastElementChild;
        ul.style.display = "flex"; // Ul

        this.firstChild.style.color = "white"; // First Ll (parent)

    }) //Events Close
} // For Close


for (var i = 0; i < $lees.length; i++) {
    $lees[i].addEventListener('mouseout', function (event) {
        let ul = this.lastElementChild;
        ul.style.display = "none"; // Ul

        this.firstChild.style.color = "darkcyan"; // First Ll (parent)

    }) //Events Close
} // For Close
