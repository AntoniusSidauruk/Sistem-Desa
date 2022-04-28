<?php

    $con = mysqli_connect("localhost","root","","sgds_desa");
    if (mysqli_connect_errno()){
        echo "Failed connect !" . mysqli_connect_error();
    }