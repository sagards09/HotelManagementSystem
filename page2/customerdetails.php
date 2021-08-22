

<!DOCTYPE html>

<html lang="en">

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

    <title>Document</title>

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
    <h1>customer details</h1>

    <?php

        include("../page1/hotel.php");

    ?>

    <table width = "20%" border = "15" cellpadding = "7" cellspacing = "7">

        <thead>

            <th><h2>name</h2></th>
            <th><h2>email</h2></th>
            <th><h2>phone</h2></th>
            <th><h2>room</h2></th>
            <th><h2>message</h2></th>

        </thead>

        <tr>
                <?php 

                    $sql = "select * from hotel1"; 

                    $result = mysqli_query($conn,$sql); 

                    while($row = mysqli_fetch_array($result)) 

                    {
                        ?>
                        <tr>
                        <td><h5><i><?php echo $row['name'];?></i></h5></td>
                        <td><h5><i><?php echo $row['email'];?></i></h5></td>
                        <td><h5><i><?php echo $row['phone'];?></i></h5></td>
                        <td><h5><i><?php echo $row['room'];?></i></h5></td>
                        <td><h5><i><?php echo $row['message'];?></i></h5></td>
                        </tr>

                        <?php
                    }
                    

               ?>
        </tr>     

    </table>
    </center>  

</body>

</html>