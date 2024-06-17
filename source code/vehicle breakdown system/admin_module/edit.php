<?php
$conn=mysqli_connect("localhost","root","","vehicle_breakdown_system");
?>
<html>
	<head>
		<title>shop information</title>
		
	
		
		<style>
		* {box-sizing:border-box}

.slideshow-container {
  max-width: 900px;
  max-height: 250px;
  position: relative;
  margin: auto;
}

.mySlides {
  display: none;
}

.prev, .next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  margin-top: -22px;
  padding: 16px;
  color: white;
  font-weight: bold;
  font-size: 18px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
  user-select: none;
}

.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

.prev:hover, .next:hover {
  background-color: rgba(0,0,0,0.8);
}

.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

.dot {
  cursor: pointer;
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active, .dot:hover {
  background-color: #717171;
}

.fade {
  animation-name: fade;
  animation-duration: 1.5s;
}

img {vertical-align: middle;}
img {horizontal-align: middle;}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .prev, .next,.text {font-size: 11px}
}

 ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
}

li {
  float: left;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover {
  background-color: #111;
}
.topnav-right {
	float: right;
}
		 .button {
			background-color: white;
			color: black;
			border: 2px solid #555555;	
			width: 100px;
			border-radius: 10px;
			background-color: white;
			padding:10px 24px;
			text-align: center;
			text-decoration: ;
			display: inline-block;
			font-size: 14px;
		}
		.button:hover {
			background-color:#87ceeb ;
			color: white;
		}
		input {
  border: 1px solid black;
  border-radius: 8px;
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  box-sizing: border-box;
  
  color: black;
}



</style>
	</head>
	<body bgcolor="#C4C7F1">
	<center><h1><font color="#f9ecaa">ON ROAD VEHICLE BREAKDOWN SYSTEM</font></h1></center>
	<marquee dir="left"><h3><font color="#c3a926">On Road Vehicle Breakdown System is going to be a good solution for the people who seek 
	help in the remote locations with mechanical issues of their vehicle. Users of the On Road Vehicle 
	Breakdown System will be the registered public and they be getting connected with the particular mechanic 
	through the trustworthy On Road Vehicle Breakdown System. Because only the legally and approved mechanics 
	are enlisted in the On Road Vehicle Breakdown system. Also they are under monitoring by the system 
	for not charging any extra service fee from the users</font></h3></marquee></br></br>
	
	<ul>
  <li><a class="active" href="user_homepage.php">HOME</a></li>
  <li><a href="garage.php">GARAGE</a></li>
  <li><a href="enquiry.php">ENQUIRY</a></li>
  <div class="topnav-right">
  <li><a href="about_admin.php">ABOUT</a></li>
  <li class="ms-auto"><a href="admin_logout.php">LOGOUT</a></li>
  </div>
</ul>
	
	
	</head>
	<body background="bg1.jpg" style="background-repeat:no-repeat;background-size:100% 100%;">
		
		<?php
		
			$s=$_GET['id'];
			$query=mysqli_query($conn,"SELECT * FROM work_details WHERE shop_id='$s'");
			while($r=mysqli_fetch_array($query))
			{
				$shop_id=$r['shop_id'];
				$shop_name=$r['shop_name'];
				$work_facility_details=$r['work_facility_details'];
				$service_charge=$r['service_charge'];
			}
		
		?>
		<center>
		<table align="center">
		<form method="POST"><pre>
			<tr><th></label><font color="#e0ded2">shop_id                 :</font></label></th> <td><input type="text" name="a1" value="<?php echo $shop_id ; ?>" /></td></tr></br>
			<tr><th></label><font color="#e0ded2">shop_name               :</font></label></th> <td> <input type="text" name="a2" value="<?php echo $shop_name ; ?>" /></td></tr></br>
			<tr><th></label><font color="#e0ded2">work_facility_details   :</font></label></th> <td> <input type="text" name="a3" value="<?php echo $work_facility_details ; ?>" /></td></tr></br>
			<tr><th></label><font color="#e0ded2">service_charge          :</font></label></th> <td> <input type="text" name="a4" value="<?php echo $service_charge ; ?>" /></td></tr></br>
			<tr><th colspan="2"><input type="submit" class="button" name="update" value="Edit" />
		</form></center>
		<?php  
		if(isset($_POST['update']))
		{
			$v1=$_POST['a1'];
			$v2=$_POST['a2'];
			$v3=$_POST['a3'];
			$v4=$_POST['a4'];
			
			$query=mysqli_query($conn, "UPDATE work_details SET shop_name='$v2', work_facility_details='$v3',service_charge='$v4' WHERE shop_id='$v1' ");
			if($query)
			{
				echo"<script type='text/javascript'>alert('Edited successfully');
			   window.location.assign('garage.php')</script>";
			}
			else
			{
				echo"<script type='text/javascript'>alert('Edit Failed');
			   window.location.href('edit.php')</script>";
			}
			
		}
		?>
	</body>
</html>