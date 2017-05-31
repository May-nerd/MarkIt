function getTimeRemaining(endtime) {
  var endtime1 = new Date(endtime); 
  var now = new Date();
  var t = endtime1 - now;
  console.log(endtime1.toUTCString() + " " + now.toUTCString());
  t = t/1000;
  var seconds = Math.floor((t) % 60);
  var minutes = Math.floor((t / 60) % 60);
  var hours = Math.floor((t / (60 * 60)) % 24);
  var days = Math.floor(t / (60 * 60 * 24));
  return {
    'total': t,
    'days': days,
    'hours': hours,
    'minutes': minutes,
    'seconds': seconds
  };
}

function initializeClock(id, endtime) {
  var clock = document.getElementById(id);
  var daysSpan = clock.querySelector('.days');
  var hoursSpan = clock.querySelector('.hours');
  var minutesSpan = clock.querySelector('.minutes');
  var secondsSpan = clock.querySelector('.seconds');

  function updateClock() {
    var t = getTimeRemaining(endtime);

    daysSpan.innerHTML = t.days;
    hoursSpan.innerHTML = ('0' + t.hours).slice(-2);
    minutesSpan.innerHTML = ('0' + t.minutes).slice(-2);
    secondsSpan.innerHTML = ('0' + t.seconds).slice(-2);

    if (t.total <= 0) {
      clearInterval(timeinterval);
    }
  }

  updateClock();
  var timeinterval = setInterval(updateClock, 1000);
}

window.onload = function(){
	var endofbid = document.getElementById("timestamp").innerHTML;
	var deadline = new Date(endofbid);
	initializeClock('clockdiv', deadline);
}

