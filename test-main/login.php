<html>
<head>
    <link rel="stylesheet" href ="styles.css">
    <title> Login </title>
    <marquee bgcolor="gray" 
             scrollamount="12" 
             direction="left" 
             onmouseover="this.stop();" 
             onmouseout="this.start();">
        [2/27/2021]: Remember to check the database everyday!
    </marquee>
    <ul> 
        <li> <a href="index.php">Main Page</a></li>
        <li> <a href="">Login </a></li>       
    </ul>
  </head>
    <body>
      <style>
        body {
          background-image: url('background.jpg');
          background-attachment: fixed;
          background-size: 100%100%;
        } 
      </style>
      <div>
	      <h2 style="color:black;" align="center">LoginSession</h2>
		<form style="color:black;" align="center" method="POST">
		Username:<input type="text" name="userid"> <br>
		Password:&nbsp;<input type="password" name="password"> <br>
	<input type="submit" value="login">
    </form>
    </div>
	<?php
	    if(isset($_POST['userid']) && isset($_POST['password']))
    		{
    		$user = $_POST['userid'];
    		$pass= $_POST['password'];
    		}
        	if($user == "staff1" && $pass == "123"){
           	header("location:staff1.php");
        	}
	    	if($user == "staff2" && $pass == "456"){
           	header("location:staff2.php");
        	}
		if($user == "boss" && $pass == "789"){
		header("location:boss.php");
		}  
	?>
      
    </body>
</html>
