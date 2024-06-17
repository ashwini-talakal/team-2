<?php
$conn=mysqli_connect("localhost","root","","vehicle_breakdown_system");
?>
<html>
	<head>
		<title>User Enquiry</title>
		<style>
		.button {
  background-color: #34495E ;
  border: none;
  color: white;
  padding: 1opx 25px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 20px;
  box-shadow: 3px 3px 3px #eee;
}
</style>
	</head>
	<body align="center" background="background7.jpg" style="background-repeat:no-repeat;background-size:100% 100%">
		<?php
		
			$s=$_GET['id'];
			
		
		?>
		<table align="center" border="5" width="700">
		<h2>User Enquiry form</h2>
		<center>
		<form method="POST"><pre>
			<tr bgcolor="#909497"><th></label><font color="#3d2b1f "><b>user_name                     :</b></font></label></th> <td><input type="text" name="a1"  placeholder="enter name" required /></td></tr></br>
			<tr bgcolor="#D7DBDD"><th></label><font color="#3d2b1f "><b>user_mobile                   :</b></font></label></th> <td><input type="text" name="a2" placeholder="enter mobileno" maxlength="10" required /></td></tr></br>
			<tr bgcolor="#909497"><th></label><font color="#3d2b1f "><b>shop_id                       :</b></font></label></th> <td> <input type="text" name="a3" value="<?php echo $s ; ?>"  required /></td></tr></br>
			<tr bgcolor="#D7DBDD"><th></label><font color="#3d2b1f "><b>requirement_work_details      :</b></font></label></th> <td> <input type="text" name="a4" placeholder="enter requirement details" required /></td></tr></br>
			<tr bgcolor="#909497"><th></label><font color="#3d2b1f "><b>dated                         :</b></font></label></th> <td> <input type="date" name="a5" placeholder="enter date"  required /></td></tr></br>
			<tr bgcolor="#D7DBDD"><td colspan="2" align="center"><input type="submit"  class="button" name="submit" value="submit" /></tr>
		</form></center>
		</table>
		<?php  
		if(isset($_POST['submit']))
		{
			$v1=$_POST['a1'];
			$v2=$_POST['a2'];
			$v3=$_POST['a3'];
			$v4=$_POST['a4'];
			$v5=$_POST['a5'];
			
			$query=mysqli_query($conn, "INSERT INTO enquiry VALUES('$v1','$v2','$v3','$v4','$v5')" );
			if($query)
			{
				echo"<script type='text/javascript'>alert('Thank you we will contact soon');
			   window.location.assign('garage.php')</script>";
			}
			else
			{
				echo"<script type='text/javascript'>alert(' Failed');
			   window.location.href('enquiry.php')</script>";
			}
			
		}
		?>
	</body>
</html>