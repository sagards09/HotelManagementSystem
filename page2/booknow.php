<?php
    include("conn.php");

?>

<?php
 
 $name = $_POST['name'];
 $email = $_POST['email'];
 $phone = $_POST['phone'];
 $room = $_POST['_u671951939132724816'];
 $message = $_POST['message'];


 $sql = "insert into hotel1(name, email, phone, room, message) values('$name','$email','$phone','$room','$message')";

 if(mysqli_query($conn, $sql))
    {
        echo "<script>alert('Inserted Succesfully')</script>";
        header("refresh:1;url=check in check out.html");
    }
    else{
        echo "<script>alert('Insert Unsuccesfull')</script>";
    }
?>