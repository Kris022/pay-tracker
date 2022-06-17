<?php

function connectDB(){
  $host = "localhost";
  $db_user = "root";
  $db_password = "";
  $db_name = "pay-tracker-db";

  $conn = new mysqli($host, $db_user, $db_password, $db_name);

  if($conn->connect_error){
    die("Connection failed: " . $conn->connect_error);
  }
  return $conn;
}

function loginUser($conn){
  // connect to db
   $username = $_POST['login-username'];
   $password = $_POST['login-password'];

   $sql = "SELECT userID FROM users WHERE userID='$username' AND password='$password'";
   $result = mysqli_query($conn, $sql);
}

function addNewGroup($conn){
  $grpName = $_POST['groupName'];
  $grpDur = $_POST['groupDuration'];
  $lsnDay = $_POST['lessonDay']; // what dat the group takes place
  $lsnTime = $_POST['lessonTime'];  // what time of the day the lesson takes place
  $strtDate = $_POST['startDate']; // lesson statr date
  $grpType = $_POST['groupType'];  // individual or group class

  $sql = "INSERT INTO grouptbl (groupName, groupDuration, lessonDay, lessonTime, startDate, groupType) VALUES('$grpName', '$grpDur', '$lsnDay', '$lsnTime', '$strtDate', '$grpType')";

  $result = mysqli_query($conn, $sql);
  if($result){
    echo "added successfuly";
  }
  else{echo "Addition failed";}

}

function displayConductedLessons($conn, $month){
  $sql = "SELECT * FROM conducted_lessons WHERE userID='1' AND monthname(lessonDate)='$month' ORDER BY lessonDate";
  //$sql2 = "SELECT grouptbl.groupName FROM conducted_lessons INNER JOIN grouptbl ON conducted_lessons.groupName=grouptbl.groupName WHERE conducted_lessons.userID=1";
  $result = mysqli_query($conn, $sql);

  echo "<h2>Month: ".$month."</h2>";

  while($row = $result->fetch_assoc()){
    echo "<tr>";
      echo "<td>";
        echo $row['lessonName']." M".$row['moduleNum']."L".$row['lessonNum'];
      echo "</td>";

      echo "<td>";
        echo $row['lessonDate'];
      echo "</td>";

      echo "<td>";
        echo $row['lessonTime'];
      echo "</td>";

      echo "<td>";
        echo $row['duration'];
      echo "</td>";

      echo "<td>";
        echo $row['groupName'];
      echo "</td>";

      echo "<td>";
      echo $row['type'];
      echo "</td>";

      echo "<td>";
        echo "£".$row['price'];
      echo "</td>";

    echo "</tr>";
  }
//  echo "</table>";
}

function showPayments($conn, $month){
  $sql = "SELECT SUM(price) AS value_sum FROM conducted_lessons WHERE monthname(lessonDate)='$month'"; // where date = specified date
  $result = mysqli_query($conn, $sql);
  $row = mysqli_fetch_assoc($result);
  $sum = $row['value_sum'];
  echo "<h3>Total: £".$sum."</h3>";
}

function addConductedLesson($conn){
  $groupName = $_POST['groupName'];//$_POST['conGroupName'];//$_SESSION['selectedGroup'];  // conducted group name
  echo "$groupName";
  $lessonName = $_POST['lessonName'];
  $moduleNum = $_POST['moduleNum'];
  $lessonNum = $_POST['lessonNum'];
  $lessonDate = $_POST['lessonDate'];
  $lessonDur = $_POST['lessonDur'];
  $lessonDay = $_POST['lessonDay'];
  $lessonTime = $_POST['lessonTime'];
  $conductedGroupType = $_POST['conductedGroupType'];
  $rate = $_POST['groupRate'];

  $sql = "INSERT INTO conducted_lessons(userID, lessonName, moduleNum, lessonNum, groupName, lessonDate, lessonTime, duration, type, price) VALUES ('1', '$lessonName', '$moduleNum', '$lessonNum', '$groupName', '$lessonDate', '$lessonTime', '$lessonDur', '$conductedGroupType', '$rate')";

  $result = mysqli_query($conn, $sql);
  if ($result){
    echo "added successfuly";
  }
  else{
    echo "somethings wrong";
  }

}

function updatePriceData($conn){
  //$sql = "UPDATE conducted_lessons SET price='27.00' WHERE groupName='Online656_WED-6' OR groupName='Online679_FRI-6' OR groupName='Online171_SUN-6'";
  //$sql = "UPDATE conducted_lessons SET price='16.00' WHERE groupName='ENGind-74_THU-7'";
  $sql = "UPDATE conducted_lessons SET price='18.00' WHERE groupName='Online773_SUN-4'";

  $result = mysqli_query($conn, $sql);
  if ($result){
    echo  "successfuly";
  }
  else{
    echo "some error";
  }

}

function updateGroup($conn){
  //$sql = "UPDATE conducted_lessons SET type='Group'";
  $sql = "UPDATE conducted_lessons SET type='Individual' WHERE groupName='ENGind-74_THU-7'";

  $result = mysqli_query($conn, $sql);
  if ($result){
    echo  "successfuly";
  }
  else{
    echo "some error";
  }

}

function importData($conn){
  $file = fopen("lessons.csv","r");
  //print_r(fgetcsv($file));
  while(! feof($file)){
    $ar=fgetcsv($file);
    //print_r($ar[2]);
    echo "<br>";

    // set mod num and lesson num
    $module = substr($ar[0], -3, 1);
    $lesson = substr($ar[0], -1);

    // set lesson name
    $lName = substr($ar[0], 0, -4);
    $lName = rtrim($lName);

    if ($lName == '3D'){
      $lName = '3D Modelling';
    }
    else if ($lName == 'DC'){
      $lName = "Digital Creativity";
    }

    // get time
    if ($ar[2][0] == '6'){
      $lTime = '18:00';
    }
    else if ($ar[2][0] == '4'){
      $lTime = '16:00';
    }
    else if ($ar[2][0] == '7'){
      $lTime = '19:00';
    }

    // set lesson date
    $dateStr = str_replace('/', '-', $ar[1]);
    $lDate = date("Y-m-d", strtotime($dateStr));

    // get Duration
    if ($ar[3] == '1h' OR $ar[3] == '1H'){
      $lDur = '01:00';
    }
    else if ($ar[3] == '1.5h' OR $ar[3] == '1.5H'){
      $lDur = '01:30';
    }

    $sql = "INSERT INTO conducted_lessons (userID, lessonName, moduleNum, lessonNum, groupName, lessonDate, lessonTime, duration) VALUES('1', '$lName', '$module', '$lesson', '$ar[4]', '$lDate', '$lTime', '$lDur')";
    $result = mysqli_query($conn, $sql);
  }
  //echo $f[0];
  fclose($file);
}

 ?>
