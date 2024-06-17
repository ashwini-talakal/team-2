<html>
	<head>
		<title>User Home</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

		<style>
		* {box-sizing:border-box}

.slideshow-container {
  max-width: 800;
  max-height: 650;
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

.button {
  background-color:#fda5b2  ;
  border: none;
  color: white;
  padding: 20px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
  border-radius: 50%;
}
.button:hover {
			background-color:#87ceeb ;
			color: white;
		}

.topnav-right {
  float: right;
}
select {
  width: 100%;
  padding: 6px;
  border: 2px solid #555555;
  border-radius: 12px;
  background-color: #dff3f3;
  float: left;
}


</style>
	</head>
	<body bgcolor="#C4C7F1" align="center" background="background2.jpg" style="background-repeat:no-repeat;background-size:100% 100%;">
	<center><h1><b><font color="#8febe4">ON ROAD VEHICLE BREAKDOWN SYSTEM</font></b></h1></center>
	<marquee dir="left"><p><font color="#e08d3c">On Road Vehicle Breakdown System is going to be a good solution for the people who seek 
	help in the remote locations with mechanical issues of their vehicle. Users of the On Road Vehicle 
	Breakdown System will be the registered public and they be getting connected with the particular mechanic 
	through the trustworthy On Road Vehicle Breakdown System. Because only the legally and approved mechanics 
	are enlisted in the On Road Vehicle Breakdown system. Also they are under monitoring by the system 
	for not charging any extra service fee from the users</font></p></marquee></br></br>
	
	<ul>
  <li><a  href="user_homepage.php">HOME</a></li>
  <li><a class="active"href="#garage">GARAGE</a></li>
  <li><a href="my_enquiry.php">MY ENQUIRY</a></li>
  <div class="topnav-right">
  <li><a href="user_about.php">ABOUT</a></li>
  <li class="ms-auto"><a href="user_logout.php">LOGOUT</a></li>
  </div>
</ul>
	 
	</br></br></br>
	<table align="center">
	<form method="POST">
	<tr><th><label  for="garage"><font color="#87ceeb" size="4px">Select Garage  name:</font></label></th>
  <td><select name="garage" id="garage">
	<?php 
		$conn=mysqli_connect("localhost","root","","vehicle_breakdown_system");
		$sql="SELECT DISTINCT shop_name FROM work_details";
		$res=mysqli_query($conn,$sql); 
 
 while ($rows=mysqli_fetch_array($res))
     {
	 ?>
	 <option value ="<?php echo $rows['shop_name']; ?>"> <?php echo $rows['shop_name']; ?>  </option>
	 <?php 
     }
	 ?>
  </select></td></tr>
  </br></br>
  <tr align="center"><td colspan="2"><input type="submit" class="button" name="SEARCH" value="SEARCH"></td></tr>
  <?php
$conn=mysqli_connect("localhost","root","","vehicle_breakdown_system");

if(isset($_POST['SEARCH']))
{
	$d=$_POST['garage'];

	
	$query=mysqli_query($conn,"SELECT * FROM work_details WHERE shop_name='$d' ");
?>

<table border=5 align=center width=1050>
			<tr bgcolor="#758CAD">
				<th>Shop Id</th>
				<th>Shop Name</th>
				<th>Facilities Available</th>
				<th>Service Charge</th>
				<th>Enquiry</th>
			</tr>
			<?php
	while($r=mysqli_fetch_array($query))
	{
		$id=$r['shop_id'];
		$name=$r['shop_name'];
		$fa=$r['work_facility_details'];
		$sc=$r['service_charge'];
	

?>
			<tr align=center bgcolor="#D3E2F8">
				<td><?php echo $id;?></td>
				<td><?php echo $name;?></td>
				<td><?php echo $fa;?></td>
				<td><?php echo $sc;?></td>
				<td><a href="enquiry.php?id=<?php echo $id?>">Enquiry</a></td>
			</tr>
<?php
}
}
?>
		</table>
	</body>
</html>
