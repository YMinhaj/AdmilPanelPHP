<?php
include 'connection.php';
$delete_id=$_GET['id'];
$delete_query="delete  from brand WHERE id='$delete_id'";//delete query

if($conn->exec($delete_query))
{
//javascript function to open in the same window
   // echo "<script>window.open('../vpages/brand.php?deleted=user has been deleted','_self')</script>";
	echo "<script>alert('Brand has Been Deleted')
		window.location.href='../vpages/brand.php';

		</script>";
}







?>