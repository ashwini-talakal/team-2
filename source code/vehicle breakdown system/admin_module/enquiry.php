<html>
	<head>
		<title>Admin Garage</title>
		
		<style>
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

.active, .dot:hover {
  background-color: #717171;
}
.topnav-right {
  float: right;
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
	<body bgcolor="#BFF5FC" background="background2.jpg" style="background-repeat:no-repeat;background-size:100% 100%;">
	<center><h1>ON ROAD VEHICLE BREAKDOWN SYSTEM</h1></center>
	<marquee dir="left"><h3><font color="#d89807">On Road Vehicle Breakdown System is going to be a good solution for the people who seek 
	help in the remote locations with mechanical issues of their vehicle. Users of the On Road Vehicle 
	Breakdown System will be the registered public and they be getting connected with the particular mechanic 
	through the trustworthy On Road Vehicle Breakdown System. Because only the legally and approved mechanics 
	are enlisted in the On Road Vehicle Breakdown system. Also they are under monitoring by the system 
	for not charging any extra service fee from the users</font></h3></marquee></br></br>
	
	<ul>
  <li><a  href="admin_home.php">HOME</a></li>
  <li><a href="garage.php">GARAGE</a></li>
  <li><a  class="active" href="enquiry.php"> ENQUIRY</a></li>
  <div class="topnav-right">
  <li><a href="about_admin.php">ABOUT</a></li>
  <li class="ms-auto"><a href="admin_logout.php">LOGOUT</a></li>
  </div>
</ul>
	 


<center>
		<table align="center">
		<form method="POST"><pre>
		<tr><th><label><font color="#fda5b2" size="4px">date    :</font></label></th> <td><input type="date" name="date" placeholder="Enter date"/></td></tr></br></br></br>
		<tr><th colspan="2"><input type="submit" name="search" class="button" value="SEARCH" align="center" /></th></tr></pre>
		</form></center>
		
		
		<table border=5 align=center width=1050>
			<tr bgcolor="#758CAD">
				<th>User Name</th>
				<th>User Mobile</th>
				<th>Shop Id</th>
				<th>Work Required</th>
				<th>Date</th>
			</tr>

<?php
$conn=mysqli_connect("localhost","root","","vehicle_breakdown_system");

if(isset($_POST['search']))
{
	$d=$_POST['date'];
}
	
	$query=mysqli_query($conn,"SELECT * FROM enquiry WHERE dated='$d' ");
	while($r=mysqli_fetch_array($query))
	{
		$name=$r['user_name'];
		$mobile=$r['user_mobile'];
		$id=$r['shop_id'];
		$req=$r['requirement_work_details'];
		$date=$r['dated'];
	

?>
			<tr align=center bgcolor="#D3E2F8">
				<td><?php echo $name;?></td>
				<td><?php echo $mobile;?></td>
				<td><?php echo $id;?></td>
				<td><?php echo $req;?></td>
				<td><?php echo $date;?></td>
			</tr>
<?php
}

?>
		</table>
	</body>
</html>