<?php
$con = mysqli_connect('localhost', 'root', '', 'rms');


$_GET['food_id'];
$_GET['category_id'];
$_GET['food_name'];
$_GET['food_description'];
$_GET['price'];



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <form action="" method="GET">

        Food Id: <input type="text" name="food_id" value=" <?php echo $_GET['food_id']; ?>"></br></br>
        Category Id: <input type="text" name="category_id" value=" <?php echo $_GET['category_id']; ?>"></br></br>
        Food Name: <input type="text" name="food_name" value=" <?php echo $_GET['food_name']; ?>"></br></br>
        Food Description: <input type="text" name="food_description" value=" <?php echo $_GET['food_description']; ?>"></br></br>
        Price: <input type="text" name="price" value=" <?php echo $_GET['price']; ?>"></br></br>
        <input type="submit" name="submit" value="update">

    </form>
<?php

if(isset($_GET['submit'])){

$ufid= $_GET['food_id'];
$ucid= $_GET['category_id'];
$ufn= $_GET['food_name'];
$ufdes= $_GET['food_description'];
$uprice= $_GET['price'];

$sql = "UPDATE foods SET food_name='$ufn',food_description='$ufdes',price='$uprice' WHERE food_id='$ufid' ";

$update=mysqli_query($con,$sql);

echo"<br>";

if($update){

   echo "DATA UPDATE SUCCESSFULLY";

}

else{

    echo"DATA NOT UPDATED";

}


}


?>

</body>

</html>