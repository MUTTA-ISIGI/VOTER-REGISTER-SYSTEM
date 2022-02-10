<?php
//check if button has been clicked
if (isset($_POST["btn_add"])){
    //start receiving data
    $voterName = $_POST["v_name"];
    $voterIdNumber = $_POST["v_id_number"];
    $voterCounty = $_POST["v_county"];
    $voterGender = $_POST["v_gender"];
    $voterPhoneNumber = $_POST["V_phone_number"];
    //connect to the database
    require_once "db_connection.php";
    //prepare the data from the database
    $insertQuery = "INSERT INTO `voters`(`id`, `v_name`, `v_id_number`, `v_county`, `v_gender`, `V_phone_number`)
 VALUES (null,'$voterName','$voterIdNumber','$voterCounty','$voterGender', '$voterPhoneNumber')";
    //save the data
    $save = mysqli_query($connection, $insertQuery);
    if (isset($save)){
       header("location:add_voters.php");
    }else{
        echo "<script>alert('submission failed')</script>";
    }
}
