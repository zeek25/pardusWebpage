function showWeapons(totalWeapons, lastTotal, weaponType){
  if(totalWeapons == lastTotal)
    return;

  if(totalWeapons > lastTotal){ //Adds select tags for the missing weapons
    for (i = lastTotal;i < totalWeapons; i++){//weaponi to weapon(lastTotal-1)
      $("#" + weaponType + "s").append("<select id='" + weaponType + i.toString() +"'></select>");
    }
  }
  else{ //removes select tags for the extra weapons
    for (i = totalWeapons; i < lastTotal; i++){ //weaponi to weapon(lastTotal-1)
      $("#" + weaponType + i).remove();
    }
  }
  $("#" + weaponType + "s").attr("data-num" + weaponType + "s", totalWeapons); //updates data attribute to the new number of weapons
}
function updateShipInfo(info){ //update table in PardusShips.php with the ship stats
  $("#size").html(info.size);
  $("#totalGuns").html(info.guns);
  $("#totalMissiles").html(info.missiles);
  $("#capacity").html(info.capacity);
  $("#hull").html(info.hull);
  $("#armor").html(info.armor);
  $("#crew").html(info.crew);
  $("#price").html(info.price.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",")); //Use of regex to add commas to numbers > 1000

}
function getShip(option) //When a new ship is chosen
{
   var name = option.options[option.selectedIndex].getAttribute('data-name'); //Name of the ship
   var shipImage = option.options[option.selectedIndex].value; //URL to the current ship

  $(function (){
    $("#shipImg").attr("src", shipImage);//updates ship image

    var numGuns = 0;
    var numMissiles = 0;
    $.ajax({ //DB query for ship info
      type: "GET",
      url: 'php/getshipinfo.php',
      data: 'shipName='+name,
      success: function(shipInfoJson){
        console.log(shipInfoJson);
        var lastGuns = parseInt($("#guns").attr("data-numguns"));
        var lastMissiles = parseInt($("#missiles").attr("data-nummissiles"));
        var shipInfo = jQuery.parseJSON(shipInfoJson);
        numGuns = parseInt(shipInfo.guns);

        showWeapons(numGuns, lastGuns, "gun");
        numMissiles = parseInt(shipInfo.missiles);
        showWeapons(numMissiles, lastMissiles, "missile");
        updateShipInfo(shipInfo);
        alert("Successfully retrieved ship info");
      },
      error: function(){
        alert('Did not retrieve ship info');
      }
    });
    //console.log(numGuns);

    //showMissiles(numMissiles, lastMissiles);

  });


}
