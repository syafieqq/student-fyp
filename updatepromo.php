<?php 
 
    require_once("connect.php");
 
    if(isset($_POST['update']))
    {
		$PRO_ID = $_GET['PRO_ID'];
        $JPRO_ID = $_GET['JPRO_ID'];
        $JPRO_TRKMULA = $_POST['JPRO_TRKMULA'];
        $JPRO_TRKTAMAT = $_POST['JPRO_TRKTAMAT'];
       
 
        $query = "update promosi set JPRO_TRKMULA = '".$JPRO_TRKMULA."', JPRO_TRKTAMAT='".$JPRO_TRKTAMAT."'";
        $result = mysqli_query($conn,$query);
 
        if($result)
        {
            header("location:viewpromotion.php");
        }
        else
        {
            echo ' Please Check Your Query ';
        }
    }
    else
    {
        header("location:viewpromotion.php");
    }
 
 
?>