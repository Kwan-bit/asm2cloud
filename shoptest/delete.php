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
$productid=$_GET['pi'];
$query = "DELETE FROM product WHERE product_id = '$product_id'";
$data = pg_query($pg_heroku,$query);
if($data)
{
  echo "<script>alert('Delete Successfully!')</script>";
	?>
	<meta http-equiv="refresh" content="0; url=https://asm2kwan.herokuapp.com/staff.php" />
	<?php
}
else
{
  echo "Failed to delete.";
}
?>
