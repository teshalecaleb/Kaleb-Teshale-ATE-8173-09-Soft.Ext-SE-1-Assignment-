<?php
    $conn = mysqli_connect('localhost', 'root', '@1234@phP', 'blog');

    session_start();// starting session
//storing session
    $user_check = $_SESSION['login_admin'];
    $query = "SELECT username from login where username = '$user_check'";
    $ses_sql = mysqli_query($conn, $query);
    $row = mysqli_fetch_assoc($ses_sql);
    $login_session = $row['username'];

?>