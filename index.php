<!DOCTYPE html>
<?php
 session_start();

 //require "funcs.php";
?>
<html>
 <head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Play Exergames with two Big Buttons. Maintain your health and play play play...">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="Client/w3.css" >
  <link rel="stylesheet" href="Client/twobuttons.css" >
  <script src="Client/jquery-3.6.4.min.js"></script>
  <script src="Client/jcanvas.min.js"></script>
  <script src="Client/twobuttons.js"></script>
  <title>The Two Buttons</title>
 </head>
 <body>
  <div id="m">


   <?php
    for ($i=0; $i<12; $i++) {
     echo '
     <div class="tv0">
      <div class="tv">
       <div class="tv2">
       </div>
      </div>
     </div>';
    }
    ?>
  </div><!-- m -->

  <div class="StatsBar">
   <img class="logo" src="Pix/twobuttonsOff.png">
   <div id="titel" class="titel">Two Buttons</div>
  </div>
 </body>
</html>
