
<?php
  function queryShips($connection, $factionId)
  {
    $shipsQuery = "SELECT img_name, name, faction FROM ships WHERE id = ".$factionId; //
    $result = $connection->query($shipsQuery);

      while($shipNames = $result->fetch_assoc()) { //stores next row from query into shipNames
        //Adds ship options the "allShips" select element along with the address to the ship image.
        //echo "<script> console.log('".$shipNames['name']."'); </script>";
        echo "<option value=\"Images/Ships/".$shipNames["faction"]."/".$shipNames["img_name"]."\" data-name='".$shipNames['name']."'>".$shipNames["name"]."</option>";
      }
  }

?>
