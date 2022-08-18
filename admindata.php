<?php

$con = mysqli_connect('localhost', 'root', '', 'rms');

if (isset($_POST['button'])) {
    $aid = $_POST['aid'];
    $adpass = $_POST['adpass'];

    $sql = "SELECT * FROM ADMIN_TABLE WHERE admin_id = '$aid' and password = '$adpass'";

    $result = mysqli_query($con, $sql);

    $cnt = mysqli_num_rows($result);

    if ($cnt == 1) {
        echo "Login Successful";

        header('location: admin.html');
    } else {

        echo "Login Unsuccessful";
    }
}

?>
