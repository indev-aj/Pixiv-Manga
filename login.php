<?php

  if(isset($_POST['login'])) {
    echo $_POST['email'];
  }

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!--Import Google Icon Font-->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!-- Compiled and minified CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

  <title>Login</title>
</head>

<body>

  <?php include('./header.php') ?>

  <div class="container" style="margin-top: 50px;">
    <div class="row">
      <div class="col s12 l6 offset-l3">
        <div class="card">
          <div class="card-content">
            <form action="login.php" method="POST">
              <div class="input-field">
                <i class="material-icons prefix black-text">email</i>
                <input type="text" name="email" id="email">
                <label for="email">Email</label>
              </div>
              <div class="input-field">
                <i class="material-icons prefix black-text">lock</i>
                <input type="password" name="password" id="password">
                <label for="password">Password</label>
              </div>
              <div class="input-field">
                <button value="login" name="login" class="btn blue lighten-1 waves-effect waves-dark" style="width: 100%;">Login</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

</body>

</html>