<?php
$bg=$_POST['blood'];
$conn=mysqli_connect("localhost","root","","blooddonation") or die("Connection error");
$sql= "select * from donor_details where donor_blood='{$bg}' order by rand() limit 5";
$result=mysqli_query($conn,$sql) or die("query unsuccessful.");
  if(mysqli_num_rows($result)>0)   {
  while($row = mysqli_fetch_assoc($result)) 

function eucDistance(array $a, array $b) {
    return
    array_sum(
        array_map(
            function($x, $y) {
                return abs($x - $y) ** 2;
            }, $a, $b
        )
    ) ** (1/2);
}

echo eucDistance([1,2,5,6,4.6], [4,6,33,45,2.5]);

else
  {

      echo '<div class="alert alert-danger">Invalid Co-ordinates </div>';

  }
?>