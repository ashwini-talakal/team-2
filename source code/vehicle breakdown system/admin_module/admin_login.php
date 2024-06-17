<html>
	<head>
		<title>Admin Login</title>
		<style>
        .GFG {
            color: white;
            font-size: 38px;
            text-shadow: -1px 1px 0 #000,
                          1px 1px 0 #000,
                         1px -1px 0 #000,
                        -1px -1px 0 #000;
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
	<body bgcolor="#C4C7F1" align="center" background="bg1.jpg" style="background-repeat:no-repeat;background-size:100% 100%;" >
	<table align="center">
		<tr><th colspan="2"><p class="GFG"><font color="#FFF200" >ADMIN LOGIN</font></p></th></tr>

		
		<form method="POST">
		<pre><tr><th><label><font color="white">Admin Id  :</font></label></th> <td><input type="text" name="f1" placeholder="Enter admin id" required /></td></tr></br></br>
		<tr><th><label><font color="white">Password  :</font></label></th> <td><input type="password" name="f2" maxlength="6" placeholder="Enter Password" required /></td></tr></br></br></br>
		<tr><th colspan="2"><input type="submit" class="button" name="login" value="Login" /></th></tr>
		</br></br></br>
		<tr><th colspan="2"><p><font color="white">Don't have an Account|</font><a href="admin_signup.php"><font color="#118ca2">Create new</font></a></p></th></tr>
		</form></table>
	</body>
</html>

<?php
 //$session_start();
 include("admin_dbconnect.php");
 if($_SERVER['REQUEST_METHOD']=="POST")
 {
	 $v1=$_POST['f1'];
	 $v2=$_POST['f2'];
 
 if(!empty($v1)&&!empty($v2)&&!is_numeric($v1))
 {
  $query="SELECT * FROM admin WHERE admin_id='$v1' AND admin_password='$v2' limit 1";
   $result=mysqli_query($conn,$query);
   if($result)
   {
	   if($result && mysqli_num_rows($result)>0)
	   {
		   $user_data=mysqli_fetch_assoc($result);
		   if($user_data['admin_password']==$v2)
		   {
			   echo"<script type='text/javascript'>alert('Login successful');
			   window.location.assign('admin_home.php')</script>";
			   die;
		   }
	   }
   }
   echo"<script type='text/javascript'>alert('wrong username or password')</script>";
 
 }
 else
 {
	 echo"<script type='text/javascript'>alert('wrong username or password')</script>";
 }
 }
?>