function initialize() 
{
  var mapProp =
  {
    center:new google.maps.LatLng(1.2149005,21.8763308),
    zoom:5,
    mapTypeId:google.maps.MapTypeId.ROADMAP
  };
  var map=new google.maps.Map(document.getElementById("googleMap"), mapProp);
}
google.maps.event.addDomListener(window, 'load', initialize);