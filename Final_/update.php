<?php
include 'connect.php';
$id=$_GET['updateid'];
if(isset($_POST['submit'])){
    $course=$_POST['course'];
    $subject_code=$_POST['subject_code'];
    $course_id=$_POST['course_id'];
    $course_description=$_POST['course_description'];
    $total_units=$_POST['total_units'];

    $sql="update `crud_final` set id=$id, course='$course', subject_code='$subject_code',
    course_id='$course_id, course_description='$course_description', total_units='$total_units'
    where id=$id";
    $result=mysqli_query($con,$sql);
    if($result){
        echo "Updated Successfully"
    }else{
        die(mysqli_error($con));
    }
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Final Task</title>
</head>
<body>
    <div class="container my-5">
        <form method="post">
            <select class="form-select" aria-label="Default select example" name="course">
                <option selected>Courses</option>
                <option value="1">BSCS</option>
                <option value="2">BSIT</option>
                <option value="3">MIT</option>
            </select><br>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Subject Code</label>
                <input type="text" class="form-control"
                    name="subject_code">
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Course Id</label>
                <input type="text" class="form-control"
                    name="course_id">
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Course Description</label>
                <input type="text" class="form-control"
                    name="course_description">
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Total Units</label>
                <input type="text" class="form-control"
                    name="total_units">
            </div>


            <button type="submit" class="btn btn-primary" name="submit">Update</button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>