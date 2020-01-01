<!DOCTYPE html>
<html>
<body>


<?php

$ip = "52.25.109.230"; 
  
//call api
$url = file_get_contents("http://www.geoplugin.net/json.gp?ip=" . $ip);

//decode json data
$getInfo = json_decode($url); 

print_r($getInfo);
    
//print the array to see the fields if you wish.

echo "<table border='1' width='50%' align='center'><tr><td>COUNTRY:</td><td>";
echo $getInfo->geoplugin_countryName;
echo "</td></tr><tr><td>CITY:</td><td>";
echo $getInfo->geoplugin_city;
echo "</td></tr><tr><td>STATE OR REGION:</td><td>";
echo $getInfo->geoplugin_region;
echo "</td></tr><tr><td>IP ADDRESS:</td><td>";
echo $getInfo->geoplugin_request;
echo "</td></tr><tr><td>COUNTRY CODE:</td><td>";
echo $getInfo->geoplugin_countryCode;
echo "</td></tr><tr><td>LATITUTE:</td><td>";
echo $getInfo->geoplugin_latitude;
echo "</td></tr><tr><td>LONGITUDE:</td><td>";
echo $getInfo->geoplugin_longitude;
echo "</td></tr><tr><td>TIMEZONE:</td><td>";
echo $getInfo->geoplugin_timezone;
echo "</td></tr><tr></table>";
    
?>

</body>
</html>
