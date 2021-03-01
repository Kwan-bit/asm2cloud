<html>
	<head>
    <link rel="stylesheet" href ="styles.css">
    <title> Database </title>
    <marquee bgcolor="gray" 
             scrollamount="12" 
             direction="left" 
             onmouseover="this.stop();" 
             onmouseout="this.start();">
        [2/27/2021]: Remember to check the database everyday!
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
			    <th>Quantity</th>
			    <th colspan="2" align="center">Operation</th>
		    </tr>
		<?php 
			echo '<p>ATN Shop </p>'; 
			$host_heroku = "ec2-54-156-121-142.compute-1.amazonaws.com";
			$db_heroku = "dqd7oa5e19ldm";
			$user_heroku = "bidifaumdbqryy";
			$pw_heroku = "d7f81c395bc38e5c760c2f7163149463308f70cb36fd9423c9b2f41d6704a535";
			$conn_string = "host=$host_heroku port=5432 dbname=$db_heroku user=$user_heroku password=$pw_heroku";
			$pg_heroku = pg_connect($conn_string);
			
			if (!$pg_heroku)
			{
				die('Error: Could not connect: ' . pg_last_error());
			}
		    	$query = 'select * from atnshop2';
			$data = pg_query($pg_heroku, $query);
	    		$total = pg_num_rows($data);
			if($total!=0)
			{
				while ($result=pg_fetch_assoc($data))
				{
					echo "
					<tr>
					<td>".$result['productid']."</td>
					<td>".$result['productname']."</td>
					<td>".$result['productprice']."</td>
					<td>".$result['quantityonhand']."</td>
					<td><a href='update2.php?pi=$result[productid]&pn=$result[productname]&pp=$result[productprice]&qt=$result[quantityonhand]'>
					Edit/Update</td>
					<td><a href='delete2.php?pi=$result[productid]'>Delete</td>
					
					</tr>
					";
				}
			}
	    
		?> 
		    <form action="https://quangatnshop.herokuapp.com/add2.php">
    				<input type="submit" value="Add" />
			</form>
	</body>
</html>
