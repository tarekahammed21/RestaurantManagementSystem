<?php

$con = mysqli_connect('localhost', 'root', '', 'rms');

if (isset($_POST['button'])) {


    $ctid= $_POST['ctid'];
    $fdid = $_POST['fdid'];
    $quantity = $_POST['quantity'];
    $price = $_POST['price'];
    $contact = $_POST['contact'];
    

}
echo "<center><b><u> YOUR FOOD ORDER DATA</u> </b></center>";
echo "</br>";
echo "</br>";


echo "<b>CATEGORY_ID:</b> $ctid";
echo "</br>";
echo "<b>FOOD_ID:</b> $fdid";
echo "</br>";
echo "<b>QUANTITY:</b> $quantity";
echo "</br>";
echo "<b>PRICE:</b> $price";
echo "</br>";
echo "<b>PHONE_NUMBER:</b> $contact";
echo "</br>";
echo "</br>";
echo "</br>";


echo "<b>THANK YOU!! YOUR ORDER HAS BEEN RECEIVED.</b>";
echo "</br>";
echo "within 5 minutes after checking all we will confirm your order via phone call.";


$sql = "insert into food_order (category_id,food_id,quantity,price,contact_number)values('$ctid','$fdid','$quantity','$price','$contact')";
mysqli_query($con, $sql);
