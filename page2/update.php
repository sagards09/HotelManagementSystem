<?php
include_once '../page1/hotel.php';
$result = mysqli_query($conn,"SELECT * FROM hotel1");
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="styles.css">
<title>Delete customer data</title>
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
<nav class="navbar navbar-expand-sm style="background-color: #e3f2fd;">
  <ul class="navbar-nav">
    <li class="nav-item active">
      <a class="nav-link" href="book_now.html">Booking</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="photo gallery.html">Photo Gallery</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="update.php">dispaly</a>
    </li>
    
  </ul>

</nav>

  <center>
    <h1>update customer list</h1>
<table width = "10%" border = "10" cellpadding = "20" cellspacing = "5">
<tr>
<td>Name</td>
<td>Email</td>
<td>Phone</td>
<td>room</td>
<td>message</td>
<td>update</td>
<!-- <td>Action</td> -->
</tr>
<?php
$i=0;
while($row = mysqli_fetch_array($result)) {
if($i%2==0)
$classname="even";
else
$classname="odd";
?>
<tr class="<?php if(isset($classname)) echo $classname;?>">
<td><?php echo $row["name"]; ?></td>
<td><?php echo $row["email"]; ?></td>
<td><?php echo $row["phone"]; ?></td>
<td><?php echo $row["room"]; ?></td>
<td><?php echo $row["message"]; ?></td>
<td><a href="update-process.php?email=<?php echo $row["email"]; ?>">Update</a></td>
</tr>
<?php
$i++;
}
?>
</table>
</body>
</center>
</html>