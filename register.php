<?php 
include('connection.php'); 
$username = $_POST['user']; 
$password = $_POST['pass']; 
$sql = "insert into users (username,password) values ('$username','$password');"; 

if ($con->query($sql) === TRUE) {
    echo "<h1><center> User Registration successful </center></h1><br>
    <a href = 'index.html'>Back to main page</a>"; 
} else {
    echo "<h1> Registration failed. Invalid username or password.</h1><br><a href = 'index.html'>Back to main page</a>"; 
}
$con->close();
?>