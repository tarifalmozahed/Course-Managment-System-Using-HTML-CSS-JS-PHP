<?php

$connection = mysqli_connect('localhost', 'root', '', 'course_db');

if(isset($_POST['submit'])){
    $course_name = $_POST['course_name'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $transaction_id = $_POST['transaction_id'];
    
    $request = "INSERT INTO course_form (course_name, name, email, transaction_id) VALUES ('$course_name', '$name', '$email', '$transaction_id')";

    $result = mysqli_query($connection, $request);

    if($result){
        echo '<script>alert("Thank you!");</script>';
    }else{
        echo "<h1>Something went wrong!</h1>";
    }
}

?>
