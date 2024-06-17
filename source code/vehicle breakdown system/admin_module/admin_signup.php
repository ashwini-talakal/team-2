<html>
     <head>
         <title>ADMIN INFORMATION</title>
		 <style>
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

<body bgcolor="#dadaff" background="bg4.jpg" style="background-repeat:no-repeat;background-size:99% 99%;">
<form method="POST">
<center></br></br></br></br></br>
   <table  cellspacing="0" cellpadding="10" bgcolor="#E6E9EF">
		<tr font color="40C4FF" bgcolor="#BDC9D9">
		<tr font color="40C4FF" bgcolor="#BDC9D9">
			<th colspan="3" text-align:"center"><center><h1><i> ADMIN SIGN-UP </i></h1></th></tr>
		<tr>
			<th> <label><font color="#002B6A "><pre><h3>Admin Id          :</h3></pre></label></th>
			<td><input type="text" name="f1" placeholder="enter your id" required \></br></p></td></tr>
		
		<tr>
			<th> <label><font color="#002B6A "><pre><h3>Admin Name        :</h3></pre></label></th>
			<td><input type="text" name="f2" placeholder="enter your name" required\></br></p></td></tr>
		
		<tr>
			<th><label><font color="#002B6A "><pre><h3>Shop Name         :</h3></pre></label></th>
			<td><input type="text" name="f3" placeholder="enter shop name" required\></br></p></td></tr>
		<tr>
			<th><label><font color="#002B6A "><pre><h3>Address           :</h3></pre></label></th>
			<td><input type="text" name="f4" placeholder="enter your Address" required\></br></p></td></tr>
		<tr>
			<th><label><font color="#002B6A "><pre><h3>Mobile No         :</h3></pre></label></th>
			<td><input type="number" name="f5" onKeyPress="return ( this.value.length < 10 );" maxlength="10" placeholder="enter your Mobile No" required\></br></p></td></tr>
		<tr>
			<th><label><font color="#002B6A "><pre><h3>Password          :</h3></pre></label></th>
			<td><input type="password" name="f6" pattern=".{3,}"  title="6 characters minimum" maxlength="6" placeholder="enter your Password" required\></br></p></td></tr>
		<tr>
			<th><label><font color="#002B6A "><pre><h3>services        :</h3></pre></label></th>
			<td><input type="text" name="f7"   title="6 characters minimum"  placeholder="enter your Password" required\></br></p></td></tr>
   
		<tr bgcolor="#BDC9D9">	
			<td colspan="2" align="right"><input type="submit"  class="button" name="submit">
			<input type="Reset" value="Cancel" class="button"></td><tr>
	</center>
	</form>
</body>
</html>


<?php
	include('admin_dbconnect.php');
	if(isset($_POST['submit']))
	{
		$v1=$_POST["f1"];
		$v2=$_POST["f2"];
		$v3=$_POST["f3"];
		$v4=$_POST["f4"];
		$v5=$_POST["f5"];
		$v6=$_POST["f6"];
		
		
		$query=mysqli_query($conn,"INSERT INTO admin VALUES('$v1','$v2','$v3','$v4','$v5','$v6')");
		if($query)
		{
			echo"<script type='text/javascript'>alert('Account Created');
			   window.location.assign('admin_login.php')</script>";
			   
		}
		else
		{
			echo"<script type='text/javascript'>alert('Account Creation Failed');
			   window.location.href('admin_signup.php')</script>";
			  
		}
	}
?>