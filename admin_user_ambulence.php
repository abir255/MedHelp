<?php
include '_dbconnect.php';

session_start();


$sql1 = "SELECT a.* , u.user_name
FROM ambulance_call as a
INNER JOIN user_account as u
on a.user_id = u.user_id";

$result1 = mysqli_query($con, $sql1);
$num1 = mysqli_num_rows($result1);


$html = "";
if ($num1 > 0) {
    while ($row = $result1->fetch_assoc()) {


        $html = $html  . "<tr>" .
            '<form action="/MedHelp/ambulance_list.php" method="POST">' .
            '<td><input hidden type="text" name="id" placeholder="Enter Doctor ID" value="' . $row["am_id"] . '">' . $row["am_id"] . " </td>" .
            "<td>" . $row["a_number_plate"] . "</td> " .
            "<td>" . $row["a_locaion"] . "</td> " .
            "<td>" . $row["a_driver_name"] . "</td> " .
            "<td>" . $row["a_driver_phone"] . "</td> " .
            "<td>" . $row["user_id"] . "</td> " .
            "<td>" . $row["user_name"] . "</td> " .
            "<td>" . $row["user_email"] . "</td> " .
            "<td>" . $row["a_status"] . "</td> " .

            '<td>' .
            '<a class="btn btn-primary" href="/Medhelp/admin_user_ambulence2.php?id=' . $row["am_id"] . '">Complete</a> ' .
            '</td>' .
            '</form>' .
            "</tr>";
    }
}



$con->close();
?>



<html>

<head>
    <title>Ambulance Booking</title>
    <?php
    include('css.html');
    include('script.html');
    ?>
</head>

<body>
    <div class="cover">
        <?php
        include('header.html');

        ?>
        <div class="container table-list">
            <div class="row">
                <div class="col-md-12">
                    <div class="text-center">
                        <img src="img/doctor.png" class="rounded profile" alt="...">
                    </div>
                </div>
            </div>
            <div class="row">

                <div class="col-md-6 float-left">
                    <h2 class="float-left">Ambulance Booking List</h2>
                </div>
                
            </div>

            <table id="table_id" class="table table-striped table-bordered table-hover">
                <thead>
                    <th>Ambulance Id</th>
                    <th>Ambulance Number Plate</th>
                    <th>Ambulance location</th>
                   
                   
                    <th>Driver Name</th>
                    <th>Driver Phone</th>
                   
                    <th>User Id</th>
                    <th>User Name</th>
                    <th>User Email</th>
                    <th>Status</th>
                    <th>Action</th>
                </thead>
                <tbody>
                    <?php
                    echo  $html
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</body>

<script>
    $(document).ready(function() {
        $('#table_id').DataTable({
            "scrollY": "580px",
        });
    });
</script>

</html>