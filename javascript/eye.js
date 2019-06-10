function show() {
    
   var eye = document.getElementById("eye");
    var faeYe = document.getElementById("show2");
    
    if (eye.type == "password") {
        
        eye.type = "text";
        faeYe.style.color = "red";
    }
    else {
        eye.type = "password";
         faeYe.style.color = "#1eb2d5";
           
    }
}

function fizpir() {
   var fizpirbox = document.getElementById("fizikuriPiri");
        
fizikuriPiri.classList.toggle("open");
}

function iurpir() {
var iuridiul = document.getElementById("iuridiuliPiri");
iuridiul.classList.toggle("secopen");
}