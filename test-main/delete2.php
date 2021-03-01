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
$productid=$_GET['pi'];
$query = "DELETE FROM atnshop2 WHERE productid = '$productid'";
$data = pg_query($pg_heroku,$query);
if($data)
{
  echo "<script>alert('Delete Successfully!')</script>";
	?>
	<meta http-equiv="refresh" content="0; url=https://quangatnshop.herokuapp.com/staff2.php" />
	<?php
}
else
{
  echo "Failed to delete.";
}
?>
