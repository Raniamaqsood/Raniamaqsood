<?php
include('header.php');
include('dbconnection.php');

//update
if(isset($_REQUEST['requpdate']))
    //Checking for empty fields
    if( ($_REQUEST['course_id'] == "") || ($_REQUEST['course_name'] == "") || ($_REQUEST['course_desc'] == "") || ($_REQUEST['course_author'] == "") || ($_REQUEST['course_duration'] == "") || ($_REQUEST['course_price'] == "") || ($_REQUEST['course_original_price'] == "") ){
        $msg = '<div class = "alert alert-warning col-sm-6 m1-5 mt-2">Fill All Fields</div>';
    }
    else
    {
        $cid = $_REQUEST['course_id'];
        $cname = $_REQUEST['course_name'];
        $cdesc = $_REQUEST['course_desc'];
        $cauthor = $_REQUEST['course_author'];
        $cduration = $_REQUEST['course_duration'];
        $cprice = $_REQUEST['course_price'];
        $coriginalprice = $_REQUEST['course_original_price'];
        $cimg = './img/courseimg/'. $_FILES['course_img']['name'];

        $sql = "UPDATE  addcourse SET course_id = '$cid', course_name = '$cname', course_desc = '$cdesc', course_author = '$cauthor', course_duration = '$cduration', course_price = '$cprice', course_original_price = '$coriginalprice', course_img= '$cimg'
        WHERE course_id = '$cid'";
        if($conn->query($sql) == TRUE){
            //below msg display on form submit success
            $msg = '<div class = "alert alert-warning col-sm-6 m1-5 mt-2">Updated Successfully</div>';
        }
        else{
            $msg = '<div class = "alert alert-warning col-sm-6 m1-5 mt-2">Unable to Update</div>';
        }
    }




?>

<div class="col-sm-6 mt-5 mx-3 " >
    <form action="" method="post" enctype="multipart/form-data" style="background-color:#E6E6FA;  padding: 50px;">
  <fieldset>
    <legend class="text-center">Update Course Details</legend>

    <?php
    if(isset($_REQUEST['view'])){
        $sql = "SELECT * FROM addcourse WHERE course_id = {$_REQUEST['id']}";
        $result = $conn->query($sql);
        $row = $result->fetch_assoc();
    } 
    ?>



    <div class="mb-3">
    <label for="course_id">Course ID</label>
    <input type="text" class="form-control" id="course_id" name="course_id" value="<?php if(isset($row['course_id'])) {echo $row['course_id'];} ?>" readonly>
    </div>
    <div class="mb-3">
    <label for="course_name">Course Name</label>
    <input type="text" class="form-control" id="course_name" name="course_name" value="<?php if(isset($row['course_name'])) {echo $row['course_name'];} ?>">
    </div>
    <div class="mb-3">
    <label for="course_desc">Course Description</label>
    <textarea name="course_desc" id="course_desc" class="form-control" row="2" ><?php if(isset($row['course_desc'])) {echo $row['course_desc'];} ?></textarea>
    </div>
    <div class="mb-3">
    <label for="course_author">Author</label>
    <input type="text" class="form-control" id="course_author" name="course_author" value="<?php if(isset($row['course_author'])) {echo $row['course_author'];} ?>">
    </div>
    <div class="mb-3">
    <label for="course_duration">Course Duration</label>
            <input type="text" class="form-control" id="course_duration" name="course_duration" value="<?php if(isset($row['course_duration'])) {echo $row['course_duration'];} ?>">
    </div>
    <div class="mb-3">
    <label for="course_original_price">Course Original Price</label>
            <input type="text" class="form-control" id="course_original_price" name="course_original_price" value="<?php if(isset($row['course_original_price'])) {echo $row['course_original_price'];} ?>">
    </div>
    <div class="mb-3">
    <label for="course_price">Course Selling Price</label>
            <input type="text" class="form-control" id="course_price" name="course_price" value="<?php if(isset($row['course_price'])) {echo $row['course_price'];} ?>">
    </div>
    <div class="mb-3">
    <label for="course_img">Course Image</label>
    <img src="<?php if(isset($row['course_img'])) {echo $row['course_img'];} ?>" alt="" class = "img-thumbnail">
            <input type="file" class="form-control-file" id="course_img" name="course_img">
    </div>
    <div class="text-center">
            <button type="submit" class="btn btn-danger" id="requpdate" name="requpdate">Update</button>
            <a href="admincourses.php" class="btn btn-secondary">Close</a>
        </div>
  </fieldset>
        <?php if(isset($msg)) {echo $msg;} ?>
    </form>
</div>
</div>
</div>










