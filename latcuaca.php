<h1> PRAKIRAAN CUACA DIWILAYAH MUGAS</H1>

<?php
	$json_string = file_get_contents("http://api.wunderground.com/api/87ffe4528596bbed/forecast/q/IA/mugassari.json");
	$parsed_json = json_decode ($json_string);
	
	$forecast = $parsed_json->{'forecast'}->{'txt_forecast'}->{"date"};
	
	$json_string2 = file_get_contents("http://api.wunderground.com/api/87ffe4528596bbed/conditions/q/IA/mugassari.json");
	$parsed_json2 = json_decode ($json_string2);
	
	$conditions = $parsed_json2->{'current_observation'}->{'display_location'}->{"state_name"};
	$condi = $parsed_json2->{'current_observation'}->{'display_location'}->{"city"};
	
	$json_string3 = file_get_contents ("http://api.wunderground.com/api/87ffe4528596bbed/history_20060405/q/IA/mugassari.json");
	$parsed_json3 = json_decode ($json_string3);
	
	$history = $parsed_json3->{'history'}->{'date'}->{"pretty"};
	
	$json_string4 = file_get_contents ("http://api.wunderground.com/api/a657d7d2ba430b38/planner_08010831/q/IA/mugassari.json");
	$parsed_json4 = json_decode ($json_string4);
	
	$suhu = $parsed_json4->{'trip'}->{'temp_high'}->{"avg"}->{"C"};
	$suhu2 = $parsed_json4->{'trip'}->{'temp_low'}->{"avg"}->{"C"};
	$cuaca = $parsed_json4->{'trip'}->{'cloud_cover'}->{"cond"};
	
	
	echo "State Name : ${conditions}\n";
	echo "<br>";
	
	echo "City : ${condi}\n";
	echo "<br>";
	
	echo "Pretty : ${history}\n";
    echo "<br>";
	
	echo "Time : ${forecast}\n";
    echo "<br>";
	
	echo "The highest temperature: $suhu <sup>O</sup> C";
    echo "<br>";
	
	echo "Lowest temperature: $suhu2 <sup>O</sup> C";
    echo "<br>";
	
	echo "Today's weather : ${cuaca}\n" ;
    echo "<br>";
	
	
?>