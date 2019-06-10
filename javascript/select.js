function showSel(){
    
    var select = document.getElementById("sel").value;
    var categories = document.getElementById("category");
    if (select == "company") {
        
        categories.style.display = "block";
    } else categories.style.display == "none";
}