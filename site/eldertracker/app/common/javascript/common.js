var range_limit = 40;
var map;

function initialize(center)
{
  var mapProp = {
    center:center,
    zoom:15,
    mapTypeId:google.maps.MapTypeId.ROADMAP
  };
  map=new google.maps.Map(document.getElementById("googleMap"),mapProp);
}

function getLocationData(){

	var params = {probe:"locationprobe"};

	makeAPICall('POST','hello','getdata',params,function(res){

		var xy = JSON.parse(res);

		//console.log(xy[xy.length-1]);

		current_lat = xy[xy.length-1].lat;
		current_lng = xy[xy.length-1].lng;

		if(MyMarker) MyMarker.setMap(null);
		MyMarker = new google.maps.Marker({
		    position:new google.maps.LatLng(current_lat,current_lng),
		    animation:google.maps.Animation.BOUNCE
		});
		MyMarker.setMap(map);

		var distance = getDistance();

		$('#distance').empty();
		$('#distance').append("Distance from Home: "+distance+"m");

		if(distance > range_limit){
			//alert owner
			$('#distance').css("background-color","red");

		}else{
			$('#distance').css("background-color","rgb(64, 214, 148)");
		}
	});
}

function getActivityData(){
	var params = {probe:"activityprobe"};

	makeAPICall('POST','hello','getdata',params,function(res){
		
		var data = JSON.parse(res);
		var data_array = [];
		var timestamp_array = [];
		var ref_level = 15;
		var ref_array = [];

		//console.log(data);

		for(var index = 0; index < data.length; index++){
			data_array.push(parseInt(data[index].TOTAL_INTERVALS));

			var timestamp = data[index].timestamp;
			timestamp = timestamp.replace("T","<br>");

			timestamp_array.push(timestamp);

			ref_array.push(ref_level);
		}

		activityChartInit(data_array,timestamp_array,ref_array);
	});
}

function getAccelData(){

	var params = {probe:"accelerometersensorprobe"};

	makeAPICall('POST','hello','getdata',params,function(res){
		
		var data = JSON.parse(res);
		var X = [];
		var Y = [];
		var Z = [];
		var timestamp_array = [];

		//console.log(data);

		for(var index = 0; index < data.length; index++){
			X.push(parseInt(data[index].X));
			Y.push(parseInt(data[index].Y));
			Z.push(parseInt(data[index].Z));

			var timestamp = data[index].timestamp;
			timestamp = timestamp.replace("T","<br>");

			timestamp_array.push(timestamp);

		}

		accelChartInit(X,Y,Z,timestamp_array);

	});

}

function getCallData(){

	var params = {probe:"calllogprobe"};

	makeAPICall('POST','hello','getdata',params,function(res){
		
		var data = JSON.parse(res);
		var index = data.length-1;

		while(isNaN(data[index]["date"])){
			index--;
		}

		var date = new Date(parseInt(data[index]["date"]));

		$("#call").empty();
		$("#call").append(date);

	});
}

function getSMSData(){

	var params = {probe:"smsprobe"};

	makeAPICall('POST','hello','getdata',params,function(res){
		
		var data = JSON.parse(res);
		var index = data.length-1;

		while(isNaN(data[index]["date"])){
			index--;
		}
		
		var date = new Date(parseInt(data[index]["date"]));

		$("#text").empty();
		$("#text").append(date);

	});
}

function resetHome(center){

	if(HomeMarker) HomeMarker.setMap(null);

    HomeMarker = new google.maps.Marker({
        position:center,
        icon: "https://maps.google.com/mapfiles/kml/shapes/schools_maps.png"
    });

    HomeMarker.setMap(map);

    google.maps.event.addListener(HomeMarker,'click',function(event){

        var infowindow = new google.maps.InfoWindow({
            content: HomeMarker.getPosition().toString()
        });

        infowindow.open(map,HomeMarker);

    });

}

function getDistance(){
	return google.maps.geometry.spherical.computeDistanceBetween(MyMarker.getPosition(), HomeMarker.getPosition());
}

function isNumber(n) {
  	return !isNaN(parseFloat(n)) && isFinite(n);
}

function activityChartInit(arr_data,arr_axis,arr_ref){


	var chart1 = new Highcharts.Chart({
        chart: {
            renderTo: 'activitygraph',
            type: 'line'
        },
        title: {
            text: 'Activity Graph'
        },
        xAxis: {
            categories: arr_axis
        },
        yAxis: {
            title: {
                text: 'Active Level'
            }
        },
        series: [{
            name: 'User',
            data: arr_data
        },{
        	name: 'Ref Level',
        	data: arr_ref
        }]
    });
}

function accelChartInit(X,Y,Z,arr_axis){

	var chart1 = new Highcharts.Chart({
        chart: {
            renderTo: 'accelgraph',
            type: 'line'
        },
        title: {
            text: 'Accelerometer Graph'
        },
        xAxis: {
            categories: arr_axis
        },
        yAxis: {
            title: {
                text: 'Acceleration'
            }
        },
        series: [{
            name: 'X',
            data: X
        },{
        	name: 'Y',
        	data: Y
        },{
        	name: 'Z',
        	data: Z
        }]
    });
}

function getXAxis(length, unit){

	var axis_vals = [];

	for(var count = 0; count < (length-1); count++){
		axis_vals.push(length-(count+1)+unit);
	}

	axis_vals[length-1] = "now";

	return axis_vals;
}