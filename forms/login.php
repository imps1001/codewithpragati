<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags always come first -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <link href="../css/form-css.css" rel="stylesheet">
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
   <!-- Font Awesome -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://kit.fontawesome.com/95a2002ecf.js" crossorigin="anonymous"></script>
  <title> Login | Learn With Pragati</title>
</head>
<body>
    <header>
            <a href="../index.php" class="logo"><i class="fa-solid fa-code"></i> Learn With Pragati</a>
            <div id="menu" class="fas fa-bars"></div>
            <nav class="navbar">
                <ul>
                <li><a class="active" href="../index.php">Home</a></li>
                <li><a class="btn btn-lg btn-warning nav-item" href="./register.php">Register <i class="fa-solid fa-circle-right"></i></a></li>
                </ul>
            </nav>
    </header>
  <div class="form-body">
    <div class="form-container login-form">
      <div class="form-header">Login</div>
      <form action="../forms_submit/login_submit.php" method="POST">
        <div class="form-group">
          <label for="email">Email</label>
          <input type="email" id="email" name="email" placeholder="Email">
        </div>
        <div class="form-group">
          <label for="password">Password</label>
          <input type="password" id="password" name="password" placeholder="Password">
        </div>
        <div class="forgot-password mb-2">
          <a href="forgotpassword.php" class="mb-4">Forgot password?</a>
        </div>
        <button type="submit" class="login-button text-bold fw-bold">Login</button>
      </form>
    </div>
  </div>
  <script src="../js/script.js"></script></body>
</html>