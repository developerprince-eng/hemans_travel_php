
<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>HMST Register User</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
<link rel="stylesheet" href="assets/css/login.css">
</head>
<body>
<!-- partial:index.partial.html -->
<section class="login__section">
  <form action="controllers/register_user.php" class="login__card" method="POST">
    <label class="login__label" for="email">E-mail:</label>
    <input class="login__input" id="email" type="email" name="useremail" placeholder="youremail@gmail.com">
    <label class="login__label" for="password">Password:</label>
    <input class="login__input" id="password" type="password" name="password" placeholder="password">
    <label class="login__label" for="password2">Confirm Password:</label>
    <input class="login__input" id="password2" type="password" name="password2" placeholder="password">
    <button type="submit" class="login__button ">Register</button>
</form>
  
</section>
<!-- partial -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
<script  src="assets/js/login.js"></script>

</body>
</html>