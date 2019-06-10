//function go() {
//    
//    var date = document.getElementById('date').value;
//    var p = document.getElementById('outer').innerHTML = date;
//}
function go() {
    var titleput = document.getElementById("titleput").value;
    var title = document.getElementById("title");
    title.innerHTML = titleput;
    var date = document.getElementById('date').value;
    var name = document.getElementById('producttName').value;
    document.getElementById('productName').innerHTML = name;
    
    var old = document.getElementById("old").value;
    old = parseInt(old);
    var neww = document.getElementById('new').value;
    neww = parseInt(neww);
    document.getElementById("oldPrice").innerHTML = old + "ლ";
    document.getElementById('newPrice').innerHTML = neww +"ლ";


// Set the date we're counting down to
var countDownDate = new Date(date).getTime(); // kalendris tarigi

// Update the count down every 1 second
var x = setInterval(function() {

  // Get todays date and time
  var now = new Date().getTime();
  
    
  // Find the distance between now and the count down date
  var distance = countDownDate - now;
    
  // Time calculations for days, hours, minutes and seconds
  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor(distance % (1000 * 60 * 60 * 24) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);
    
  // Output the result in an element with id="timeLeft"
  document.getElementById("timeLeft").innerHTML = days + "დღე " + hours + ":"
  + minutes + ":" + seconds;
    
  // If the count down is over, write some text 
  if (distance < 0) {
    clearInterval(x);
    document.getElementById("timeLeft").innerHTML = "EXPIRED";
      
  }
}, 1000);

}
