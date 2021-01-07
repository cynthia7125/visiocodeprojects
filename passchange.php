<?php
        session_start();
?>
<!DOCTYPE html>
     <head>
     <link rel="shortcut icon" href="http://localhost/visiocodeprojects/image/favicon.ico" /> 
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
		<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
	<script src="js/jquery2.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	  <!-- <script type="text/javascript">
		function sub()
		{
                        if(document.getElementById("t1").value != ""){
                                if(document.getElementById("t3").value != "t2")
                                alert("The new password and confirm new password fields must be the same.");
                                if(document.getElementById("t1").value == "t2")
                                alert("Your password should not be your username");
                        }
			else
			alert("Password change successful");
		}
    </script> -->
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
    <title>Password Change</title>
     </head>
    <body>
	
	<div class="navbar navbar-inverse navbar-fixed-top">
		<div class="container-fluid">	
			<div class="navbar-header">
				<a  class="navbar-brand">Change Password</a>
			</div>
			<ul class="nav navbar-nav">
				
			</ul>
		</div>
	</div>
	<p><br/></p>
	<p><br/></p>
	<p><br/></p>
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-8" id="signup_msg">
				<!--Alert from signup form-->
			</div>
			<div class="col-md-2"></div>
		</div>
	</div>
	<center>
	<div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-8">
                        <div class="panel panel-primary" style="width:550px">
                                
                        <div class="panel-body" >
                        <form  method="post" action = "">
                                <div class="row" style="margin:10px; ">
                                <label >Email: </label><br>
                                <input  id= "text1" class="st" type="email" name="email" size="10" placeholder="Enter your Username" required/><br>
                                <label >Password: </label><br>
                                <input id= "t2" class="st"  type="password" name="newpassword" size="10" placeholder="Enter your Email" required/><br>
                                <progress max="100" value="0" id="strength" style="width:300px; color: green"></progress> <br>
                                <label >Confirm Password: </label><br>
                                <input  id= "t3" class="st"  type="password" name="confirmnewpassword" size="10" placeholder="Enter your Current Contacts" required/><br><br><br>
                                <label id="lbltext" style="color: red; visibility: hidden;">Invalid email format</label>
                                <input style=" margin-right:50px;" type="submit" name="submit" value="submit" onclick="sub()">
                                </div>
                        </form>
                        <div class="panel-footer"><a href="login.php" style="color:black;"><span class="glyphicon glyphicon-login"></span>Back to login</a></div>
                        </div>
                </div>
                <div class="col-md-2"></div>
		</div>
	</div>
	</center>
   </body>
   <?php
        include"connect.php";
        if(isset($_POST['submit']))
	{
        $email = htmlentities($_POST['email']);
        $newpassword = htmlentities($_POST['newpassword']);
        $confirmnewpassword = htmlentities($_POST['confirmnewpassword']);
        $result = mysqli_query($conn, "SELECT password FROM users WHERE email='$email'");
        if(!$result)
        {
        echo "The email you entered does not exist <br>";
        }
       
        if($newpassword=$confirmnewpassword){
                $sql=mysqli_query($conn, "UPDATE users SET password=md5('$newpassword') WHERE email='$email'");
                if($sql)
                {
                echo "<div class='panel panel-success'>
                        <div class='panel-body'>
                                <p>You have successfully changed your password</p>
                        </div>
                      </div>";
                }
        }
}

?>
   <script type="text/javascript">
        var pass = document.getElementById("t2")
        pass.addEventListener('keyup', function(){
                checkPassword(pass.value)
        })
        function checkPassword(password){
                var strengthBar = document.getElementById("strength")
                var strength = 0;
                if(password.match(/[a-zA-Z0-9][a-zA-Z0-9]+/)){
                        strength += 1
                }
                if(password.match(/[~<>?]+/)){
                        strength += 1
                }
                if(password.match(/[!@$%^&()]+/)){
                        strength += 1
                }
                if(password.length > 5){
                        strength += 1
                }
                switch(strength){
                        case 0:
                                strengthBar.value = 20;
                                break
                        case 1:
                                strengthBar.value = 40;
                                break
                        case 2:
                                strengthBar.value = 60;
                                break
                        case 3:
                                strengthBar.value = 80;
                                break
                        case 4:
                                strengthBar.value = 100;
                                break
                }
        }
        function sub(){
                var text = document.getElementById("text1").value;

                var regx = /^([a-zA-Z0-9\.-]+)@([a-zA-Z0-9]+).([a-z]{2,8})(.[a-z]{2,8})?$/;
                if(regx.test(text)){
                document.getElementById("lbltext").innerHTML = "Valid";
                document.getElementById("lbltext").style.visibility = "visible";
                document.getElementById("lbltext").style.color = "green";

                }
                else{
                document.getElementById("lbltext").innerHTML = "InValid email format";
                document.getElementById("lbltext").style.visibility = "visible";
                document.getElementById("lbltext").style.color = "red";
                } 

                // if(document.getElementById("t3").value != "t2")
                //         alert("The new password and confirm new password fields do not match.");
                // if(document.getElementById("t2").value == "t3")
                //         alert("Password change successful");
        
              
        }
   </script>

    </html>  