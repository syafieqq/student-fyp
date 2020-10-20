




<!DOCTYPE html>
<html lang="en">
<head>
   

 
<style>

body {
  background-image: url("xccc.gif");
  background-repeat: no-repeat, repeat;
 background-size: 100% 780px;
  

    margin: 0;
    padding: 0;
    width: 140%;
    height: 160vh;
    display: flex;
    flex-direction: row;
    justify-content: center;
    align-items: center;
  
}
#button1 , #button2 {
display:inline-block;

}
.glow-on-hover {
    width: 300px;
    height: 70px;
    border: BLACK;
    outline: BLACK;
    color: #fff;
    background: #111;
    cursor: pointer;
    position: relative;
    z-index: 0;
    border-radius: 20px;

}

.glow-on-hover:before {
    content: '';
    background: linear-gradient(45deg, BLACK, #ff7300, #fffb00, #48ff00, #00ffd5, #002bff, #7a00ff, #ff00c8, white);
    position: absolute;
    top: -2px;
    left:-2px;
    background-size: 400%;
    z-index: -1;
    filter: blur(5px);
    width: calc(100% + 4px);
    height: calc(100% + 4px);
    animation: glowing 20s linear infinite;
    opacity: 0;
    transition: opacity .3s ease-in-out;
    border-radius: 10px;
}

.glow-on-hover:active {
    color: white
}

.glow-on-hover:active:after {
    background: white;
}

.glow-on-hover:hover:before {
    opacity: 1;
}

.glow-on-hover:after {
    z-index: -1;
    content: '';
    position: absolute;
    width: 100%;
    height: 100%;
    background: 	#FF8C00	;
    left: 0;
    top: 0;
    border-radius:20px;
}

@keyframes glowing {
    0% { background-position: 0 0; }
    50% { background-position: 800% 0; }
    100% { background-position: 0 0; }
}



</style>
   <div class="container">
  <li><a href="page3.php"><span ></span> <button  style="margin:10px;" class="glow-on-hover" type="button">SUKU KATA TERBUKA</button>

  <li><a href="page5.php"><span ></span> <button  style="margin:10px;" class="glow-on-hover" type="button">SUKU KATA TERBUKA DAN TERTUTU</button>


</body>


</html> 
