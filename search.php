<?php
	session_start();
	require_once "connect.php";
?>


<!DOCTYPE html>
<html>
  <head>
	<title>shoppers</title>	<meta charset="utf-8" />
	<link rel="shortcut icon" href="http://localhost/visiocodeprojects/image/favicon.ico" /> 
  <meta name="viewport" content="width=device-width, initial-scale=1" />
 <link rel="stylesheet" href="style.css" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
		<script src="js/jquery2.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

		
  <link rel="icon" type="image/icon" href="favicon.jpg">
	
  <style type="text/css">
		table{
			border:0px solid black;
			width:97%;
			color:black;
			font-family:cursive;
			font-size:25px;
			text-align: left;
			border-collapse: collapse;
		}
		th{
			background-color: #87CEEB;
			color:black;
			
		}
		td{
			padding-top:8px
		}
		table, td, th {
			border: 1px solid black;
			font-size:22px;
        }
		tr:nth-child(even) {
			background-color: #f2f2f2
		}
		
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
		#tv {
      position: relative;
	  float: top;
      width: 42px;
      height: 32px;
      margin: 20px 0;
      background: silver;
      border-radius: 50% / 10%;
      color: white;
      text-align: center;
      text-indent: .1em;
    }
    #tv:before {
      content: '';
      position: absolute;
      top: 10%;
      bottom: 10%;
      right: -5%;
      left: -5%;
      background: inherit;
      border-radius: 5% / 50%;
    }
	.topright {
  position: absolute;
  bottom: 25px;
  left: 45px;
  font-size: 18px;
}
	</style>
	
  </head>
  <body class="descriptio" >
	 

<br><br>

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
				<div class="panel panel-primary" style="width:500px">
				
					<div class="panel-heading" style="background-color:#87CEEB; font-color: black; font-size: 20px">Items
					
					<a style= "float: right;"href="display.php">Back<a/></div>
					<div class="panel-body" >
						
	
 <?php
      if(isset($_POST['search'])){
        //require('db.php');
		include('connect.php');


        $search_item = $_POST['search'];
$display_item ="SELECT item.Item_name, item.Item_image, item.Item_unit_cost, item.activation, item.Saved_percentage, item.Original_unit_cost,
offers.`Offer_name`, supermarkets.`Supermarket_name`, supermarkets.`Supermarket_ID` FROM item  LEFT JOIN offers ON 
(item.Offer_ID = offers.Offer_ID) LEFT JOIN supermarkets ON 
(offers.`Supermarket_ID` = supermarkets.`Supermarket_ID`) WHERE Item_name LIKE '%$search_item%'" ;

	$display_item_res = $conn->query($display_item);
	

    $output = "";
    $columns    = 1;                                                  // employees pr. row
    $amount     = $display_item_res->num_rows;                                  // employees total
    $amount_td  = $columns * (ceil( $amount / $columns )) - $amount;  // empty rows to create
    $i          = 0;
    $j          = 1;

    $output.= '<table align = "center" border = "1" style = "border-collapse: collapse; border: solid 1px #ddffff; width: 60%;">
	<tr>';



        // $sql = "SELECT Item_name, Item_image, Item_unit_cost FROM item WHERE Item_name LIKE '%$search_item%'";
        // $result = $conn->query( $sql );
        // $count = mysqli_num_rows($result);
        if($amount == 0){
          $output = "<b><p style='color:white;'> The item entered may currently not be available, or Please check the spelling then repeat the search</p><br><br><b>";
          print("$output");
        }
        else{
			while($db_data = $display_item_res->fetch_assoc()){
				if ( $i >= $columns ) {
					$output .= '</tr><tr>';
					$i = 0;
				}
				// $output.= '<td style = "padding: 10px; text-align: center;">'.$db_data["item_no"].'<br /> <a href = "get.php?id='.$db_data["item_no"].'">Add Link</a></td>';
				if($db_data["activation"] == 1){
						$output.= '<td style = " text-align: center;"><p style="background-color:white; color:black;">'.$db_data["Item_name"].'</p>
						<div id="" name="Offer_name" style=" background-color: orange;font-size:17px; color:black;">'.$db_data["Offer_name"].'</div>
						
						<img src="image/'.$db_data["Item_image"].'" style="height: 160px; width: 300px;">
											
						<div class="cta">
						<a href="http://'.$db_data["Supermarket_name"].'.co.ke name="add_to_cart" style="font-size:17px;">
						<div name="Supermarket_name" style="font-size:17px; color:black;">Website: '.$db_data["Supermarket_name"].'</div></a>
						<hr>
						<div name="Item_unit_cost" style="float:left; width:45%; color:black;">Ksh.'.$db_data["Item_unit_cost"].'</div>
						<div style="color: orange; float:right; width:45%; font-size:17px;" name="Saved_percentage" >-'.$db_data["Saved_percentage"].'%</div><br/>
						<div name="Original_unit_cost" style="font-size:17px; width:45%; float: left; text-decoration: line-through; color:grey;">Ksh.'.$db_data["Original_unit_cost"].'</div>
						<br/>
						Directions: 
		
						</div></td>';
				}
				
				
				$i++;
				$j++;
			}
			for( $i = 0; $i < $amount_td; $i++ ) {
				$output.= '<td>&nbsp;</td>';
			}
			$output .= '</tr>
			</table>';
		}	
	}
		?>	  
			<?php echo $output;?>
               
	 </div>
	</div>

<!--add icon library-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <!--add font awesome icons-->
	 <a href="#" class="fa fa-facebook"></a>
     <a href="#" class="fa fa-twitter"></a>
	 <a href="#" class="fa fa-instagram"></a>
     <a href="#" class="fa fa-google"></a>

</div>
			</div>
			<div class="col-md-2"></div>
		</div>
	</div>
	
	</center>
  </body>
</html>

