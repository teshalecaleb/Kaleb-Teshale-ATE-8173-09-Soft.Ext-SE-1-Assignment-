<?php
session_start();
$error = '';

if(isset($_POST['submit'])){
    if(empty($_POST['username']) || empty($_POST['password'])){
        $error = "Username or Password is Invalid";
    }else{
    $username = $_POST['username'];
    $password = $_POST['password'];

    $conn = mysqli_connect('localhost', 'root', '@1234@phP', 'blog');

    $query = "SELECT username, password FROM login WHERE username=? AND password=? LIMIT 1";

    //to protect mysqli injection for security
    $stmt = $conn->prepare($query);
    $stmt->bind_param("ss",$username, $password);
    $stmt->execute();
    $stmt->bind_result($username, $password);
    $stmt->store_result();
    
    if ($stmt->fetch()){
        $_SESSION['login_admin'] = $username;
        header("location: post.php");
    }else{
        $error = "Username or Password is Incorrect" ;
    }
    mysqli_close($conn);
    }
}
?>