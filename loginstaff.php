<!DOCTYPE HTML>
<title>EJA</title>
<HTML>
<HEAD>


<style>
body{background-repeat: no-repeat;

  background-size: 1700px 880px;}
  
  .button {
  background-color: grey;
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}
</style>


  
</HEAD>
<BODY  background="teachern.gif" ;>
<link rel="stylesheet" type="text/css" href="main.css" media="screen"/>
</BODY>
</HTML>
    <?php
include('loginustaff.php'); 

?>

<!DOCTYPE html>
<html>

  
    <div class="container" ;">
      <div class="col-md-5 col-md-offset-4">
        <label style="margin-left: 5px;color: red;"><span> <?php echo $error;  ?> </span></label>
      <div class="panel panel-primary">
        <b></b>
		<br>
		<br>
		
        <div>
          
        <form action="" method="POST">
          
        <div>
          <div class="regisFrm">
            
            <div class="input-group">
              <input class="regisFrm" id="username" type="text" name="username" placeholder="Nama Guru" required="" autofocus="">
              <span class="regisFrm">
                <label class="btn btn-primary"><span class="glyphicon glyphicon-user" aria-hidden="true"></label>
            </span>
              </span>
            </div>           
          </div>
        </div>
<br>
        <div class="row">
          <div class="regisFrm">
    
            <div class="input-group">
              <input class="form-control" id="password" type="password" name="password" placeholder="Kata Laluan" required="">
              <span class="input-group-btn">
                <label class="btn btn-primary"><span class="glyphicon glyphicon-lock" aria-hidden="true"></span></label>
            </span>
              
            </div>           
          </div>
        </div>

        <div class="send-button">
          <div class="form-group col-xs-4">
           
			  	 <a href="indexx.php" class="button">Menu</a>
				    <button class="button" name="submit" type="submit" value=" Login ">Log Masuk</button>
          </div>

        </div>
		 <div class="send-button">
        <label >atau</label> <br>
      
	    <p>Tiada akaun? <a href="sstaff.php">Daftar Masuk</a></p>
 </div>
        </form>
        </div>     
      </div>      
    </div>
    </div>


    </body>
</html>
