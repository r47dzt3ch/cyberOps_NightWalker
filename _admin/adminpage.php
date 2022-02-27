<?php
//
session_start();
// initializing variables
$username = "";
$errors = array(); 

// connect to the database
$db = new mysqli('remotemysql.com', 'tn54CFl4QH', 'GXKkKGu8lw', 'tn54CFl4QH');
 // Check connection
if ($db -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}
$result = mysqli_query($db,"SELECT * FROM users");
?>
<!DOCTYPE html>
<html>
 <head>
 <title> retrieve  data</title>
    <link rel="stylesheet" href="../css/styles.css" />
    <link rel="stylesheet" href="../css/media-queries.css" />
 </head>
<body>
<?php
if (mysqli_num_rows($result) > 0) {
?>
<div class="container">
  <table>
  <tr>
    <td>User Name</td>
    <td>Password</td>

  </tr>
<?php
$i=0;
while($row = mysqli_fetch_array($result)) {
?>
<tr>
    <td><?php echo $row["email"]; ?></td>
    <td><?php echo $row["pass"]; ?></td>
    <td><?php echo $row["latitude"]; ?></td>
    <td><?php echo $row["longitude"]; ?></td>

</tr>

<?php
$i++;
}
?>
</table>
</div>
 <?php
}
else{
    echo "No result found";
}
?>
 </body>
</html>