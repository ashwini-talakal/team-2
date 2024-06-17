<html>
	<head>
		<title>Admin Home</title>
		
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

</style>
	</head>
	<body bgcolor="#C4C7F1" background="background3.jpg" style="background-repeat:no-repeat;background-size:100% 100%;">
	<center><h1><font color="#fb8a30">ON ROAD VEHICLE BREAKDOWN SYSTEM</h1></center>
	<marquee dir="left"><h3><font color="#d89807">On Road Vehicle Breakdown System is going to be a good solution for the people who seek 
	help in the remote locations with mechanical issues of their vehicle. Users of the On Road Vehicle 
	Breakdown System will be the registered public and they be getting connected with the particular mechanic 
	through the trustworthy On Road Vehicle Breakdown System. Because only the legally and approved mechanics 
	are enlisted in the On Road Vehicle Breakdown system. Also they are under monitoring by the system 
	for not charging any extra service fee from the users</font></h3></marquee></br></br>
	
	<ul>
  <li><a  href="admin_home.php">HOME</a></li>
  <li><a class="active" href="garage.php">GARAGE</a></li>
  <li><a href="enquiry.php">ENQUIRY</a></li>
  <div class="topnav-right">
  <li><a href="about_admin.php">ABOUT</a></li>
  <li class="ms-auto"><a href="admin_logout.php">LOGOUT</a></li>
  </div>
</ul>
	
	</br></br></br>
<?php
$conn=mysqli_connect("localhost","root","","vehicle_breakdown_system");
$query=mysqli_query($conn,"select * from work_details");
?>
<html>
	<head>
		<title>shop information</title>
	</head>
	<body>
		<table align="center" border="5" width="900" >
			<tr bgcolor="#e5ccc9 ">
				<th>garage_id</th>
				<th>garage_name</th>
				<th>work_facility_details</th>
				<th>service_charge</th>
				<th>edit</th>
				<th>delete</th>
			</tr>
			<?php 
			while($r=mysqli_fetch_array($query))
			{
				$shop_id=$r['shop_id'];
				$shop_name=$r['shop_name'];
				$work_facility_details=$r['work_facility_details'];
				$service_charge=$r['service_charge'];
				
			?>
			<tr bgcolor="#778899">
				<td><?php echo $shop_id ;?></td>
				<td><?php echo $shop_name ;?></td>
				<td><?php echo $work_facility_details ;?></td>
				<td><?php echo $service_charge ;?></td>
				<td><a href="edit.php?id=<?php echo $shop_id?>">Edit </a></td>
				<td><a href="delete.php">delete</a>
			</tr>
			<?php } ?>
		</table>
	</body>
</html>