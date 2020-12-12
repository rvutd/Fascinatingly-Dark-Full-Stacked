<?php
    // Create Connection
    $conn = mysqli_connect('localhost', 'root', '', 'fascinatingly_dark');

    // Check Connection
    if (mysqli_connect_error()){
        // Connection Failed -
        echo 'Failed to connect to MySQL ' . mysqli_connect_error();
    }
