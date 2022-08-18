<?php

$con = mysqli_connect('localhost', 'root', '', 'rms');

if (isset($_POST['button'])) {


    $roleid = $_POST['roleid'];
    $rolename = $_POST['rolename'];
    
}
echo "<center><b><u> ROLE DATA</u> </b></center>";
echo "</br>";
echo "</br>";


echo "<b>ROLE_ID:</b> $roleid";
echo "</br>";
echo "<b>ROLE_NAME:</b> $rolename";
echo "</br>";

echo "</br>";

echo "<b>ROLE DATA INSERTED SUCCESSFULLY</b>";



$sql = "insert into role (role_id,role_name)values('$roleid','$rolename')";
mysqli_query($con, $sql);
