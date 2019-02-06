<?php

    $con = mysqli_connect("localhost", "fairohkq_admin", "Abcde123@", "fairohkq_admin");

    if($con){
        echo "Database is connected.";
    }