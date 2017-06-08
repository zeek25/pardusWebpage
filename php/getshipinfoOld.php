
<?php
include("php/connect.php");
//$q = strval($_GET['q']);
$shipName = "";
if( $_REQUEST["shipName"] ) {

   $shipName = $_REQUEST['shipName'];

//echo "<script>console.log('Requested Info')</script>";
}
else {
  echo "<script>console.log('No Requested Info')</script>";
}

//echo '<script>console.log('.$shipName.')</script>';

//$con = mysqli_connect('localhost','peter','abc123','my_db');
//if (!$mysqli) {
  //  die('Could not connect: ' . mysqli_error($mysqli));
//}

//mysqli_select_db($mysqli,"ajax_demo");

$shipQuery="SELECT name, guns, missiles, capacity, armor, hull FROM ships WHERE name = '".$shipName."'";
//$result = mysqli_query($mysqli,$query);
$result = $connection->query($shipQuery);
while($shipInfo = $result->fetch_assoc()) {
  echo '<script>console.log('.$shipInfo["armor"].')</script>';
}





/*echo "<table>
<tr>
<th>Ship Name</th>
<th>Guns</th>
<th>Missiles</th>
<th>Capacity</th>
<th>Armor</th>
<th>Hull</th>
</tr>";
while($row = mysqli_fetch_array($result)) {
    echo "<tr>";
    echo "<td>" . $row['name'] . "</td>";
    echo "<td>" . $row['guns'] . "</td>";
    echo "<td>" . $row['missiles'] . "</td>";
    echo "<td>" . $row['capacity'] . "</td>"
    echo "<td>" . $row['armor'] . "</td>";
    echo "<td>" . $row['hull'] . "</td>";
    echo "</tr>";
}
echo "</table>";
//mysqli_close($mysqli);
*/
?>
<!--
</body>
</html>-->
