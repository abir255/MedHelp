<html>

<head>
    <title>Admin Home</title>
    
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
        <div class="text ">
        <br><br><br><br><br><br>
            <h1><b>MEDHELP ADMINISTRATION</b></h1>
            <br><br><br><br>
            <a href="doctor_list.php">
                <input type="submit" name="submit2" value="Doctor's List">
            </a>
            <a href="admin_user_doctor.php">
                <input type="submit" name="submit3" value="User's Data for Doctor"><br><br>
            </a>
            <a href="medicine_list.php">
                <input type="submit" name="submit4" value="Medicine List">
            </a>

            <a href="admin_user_medicine.php">
                <input type="submit" name="submit6" value="User's Data for Medicine"><br><br>
            </a>
            <a href="test_list.php">
                <input type="submit" name="submit7" value="Test's List">
            </a>

            <a href="admin_uesr_test.php">
                <input type="submit" name="submit8" value="User's Medical Tests"><br><br>
            </a>

            <a href="ambulance_list.php">
                <input type="submit" name="submit7" value="Ambulance list">
            </a>

            <a href="admin_user_ambulence.php">
                <input type="submit" name="submit8" value="Users Data for Ambulance">
            </a>
        </div>
    </div>

</body>

</html>