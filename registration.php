<?php

$con=mysqli_connect('localhost','root', '','rms');

if (isset ($_POST['button']))

{


$uid = $_POST ['uid'];
$uname = $_POST ['name'];
$email = $_POST ['email'];
$pass = $_POST ['password'];
$uadrs = $_POST ['uadrs'];

}
echo "<center><b><u> USER DATA</u> </b></center>";
echo "</br>";
echo "</br>";

echo "<b>USER_ID:</b> $uid";
echo "</br>";
echo "<b>USER_NAME:</b> $uname";
echo "</br>";
echo "<b>EMAIL:</b> $email";
echo "</br>";
echo "<b>PASSWORD:</b> $pass";
echo "</br>";
echo "<b>USER_ADDRESS:</b> $uadrs";
echo "</br>";


$sql="insert into registration (user_id,user_name,email,password,user_address)values('$uid','$uname','$email','$pass','$uadrs')";
mysqli_query($con,$sql);


?>