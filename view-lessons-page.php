<?php
  include("includes/preamble.php");
  include("includes/header.php");

  include("includes/header.php");

  include("includes/sidenav.php");
  //$month = date("m");
 ?>
</div>
<div class="conductedLessonData">
  <h1>Conducted Lessons</h1>
  <form action="" method="post">
    <p style="color:red;">DISPLAY CURRENT MONTH BY DEAFULT</p>

    <select class="" onchange="submit()" name="chosenMonth">
      <option selected disabled hidden >Select a month</option>
      <option value="January">January</option>
      <option value="February">February</option>
      <option value="March">March</option>
      <option value="April">April</option>
      <option value="May">May</option>
      <option value="June">June</option>
      <option value="July">July</option>
      <option value="August">August</option>
      <option value="September">September</option>
      <option value="October">October</option>
      <option value="November">November</option>
      <option value="December">December</option>
    </select>
  </form>

  <table>
    <tr>
      <th>Lesson</th>
      <th>Date</th>
      <th>Time</th>
      <th>Duration</th>
      <th>Group No</th>
      <th>Type</th>
      <th>Rate</th>
    </tr>
<?php

if (isset($_POST['chosenMonth'])){
  $month = $_POST['chosenMonth'];
  displayConductedLessons($conn, $month); // add year
  echo "<br>";
  showPayments($conn, $month);
}

 ?>
</table>
</div>

<?php
  include("includes/footer.php");
  include("includes/postamble.php");
 ?>
