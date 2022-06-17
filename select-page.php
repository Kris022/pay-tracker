<?php
  include("includes/preamble.php");
  include("includes/header.php");
 ?>

<div id="mySidenav" class="side-menu">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">ikonka</a>
  <a href="#">Add Lesson</a>
  <a href="#">View Lessons</a>
  <a href="#">View Lessons</a>
  <a href="#">View Lessons</a>
  <a href="#">View Lessons</a>
  <a href="#">Add New Group</a>
  <a href="#" class="logoutBtn">Logout</a>
</div>

<span onclick="openNav();"><i class="fa-solid fa-bars"></i></span>

<script type="text/javascript">
  function openNav() {
    document.getElementById("mySidenav").style.width = "250px";
  }

  /* Set the width of the side navigation to 0 */
  function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
  }
</script>

<?php
  include("includes/footer.php");
  include("includes/postamble.php");
 ?>
