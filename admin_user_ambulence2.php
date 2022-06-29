<?php
include '_dbconnect.php';
    $queries = array();
    parse_str($_SERVER['QUERY_STRING'], $queries);
    $id = $queries['id'];
    echo $id;
    $sql = "update ambulance set a_status = 'Available' where a_id = '$id';";
    $re  = mysqli_query($con,$sql);
    if($re){
        echo "s";
    }
    $sql1 = "update ambulance_call set a_status = 'Available' where am_id = '$id';";
    $re1  = mysqli_query($con,$sql1);
    if($re1){
        echo "s2";
    }
    header("Location: /MedHelp/admin_user_ambulence.php");
?>