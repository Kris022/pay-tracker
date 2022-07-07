<?php
  include("includes/preamble.php");
  include("includes/header.php");
 ?>

<div class="container-centered">
  <h2>Add Conducted Lesson</h2>

 <?php
   include("forms/add-conducted-form.php");

   if (isset($_POST['addConLesson'])){
     addConductedLesson($conn);
   }
  ?>
 </div>

<?php
  include("includes/footer.php");
  include("includes/postamble.php");
 ?>
