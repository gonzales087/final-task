<?php
include 'connect.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Table</title>
</head>
<body>
    <div class="container">
        <button class="btn btn-primary my-5"><a href="index.php" class="text-light">Add</a>
        </button>
    </div>

        <table class="table">
                <thead>
                    <tr>
                    <th scope="col">id</th>
                    <th scope="col">Course</th>
                    <th scope="col">Subject Code</th>
                    <th scope="col">Course Id</th>
                    <th scope="col">Course Description</th>
                    <th scope="col">Total Units</th>
                    <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>

                <?php

                $sql="Select * from `crud_final`";
                $result=mysqli_query($con,$sql);
                if($result){
                    while($row=mysqli_fetch_assoc($result)){
                        $id=$row['id'];
                        $course=$row['course'];
                        $subject_code=$row['subject_code'];
                        $course_id=$row['course_id'];
                        $course_description=$row['course_description'];
                        $total_units=$row['total_units'];
                        echo '<tr>
                        <th scope="row">'.$id.'</th>
                        <td>'.$course.'</td>
                        <td>'.$subject_code.'</td>
                        <td>'.$course_id.'</td>
                        <td>'.$course_description.'</td>
                        <td>'.$total_units.'</td>
                        <td>
                        <button class="btn btn-primary"><a href="index.php?
                        updateid='.$id.'" class="text-light">Update</a></button>
                        <button class="btn btn-danger"><a href="delete.php?
                        deleteid='.$id.'" class="text-light">Delete</a></button>
                        </td>
                        </tr>';
                    }
                }

                ?>

        </table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>