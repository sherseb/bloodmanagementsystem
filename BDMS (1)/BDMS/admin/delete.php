<?php
include 'conn.php';
  $donor_id = $_GET['id'];
$sql= "DELETE FROM donor_details where donor_id={$donor_id}";
$result=mysqli_query($conn,$sql);

header("Location: donor_list.php");

mysqli_close($conn);

 ?>

<?php
include 'conn.php';
  $page_id = $_GET['id'];
$sql= "DELETE FROM pages where page_id={$page_id}";
$result=mysqli_query($conn,$sql);

header("Location: pages.php");

mysqli_close($conn);

 ?>
