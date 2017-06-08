<!DOCTYPE HTML>
<?php
include("php/connect.php");
include("php/queryShips.php");

?>
<html lang="en">

<head>
  <title>Ship Builder</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script type="text/javascript" src="js/updateShipImage.js" defer></script>
  <script type="text/javascript" src="js/getShip.js" defer></script>
  <link rel="stylesheet" type="text/css" href="pardusStyles.css">
</head>

<body>

  <!--<center>Ship Name<input type="text" id="shipName" value="Giblets" style="width: 300px" /></center>-->

  <center>

    <select id="allShips" onchange="getShip(this)"> <!--  updateShipImage()  this.getAttribute('data-name')  getShip(this)-->

      <?php
      echo "<option value=\"\" disabled=\"disabled\" selected=\"selected\" hidden=\"hidden\">Please select a ship </option>";
      echo "<option value=\"\" disabled=\"disabled\">-----Neutral Ships-----</option>";
      $shipsQuery = "SELECT name FROM ships WHERE id = 6";
      queryShips($mysqli, 6);

      echo "<option value=\"\" disabled=\"disabled\">-----Empire Ships-----</option>";
      $shipsQuery = "SELECT name FROM ships WHERE id = 1";
      queryShips($mysqli, 1);
      echo "<option value=\"\" disabled=\"disabled\">-----Federation Ships-----</option>";
      queryShips($mysqli, 2);
      echo "<option value=\"\" disabled=\"disabled\">-----Union Ships-----</option>";
      queryShips($mysqli, 3);
      echo "<option value=\"\" disabled=\"disabled\">-----TSS Ships-----</option>";
      queryShips($mysqli, 4);
      echo "<option value=\"\" disabled=\"disabled\">-----EPS Ships-----</option>";
      queryShips($mysqli, 5);
      echo "<option value=\"\" disabled=\"disabled\">-----Experimental Ships-----</option>";
      queryShips($mysqli, 7);

      ?>

    </select>
    <br>

    <div id="shipStats">
      <img id="shipImg" src=""/>
      <table id="shipInfo">
        <tr>
          <td>Size:</td>
          <td id="size"></td>
        </tr>
        <tr>
          <td>Guns:</td>
          <td id="totalGuns"></td>
        </tr>
        <tr>
          <td>Missiles:</td>
          <td id="totalMissiles"></td>
        </tr>
        <tr>
          <td>Hull capacity:</td>
          <td id="capacity"></td>
        </tr>
        <tr>
          <td>Hull:</td>
          <td id="hull"></td>
        </tr>
        <tr>
          <td>Armor:</td>
          <td id="armor"></td>
        </tr>
        <tr>
          <td>Crew:</td>
          <td id="crew"></td>
        </tr>
        <tr>
          <td>Price:</td>
          <td id="price"></td>
        </tr>

      </table>
    </div>

    <hr></hr>
    <center>Ship Equipment</center>
    <div id="shipEquipment">
      <div id="guns" data-numguns="0"> Guns
      </div>

      <div id="missiles" data-nummissiles="0"> Missiles
      </div>

    </div>
  </center>



<!--
  <ul style="list-style-type:none">
    <li>Weapon 1
      <select>
        <option value="Gun1">Gun 1</option>
        <option value="Gun2">Gun 2</option>
      </select>
    </li>
    <li>Weapon 2
      <select>
        <option value="Gun1">Gun 1</option>
        <option value="Gun2">Gun 2</option>
      </select>
    </li>
  </ul>
-->

</body>
