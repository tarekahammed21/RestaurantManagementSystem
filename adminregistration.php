<?php

$con = mysqli_connect('localhost', 'root', '', 'rms');

if (isset($_POST['button'])) {


    $aid = $_POST['aid'];
    $aname = $_POST['aname'];
    $email = $_POST['email'];
    $adadrs = $_POST['adadrs'];
    $adpass = $_POST['adpass'];
    $as = $_POST['as'];
}
echo "<center><b><u> ADMIN DATA</u> </b></center>";
echo "</br>";
echo "</br>";

echo "<b>ADMIN_ID:</b> $aid";
echo "</br>";
echo "<b>ADMIN_NAME:</b> $aname";
echo "</br>";
echo "<b>EMAIL:</b> $email";
echo "</br>";
echo "<b>ADMIN_ADDRESS:</b> $adadrs";
echo "</br>";
echo "<b>PASSWORD:</b> $adpass";
echo "</br>";
echo "<b>ADMIN_STATUS:</b> $as";
echo "</br>";


$sql = "insert into admin_table (admin_id,admin_name,email,admin_address,password,admin_status)values('$aid','$aname','$email','$adadrs','$adpass','$as')";
mysqli_query($con, $sql);
?>