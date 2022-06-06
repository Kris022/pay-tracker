<?php
  include("includes/preamble.php");
  include("includes/header.php");
 ?>

<?php
  include("forms/login-form.php");  // include login form

  // login user
  if (isset($_POST['login-btn'])){
    loginUser($conn);
  }
 ?>

<?php
  include("includes/footer.php");
  include("includes/postamble.php");
 ?>
