<html>
	<head>
		<title>My Enquiry</title>
		
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
  background-color:  #fda5b2;
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
			background-color: #87ceeb;
			color: white;
		}
input {
  border: 3px solid #DBAEE2;
  border-radius: 8px;
}

</style>
	</head>
	<body bgcolor="#BFF5FC" background="bg1.jpg" style="background-repeat:no-repeat;background-size:100% 100%;">
	<center><h1><font color="#eedc82">ON ROAD VEHICLE BREAKDOWN SYSTEM</font></h1></center>
	<marquee dir="left"><h3><font color="#ffefd5">On Road Vehicle Breakdown System is going to be a good solution for the people who seek 
	help in the remote locations with mechanical issues of their vehicle. Users of the On Road Vehicle 
	Breakdown System will be the registered public and they be getting connected with the particular mechanic 
	through the trustworthy On Road Vehicle Breakdown System. Because only the legally and approved mechanics 
	are enlisted in the On Road Vehicle Breakdown system. Also they are under monitoring by the system 
	for not charging any extra service fee from the users</font></h3></marquee></br></br>
	
	<ul>
  <li><a href="user_homepage.php">HOME</a></li>
  <li><a href="garage.php">GARAGE</a></li>
  <li><a class="active" href="#enquiry">MY ENQUIRY</a></li>
  <div class="topnav-right">
  <li><a href="user_about.php">ABOUT</a></li>
  <li class="ms-auto"><a href="user_logout.php">LOGOUT</a></li>
  </div>
</ul>
</br></br>

<center>
		<form method="POST">
		<pre><label ><font color="#f6bcc4" size="4px">Mobile no :</font></label> <input type="text" onKeyPress="return ( this.value.length < 10 );" maxlength="10" name="mobile" placeholder="Enter your mobile no."/></pre></br>
		<input type="submit" class="button" name="search" value="SEARCH" />
		</form></center>
		
		

<?php
$conn=mysqli_connect("localhost","root","","vehicle_breakdown_system");

if(isset($_POST['search']))
{
	$d=$_POST['mobile'];

	
	$query=mysqli_query($conn,"SELECT * FROM enquiry WHERE user_mobile='$d' ");
	?>
	<table border=5 align=center width=1050>
			<tr bgcolor="#758CAD">
				<th>User Name</th>
				<th>User Mobile</th>
				<th>Shop Id</th>
				<th>Work Required</th>
				<th>Date</th>
			</tr>
			<?php
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
}
?>
		</table>
	</body>
</html>