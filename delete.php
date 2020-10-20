
<?php 
 
        require_once("connect.php ");
 
        if(isset($_GET['Del']))
        {
            $F_ID = $_GET['Del'];
            $query = " delete from products where F_ID = '".$F_ID."'";
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