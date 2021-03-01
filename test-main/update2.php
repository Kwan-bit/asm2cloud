<?php
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
$pi=$_GET['pi'];
$pn=$_GET['pn'];
$pp=$_GET['pp'];
$qt=$_GET['qt'];
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
          <td><input type="text" value="<?php echo "$pi" ?>" name="productid" required></td>
        </tr>
        
        <tr>
          <td>Product Name</td>
          <td><input type="text" value="<?php echo "$pn" ?>" name="productname" required></td>
        </tr>
        
        <tr>
          <td>Product Price</td>
          <td><input type="text" value="<?php echo "$pp" ?>" name="productprice" required></td>
        </tr>
        
        <tr>
          <td>Quantity</td>
          <td><input type="text" value="<?php echo "$qt" ?>" name="quantityonhand" required></td>
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
	$productid = $_GET['productid'];
	$productname = $_GET['productname'];
	$productprice = $_GET['productprice'];
	$quantityonhand = $_GET['quantityonhand'];
	$query = "UPDATE atnshop2 SET productid='$productid', productname='$productname', productprice='$productprice', quantityonhand='$quantityonhand' WHERE productid='$productid' ";
	$data = pg_query($pg_heroku,$query);
	if($data)
	{
		echo "<script>alert('Updated Successfully!')</script>";
		?>
		<meta http-equiv="refresh" content="0; url=https://quangatnshop.herokuapp.com/staff2.php" />
		<?php
	}
	else
	{
		echo "Failed to update the table.";
	}
}	
?>
