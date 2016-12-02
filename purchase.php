<html>
<body bgcolor="silver">
<?php
$con=mysqli_connect("localhost","root","","project");
$name=$_POST["NAME"];
$model=$_POST["model"];
$pin=$_POST["pincode"];
$vou=$_POST["vouc"];
$disk=0;
$price=0;
$result=mysqli_query($con,"select *from register where name='$name'");
while($row=mysqli_fetch_array($result))
 {
  if($name==$row['name'])
   {
        $result=mysqli_query($con,"select *from model1 where model='$model'");
        echo "<center>sucessfully</center>";
        while($row=mysqli_fetch_array($result))
        {
            if($model==$row['model'])
            {
            $price=$row['price'];
            echo "<center> purchased</center>";
             }
         }
        $sql=mysqli_query($con,"insert into book values('$name','$model',$price,'$pin')");
    }
    else
    {
       echo "<center>proble in model number</center>";
    }
      
 }
 $result=mysqli_query($con,"select *from voucher");
while($row=mysqli_fetch_array($result))
{
  if($vou==$row['name'])
     {
         $disk=$row['dis'];
      }
 }  
 $total=$price-$disk; 
echo "______________________________________________________________________________________________________________________________________";
echo "<br>";
echo "<pre>NAME       MODEL             ACCOUNT.NO             MOBILE.NO             EMAIL               DISCOUNT     PRICE    TOTAL</pre>";
echo "<br>__________________________________________________________________________________________________________________________________<br>";
$result=mysqli_query($con,"select *from register where name='$name'");
while($row=mysqli_fetch_array($result))
  { 
    if($name==$row['name'])
      {
       echo ($name." &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$model."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$row['acc']."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ".$row['mobile']."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ".$row['email']."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ".$disk."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$price."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$total);
       }
   }   

?>
</body>
</html>
