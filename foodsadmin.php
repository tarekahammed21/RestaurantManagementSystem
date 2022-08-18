<?php

$con=mysqli_connect('localhost','root', '','rms');

if (isset ($_POST['button']))

{


$fid = $_POST ['foodid'];
$ctid = $_POST ['catid'];
$fname = $_POST ['foodname'];
$ds = $_POST ['des'];
$price = $_POST ['price'];


}


echo "<center><b><u> FOOD DATA</u> </b></center>";
echo "</br>";
echo "</br>";

echo "<b>FOOD_ID:</b> $fid";
echo "</br>";
echo "<b>CATEGORY_ID:</b> $ctid";
echo "</br>";
echo "<b>FOOD_NAME:</b> $fname";
echo "</br>";
echo "<b>FOOD_DESCRIPTION:</b> $ds";
echo "</br>";
echo "<b>PRICE:</b> $price";
echo "</br>";



$sql="insert into foods (food_id,category_id,food_name,food_description, price)values('$fid','$ctid','$fname','$ds','$price')";
mysqli_query($con,$sql);


?>