$(function(){

 // Poll status of the Two-Buttons-console
 // If an Arduino Leonardo is connected then assume the console is connected
 setInterval(CheckArduino,3000);
 function CheckArduino() {
  $.ajax({
   url: "checkarduino.php"
  }).done(function(data) {
   console.log("Arduinocheck: "+data);
   if(data==="NC") $(".logo").prop("src","Pix/twobuttonsOff.png");
   else $(".logo").prop("src","Pix/twobuttons.png");
  });
 }

});

function DateToString() {
 const today = new Date();
 const year = today.getFullYear();
 const month = (today.getMonth() + 1).toString().padStart(2, "0");
 const day = today.getDate().toString().padStart(2, "0");
 const dateString = `${year}-${month}-${day}`;
 return dateString;
}

function ComputeAge(birthday) { // birthday is a date
 var ageDifMs = Date.now() - birthday.getTime();
 var ageDate = new Date(ageDifMs); // miliseconds from epoch
 return Math.abs(ageDate.getUTCFullYear() - 1970);
}
