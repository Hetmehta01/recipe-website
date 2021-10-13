<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "recipe-website";

$conn = mysqli_connect($servername,$username,$password,$dbname);

if($conn)
{
    // echo "Connection OK";
}
else
{
    echo "Connection Failed ".mysqli_connect_error();
}

$name =  $_REQUEST['fullname'];
$email =  $_REQUEST['email'];
$subject = $_REQUEST['subject'];
$message = $_REQUEST['message'];

$sql = "INSERT INTO contactus  VALUES ('$name', '$email','$subject','$message')";
// $sql = "INSERT INTO contactus  VALUES ('dev', '789@gh.com','hahaha','lol')";

if(mysqli_query($conn, $sql)){
    echo "<h3>data stored in a database successfully." 
        . " Please browse your localhost php my admin" 
        . " to view the updated data</h3>"; 

    // echo nl2br("\n$name\n $email");
} else{
    echo "ERROR: Hush! Sorry $sql. " 
        . mysqli_error($conn);
}

mysqli_close($conn);

?>