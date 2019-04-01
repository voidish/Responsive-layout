<?php 

      $host = "localhost";
      $user = "root";
      $pasword = "sudn 123";
      $db = "carRental";

      // establishing the connection
      $connection = mysqli_connect($host, $user, $password);
      // selecting the database from mysql
      $database = mysqli_select_db($db);

      // to check if the textbox is empty
      if(isset($_POST['username'])) {
            $uname = $_POST['username'];
            $password = $_POST['password'];

            $sql = "select * from  users where username = '".$uname."' AND password = '".$password."'";

            $result = mysql_query($sql);

            // to check the db recorde that they're available or not
            if(mysql_num_rows($result) == 1) {
                  echo " You have successfully logged in";
            } else {
                  echo "You have entered incorrect username or password";
            }
      }

?>


<!DOCTYPE html>
<html lang="en">

<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta name="desctiption" content="Affordable cars for rent">
      <meta name="keywords" content="cars, rent, affordable, easy">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <title>Webdesign company | Welcome </title>
      <link rel="stylesheet" href="css/style.css">
</head>

<body>
      <header>
            <div class="container">
                  <div id="branding">
                        <h1><span class="highlight">Affordable</span> Car Rental</h1>
                  </div>
                  <nav>
                        <ul>
                              <li><a href="index.php">Home</a></li>
                              <li><a href="about.html">About</a></li>
                              <li><a href="services.php">Services</a></li>
                              <li class="current"><a href="login.php">Login</a></li>
                        </ul>
                  </nav>
            </div>
      </header>

      <section id="login">
            <div class="container">
                  <div id="loginBox">
                        <h1>Login</h1>
                        <!-- action is # because i want to display any message on this page  -->
                        <form action="#" method="POST">
                              <div class="form_input">
                                    <input type="text" name="username" placeholder="Enter your username">
                              </div>
                              <div class="form_input">
                                    <input type="password" name="password" placeholder="Enter your password">
                              </div>
                              <input type="submit" name="submit" value="LOGIN" class="button_1">
                        </form>
                  </div>
            </div>
      </section>

      <footer>
            <p>Affordable cars for rent &copy; 2019</p>
      </footer>
</body>

</html>