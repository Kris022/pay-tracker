<?php
  include("includes/preamble.php");
  include("includes/header.php");

  include("includes/sidenav.php");
 ?>

 <div class="addConDiv">
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
