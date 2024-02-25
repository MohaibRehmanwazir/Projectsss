<?php

require_once '../controllers/StudentsController.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Students</title>
    <?php
    require_once '../layouts/styles.php';
    ?>
</head>

<body>

    <div id="preloader">
        <div class="lds-ripple">
            <div></div>
            <div></div>
        </div>
    </div>

    <?php require_once '../layouts/header.php'; ?>
    <?php require_once '../layouts/sidebar.php'; ?>


    <div id="main-wrapper">
        <div class="content-body">
            <!-- row -->
            <div class="container-fluid">
                <div class="card">
                    <div class="card-header">
                        <h1>Students Details</h1>
                        <br>
                        <a href="create.php" class="btn btn-sm btn-success">ADD Students</a>
                    </div>
                    <div class="card-body table-responsive">
                        <h1>Name: <?php echo $stuObj->singleStudentRec[0]['name'] ?> </h1>
                        <h1>Father Name: <?php echo $stuObj->singleStudentRec[0]['father_name'] ?> </h1>
                        <h1>Class:<?php echo $stuObj->singleStudentRec[0]['student_class'] ?> </h1>
                    </div>
                </div>
            </div>
        </div>

        <div class="footer out-footer">
            <div class="copyright">
                <p>Copyright © Developed by <a href="https://dexignzone.com/" target="_blank">DexignZone</a> 2023</p>
            </div>
        </div>
    </div>

    <?php require_once '../layouts/scripts.php'; ?>
</body>

</html>