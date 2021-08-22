<?php
    include("hotel.php");

?>

<?php
 
 $name = $_POST['Name'];
 $email = $_POST['email'];
 $password = $_POST['password'];
 $file = $_FILES['myfiles']['name'];
 $filesTMP = $_FILES['myfiles']['tmp_name'];
 $folder = "pics/";

  move_uploaded_file($filesTMP,$folder.$file);

 $sql = "insert into hotel(img,name, email, password) values('$file','$name','$email','$password')";

 if(mysqli_query($conn, $sql))
    {
        echo "<script>alert('Inserted Succesfully')</script>";
        header("refresh:1;url=loginPage.html");
    }
    else{
        echo "<script>alert('Insert Unsuccesfull')</script>";
    }
?>