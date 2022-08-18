<?php  

$con=mysqli_connect('localhost','root', '','rms');

if (isset ($_POST['button']))

{
$uid = $_POST ['uid'];
$pass = $_POST ['password'];

$sql = "SELECT * FROM REGISTRATION WHERE user_id = '$uid' and password = '$pass'";

$result = mysqli_query($con,$sql);

$cnt= mysqli_num_rows ($result);

if($cnt==1)
{
echo "Login Successful";

header('location: x.html');


}

else {

    echo "Login Unsuccessful";
}



}
