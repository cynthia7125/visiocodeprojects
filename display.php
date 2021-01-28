<?php
	session_start();
	require_once "connect.php";
	
	// require __DIR__ . '/vendor/autoload.php';
	// $phpToJavascript = new PHPToJavascript/PHPToJavascript();
	// $phpToJavascript->addFromFile($inputFilename); 
	// $jsOutput = $phpToJavascript->toJavascript();

?>

<!DOCTYPE html>
<html>
  <head>
    <title>shoppers</title>	<meta charset="utf-8" />
    <link rel="shortcut icon" href="http://localhost/visiocodeprojects/image/favicon.ico" /> 
  <meta name="viewport" content="width=device-width, initial-scale=1" />
 <!-- <link rel="stylesheet" href="style.css" /> -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
		<script src="js/jquery2.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

		
  <link rel="icon" type="image/icon" href="favicon.jpg">
	
  <style type="text/css">
* {
  box-sizing: border-box;
}

#myInput {
  /* background-image: url('/css/searchicon.png'); */
  background-position: 10px 10px;
  background-repeat: no-repeat;
  width: 100%;
  font-size: 16px;
  padding: 12px 20px 12px 40px;
  border: 1px solid #ddd;
  margin-bottom: 12px;
}

#myTable {
  border-collapse: collapse;
  width: 100%;
  border: 1px solid #ddd;
  font-size: 18px;
}

#myTable th, #myTable td {
  text-align: left;
  padding: 12px;
}

#myTable tr {
  border-bottom: 1px solid #ddd;
}

#myTable tr.header, #myTable tr:hover {
  background-color: #f1f1f1;
}



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
.quotes {display: none;}
	</style>
	
  </head>
  <body class="descriptio" >
	  
  
                <!-- <div class="container" >
				<h2 style="color:black; position:absolute;" class="quotes">Welcome <?php  print $_SESSION["username"]; ?></h2>

				</div> -->
       
				
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
					
					

		<!-- <form action="search.php" method="POST" style="float: right;"> -->
		<input onkeyup="myFunction()" id = "myInput" style=" margine-top:25px; border-radius: 5px; color: black;" type="text" name="search" placeholder="Enter item name here..." required/>
		<!-- <button style="color: black;" name="submit">search</button></form> -->
				
				</div>
					<div class="panel-body" >

<?php
    $display_item ="SELECT item.Item_name, item.Item_image, item.Item_unit_cost, item.activation, item.Saved_percentage, item.Original_unit_cost,
	offers.`Offer_name`, supermarkets.`Supermarket_name`, supermarkets.`Supermarket_ID` FROM item  LEFT JOIN offers ON 
	(item.Offer_ID = offers.Offer_ID) LEFT JOIN supermarkets ON 
	(offers.`Supermarket_ID` = supermarkets.`Supermarket_ID`) " ;




// $display_items ="SELECT items.item_name, items.item_image, items.item_no, supermarket_items.item_Item_unit_cost,
//  supermarket.`supermarket_name`, supermarket.`super_ID` FROM items LEFT JOIN supermarket_items ON
//   (items.item_no = supermarket_items.item_no) LEFT JOIN supermarket ON
//    (supermarket.`super_ID` = supermarket_items.`super_ID`)";


	$display_item_res = $conn->query($display_item);
	

    $output = "";
    $columns    = 1;                                                  // employees pr. row
    $amount     = $display_item_res->num_rows;                                  // employees total
    $amount_td  = $columns * (ceil( $amount / $columns )) - $amount;  // empty rows to create
    $i          = 0;
    $j          = 1;

    $output.= '<table  id="myTable" align = "center" border = "1" style = "border-collapse: collapse; border: solid 1px #ddffff; width: 60%;">
	<tr>';
	
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
	
?>	  
    <?php echo $output; ?>
	</div>
	</div>

<script type="text/javascript">

// var conn = mysql.createConnection({
//   host: "localhost",
//   user: "root",
//   password: "",
//   database: "offer"
// });

// conn.connect(function(err) {
// 	var display_item, display_item_res, output, columns, amount, amount_td, i, j, db_data
  
// 	display_item_res = conn->query()
	
// 	if (err) throw err;

//   conn.query("SELECT item.Item_name, item.Item_image, item.Item_unit_cost, item.activation, item.Saved_percentage, item.Original_unit_cost,
// 	offers.`Offer_name`, supermarkets.`Supermarket_name`, supermarkets.`Supermarket_ID` FROM item  LEFT JOIN offers ON 
// 	(item.Offer_ID = offers.Offer_ID) LEFT JOIN supermarkets ON 
// 	(offers.`Supermarket_ID` = supermarkets.`Supermarket_ID`)", 
//   function (err, result, fields) {
//     if (err) throw err;
//     console.log(result);
//   });
//   display_item_res = conn->query(display_item);
	

//   output = "";
//   columns    = 1;                                                  // employees pr. row
//   amount     = display_item_res->num_rows;                                  // employees total
//   amount_td  = columns * (ceil( amount / columns )) - amount;  // empty rows to create
//   i          = 0;
//   j          = 1;

//   output.= '<table  id="myTable" align = "center" border = "1" style = "border-collapse: collapse; border: solid 1px #ddffff; width: 60%;"><tr>';

//   while(db_data = display_item_res->fetch_assoc()){
//         if ( i >= columns ) {
//             output .= '</tr><tr>';
//             i = 0;
//         }
//         // $output.= '<td style = "padding: 10px; text-align: center;">'.$db_data["item_no"].'<br /> <a href = "get.php?id='.$db_data["item_no"].'">Add Link</a></td>';
// 		if($db_data["activation"] == 1){
// 				$output.= '<td style = " text-align: center;"><p style="background-color:white; color:black;">'.$db_data["Item_name"].'</p>
// 				<div id="" name="Offer_name" style=" background-color: orange;font-size:17px; color:black;">'.$db_data["Offer_name"].'</div>
				
// 				<img src="image/'.db_data["Item_image"].'" style="height: 160px; width: 300px;">
									
// 				<div class="cta">
// 				<a href="http://'.$db_data["Supermarket_name"].'.co.ke name="add_to_cart" style="font-size:17px;">
// 				<div name="Supermarket_name" style="font-size:17px; color:black;">Website: '.$db_data["Supermarket_name"].'</div></a>
// 				<hr>
// 				<div name="Item_unit_cost" style="float:left; width:45%; color:black;">Ksh.'.$db_data["Item_unit_cost"].'</div>
// 				<div style="color: orange; float:right; width:45%; font-size:17px;" name="Saved_percentage" >-'.$db_data["Saved_percentage"].'%</div><br/>
// 				<div name="Original_unit_cost" style="font-size:17px; width:45%; float: left; text-decoration: line-through; color:grey;">Ksh.'.$db_data["Original_unit_cost"].'</div>
// 				<br/>
// 				Directions: 

// 				</div></td>';
// 		}
//         $i++;
//         $j++;
//     }
//     for( $i = 0; $i < $amount_td; $i++ ) {
//         $output.= '<td>&nbsp;</td>';
//     }
//     $output .= '</tr>
//     </table>';
// ?>
//     
// 	</div>
// 	</div>

  // while($db_data = $display_item_res->fetch_assoc()){
  //       if ( $i >= $columns ) {
  //           $output .= '</tr><tr>';
  //           $i = 0;
  //       }
// });

		(function() {

var quotes = $(".quotes");

function showNextQuote() {
  quotes
	.fadeIn(2000)
	.delay(2000)
	.fadeOut(2000);
}

showNextQuote();

})();

function myFunction() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].("td")[0];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}
		</script>
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