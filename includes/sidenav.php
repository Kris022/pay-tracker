
<div id="mySidenav" class="side-menu">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()"><i class="fa-solid fa-bars"></i></a>
  <a href="add-lsn-page.php"><i class="fas fa-chalkboard-teacher"></i>Add Lesson</a>
  <a href="view-lessons-page.php"><i class="fas fa-table"></i>View Lessons</a>
  <a href="add-group-page.php"><i class="fas fa-users"></i>Add New Group</a>
  <a href="home.php"><i class="fa-solid fa-house"></i>Home</a>
  <a href="#" class="logoutBtn"><i class="fa-solid fa-door-open"></i>Logout</a>
</div>

<span onclick="openNav();">
<div class="side-nav-small">
  <i class="fa-solid fa-bars"></i>
</div>
</span>

<script type="text/javascript">
  function openNav() {
    document.getElementById("mySidenav").style.width = "250px";
  }

  /* Set the width of the side navigation to 0 */
  function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
  }
</script>
