<?php
  require "../Includes/header.php";
?>
<?php 
  require "../config/config.php"; 
?>
<?php 
  if (isset($_post["submit"])){
    if (empty($_POST["username"]) or empty($_POST["email"]) or empty($_POST["password"])){
      echo "<script> alert('some input are empty please enter all inputs');</script>";
    } else {
      $username = $_POST["username"];
      $email = $_POST["email"];
      $password = password_hash($_POST["password"], PASSWORD_DEFAULT);

      $insert = $conn ->prepare(
        "INSERT INTO users (username, email, mypassword ) 
        VALUES (:username, :email, :mypassword)"
      );
      $insert->execute([
        ":username" => $username,
        ":email" => $email,
        ":mypassword" => $password
      ]);

      header("location: login.php");


    }
  }

?>



  <div class="reservation-form">
    <div class="container">
      <div class="row">
        
        <div class="col-lg-12">
          <form id="reservation-form" name="gs" method="POST" role="search" action="login.php">
            <div class="row">
              <div class="col-lg-12">
                <h4>Register</h4>
              </div>
              <div class="col-md-12">
                <fieldset>
                    <label for="Name" class="form-label">Username</label>
                    <input type="text" name="username" class="username" placeholder="username" autocomplete="on" required>
                </fieldset>
              </div>

              <div class="col-md-12">
                  <fieldset>
                      <label for="Name" class="form-label">Your Email</label>
                      <input type="text" name="email" class="email" placeholder="email" autocomplete="on" required>
                  </fieldset>
              </div>
              
              <div class="col-md-12">
                <fieldset>
                    <label for="Name" class="form-label">Your Password</label>
                    <input type="password" name="password" class="password" placeholder="password" autocomplete="on" required>
                </fieldset>
              </div>
              <div class="col-lg-12">                        
                  <fieldset>
                      <button type="submit" name="submit" class="main-button">register</button>
                  </fieldset>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
<?php
  require "../Includes/footer.php";
?>