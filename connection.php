<?php

    $link = mysqli_connect("localhost", "root", "", "logindb");
        
        if (mysqli_connect_error()) {
            
            die ("Database Connection Error");
            
        }

?>