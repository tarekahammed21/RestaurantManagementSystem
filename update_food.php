<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <table border="2" height="50" width="100%">

        <tr height="100%" width="100%">

            <td bgcolor="lime">
                <center>
                    <font size="5">
                        <b>
                            <a href="insertfood.html">INSERT FOOD</a>&nbsp&nbsp&nbsp | &nbsp&nbsp&nbsp
                            <a href="update_food.php">UPDATE FOOD</a>&nbsp&nbsp&nbsp| &nbsp&nbsp&nbsp
                            <a href="delete_food.php">DELETE FOOD</a> &nbsp&nbsp&nbsp| &nbsp&nbsp&nbsp
                            <a href="display_food.php">DISPLAY FOOD</a>&nbsp&nbsp&nbsp

                        </b>
                    </font>
                </center>

            </td>

        </tr>

    </table><br><br>
</body>

</html>


<?php

$con = mysqli_connect('localhost', 'root', '', 'rms');

$sql = "select * from foods";

$res = mysqli_query($con, $sql);




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
    <table border="2" width="80%" height="100%">
        <tr>
            <td> <b>
                    <center>food_id</center>
                </b></td>
            <td> <b>
                    <center>category_id</center>
                </b></td>
            <td> <b>
                    <center>food_name</center>
                </b></td>

            <td> <b>
                    <center>food_description</center>
                </b></td>
            <td> <b>
                    <center>price</center>
                </b></td>
            <td> <b>
                    <center>Action</center>
                </b></td>
        </tr>

        <?php while ($row = mysqli_fetch_assoc($res)) { ?>

            <tr>

                <td><?php echo $row['food_id'] ?></td>
                <td><?php echo $row['category_id'] ?></td>
                <td><?php echo $row['food_name'] ?></td>
                <td><?php echo $row['food_description'] ?></td>
                <td><?php echo $row['price'] ?></td>
                <td><a href="updatesave.php? food_id= <?php echo $row['food_id'] ?> &category_id=<?php echo $row['category_id'] ?> &food_name=<?php echo $row['food_name'] ?>
                &food_description=<?php echo $row['food_description'] ?>&price=<?php echo $row['price'] ?>"> update </a></td>



            </tr>

        <?php } ?>


    </table>

</body>

</html>