<?php
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
?>
<html>
  <head>
    <link rel="stylesheet" href ="styles.css">
    <title> Add </title>
    <marquee bgcolor="gray" 
             scrollamount="12" 
             direction="left" 
             onmouseover="this.stop();" 
             onmouseout="this.start();">
        [2/27/2021]: Remember to check the database everyday!
    </marquee>
  </head>
  <body>
	<style>
        body {
          background-image: url('background.jpg');
          background-attachment: fixed;
          background-size: 100%100%;
        } 
      	</style>
    <br>
    <form action="" method="GET">
      <table border"0" bgcolor="white" align="center" cellspacing="20">
        
        <tr>
          <td>Product ID</td>
          <td><input type="text" value="" name="product_id" required></td>
        </tr>
        
        <tr>
          <td>Product Name</td>
          <td><input type="text" value="" name="product_name" required></td>
        </tr>
        
        <tr>
          <td>Product Price</td>
          <td><input type="text" value="" name="product_price" required></td>
        </tr>
        
        <tr>
          <td>Stock</td>
          <td><input type="text" value="" name="product_stock" required></td>
        </tr>
        
        <tr>
          <td colspan="2" align="center"><input type="submit" id="button" name="submit" value="Add"></td>
        </tr>
    </form>
  </table>
</body>
</html>

<?php
if($_GET['submit'])
{
	$pi=$_GET['product_id'];
	$pn=$_GET['product_name'];
	$pp=$_GET['product_price'];
	$qt=$_GET['product_stock'];
	$query = "INSERT INTO product VALUES ('$pi','$pn','$pp','$qs')";
	$data = pg_query($pg_heroku,$query);
	if($data)
	{
		echo "<script>alert('Added Successfully!')</script>";
		?>
		<meta http-equiv="refresh" content="0; url=https://quangatnshop.herokuapp.com/staff1.php" />
		<?php
	}
	else
	{
		echo "Failed to add product to the table.";
	}
}
?>
