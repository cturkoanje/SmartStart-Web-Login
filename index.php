<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests"> 
    <title>SmartStart Get ID</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
<meta name="theme-color" content="#563d7c">
    <link href="signin.css" rel="stylesheet">
  </head>
  <body class="text-center">
    <form class="form-signin" id="login_form">
  <h1 class="h3 mb-3 font-weight-normal">Sign In to get your Device ID</h1>
  
  <span id="login_input">
  <label for="username" class="sr-only">Email address</label>
  <input type="email" name="username" id="username" class="form-control" placeholder="Email address" required autofocus>
  <label for="password" class="sr-only">Password</label>
  <input type="password" name="password" id="password" class="form-control" placeholder="Password" required autocomplete>
  <button class="btn btn-lg btn-primary btn-block" type="submit" id="signin_button">Sign in</button>
  </span>

  <p id="devices"></p>
  <p id="links">
    <div class="list-group">
      <a href="#" class="list-group-item disabled">Shortcut Downloads</a>
      <a href="https://www.icloud.com/shortcuts/b36483b9ee9041f39710941e3e7708d5" class="list-group-item list-group-item-action">Start My Car</a>
      <a href="https://www.icloud.com/shortcuts/43bff348b6434f35a08bf804bfde2770" class="list-group-item list-group-item-action">Unlock My Car</a>
      <a href="https://www.icloud.com/shortcuts/ae50f498b22148eb9a367762c9b916f9" class="list-group-item list-group-item-action">Lock My Car</a>
    </div>
  </p>
</form>
</body>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="app.js"></script>
</html>
