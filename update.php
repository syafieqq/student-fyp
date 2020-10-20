<?php 
 
    require_once("connect.php");
 
    if(isset($_POST['update']))
    {
        $F_ID = $_GET['F_ID'];
        $name = $_POST['name'];
        $description = $_POST['description'];
        $code = $_POST['code'];
		$price = $_POST['price'];
		$image = $_POST['image'];
 
        $query = " update products set name = '".$name."', description='".$description."',code='".$code."',price='".$price."',image='".$image."' where F_ID='".$F_ID."'";
        $result = mysqli_query($conn,$query);
 
        if($result)
        {
            header("location:view.php");
        }
        else
        {
            echo ' Please Check Your Query ';
        }
    }
    else
    {
        header("location:view.php");
    }
 
 
?>