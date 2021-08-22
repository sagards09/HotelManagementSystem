
<?php
require 'hotel.php';

// username and password sent from form 
$tbl_name = 'hotel';
$email = $_POST["email"];
$password=$_POST['password'];

// To protect MySQL injection
$email  = stripslashes($email);
$password = stripslashes($password);
$email = mysqli_real_escape_string($conn, $_POST['email']);
$password = mysqli_real_escape_string($conn, $_POST['password']);
$sql="SELECT * FROM $tbl_name WHERE email='$email' and password='$password'";
$result = mysqli_query($conn, $sql);

// Mysql_num_row is counting table row
$count = mysqli_num_rows($result);

// If result matched $username and $password, table row must be 1 row
if($count == 1)
{
// Register $username, $password and redirect to file "login_success.php"
session_start();
$_SESSION["email"] = $email;
echo "<script>alert('Logged in Sucessfully');</script>";
header("refresh:1;url=../page2/book_now.html");
} 

else {
$failed = 1;
echo "<script>alert('Loggin unSucessfully');</script>";
header("refresh:1;url=loginpage.html");
}
?>

