<?php
  include("includes/preamble.php");
  include("includes/header.php");
  include("includes/sidenav.php");

 ?>

 <div class="addGrpForm">
   <h2>Add new group</h2>
   <?php
   include("forms/add-group-form.php");
   if (isset($_POST['addCrsBtn'])){
     addNewGroup($conn);
   }
    ?>
 </div>

<?php
  include("includes/footer.php");
  include("includes/postamble.php");
 ?>
