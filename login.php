<?php
include ("connect.php");
 session_start();


	if(isset($_POST['submit'])){
		$email= htmlentities($_POST["email"]);
		$username = htmlentities($_POST["username"]);
		$password= htmlentities($_POST["psw"]);
		$hash_password= md5($password);

    	$sql = "SELECT * FROM users WHERE email = '$email' and password = '$hash_password' limit 1";
		$result = mysqli_query($conn, $sql);
		

		if (mysqli_num_rows($result) > 0)
		{
		
			while($row = mysqli_fetch_assoc($result)){
				$user_ID = $row["user_ID"];
				$email = $row["email"];
				$username = $row["username"];
				$permissions = $row["permissions"];
				session_start();
				$_SESSION["username"] = $username;
				$_SESSION["user_ID"] = $user_ID;
				$_SESSION["email"] = $email;
				
			if($permissions > 1){
				header("Location:display.php");
				echo '<script>alert("Welcome!")</script>' ;
			}
			else if($permissions < 1){
				header("Location:offers.php");
				// header("Location:http://localhost/visiocodeprojects/admin/lumino/index.php");
				echo '<script>alert("Welcome!")</script>' ;
			}
			else{
				header("Location:http://localhost/visiocodeprojects/admin/lumino/index.php");
				echo '<script>alert("Welcome!")</script>' ;
			}
			}					
		}
		else {
			 
			header("Location:login.php");
			echo '<script>alert("Login failed, retry!")</script>' ;
		}
		
	// $_SESSION['email'] = serialize($email);
	// $sql1 = "SELECT permissions FROM users WHERE email = $email";
	// if($sql1 == 1){
	// 	header("Location: users.php");
	// }
	// else if ($sql1 == 2){
	// 	header("Location: home.html");
	// }
	}

?>

<!DOCTYPE html>
  <head>
	<title>shoppers</title>	<meta charset="utf-8" />
	<link rel="shortcut icon" href="http://localhost/visiocodeprojects/image/favicon.ico" /> 
  <meta name="viewport" content="width=device-width, initial-scale=1" />
 <link rel="stylesheet" href="style.css" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
		<!-- <script src="js/jquery2.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> -->

	<style>
		.st{
		  width:500px;
		  height:40px;
		  
		}
		label{
		  float:left;
		  font-size:20px;
		}
		body{

			background: url("offers_background.jpg");
			background-repeat: no-repeat;
 			background-size: 105%;
			 opacity: 0.8;
		}
		
		
	
	</style>
  </head>
  <body class="descriptio" >
	<div class="navbar navbar-inverse navbar-fixed-top">
		<div class="container-fluid">	
			<div class="navbar-header">
				<!-- <a href="#" class="navbar-brand">Shoppers</a> -->
				<div class="navbar-brand">Login Form</div>
			</div>
			
		</div>
		</div>
		<p></br><br/></p>
		<div class="container-fluid">
		<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-8" id="signup_msg">
				<!--Alert from signup form-->
			</div>
			<div class="col-md-2"></div>
		</div>
		</div>
		</br>
		<center>
		<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-8">
				<div class="panel panel-primary" style="width:550px">
				<div class="panel-heading" style="background-color:#87CEEB;">Login Form</div>
					<div class="panel-body" >
					<form id="form" method="post" action = " ">
					  <div class="row" style="margin:10px; ">
						<label>Email: </label><br>
						<input id="text1" class="st" type="text" name="email" placeholder="Enter your Email" required/><br><br>
						<label>Password: </label><br>
						<input class="st" type="password" name="psw"  placeholder="Enter your Password" required/><br><br>
						<label id="lbltext" style="color: red; visibility: hidden;">Invalid</label>
						
						<input style="color: #2F4F4F; float: right;" class="button" name="submit" type="submit" value="submit"class="panel-footer" >
						<!-- <div name="submit" type="submit" value="submit"class="panel-footer">
							<a href="" style="color:black; font-size:x-large">
							<span onclick="validate()" class="glyphicon glyphicon-log-in"></span> Login</a></div> -->
							
					  </div>
					  Don't have an account<a href="signup.php" style="color: blue"> Sign up</a><br>
					  Forgot <a href="passchange.php" style="color: blue">password?</a>
					</form>
					<!-- <div class="panel-footer"><a href="popup.html" style="color:black;"><span class="glyphicon glyphicon-home"></span>Home</a></div> -->
				</div>
			</div>
			<div class="col-md-2"></div>
		</div>
	</div>
	
	</center>
	<script type="text/javascript">
const name = document.getElementById('username');
const password = document.getElementById('password');
const form = document.getElementById('form');

form.addEventListener('submit', (e) => {
    let message = []
    if (password.value.length <= 6){
        message.push('Password must be longer than 6 characters')
    }
    if (password.value === 'password'){
        message.push('Password cannot be password')
    }
    if (messages.length > 0){
        e.preventDefault()
        errorElement.innerText = messages.join(', ')
    }
    else{
        location.replace('/home.html')
    }
    
})
	function validate(){
    var text = document.getElementById("text1").value;

    var regx = /^([a-zA-Z0-9\.-]+)@([a-zA-Z0-9]+).([a-z]{2,8})(.[a-z]{2,8})?$/;
        if(regx.test(text)){
            document.getElementById("lbltext").innerHTML = "Valid";
            document.getElementById("lbltext").style.visibility = "visible";
            document.getElementById("lbltext").style.color = "green";

        }
        else{
            document.getElementById("lbltext").innerHTML = "InValid";
            document.getElementById("lbltext").style.visibility = "visible";
            document.getElementById("lbltext").style.color = "red";
        }
    
}
		jQuery(window).load(function() {
		sessionStorage.setItem('status','loggedIn') 
		});
		if (sessionStorage.getItem('status') != null){
		//redirect to page
		alert("Is Login : True");
		}
		else{
		//show validation message
		alert("Is Login : False");
		}
		</script>
		<script type="text/javascript" src="script.js"></script>
  </body>
</html>

