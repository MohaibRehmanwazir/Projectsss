<?php

require_once '../controllers/StudentsController.php';
$stuObj = new StudentCtr();
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
                        <h1>Students</h1>
                        <br>
                        <a href="create.php" class="btn btn-sm btn-success">ADD Students</a>
                    </div>
                    <div class="card-body table-responsive">
                        <table class="table table-striped table-hover table-bordered">
                            <thead>
                                <th>S.No</th>
                                <th>Name</th>
                                <th>Father Name</th>
                                <th>Calss</th>
                            </thead>
                            <tbody>
                                <?php foreach ($stuObj->getStudents() as $data) :; ?>
                                    <tr>
                                        <td><?php echo $data['id'] ?></td>
                                        <td><?php echo $data['name'] ?></td>
                                        <td><?php echo $data['father_name'] ?></td>
                                        <td><?php echo $data['student_class'] ?></td>
                                        <td>
                                            <a href="<?php echo $_SERVER['REQUEST_URI'] ?>?id=<?php echo $data['id'] ?>" class="btn btn-sm btn-danger"> Delete </a>
                                            <a href="details.php?viewId=<?php echo $data['id'] ?>" class="btn btn-sm btn-info"> View </a>
                                            <a href="edit.php?editId=<?php echo $data['id'] ?>" class="btn btn-sm btn-info"> Edit </a>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
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