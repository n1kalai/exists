function addLi() {

    var t1;
    
    // getting text-input value
    t1 = document.getElementById("t1").value;
   
    if (t1 == null) {
    var text = document.getElementById('text').value;
    var out = document.getElementById('out');
    out.innerHTML = text;
    t1.innerHTML = null;    
    } else {

    // getting ol and + li
    document.getElementById("lees").innerHTML += "<li>" + t1 + "</li>";
   
 //input = null
    t1 = document.getElementById("t1").value = null;
    }

}



function randomNumb() {
var h = Math.random() * (2000 - 5) + 5;
document.getElementById("rand").innerHTML = h;
    
}