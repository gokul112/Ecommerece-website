<?php
$con=mysql_connect("localhost","root","");
  if($con)
   echo "connected";
mysql_select_db("project",$con);
 $sql="insert into details values('766n7','nh767',3435)";
 mysql_query($sql,$con);
mysql_close();
 ?>
