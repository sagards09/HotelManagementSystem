<?php
include_once '../page1/hotel.php';
if(count($_POST)>0) {
mysqli_query($conn,"UPDATE hotel1 set name='" . $_POST['name'] . "', email='" . $_POST['email'] . "', phone='" . $_POST['phone'] . "', room='" . $_POST['room'] . "' ,message='" . $_POST['message'] . "' WHERE email='" . $_POST['email'] . "'");
$message = "Record Modified Successfully";
}
$result = mysqli_query($conn,"SELECT * FROM hotel1 WHERE email='" . $_GET['email'] . "'");
$row= mysqli_fetch_array($result);
?>
<html>
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<link rel="stylesheet" href="customerdetails.css">

<meta charset="UTF-8">

<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Update customer Data</title>
</head>
<body>


<center>
<form name="frmUser" method="post" action="">
<div><?php if(isset($message)) { echo $message; } ?>
</div>
<div style="padding-bottom:5px;">
<a href="update.php">customer List</a>
</div>
Email: <br>
<input type="hidden" name="email" class="txtField" value="<?php echo $row['email']; ?>">
<input type="text" name="email"  value="<?php echo $row['email']; ?>">
<br>
Name: <br>
<input type="text" name="name" class="txtField" value="<?php echo $row['name']; ?>">
<br>
phone :<br>
<input type="text" name="phone" class="txtField" value="<?php echo $row['phone']; ?>">
<br>
Room:<br>
<input type="text" name="room" class="txtField" value="<?php echo $row['room']; ?>">
<br>
Message:<br>
<input type="text" name="message" class="txtField" value="<?php echo $row['message']; ?>">
<br>
<input type="submit" name="submit" value="Submit" class="buttom">

</form>
</center>
</body>
</html>