<html>
	<head>
		<title>User Login</title>
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
	<body bgcolor="#C4C7F1" align="center" background="bg9.jpg" style="background-repeat:no-repeat;background-size:100% 100%;" >
		
		<table  width="400" height="300" align="center">
		<form method="POST">
		<tr><th colspan="2"><p class="GFG"><font color="#FFF200" >USER LOGIN</font></p></th></tr>
		<tr ><th><pre><label><font color="#ff4500"><h3>User Id    :</h3></font></label></th> <td><input type="text" name="f1" placeholder="Enter user id" required /></td></tr></br></br>
		<tr ><th><label><font color="#ff4500"><h3>Password       :</h3></font></label></th> <td><input type="password" pattern=".{3,}" required title="6 characters minimum" maxlength="6" name="f2" placeholder="Enter Password"  maxlength="6" required /></td></tr></br></br></br></pre>
		<tr ><th colspan="2"><input type="submit" class="button" name="login" value="Login" /></th></tr>
		</br></br></br>
		<tr ><th colspan="2"><font color="#87cefa"><p>Don't have an Account|</font><a href="user_signup.php"><font color="#6495ed">Create new</a></font></p></th></tr>
		
		</form></table>
		
	</body>
</html>

<?php
 //$session_start();
 include("user_dbconnect.php");
 if($_SERVER['REQUEST_METHOD']=="POST")
 {
	 $v1=$_POST['f1'];
	 $v2=$_POST['f2'];
 
 if(!empty($v1)&&!empty($v2)&&!is_numeric($v1))
 {
  $query="SELECT * FROM user WHERE user_id='$v1' AND user_password='$v2' limit 1";
   $result=mysqli_query($conn,$query);
   if($result)
   {
	   if($result && mysqli_num_rows($result)>0)
	   {
		   $user_data=mysqli_fetch_assoc($result);
		   if($user_data['user_password']==$v2)
		   {
			   echo"<script type='text/javascript'>alert('Login successful');
			   window.location.assign('user_homepage.php')</script>";
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