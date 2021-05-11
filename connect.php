<?php

$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$gender = $_POST['gender'];
$email = $_POST['email'];
$pass = $_POST['pass'];

$conn = new mysqli('localhost','root','','phpconnect');
if($conn -> connect_error)
{
    die('Connection Failed :'.$conn->connect_error);
}
else
{
    $state = $conn->prepare("insert into registration(firstname, lastname, gender, email, password)
    values(?,?,?,?,?)");

    $state = $conn->prepare("select * from registration where firstname="shrey""
    $state->bind_param("sssss",$firstname,$lastname,$gender,$email,$pass);

    $state->execute();

    echo "registration sucess !";

    $state->close();
    $conn->close();
}

?>)