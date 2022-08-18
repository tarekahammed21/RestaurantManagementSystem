<?php

$db = mysqli_connect('localhost','root', '','rms');


$id = $_GET['id'];

$qry = "delete from foods where food_id = $id";

if (mysqli_query($db,$qry)) {


    header('location: delete_food.php');

}

else {

    echo mysqli_error($db);
}




?>