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
                        <form action="#" method="POST">
                            <input type="hidden" name="id" value="<?php echo $stuObj->studentEditRec[0]['id']; ?>">
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" value="<?php echo $stuObj->studentEditRec[0]['name']; ?>" name="name" class="form-control form-control-sm" placeholder="Enter Student Name">
                            </div>
                            <div class="form-group">
                                <label for="father_name">Father Name</label>
                                <input type="text" value="<?php echo $stuObj->studentEditRec[0]['father_name']; ?>" name="father_name" class="form-control form-control-sm" placeholder="Enter Student F.Name">
                            </div>

                            <div class="form-group">
                                <label for="student_calss">Student Class</label>
                                <br>
                                <select name="student_class" class="form-select form-select-sm">
                                    <option value="" disabled selected> Select Class </option>
                                    <option <?php if ($stuObj->studentEditRec[0]['student_class'] == 'html') :; ?> selected <?php endif; ?> value="html">HTML</option>
                                    <option <?php if ($stuObj->studentEditRec[0]['student_class'] == 'css') :; ?> selected <?php endif; ?> value="css">CSS</option>
                                    <option <?php if ($stuObj->studentEditRec[0]['student_class'] == 'js') :; ?> selected <?php endif; ?> value="js">Javascript</option>
                                </select>
                            </div>
                            <hr>
                            <button type="submit" name="studentFrmUpdateBtn" class="btn btn-sm btn-success"> Submit </button>
                        </form>
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