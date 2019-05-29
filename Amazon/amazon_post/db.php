<?php
    $conn = mysqli_connect('localhost', 'root', '@1234@phP', 'blog');

    //check a connection
    if(mysqli_connect_errno()){
        
        echo 'faild to connect to the internate'.mysqli_connect_errno();

    }