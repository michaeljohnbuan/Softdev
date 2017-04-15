<html>
<head>
	<title>Food Form Request</title>
	<link rel="stylesheet" type="text/css" href="assetsForRequest/style.css">
	
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script> 
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDwH6EdcfQ29qFbPI8cclfHP-1IBQyZFcI&callback=initMap"></script>
    <link rel="stylesheet" href="assetsForRequest/jquery-ui-1.8.18.custom.css"/>
	
	<script type="text/javascript">
		var map;
				var geocoder;
				function initialize()
				{
					var myLatlong   =   new google.maps.LatLng(14.599512, 120.984219);
					var myOptions   =   {
											zoom:12,
											center:myLatlong,
											mapTypeId:google.maps.MapTypeId.ROADMAP
										};
				   map          =   new google.maps.Map(document.getElementById('map_canvas'),myOptions);
				   geocoder      =   new google.maps.Geocoder();   
				}
				
			  $(document).ready(function(){
				  $("#autocomplete").autocomplete({
					  source:function(request,response){
						  geocoder.geocode({'address':request.term},function(results){
							  response($.map(results,function(item){
								  return {
									 label:item.formatted_address,
									 value:item.formatted_address,
									 latitude:item.geometry.location.lat(),
									 longitude:item.geometry.location.lng(),
								  }
								  
							  }))
						  })
					 },
					  select:function(event,ui) {
						var location    =   new google.maps.LatLng(ui.item.latitude,ui.item.longitude);
						marker          =   new google.maps.Marker({
							map:map,
							draggable:true
						})
					   var stringvalue     =   'Latitude:<input name="latitude" type="text" value="'+ui.item.latitude+'" >Longitude:<input name="longtitude" type="text" value="'+ui.item.longitude+'">Address<input name="address" type="text"><br><br>Status<select name="status"><option value="Pending"> Pending</option><option value="delivered"> Delivered</option></select><br/><br>';
						$("#value").append(stringvalue);
						marker.setPosition(location);
						map.setCenter(location);
						
						
					}
					  
				  })
			  
				});
        </script>

</head>
<body onload="initialize()">

<div id="main">
<h1>Requester: <i><font color="blue">{{ Auth::user()->name }} </font></i> </h1>
<p>Fill out fields to request</p>
<div id="login">
<h2>Food Request Form</h2>
<hr/>

	<form method="post" action="/insert">

		<label>Food Type:</label><br><br>
		
		<input TYPE="checkbox" name="foodtype[]" VALUE="Easy to cook">Easy to cook<br>
		<input TYPE="checkbox" name="foodtype[]" VALUE="Complete meal">Complete meal<br>
		<br>
		<label>Food Level:</label><br>
		<input TYPE="number" name="foodlevel" placeholder="In days" id="formFoodlevel" required="required"><br>
		<br>
		<label>Population:</label><br>
		<input type="text" name="population" id="formPopulation" required="required" placeholder="Please Enter Population"/><br /><br />

		<label>Date Needed:</label>
		<input type="date" name="date" id="formDate" required="required"/><br/><br />
		
		<label>Evacuation Center Name:</label>
		<input type="text" name="evac_name" id="formEvac_name" required="required" placeholder="Please Enter Evacuation Center Name"/><br/><br />

		
		<input type="hidden" name="_token" value="{{csrf_token()}}"><br/>
		<label>Enter your city:</label>

		<input type="text" placeholder="ex. Makati, Metro Manila, Philippines " id="autocomplete">

		<div id="map_canvas" style="width:500px;height:500px;float:left"><br>
		
        </div>
		
		<div id="value">
				
		</div>
		<br>
		<input type="submit" value="Submit " name="submit"/><br />
	</form>
</div>
<!-- Right side div -->
<div id="formget">

</div>

</div>
</body>
</html>