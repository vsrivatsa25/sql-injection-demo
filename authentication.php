<?php 
include('connection.php'); 
$username = $_POST['user']; 
$password = $_POST['pass']; 
$sql = "select *from users where username = '$username' and password = '$password'"; 
$result = mysqli_query($con, $sql); 
$count = mysqli_num_rows($result); 
if($count == 1){ 
echo "<h1><center> Login successful. Welcome $username </center></h1><br><a href = 'index.html'>Back to main page</a>"; 
} 
else{ 
if($result->num_rows > 0) 
{ 
while($row = $result->fetch_assoc()) 
{ 
echo implode(" ", $row)." "; 
} 
}
//print_r($row); 
echo "<h1> Login failed. Invalid username or password.</h1><br><a href = 'index.html'>Back to main page</a>"; 
} 
?>