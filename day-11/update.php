<?php
session_start();
?>
<?php 
include("Dbconnection/dbconnection.php");
include("model/students.php");
$student = new Students();
$id =$_GET['id'];
$data = $student->getStudentById($id);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
 <!-- Latest compiled and minified CSS -->
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

</head>
<body>
    <div class="container">
        <div class="row clearfix">
            <a href="index.php" class="btn btn-success">Student's List</a>
        </div>

        <div class="row">
            <div class="col-12" id="show-message">
            <?php if(isset($_SESSION['message'])) echo $_SESSION['message'] ?>

            </div>
            <div class="col-6">
               

                <form id="user-form"  action="controller/StudentController.php" method="post">
                
                <div class="form-group">
                    <label for="student_id">Student ID</label>
                    <input type="text" name="student_id" id="student_id" class="form-control" value="<?php echo $data['student_id'];?>" required="">
                </div>
                <div class="form-group">
                    <label for="name">Student Name</label>
                    <input type="text" name="name" id="name" class="form-control" value="<?php echo $data['name'];?>" required="">
                </div>
                <div class="form-group">
                    <label for="father_name">Father's Name</label>
                    <input type="text" name="father_name" id="father_name" class="form-control" value="<?php echo $data['father_name'];?>" required="">
                </div>
                <div class="form-group">
                    <label for="mother_name">Mother's Name</label>
                    <input type="text" name="mother_name" id="mother_name" class="form-control" value="<?php echo $data['mother_name'];?>" required="">
                </div>
            </div>
            <div class="col-6">
                 <div class="form-group">
                    <label for="email">E-mail ID</label>
                    <input type="text" name="email" id="email" class="form-control" value="<?php echo $data['email'];?>" required="">
                </div>
                <div class="form-group">
                    <label for="phone">Phone Number</label>
                    <input type="text" name="phone" id="phone" class="form-control" value="<?php echo $data['phone'];?>" required="">
                </div>
                <div class="form-group">
                    <label for="address">Address</label>
                    <input type="text" name="address" id="address" class="form-control" value="<?php echo $data['address'];?>" required="">
                </div>
                
                </div>
                <input type="hidden" name="id" value="<?php echo $data['id']; ?>" required="">
                <input type="hidden" name="action" value="update" required="">
                <div class="form-group">
                    <label for="submit">&nbsp;</label>
                    <input type="submit" name="submit" class="btn btn-success" value="Update Student">
                </div>
            </form>
                
            
        </div>



    </div>
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script> 

</body>
</html>

<?php
unset($_SESSION['message']);
?>