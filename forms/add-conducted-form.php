<form class="addConForm" method="post">

  
  <label for="conGroupName">Select a group: </label>
  <select name="conGroupName" onchange="submit()">
  <option value="" selected disabled hidden>Select group name</option>
  <?php
  $grpName = $_POST['conGroupName'];
  $_SESSION['selectedGroup'] = $grpName; // selected group name

    $sql = "SELECT groupName FROM grouptbl";
    $result = mysqli_query($conn, $sql);
    while ($row = $result->fetch_assoc()){
      echo "<option>";
      echo $row['groupName'];
      echo "</option>";
    }
    echo "<option value=''>Replacement</option>";

   ?>
 </select>

 <?php
  if (isset($_POST['conGroupName'])){
    $today = date("Y-m-d");
    $day = date("l");
    $sql = "SELECT * FROM grouptbl WHERE groupName='$grpName'";
    $result = mysqli_query($conn, $sql);

    echo "<label for='groupName'>Group Name</label>";
    echo "<input type='text' name='groupName' placeholder='Group Number' value='$grpName'>";

    echo "<label for='lessonName'>Lesson Name</label>";
    echo "<input type='text' name='lessonName' placeholder='Lesson Name'>"; // subject instead lesson name?

    echo "<label for='module'>Module Num</label>";
    echo "<input type='number' placeholder='module' name='moduleNum'>";

    echo "<label for='lesson'>Lesson Num</label>";
    echo "<input type='number' placeholder='lesson' name='lessonNum'>";

    echo "<label for='lessonDate'>Date of the lesson</label>";
    echo "<input type='date' name='lessonDate' value='".$today."'>";

    $row = $result->fetch_assoc();
      echo "<label for='lessonDur'>Lesson Duration</label>";
      echo "<input type=time name='lessonDur' value='".$row['groupDuration']."'>";
      echo "<label for='lessonDay'>Lesson Day</label>";
      echo "<input type='text' name='lessonDay' value='".$row['lessonDay']."'>";
      echo "<label for='lessonTime'>Lesson Time</label>";
      echo "<input type=time name='lessonTime' value='".$row['lessonTime']."'>";

      echo "<label for='groupRate'>Rate:</label>";
      echo "<input type='number' name='groupRate' value='".$row['rate']."'>";

    echo "<label for='conductedGroupType'>Group Type:</label>";
    echo "<select name='conductedGroupType'>";
      echo "<option selected disabled hidden>Select group type</option>";
      echo "<option value='group'>Group</option>";
      echo "<option value='individual'>Individual</option>";
    echo "</select>";

    echo "<input type='submit' name='addConLesson' value='submit'>";

  }
  ?>
</form>
