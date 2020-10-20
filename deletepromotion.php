
<?php 
 
        require_once("connect.php ");
 
        if(isset($_GET['Del']))
        {
            $JPRO_ID = $_GET['Del'];
            $query = " delete from jns_promosi where JPRO_ID = '".$JPRO_ID."'";
            $result = mysqli_query($conn,$query);
 
            if($result)
            {
                header("location:viewtypepromotion.php");
            }
            else
            {
                echo ' Please Check Your Query ';
            }
        }
        else
        {
            header("location:viewtypepromotion.php");
        }
 
?>