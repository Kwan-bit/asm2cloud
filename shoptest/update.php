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
$pi=$_GET['pi'];
$pn=$_GET['pn'];
$pp=$_GET['pp'];
$qt=$_GET['ps'];
?>
<html>
  <head>
    <link rel="stylesheet" href ="styles.css">
    <title> Update </title>
    <marquee bgcolor="gray" 
             scrollamount="12" 
             direction="left" 
             onmouseover="this.stop();" 
             onmouseout="this.start();">
        [nah/nah/nah]: nah
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
          <td><input type="text" value="<?php echo "$pi" ?>" name="product_id" required></td>
        </tr>
        
        <tr>
          <td>Product Name</td>
          <td><input type="text" value="<?php echo "$pn" ?>" name="product_name" required></td>
        </tr>
        
        <tr>
          <td>Product Price</td>
          <td><input type="text" value="<?php echo "$pp" ?>" name="product_price" required></td>
        </tr>
        
        <tr>
          <td>Quantity</td>
          <td><input type="text" value="<?php echo "$ps" ?>" name="product_stock" required></td>
        </tr>
        
        <tr>
          <td colspan="2" align="center"><input type="submit" id="button" name="submit" value="Update"></td>
        </tr>
    </form>
  </table>
</body>
</html>

<?php
if($_GET['submit'])
{
	$product_id = $_GET['product_id'];
	$product_name = $_GET['product_name'];
	$product_price = $_GET['product_price'];
	$product_stock = $_GET['product_stock'];
	$query = "UPDATE product SET product_id='$product_id', product_name='$product_name', product_price='$product_price', product_stock='$product_stock' WHERE product_id='$product_id' ";
	$data = pg_query($pg_heroku,$query);
	if($data)
	{
		echo "<script>alert('Updated Successfully!')</script>";
		?>
		<meta http-equiv="refresh" content="0; url=https://asm2kwan.herokuapp.com/staff.php" />
		<?php
	}
	else
	{
		echo "Failed to update the table.";
	}
}	
?>
