<? php
       $conn = mysqli_connect('localhost', 'root', '', 'offer');

       if(isset($_POST['delete']))
       {
         $ID=htmlentities($_POST ['ID']);
    //    $activation=htmlentities($_GET ['activation']);

       $sql1 = "UPDATE users SET activation = '2' WHERE ID = $ID";

       $result=$conn-> query($sql);
       if ($result === TRUE) {
           echo "User has been de-activated";
       } else {
           echo "Error deleting record: " . $conn->error;
       }

       }
       if(htmlentities($_POST['Submit'])){
        $Supermarket_name= htmlentities($_POST["Supermarket_name"]);
        $Supermarket_address= htmlentities($_POST["Supermarket_address"]);
        
        $conn = mysqli_connect('localhost', 'root', '', 'offer');
    
        $sql= "INSERT INTO supermarkets(Supermarket_name, Supermarket_address) 
            VALUES('$Supermarket_name', '$Supermarket_address')";
        
        if ($conn->query($sql) === TRUE) {
            // echo "<script>location.href = 'login.html';</script>";
            // header ('Location: ../login.html');
            echo "User added successfully";
        }
    } 
?>