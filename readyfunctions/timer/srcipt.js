

//var b = prompt("sheiyvane ricxvi");
//
//function timer() {
//    document.getElementById('outNumber').innerHTML = b;
//    var day = Math.floor(b / 86400 )
//    var hour = Math.floor( b / 3600)
//    var min = Math.floor(b / 60);
//    var sec = Math.floor(b % 60 );
//    b--;
//    var d;
//    d =day + "დღე " + hour + " Saati " + min +  "< tsuti : " + sec; //  
//    
//    console.log(d);
//    if (min == 0 && sec == 0) {
//        var p = document.getElementById('outNumber');
//        p.style.display = "none";
//        stopTimer();
//    }
//    document.getElementById('outNumber').innerHTML = d;
//}
//
//var time = setInterval(timer, 1000);
//
//function stopTimer() {
//    
//    clearInterval(time);
//}

  
  var f2,f1;


function go() {
  f1 = document.getElementById('fdate').value;
f2 = document.getElementById("sdate").value;
// Set the date we're counting down to
var countDownDate = new Date(f2).getTime(); // kalendris tarigi

// Update the count down every 1 second
var x = setInterval(function() {

  // Get todays date and time
  var now = new Date(f1).getTime();
    
  // Find the distance between now and the count down date
  var distance = countDownDate - now;
    
  // Time calculations for days, hours, minutes and seconds
  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);
    
  // Output the result in an element with id="timeLeft"
  document.getElementById("out").innerHTML = days + "დღე " + hours + ":"
  + minutes + ":" + seconds;
    
  // If the count down is over, write some text 
  if (distance < 0) {
    clearInterval(x);
    document.getElementById("timeLeft").innerHTML = "EXPIRED";
  }
}, 1000);

}


