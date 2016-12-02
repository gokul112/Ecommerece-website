<html>
<body bgcolor="silver">
<?php 
$con=mysqli_connect("localhost","root","","project");
$name=$_POST["NAME"];
$model=$_POST["model"];
echo"<hr><center><h1>CANCELLATION</h1></center><hr>";
$sql=mysqli_query($con,"delete from book where model='$model' && name='$name'");
if(mysqli_affected_rows($con))
{
echo"<center><h3>YOUR AMOUNT WILL BE REFUNDED AFTER TWO DAYS...............................</h3></center>";
echo"<a href='link.html'><center><input type='button' value='HOME'>";
}
else
{
echo"<center><h3>INVALID NAME</h3></center>";
echo"<a href='link.html'><center><input type='button' value='HOME'><a href='cancel.html'><input type='button' value='CANCEL'>";
}
?>

</body>
</html>