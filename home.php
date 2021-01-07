<?php
	session_start();
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
		<script defer src="script.js"></script>
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
		background-size: 100%;
		opacity: 0.8;
		}


  * {
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
}
.scroll-prompt {
	position: fixed;
  float: right;
  z-index: 998;
  left: 85%;  
  width: 160px;
  height: 160px;
}
.scroll-prompt .scroll-prompt-arrow-container {
  position: absolute;
  top: 0;
  left: 50%;
  margin-left: -18px;
  animation-name: bounce;
  animation-duration: 1.5s;
  animation-iteration-count: infinite;
}
.scroll-prompt .scroll-prompt-arrow {
  animation-name: opacity;
  animation-duration: 1.5s;
  animation-iteration-count: infinite;
}
.scroll-prompt .scroll-prompt-arrow:last-child {
  animation-direction: reverse;
  margin-top: -6px;
}
.scroll-prompt .scroll-prompt-arrow > div {
  width: 36px;
  height: 36px;
  border-right: 4px solid #bebebe;
  border-bottom: 4px solid #bebebe;
  transform: rotate(-135deg) translateZ(5px);
}
@keyframes opacity {
  0% {
    opacity: 0;
  }
  10% {
    opacity: 0.1;
  }
  20% {
    opacity: 0.2;
  }
  30% {
    opacity: 0.3;
  }
  40% {
    opacity: 0.4;
  }
  50% {
    opacity: 0.5;
  }
  60% {
    opacity: 0.6;
  }
  70% {
    opacity: 0.7;
  }
  80% {
    opacity: 0.8;
  }
  90% {
    opacity: 0.9;
  }
  100% {
    opacity: 1;
  }
}
@keyframes bounce {
  0% {
    transform: translateY(0);
  }
  10% {
    transform: translateY(3px);
  }
  20% {
    transform: translateY(6px);
  }
  30% {
    transform: translateY(9px);
  }
  40% {
    transform: translateY(12px);
  }
  50% {
    transform: translateY(15px);
  }
  60% {
    transform: translateY(18px);
  }
  70% {
    transform: translateY(21px);
  }
  80% {
    transform: translateY(24px);
  }
  90% {
    transform: translateY(27px);
  }
  100% {
    transform: translateY(30px);
  }
}


	
	</style>
  </head>
  <body class="descriptio" >
	  	<div class="scroll-prompt" scroll-prompt="" ng-show="showPrompt" style="opacity: 1;">
			<div class="scroll-prompt-arrow-container" >
				<div class="scroll-prompt-arrow"><div></div></div>
				<div class="scroll-prompt-arrow"><div></div></div>
				
			</div>
			<div class="scroll-prompt-arrow-container" style=" color: #87CEEB; top: 40%; font-size: 20px" >
				<center>
				<b><p >Offers</p></b>
 				</center>
			</div>
			
			
		</div>

		<br/><br/><br/><br/>

	

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
					<div class="panel-heading" style="background-color:#87CEEB;">Home</div>
					<div class="panel-body" >
				<H1>Welcome <b><i><?php print $_SESSION["username"]; ?></i></b>.</H1>
					<!-- <div class="panel-footer"><a href="popup.html" style="color:black;"><span class="glyphicon glyphicon-home"></span>Home</a></div> -->
				<a href= "display.php"><button >Home</button></a>
				</div>
			</div>
			<div class="col-md-2"></div>
		</div>
	</div>
	
	</center>
  </body>
</html>
