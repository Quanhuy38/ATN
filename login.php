<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login Page</title>
    <link
      href="https://fonts.googleapis.com/css2?family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css"
    />
    <link rel="stylesheet" href="css/login-style.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="js/scripts.js"></script>
  </head>
  <body>
    <!-- Navbar -->
    <nav class="navbar">
      <div class="inner-width">
        <a href="/" class="logo"></a>
        <button class="menu-toggler">
          <span></span>
          <span></span>
          <span></span>
        </button>
        <div class="navbar-menu">
          <a href="#">Home</a>
          <a href="#">About</a>
          <a href="#">Services</a>
          <a href="#">Contact</a>
        </div>
      </div>
    </nav>

    <!-- Home -->
    <section class="home"></section>
    <p>
      Made by Kyn Nguyen <br />
      Thanks
    </p>

    <!-- Login -->
    <form action="login.html" class="login-form">
      <h1>Login</h1>

      <div class="txtb">
        <input type="text" />
        <span data-placeholder="Username"></span>
      </div>

      <div class="txtb">
        <input type="password" />
        <span data-placeholder="Password"></span>
      </div>
      <input type="submit" class="logbtn" value="Login" />
      <div class="bottom-text">
        Don't have a account? <a href="#">Sign up</a>
      </div>
    </form>
  </body>
</html>
