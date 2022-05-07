<?php
// Connecting to the Database
$servername = "localhost";
$username = "root";
$password = "";
$database = "pr1";

// Create a connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Die if connection was not successful
if (!$conn){
    die("Sorry we failed to connect: ". mysqli_connect_error());
}
else{
    echo "Connection was successful<br>";
}
// Variables to be inserted into the table
$firstName=$_POST['t1'];
$lastName=$_POST['t2'];
$userName=$_POST['t3'];
$password=$_POST['t4'];
$gender=$_POST['r1'];
$language=$_POST['cb1'];
$caste=$_POST['r2'];
$address=$_POST['t5'];

// Sql query to be executed
$sql = "INSERT INTO registration (firstName,lastName,userName,password,gender,language,caste,address) VALUES ('$firstName','$lastName','$userName','$password','$gender','$language','$caste','$address')";
$result = mysqli_query($conn, $sql);

// Add a new trip to the Trip table in the database
if($result){
    echo "The record has been inserted successfully successfully!<br>";
}
else{
    echo "The record was not inserted successfully because of this error ---> ". mysqli_error($conn);
}
?>