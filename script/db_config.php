<?php
    $conn = mysqli_connect('localhost', 'root', '', 'iworq');
    if(!$conn){
        echo 'Connection error: '. mysqli_connect_error();
    }
?>