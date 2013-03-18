{include file="findInclude:common/templates/header.tpl"}

<!-- <h1 class="focal">{$message}</h1> -->
<h1 id="distance"></h1>
<div class="row">
<div id="googleMap" class="span6" style="width:500px;height:380px;"></div>
<p><input id="home_lat" type="text" placeholder="Home Latitude">Home Latitude
<p><input id="home_lng" type="text" placeholder="Home Longitude">Home Longitude
<p><button id="save">Save Above</button><button id="use_current">Use Current</button>
</div>	

<div id="mygraph" style="width:100%; height:400px;"></div>
<p><button id="getdata">TEST</button>


<script>
var foo = {$foo};
var home_lat = 49.2615513;
var home_lng = -123.237006;
var current_lat;
var current_lng;
var myCenter = new google.maps.LatLng(home_lat,home_lng); //magic lab
var range = 40;

var HomeMarker=new google.maps.Marker({
    position:myCenter,
    icon: "https://maps.google.com/mapfiles/kml/shapes/schools_maps.png"
});

var MyMarker;

$(document).on("ready",function(event){

	//initialize
	initialize(myCenter);
    HomeMarker.setMap(map);
    getLocationData();
    getActivityData();

    if(home_lat){
    	$('#home_lat').attr("value",home_lat);
    }

    if(home_lng){
    	$('#home_lng').attr("value",home_lng);
    }

    $("#save").click(function(event){

    	var new_lat = $('#home_lat').val();
    	var new_lng = $('#home_lng').val();

    	if(isNumber(new_lat)) home_lat = new_lat;
		if(isNumber(new_lng)) home_lng = new_lng; 

    	myCenter = new google.maps.LatLng(home_lat,home_lng); //home
    	initialize(myCenter);

    	HomeMarker = new google.maps.Marker({
		    position:myCenter,
		    icon: "https://maps.google.com/mapfiles/kml/shapes/schools_maps.png"
		});

		HomeMarker.setMap(map);

		getLocationData();
    });

    $('#use_current').click(function(event){

    	home_lat = current_lat;
    	home_lng = current_lng;

    	myCenter = new google.maps.LatLng(home_lat,home_lng); //home
    	initialize(myCenter);

    	HomeMarker = new google.maps.Marker({
		    position:myCenter,
		    icon: "https://maps.google.com/mapfiles/kml/shapes/schools_maps.png"
		});

		HomeMarker.setMap(map);

		getLocationData();
    });

    //timer to poll data
    setInterval(function(){
    	getLocationData();
    	getActivityData();
    },30000);

    $('#getdata').click(function(event){
    	//getActivityData();
    	var params = {};
    	makeAPICall('POST','hello','sendemail',params,function(res){
    		console.log(res);
    	});
    });

});

function getDummyVal(length){

	var test_vals = [];

	for(var count = 0; count < length; count++){
		test_vals.push(length-count);
	}

	return test_vals;
}

</script>


{include file="findInclude:common/templates/footer.tpl"}