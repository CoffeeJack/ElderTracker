<?php /* Smarty version Smarty-3.0.7, created on 2013-04-11 01:01:00
         compiled from "C:\\xampp\\htdocs\\Kurogo\\site\\eldertracker\\app\\modules\\hello\\templates\\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:271875166438cd6ba41-20361782%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd0447eb10abacd4c75a91e85e6137c5621d4aaab' => 
    array (
      0 => 'C:\\\\xampp\\\\htdocs\\\\Kurogo\\\\site\\\\eldertracker\\\\app\\\\modules\\\\hello\\\\templates\\\\index.tpl',
      1 => 1365656458,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '271875166438cd6ba41-20361782',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php $_template = new Smarty_Internal_Template("findInclude:common/templates/header.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>

<!-- <h1 class="focal"><?php echo $_smarty_tpl->getVariable('message')->value;?>
</h1> -->
<h1 id="distance"></h1>
<div class="row">
    <div id="googleMap" class="span6" style="width:500px;height:380px;"></div>
<!-- <p><input id="home_lat" type="text" placeholder="Home Latitude">Home Latitude
<p><input id="home_lng" type="text" placeholder="Home Longitude">Home Longitude
<p><button id="save">Save Above</button><button id="use_current">Use Current</button> -->
    <div class="span3">
    <h3> Useful Tips: </h3>
        <ul>
            <li>1) Click anywhere on Map to set Home
            <li>2) Bar on top shows distance between you and Home
        </ul>
    <button class="btn btn-success">Find Home</button>
    <button class="btn btn-danger">Find Me</button>
    </div>

    <div id="call_and_sms" class="span3">
        <h4>Last Call @ 
        </h4>   
        <div id="call">
        </div>
        <br>
        <h4>Last Text @ 
        </h4>   
        <div id="text">
        </div>
        
    </div>
</div>	

<div id="activitygraph" style="width:100%; height:400px;"></div>
<div id="accelgraph" style="width:100%; height:400px;"></div>

<!-- <p><button id="getdata">TEST</button> -->


<script>
var foo = <?php echo $_smarty_tpl->getVariable('foo')->value;?>
;
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
    getAccelData();
    getCallData();
    getSMSData();

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

    	resetHome(myCenter);

		getLocationData();
    });

    $('#use_current').click(function(event){

    	home_lat = current_lat;
    	home_lng = current_lng;

    	myCenter = new google.maps.LatLng(home_lat,home_lng); //home
    	resetHome(myCenter);

		getLocationData();
    });

    google.maps.event.addListener(map,'click',function(event) {

        resetHome(event.latLng);

        getLocationData();
    });

    google.maps.event.addListener(HomeMarker,'click',function(event){

        var infowindow = new google.maps.InfoWindow({
            content: HomeMarker.getPosition().toString()
        });

        infowindow.open(map,HomeMarker);

    });

    $('.btn-danger').click(function(event){

        map.panTo(MyMarker.getPosition());
    });

    $('.btn-success').click(function(event){

        map.panTo(HomeMarker.getPosition());
    });

    //timer to poll data
    setInterval(function(){
    	getLocationData();
    	getActivityData();
        getCallData();
        getSMSData();
    },30000);

    setInterval(function(){
        getAccelData();
    },3000);

    $('#getdata').click(function(event){
    	//getActivityData();
    	var params = {};
    	// makeAPICall('POST','hello','sendemail',params,function(res){
    	// 	console.log(res);
    	// });      
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


<?php $_template = new Smarty_Internal_Template("findInclude:common/templates/footer.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>