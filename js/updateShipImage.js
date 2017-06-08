function updateShipImage()
{
  var source;
  source = document.getElementById("allShips");
  var image = source.options[source.selectedIndex].value;
  //document.getElementById("shipImg").src ="images/" + source;
  //document.getElementById("blah").innerHTML = image;
  //document.write(image);
  //blah.innerHTML = "";
  //blah.innerHTML += image + "<br>";
  //document.getElementById("shipImg").src = "";
  document.getElementById("shipImg").src = image;
}
