<?php

$sname= "localhost";

$unmae= "root";

$password = "";

$db_name = "vehicle_breakdown_system";

$conn = mysqli_connect($sname, $unmae, $password, $db_name);

if ($conn) {

    #echo "Connected";

}
else
{
	#echo "fail";
}
?>