<!DOCTYPE html>
<html lang="en">
<head>
  <title>Creative Eye Photography</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>


<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "photographyDB";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM orderTB";
$result = $conn->query($sql);

?>
<div class="container">
  <h1 align="center"><b>Wedgraphy studio</b></h1>
  <h3 align="center"><b>To Know Your Booked Data</b></h3>
            
  <table class="table table-dark table-striped">
    <thead>
      <tr>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Organization Name</th>
        <th>Category</th>
        <th>State</th>
        <th>City</th>
        <th>Email</th>
        <th>PinCode</th>
        <th>Order Date </th>
      </tr>
    </thead>
    <tbody>
<?php
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {

?>
    
      <tr>
        <td><?php  echo  $row["fname"]. "<br>"; ?></td>
        <td><?php  echo  $row["lname"]. "<br>"; ?></td>
        <td><?php  echo  $row["oname"]. "<br>"; ?></td>
        <td><?php  echo  $row["category"]. "<br>"; ?></td>
        <td><?php  echo  $row["state"]. "<br>"; ?></td>
        <td><?php  echo  $row["city"]. "<br>"; ?></td>
        <td><?php  echo  $row["email"]. "<br>"; ?></td>
        <td><?php  echo  $row["pincode"]. "<br>"; ?></td>
        <td><?php  echo  $row["orderdate"]. "<br>"; ?></td>
      </tr>
     
    <?php
        
    }
} else {
    echo "0 results";
}

$conn->close();
?>

 </tbody>
  </table>
</div>
</body>
</html>
