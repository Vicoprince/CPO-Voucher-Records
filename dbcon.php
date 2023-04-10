<?php
    $servername="localhost";
    $username="root";
    $password="";
    $dbname="fmc_voucher_db";
    $connection=mysqli_connect($servername,$username,$password,$dbname);

    if (!$connection)
    {
        die("Database connection failed".mysqli_connect_error());
    }
?> 	