<?php
    include('db_config.php');
    $sql = "SELECT name, address, email, department, salary FROM employees";
    $result = mysqli_query($conn, $sql);
    $employees = [];
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $employees[] = $row;
        }
    }
    mysqli_close($conn);
    header('Content-Type: application/json');
    echo json_encode($employees);
?>