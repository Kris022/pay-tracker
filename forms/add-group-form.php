<form class="form1" method="post">
  <p>Group Name</p>
  <input type="text" name="groupName" placeholder="Group Name">

  <p>Group Duration</p>
  <input type="time" name="groupDuration" value="">

  <p>Group Day</p>
  <input type="text" name="lessonDay" placeholder="Lesson Day">

  <p>Lesson Time</p>
  <input type="time" name="lessonTime" value="">

  <p>Group Start Date</p>
  <input type="date" name="startDate" value="">

  <p>Select Group Type</p>
  <select class="" name="groupType">
  <option value="" selected disabled hidden>Select group type</option>
    <option value="group">Group</option>
    <option value="individual">Individual</option>
  </select>  

  <div class="">
    <input type="submit" name="addCrsBtn" value="Add Course">
  </div>
</form>
