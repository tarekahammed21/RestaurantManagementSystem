<?php

$con = mysqli_connect('localhost', 'root', '', 'rms');

if (isset($_POST['button'])) {


    $salesid = $_POST['salesid'];
    $userid = $_POST['userid'];
    $payid = $_POST['payid'];
    $salesdate = $_POST['salesdate'];
}
echo "<center><b><u> SALES DATA</u> </b></center>";
echo "</br>";
echo "</br>";


echo "<b>SALES_ID:</b> $salesid";
echo "</br>";
echo "<b>USER_ID:</b> $userid";
echo "</br>";
echo "<b>PAY_ID:</b> $payid";
echo "</br>";
echo "<b>SALES_DATE:</b> $salesdate";
echo "</br>";
echo "</br>";
echo "</br>";


echo "<b>Sales data inserted successfully</b>";


$sql = "insert into sales (sales_id,user_id,pay_id,sales_date)values('$salesid','$userid','$payid','$salesdate')";
mysqli_query($con, $sql);
