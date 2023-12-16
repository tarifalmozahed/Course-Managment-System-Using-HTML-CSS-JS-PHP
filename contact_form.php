<?php

$connection = mysqli_connect('localhost', 'root', '', 'contact_db');

if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    
    $request = "INSERT INTO contact_form (name, email, subject, message) VALUES ('$name', '$email', '$subject', '$message')";

    $result = mysqli_query($connection, $request);

    if($result){
        echo '<script>alert("Thank you!");</script>';
    }else{
        echo "<h1>Something went wrong!</h1>";
    }
}

?>
