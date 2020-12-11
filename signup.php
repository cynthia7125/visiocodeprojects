<?php
//include connect.php page for database connection
include('connect.php');
//if submit is not blanked i.e. it is clicked.
if(isset($_POST['submit']))
{
$password=$_POST["password"];
$username=$_POST["username"];
$email=$_POST["email"];

$sql= "INSERT INTO users(username, password, email) 
VALUES('$username', md5('$password'), '$email')";
if ($conn->query($sql) === TRUE) {
    header("Location:login.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
}
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<link rel="stylesheet" href="mystyle.css" />
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
<body>
<div class="navbar navbar-inverse navbar-fixed-top">
<div class="container-fluid">	
    <div class="navbar-header">
        <a href="options.html" class="navbar-brand">Shoppers</a> 
        <!-- <div  class="navbar-brand">Shoppers</div> -->
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
</br><br/>
<center>
<div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-8">
        <div class="panel panel-primary" style="width:550px">
            <div class="panel-heading" style="background-color:#87CEEB;">SignUp Form</div>
            <div class="panel-body" >
            
            <form id="form" method="POST" action = "" >
              <div class="row" style="margin:10px; ">
                <label >Username: </label><br>
                <input  id= "username" class="st" type="text" name="username"  placeholder="Enter your Username" required/><br>
                <label >Password: </label><br>
                <input  id= "password" class="st" type="password" name="password" placeholder="Enter your Password" required/><br>
                <progress max="100" value="0" id="strength" style="width:300px; color: green"></progress> <br>
                <label >Email: </label><br>
                <input id="email" class="st" type="text" name="email" placeholder="Enter your Email" required/><br>
                <label id="lbltext" style="color: red; visibility: hidden;">Invalid</label>  
            </br>
            <input style="color: #2F4F4F; float: right;" class="button" name="submit" type="submit" value="submit"class="panel-footer" >
              <!-- <div name="submit" type="submit" value="submit"class="panel-footer"> -->
                <!-- <a href="" style="color:black; font-size:x-large">
                <span onclick="" class="glyphicon glyphicon-log-in"></span> Signup</a></div> -->
              </div>
            </form>
        </div>
    </div>
    <div class="col-md-2"></div>
</div>
</div>

</center>
<script type="text/javascript">
        var pass = document.getElementById("password")
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
        location.replace('/login.php')
    }
    
})
var email = document.getElementById("email")
        email.addEventListener('keyup', function(){
                checkEmail(email.value)
        })
    function checkEmail(email){
        var text = document.getElementById("email").value;
    
        var regx = /^([a-zA-Z0-9\.-]+)@([a-zA-Z0-9]+).([a-z]{2,8})(.[a-z]{2,8})?$/;
            if(regx.test(text)){
                document.getElementById("lbltext").innerHTML = "Valid";
                document.getElementById("lbltext").style.visibility = "visible";
                document.getElementById("lbltext").style.color = "green";
    
            }
            else{
                document.getElementById("lbltext").innerHTML = "InValid email";
                document.getElementById("lbltext").style.visibility = "visible";
                document.getElementById("lbltext").style.color = "red";
            }

        
        
    }
</script>

</body>
</html>
