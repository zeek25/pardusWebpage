<?php
include("connect.php"); //connects to db
if( $_REQUEST["shipName"] ) {
   $shipName = $_REQUEST['shipName'];

   $shipQuery="SELECT name, guns, missiles, capacity, armor, hull, crew, price, size FROM ships WHERE name = '".$shipName."';";
   //$shipQuery="SELECT guns FROM ships WHERE name = '".$shipName."'";
   $result = $mysqli->query($shipQuery);
   while($shipInfo = $result->fetch_assoc()) {

     echo json_encode($shipInfo); //returns the ship info in json
   }
}
?>
