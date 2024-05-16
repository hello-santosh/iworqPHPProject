<?php
    $name = $_POST['name'];
    $address = $_POST['address'];
    $email = $_POST['email'];
    $department = $_POST['department'];
    $salary = $_POST['salary'];
    include('db_config.php');
    $sql = "INSERT INTO employees (name, address, email, department, salary) VALUES ('$name', '$address', '$email', '$department', '$salary')";
    if(mysqli_query($conn, $sql)){
        echo 'Data inserted successfully.';
    } else {
        echo 'query error: '. mysqli_error($conn);
    }
    mysqli_close($conn);
?>