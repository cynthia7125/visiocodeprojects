	

<?php
	if(isset($_POST["edit_user"])){
        $User_ID = $_POST["user_ID"];
		$username = $_POST["username"];
        $email = $_POST["email"];
        $password = $_POST["password"];
		
		
		$sql = "UPDATE users SET username = '$username', email = '$email', password = '$password' 
		WHERE User_ID = '$User_ID' LIMIT 1";

		if ($conn->query($sql) === TRUE) {
			$conn->close();
			header("Location: users.php");
			exit();
		} else {
			echo "Error: " . $sql . "<br>" . $conn->error;
		}
    }


	if(isset($_POST["edit_category"])){
		$Item_category_name = $_POST["Item_category_name"];
		$Item_category_description = $_POST["Item_category_description"];
		$Item_category_ID = $_POST["Item_category_ID"];
		
		$sql = "UPDATE item_category SET Item_category_name = '$Item_category_name', Item_category_description = '$Item_category_description' WHERE Item_category_ID = '$Item_category_ID' LIMIT 1";

		if ($conn->query($sql) === TRUE) {
			$conn->close();
			header("Location: itemcategory.php");
			exit();
		} else {
			echo "Error: " . $sql . "<br>" . $conn->error;
		}
    }


