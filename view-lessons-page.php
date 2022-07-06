<?php
  include("includes/preamble.php");
  include("includes/header.php");
 ?>

<div class="container-centered">
  <div class="conductedLessonData">
    <h1>Conducted Lessons</h1>
    <form method="post">
      <select class="" onchange="submit()" name="month">
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
  </div>

  <?php
  if (isset($_POST['month'])) {
    $month = $_POST['month'];
  }
   ?>

  <div class="table-div">
    <?php if ($month != ""): ?>

      <h2>Month: <?php echo $month; ?></h2>
      <?php showPayments($conn, $month); ?>

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
        $result = $conn->query("SELECT * FROM conducted_lessons WHERE userID='1' AND monthname(lessonDate)='$month' ORDER BY lessonDate");
        while($row = $result->fetch_assoc()){ ?>

          <tr>
            <td><?php echo $row['lessonName']." M".$row['moduleNum']."L".$row['lessonNum']; ?></td>
            <td><?php echo $row['lessonDate']; ?></td>
            <td><?php echo $row['lessonTime']; ?></td>
            <td><?php echo $row['duration']; ?></td>
            <td><?php echo $row['groupName']; ?></td>
            <td><?php echo $row['type']; ?></td>
            <td>£<?php echo $row['price']; ?></td>
          </tr>
          <?php
          }
        endif;
        ?>
      </table>

  </div>
</div>


<?php
  include("includes/footer.php");
  include("includes/postamble.php");
 ?>
