<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>VOTERS</title>
    <script src="assets/bootstrap/js/bootstrap.js"></script>
    <script src="assets/bootstrap/js/jquery-3.4.0.js "></script>
    <script src="assets/bootstrap/js/popper.min.js"></script>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.css">
</head>
<body>
    <h1 class="text-info text-center">Registered voters</h1>
    <table class="table table-success table-hover">
        <tr>
            <th>Name</th>
            <th>Id Number</th>
            <th>County</th>
            <th>Gender</th>
            <th>Phone Number</th>
            <th>Delete</th>
            <th>Update</th>
        </tr>
        <?php
        //connect to the dp to select data
        require_once "db_connection.php";
        //prepare the select query
        $selectQuery = "SELECT * FROM `voters`";
        //retrieve use my mysqli() to select query
        $voters =mysqli_query($connection, $selectQuery);
        //use loop to print the voters
        foreach ($voters as $voter){
            $voterName = $voter["v_name"];
            $voterIdNumber = $voter["v_id_number"];
            $voterCounty = $voter["v_county"];
            $voterGender = $voter["v_gender"];
            $voterPhoneNumber = $voter["V_phone_number"];
            $voterId = $voter["id"];
            echo "<tr>
                        <td>$voterName</td>
                        <td>$voterIdNumber</td>
                        <td>$voterCounty</td>
                        <td>$voterGender</td>
                        <td>$voterPhoneNumber</td>
                        <td><a class='btn btn-danger' href='delete.php?v_id=$voterId'>Delete</a></td>
//                      <td><a class='btn btn-success' href='upload.php?v_id=$voterId&&v_name=$updateName&&v_id_number=$updateIdNumber&&v_county=$updateCounty&&v_gender=$updateGender&&V_phone_number=$updatePhoneNumber'>Update</a></td>
                   </tr>";
        }
        ?>
    </table>
</body>
</html>
