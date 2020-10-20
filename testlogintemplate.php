<!DOCTYPE HTML>
<HTML>
<HEAD>


<style>
body{background-repeat: no-repeat;

  background-size: 1700px 770px;}
  
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
<BODY  background="k.jpg" ;>
<link rel="stylesheet" type="text/css" href="main.css" media="screen"/>
</BODY>
</HTML>
    <?php
include('login_u.php'); 

?>

<!DOCTYPE html>
<html>

  
    <div class="container" ;">
      <div class="col-md-5 col-md-offset-4">
        <label style="margin-left: 5px;color: red;"><span> <?php echo $error;  ?> </span></label>
      <div class="panel panel-primary">
        <b><div  style="font-size:2vw;"> Login to Your Account</div></b>
		<br>
		<br>
		
        <div>
          
        <form action="" method="POST">
          
        <div>
          <div class="regisFrm">
            
            <div class="input-group">
              <input class="regisFrm" id="username" type="text" name="username" placeholder="Username" required="" autofocus="">
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
              <input class="form-control" id="password" type="password" name="password" placeholder="Password" required="">
              <span class="input-group-btn">
                <label class="btn btn-primary"><span class="glyphicon glyphicon-lock" aria-hidden="true"></span></label>
            </span>
              
            </div>           
          </div>
        </div>

        <div class="send-button">
          <div class="form-group col-xs-4">
              <button class="button" name="submit" type="submit" value=" Login ">LOGIN</button>
          </div>

        </div>
		 <div class="send-button">
        <label >or</label> <br>
       <label ><a href="customersignup.php">Create a new account.</a></label>
	    <p>Don't have an account? <a href="registration.php">Register</a></p>
 </div>
        </form>
        </div>     
      </div>      
    </div>
    </div>


    </body>
</html>