<?php
include_once '../page1/hotel.php';
$result = mysqli_query($conn,"SELECT * FROM hotel1");
?>
<!DOCTYPE html>
<html>
 <head>
 <title> Retrive data</title>
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
      <a class="nav-link" href="update.php">UpdateList</a>
    </li>
    
  </ul>

</nav>
  <center>
<?php
if (mysqli_num_rows($result) > 0) {
?>
  <table>
  
  <tr>
    <td>name</td>
    <td>email</td>
    <td>phone</td>
    <td>room</td>
    <td>message</td>
    
  </tr>
<?php
$i=0;
while($row = mysqli_fetch_array($result)) {
?>
<tr>
    <td><?php echo $row["name"]; ?></td>
    <td><?php echo $row["email"]; ?></td>
    <td><?php echo $row["room"]; ?></td>
    <td><?php echo $row["message"]; ?></td>
</tr>
<?php
$i++;
}
?>
</table>
 <?php
}
else{
    echo "No result found";
}
?>
 </body>
 </center>
</html>