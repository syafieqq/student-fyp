<!DOCTYPE HTML>
<HTML>
<title>EJA</title>
<br><br><br>
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
  margin: 0.1px 0.1px;
  cursor: pointer;
}
</style>


  
</HEAD>

<br>

<BODY  background="hairul.gif" ;>
<link rel="stylesheet" type="text/css" href="main.css" media="screen"/>
</BODY>
</HTML>
    <?php
include('login_u.php'); 

?><br><br><br>

<!DOCTYPE html>

<br><br><br>
<html>

  <br><br><br> 
  <br><br><br>
    <div class="container" ;">
	
      <div class="col-md-5 col-md-offset-4">
        <label style="margin-left: 15px;color: red;"><span> <?php echo $error;  ?> </span></label>
      <div class="panel panel-primary">
        <b></b>
		<br>
		<br>
		
        <div>
          
        <form action="" method="POST">
          
        <div>
          <div class="regisFrm">
            
            <div class="input-group">
              <input class="regisFrm" id="username" type="text" name="username" placeholder="Nama Pelajar" required="" autofocus="">
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
       
	    <p>Tiada akaun? <a href="su.php">Daftar Masuk</a></p>
 </div>
        </form>
        </div>     
      </div>      
    </div>
    </div>


    </body>
</html>
