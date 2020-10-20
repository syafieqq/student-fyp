<?php 
 
    require_once("connect.php");
 
    if(isset($_POST['update']))
    {
		
       
        $JPRO_NAME = $_POST['JPRO_NAME'];
        $JPRO_FLAG = $_POST['JPRO_FLAG'];
		$JPRO_AMAUN = $_POST['JPRO_AMAUN'];
       
 
        $query = "update jns_promosi set JPRO_NAME = '".$JPRO_NAME."', JPRO_FLAG='".$JPRO_FLAG."',JPRO_AMAUN = '".$JPRO_AMAUN."'";
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