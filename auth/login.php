<?php require("../includes/header.php"); ?>
<?php require("../config/config.php"); ?>
<?php
  //take the data from the inputs
  if (isset($_POST['submit'])){
    if (empty($_POST['email']) || empty($_POST['password'])){
      echo "<script>alert('One or more inputs are empty');</script>";
    } else {
      $email = $_POST['email'];
      $password = $_POST['password'];

      // check for the email with a query using a prepared statement
      $login = $conn->prepare("SELECT * FROM users WHERE email=:email");
      $login->execute([
        ':email' => $email
      ]);
      $fetch = $login->fetch(PDO::FETCH_ASSOC);
      
      if ($login->rowCount() > 0){
        // Verify the password
        if (password_verify($password, $fetch['mypassword'])) {
          echo "<script>alert('Login successful');</script>";
          // You can redirect to another page or start a session here
          $_SESSION['username'] = $fetch['username'];
          $_SESSION['user_id'] = $fetch['id'];

          header("Location: " .APPURL . "");
        } else {
          echo "<script>alert('Incorrect password');</script>";
        }
      } else {
        echo "<script>alert('Email not found');</script>";
      }

      // $login = $conn->query("SELECT * FROM users WHERE email =  '$email'");
      // $login->execute();
      // $fetch = $login->fetch(PDO::FETCH_ASSOC);
      // if ($login->rowCount() > 0) {
      //   if (password_verify($password, $fetch['mypassword'])) {
      //     // echo "<script> Alert('Password is fine!');</script>";
      //   } else {
      //     echo "<script> Alert('Email or Password is wrong!');</script>";
      //   }
      // } else {
      //   echo "<script> Alert('Email or Password is wrong!');</script>";
      // }
    }
  }
?>


  <div class="reservation-form">
    <div class="container">
      <div class="row">
        
        <div class="col-lg-12">
          <form id="reservation-form" method="POST" role="search" action="login.php">
            <div class="row">
              <div class="col-lg-12">
                <h4>Login</h4>
              </div>
              <div class="col-md-12">
                  <fieldset>
                      <label for="Name" class="form-label">Your Email</label>
                      <input type="text" name="email" class="Name" placeholder="email" autocomplete="on" required>
                  </fieldset>
              </div>

              <!-- <div class="col-lg-6">
                <fieldset>
                    <label for="Number" class="form-label">Your Phone Number</label>
                    <input type="text" name="Number" class="Number" placeholder="Ex. +xxx xxx xxx" autocomplete="on" required>
                </fieldset>
              </div>
              <div class="col-lg-6">
                  <fieldset>
                      <label for="chooseGuests" class="form-label">Number Of Guests</label>
                      <select name="Guests" class="form-select" aria-label="Default select example" id="chooseGuests" onChange="this.form.click()">
                          <option selected>ex. 3 or 4 or 5</option>
                          <option type="checkbox" name="option1" value="1">1</option>
                          <option value="2">2</option>
                          <option value="3">3</option>
                          <option value="4+">4+</option>
                      </select>
                  </fieldset>
              </div>
              <div class="col-lg-6">
                <fieldset>
                    <label for="Number" class="form-label">Check In Date</label>
                    <input type="date" name="date" class="date" required>
                </fieldset>
              </div>
              <div class="col-lg-12">
                  <fieldset>
                      <label for="chooseDestination" class="form-label">Choose Your Destination</label>
                      <select name="Destination" class="form-select" aria-label="Default select example" id="chooseCategory" onChange="this.form.click()">
                          <option selected>ex. Switzerland, Lausanne</option>
                          <option value="Italy, Roma">Italy, Roma</option>
                          <option value="France, Paris">France, Paris</option>
                          <option value="Engaland, London">Engaland, London</option>
                          <option value="Switzerland, Lausanne">Switzerland, Lausanne</option>
                      </select>
                  </fieldset>
              </div> -->

              <div class="col-md-12">
                <fieldset>
                    <label for="Name" class="form-label">Your Password</label>
                    <input type="text" name="password" class="Name" placeholder="password" autocomplete="on" required>
                </fieldset>
              </div>
              <div class="col-lg-12">                        
                  <fieldset>
                      <button type="submit" name="submit" class="main-button">login</button>
                  </fieldset>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

  <?php require("../includes/footer.php"); ?>