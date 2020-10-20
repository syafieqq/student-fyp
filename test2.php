<?php 

$today = date("H:i:s");  
    $start = strtotime($today);
    $end   = strtotime('10:00 PM');

?>
<select style="width:85px;" name="select1" id="select1">
    <?php for($i = $start;$i<=$end;$i+=1800){ ?>  
        <option value='<?php echo date('G:i', $i); ?>'><?php echo date('G:i', $i); ?></option>;
    <?php } ?>
</select>

<?php                        
    date_default_timezone_set("Asia/Kuala_Lumpur");
    echo date(' H:i:s'); //Returns IST
?>