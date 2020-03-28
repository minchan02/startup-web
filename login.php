<!DOCTYPE html>
<html>
  <head>
    <title>login</title>
    <link rel="stylesheet" href="login_style.css">
    <script src="https://kit.fontawesome.com/e4966bbdb0.js"></script>
  </head>


  <body>
    <div class="login-box">
    <h1>login</h1>
    <form action="validation.php" method="post">
      <div class="textbox">
        <i class="fa fa-user" aria-hidden="true"></i>
        <input type="text" placeholder="Username" name="name" value="" required>

      </div>
      <div class="textbox">
        <i class="fa fa-lock" aria-hidden="true"></i>
        <input type="password" placeholder="Password" name="password" value="" required>


      </div>
      <input class = "btn btn-primary"type="submit" value="Sign in" onclick="location.href='main.php'">
      <button type = "button" onclick="location.href = 'index.php'" class="back">Back</button>

    </form>
    </div>
  </body>
</html>
