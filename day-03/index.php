<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
     <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> 
</head>
<body>
    <?php
    include("dbconnection/dbconnection.php");
    include("model/students.php");
    $student = new Students;
    $getStudents = $student->getStudents ();
    ?>
    <div class="container">
    <div class="row clearfix">
        <a href="" class="btn btn-primary">Add Student</a>
    </div>
    <div class="row">
        <table class="table">
        <thead>
        <tr>
            <th>Student Id</th>
            <th>Name</th>
            <th>Father's Name</th>
            <th>Mother's Name</th>
            <th>E-mail</th>
            <th>Phone</th>
            <th>Address</th>
            <th>Status</th>
            <th>Action</th>

        </tr>
    </thead>
    <tbody>
        <?php foreach ($getStudents as $key=>$data){ ?>
        <tr>
            <td><?php echo $data['student_id'];?></td>
            <td><?php echo $data['name'];?></td>
            <td><?php echo $data['father_name'];?></td>
            <td><?php echo $data['mother_name'];?></td>
            <td><?php echo $data['email'];?></td>
            <td><?php echo $data['phone'];?></td>
            <td><?php echo $data['address'];?></td>
            <td><a href="" class="btn btn-success">Update</a><a href="" class="btn btn-danger">Delete</a> </td>

        </tr>
        <?php }?>
    </tbody>
        
        </table>
    </div>
    
    </div>


</body>
</html>


