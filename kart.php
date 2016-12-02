<html>
<body bgcolor="silver">
<?php
$con=mysqli_connect("localhost","root","","project");
$result=mysqli_query($con,"select *from kart");
while($row=mysqli_fetch_array($result))
 {
 echo ($row['name']." ".$row['model']." ".$row['pin']);
  echo "<br>";
  }
?>
</body>
</html>