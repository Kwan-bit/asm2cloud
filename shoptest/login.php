
<html>
<head>
    <link rel="stylesheet" href ="styles.css">
    <title> Login </title>
    <marquee bgcolor="gray" 
             scrollamount="12" 
             direction="left" 
             onmouseover="this.stop();" 
             onmouseout="this.start();">
        [nah/nah/nah]: nah
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
	      <h2 style="color:white;" align="center">LoginSession</h2>
		<form style="color:black;" align="center" method="POST">
			<input type="text" id="username" placeholder="Choose Username"><br>
			<input type="text" id="password" placeholer="Choose Password"><br>
			<button type="button" onclick="getInfo()">Log in</button>
    	</form>
    	<script src="js/main.js"></script>
    </div>
	      
    </body>
</html>
