<?php
session_start();
if(empty($_SESSION['user_id']) && $_SESSION['user_type'] ==''){
    header('Location:login.php');
    exit();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>


<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.6.4/css/buttons.bootstrap4.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
    <?php
    include("dbconnection/dbconnection.php");
    include("model/students.php");
    $student = new Students;
    $getStudents = $student->getStudents ();
    ?>
    <div class="container">
        <div class="col-12 mt-4">
            <h1>Management System</h1>
        </div>
    <div class="row clearfix">
        <a href="add_student.php" class="btn btn-primary">Add Student</a> <a href="javascript:void(0)" onclick="document.getElementById('logout-form').submit()"  class="btn btn-primary">Log Out</a>
    </div>
    <form id="logout-form" action="controller/UsersController.php" method="post">
    <input type="hidden" name="action" value="logout_process">

    </form>
    <div class="row mt-4">
        <table class="table" id="example">
        <thead>
        <tr>
            <th>SL No</th>
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
            <td><?php echo $key+1;?></td>
            <td><?php echo $data['student_id'];?></td>
            <td><?php echo $data['name'];?></td>
            <td><?php echo $data['father_name'];?></td>
            <td><?php echo $data['mother_name'];?></td>
            <td><?php echo $data['email'];?></td>
            <td><?php echo $data['phone'];?></td>
            <td><?php echo $data['address'];?></td>
            <td><?php echo $data['status'];?></td>

            <td><a href="update.php?id=<?php echo $data['id']; ?>" class="btn btn-success btn-sm">Update</a><a href="controller/StudentController.php?action=delete&id=<?php echo $data['id'];?>" onClick="returnconfirm('Delete all data of the row')" class="btn btn-danger btn-sm">Delete</a></td>
        </tr>
        <?php } ?>
    </tbody>
        
        </table>
    </div>
    
    </div>



<script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap4.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.4/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.4/js/buttons.bootstrap4.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.4/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.4/js/buttons.print.min.js"></script>
<script>
    $(document).ready(function() {
    var table = $('#example').DataTable( {
        lengthChange: false,
        buttons: [ 'copy', 'excel', 'pdf', 'print']
    } );
 
    table.buttons().container()
        .appendTo( '#example_wrapper .col-md-6:eq(0)' );
} );
</script>
</body>

</html>