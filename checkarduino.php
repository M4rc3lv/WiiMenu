<?php
 session_start();

 //require "funcs.php";

 /* lsusb output example:
 Bus 004 Device 003: ID 0bda:0316 Realtek Semiconductor Corp. Card Reader
 Bus 004 Device 002: ID 05e3:0620 Genesys Logic, Inc. USB3.2 Hub
 Bus 004 Device 001: ID 1d6b:0003 Linux Foundation 3.0 root hub
 Bus 003 Device 004: ID 04f2:b75c Chicony Electronics Co., Ltd FHD Webcam
 Bus 003 Device 003: ID 05e3:0610 Genesys Logic, Inc. Hub
 Bus 003 Device 005: ID 8087:0026 Intel Corp. AX201 Bluetooth
 Bus 003 Device 006: ID 2341:8036 Arduino SA Leonardo (CDC ACM, HID)
 Bus 003 Device 001: ID 1d6b:0002 Linux Foundation 2.0 root hub
 Bus 002 Device 001: ID 1d6b:0003 Linux Foundation 3.0 root hub
 Bus 001 Device 001: ID 1d6b:0002 Linux Foundation 2.0 root hub
 */

 // Check if a button is connected to the PC so we can show it in the UI
 $FoundButton=false;
 $USBDevice="Arduino SA Leonardo (CDC ACM, HID)";
 $lsusb = shell_exec("lsusb");
 if(strpos($lsusb, $USBDevice)!==false) {
  $FoundButton=true;
 }

 // <img class="logo" src=<?php if($FoundButton) echo "Pix/twobuttons.png"; else echo "Pix/twobuttonsOff.png"; 
 $IP = $_SERVER["REMOTE_ADDR"];
 if($IP === "127.0.0.1")
  echo $FoundButton? "CONN" : "NC";
 else
  echo "CONN"; // When hosted online always show the colourful buttons
?>
