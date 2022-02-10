<?php
if (isset($_GET["v_id"])){
    $voterId = $_GET["v_id"];
    //connect the database
    require_once "db_connection.php";
    //get the data from the database
    $deleteQuery = "DELETE FROM `voters` WHERE id = $voterId";
    //delete the data
    $delete = mysqli_query($connection, $deleteQuery);
    //set a condition
    if (isset($delete)){
        header("location:voters.php");
    }else{
        echo "<script>alert('deletion unsuccessful')</script>";
    }

}
