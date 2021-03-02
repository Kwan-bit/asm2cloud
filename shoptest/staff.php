<html>
	<head>
    <link rel="stylesheet" href ="styles.css">
    <title> Database </title>
    <marquee bgcolor="gray" 
             scrollamount="12" 
             direction="left" 
             onmouseover="this.stop();" 
             onmouseout="this.start();">
       [nah/nah/nah]: nah
    </marquee>
    <ul>
        <li> <a href="">View database</a> </li>
	    <li> <a href="login.php"> Log out</a> </li>
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
	    <table border="2">
		    <tr>
			    <th>Product ID</th>
			    <th>Product Name</th>
			    <th>Product Price</th>
			    <th>Product Stock</th>
			    <th colspan="2" align="center">Operation</th>
		    </tr>
		<?php 
			echo '<p>ATN Shop 1</p>'; 
			$host_heroku = "ec2-54-146-73-98.compute-1.amazonaws.com";
			$db_heroku = "d14vh8umn11kov";
			$user_heroku = "npcoqeoyfrccgh";
			$pw_heroku = "a839d30a192380c4bfa7d14f6e75a3601e2ac16af1e81b34a2e05e1a77fd5737";
			$conn_string = "host=$host_heroku port=5432 dbname=$db_heroku user=$user_heroku password=$pw_heroku";
			$pg_heroku = pg_connect($conn_string);
			
			if (!$pg_heroku)
			{
				die('Error: Could not connect: ' . pg_last_error());
			}
		    	$query = 'select * from product';
			$data = pg_query($pg_heroku, $query);
	    		$total = pg_num_rows($data);
			if($total!=0)
			{
				while ($result=pg_fetch_assoc($data))
				{
					echo "
					<tr>
					<td>".$result['product_id']."</td>
					<td>".$result['product_name']."</td>
					<td>".$result['product_price']."</td>
					<td>".$result['product_stock']."</td>
					<td><a href='update.php?pi=$result[product_id]&pn=$result[product_name]&pp=$result[product_price]&ps=$result[product_stock]'>
					Edit/Update</td>
					<td><a href='delete.php?pi=$result[product_id]'>Delete</td>
					
					</tr>
					";
				}
			}
	    
		?> 
		    <form action="https://asm2kwan.herokuapp.com/add.php">
    				<input type="submit" value="Add" />
			</form>
	</body>
</html>
