var range_limit = 40;

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

		//console.log(data);

		for(var index = 0; index < data.length; index++){
			data_array.push(parseInt(data[index].TOTAL_INTERVALS));

			var timestamp = data[index].timestamp;
			timestamp = timestamp.replace("T","<br>");

			timestamp_array.push(timestamp);
		}

		chartInit(data_array,timestamp_array);
	});
}

function getDistance(){
	return google.maps.geometry.spherical.computeDistanceBetween(MyMarker.getPosition(), HomeMarker.getPosition());
}

function isNumber(n) {
  	return !isNaN(parseFloat(n)) && isFinite(n);
}

function chartInit(arr_data,arr_axis){
	var chart1 = new Highcharts.Chart({
        chart: {
            renderTo: 'mygraph',
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