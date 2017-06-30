
var display = document.getElementById("display");

var	time = null;
var seconds = 0;
var minutes = 0;
var hours = 0;


function startTimer () {
	// body...
	if (time == null) {
		counter();
		time = setInterval(counter, 1000)
	}

}
function counter() {

	display.innerHTML = "<p>" + ExtraZero(hours)+":"+ExtraZero(minutes)+":"+ExtraZero(seconds) + "</p>"; 
  seconds++;
  if (seconds == 60) {seconds = 0; minutes++;}
  		if (minutes == 60) {minutes = 0; hours ++; }

}

  
function resetIt() {
  	seconds = 0;
    minutes = 0;
    hours = 0;
    display.innerHTML = "<p>" + ExtraZero(hours)+":"+ExtraZero(minutes)+":"+ExtraZero(seconds) + "</p>"; 
    stop();
  }

   function stop () {
   	clearInterval(time);
    time = null;
   	   }

 function ExtraZero(i) {        
    if (i < 10){i = "0" + i}
    return i
}
