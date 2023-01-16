var countDownDate = new Date("Jan 10, 2023 15:37:25").getTime();

var x = setInterval(function() {
var counter=  document.getElementById("cd"); 
  var now = new Date().getTime();

  var distance = countDownDate - now;

  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);

  counter.innerHTML = days + "يوم  " + hours + "ساعة "
  + minutes + "دقيقة " + seconds + "ثانية";

  if (distance < 0) {
    clearInterval(x);
    counter.innerHTML = "لقد وصلت متاخرا ";
  }
}, 1000);







