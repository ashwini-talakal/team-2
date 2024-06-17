<html>
     <head>
         <title>USER INFORMATION</title>
		 <style>
		 input {
  border: 1px solid black;
  border-radius: 8px;
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  box-sizing: border-box;
  
  color: black;
		 }
		 .button {
  background-color:   #87ceeb;
  border: none;
  color: white;
  padding: 20px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
  
}
.button:hover {
			background-color:#fda5b2 ;
			color: white;
		}
  </style>
	</head>

<body bgcolor="#dadaff" background="bg2.jpg" style="background-repeat:no-repeat;background-size:100% 100%;">
<form method="POST">
<center></br></br></br></br></br>
   <table  cellspacing="0" cellpadding="10" bgcolor="#C0E5F4">
		<tr font color="40C4FF" bgcolor="ivory">
		<tr font color="40C4FF" bgcolor="ivory">
			<th colspan="3" text-align:"center"><center><h1><i>USER SIGN-UP</i></h1></th></tr>
		<tr>
			<th> <label><font color="black"><pre><h3>User id          :</h3></pre></label></th>
			<td><input type="text" name="f1" placeholder="enter your id" required / ></br></p></tr></td>
		
		<tr>
			<th> <label><font color="black"><pre><h3>User Name        :</h3></pre></label></th>
			<td><input type="text" name="f2" placeholder="enter your name" required / ></br></p></tr></td>
		<tr>
			<th><label><font color="black"><pre><h3>City             :</h3></pre></label></th>
			<td><input type="text" name="f6" placeholder="enter your City" required /></br></p></tr></td>
		
		<tr>
			<th><label><font color="black"><pre><h3>Mobile No        :</h3></pre></label></th>
			<td><input type="number" name="f3"  onKeyPress="return ( this.value.length < 10 );" maxlength="10" placeholder="enter your Mobile No" required /></br></p></tr></td>
		<tr>
			<th><label for="email"><font color="black"><pre><h3>Email-id         :</h3></pre></label></th>
			<td><input type="email"  id="email" name="f4" placeholder="enter your email" required /></br></p></tr></td>
		<tr>
			<th><label><font color="black"><pre><h3>Postal Address   :</h3></pre></label></th>
			<td><input type="text" name="f5" placeholder="enter your Address" required /></br></p></tr></td>
		<tr>
			<th><label><font color="black"><pre><h3>Password         :</h3></pre></label></th>
			<td><input type="password"  name="f7" pattern=".{3,}"  title="6 characters minimum" maxlength="6" placeholder="enter your Password" required /></br></p></td></tr>
  
   
		<tr bgcolor="ivory">	
			<td colspan="2" align="right"><input type="submit" name="ADD" class="button">
			<input type="Reset" value="Cancel" class="button"></td></tr>
	</center>
	</form>
</body>
</html>

<?php
	include('user_dbconnect.php');
	if(isset($_POST['ADD']))
	{
		$v1=$_POST["f1"];
		$v2=$_POST["f2"];
		$v3=$_POST["f3"];
		$v4=$_POST["f4"];
		$v5=$_POST["f5"];
		$v6=$_POST["f6"];
		$v7=$_POST["f7"];
		
		
		$query=mysqli_query($conn,"INSERT INTO user VALUES('$v1','$v2','$v6','$v3','$v4','$v5','$v7')");
		if($query)
		{
			echo"<script type='text/javascript'>alert('Account Created');
			   window.location.assign('user_login.php')</script>";
			   
		}
		else
		{
			echo"<script type='text/javascript'>alert('Account Creation Failed');
			   window.location.href('user_signup.php')</script>";
			  
		}
	}
?>
