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
                        <h1>Students</h1>
                        <br>
                        <button class="btn btn-sm btn-success">Back</button>
                    </div>
                    <div class="card-body table-responsive">
                        <form action="#" method="POST">
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" name="name" class="form-control form-control-sm" placeholder="Enter Student Name">
                            </div>
                            <div class="form-group">
                                <label for="father_name">Father Name</label>
                                <input type="text" name="father_name" class="form-control form-control-sm" placeholder="Enter Student F.Name">
                            </div>

                            <div class="form-group">
                                <label for="student_calss">Student Class</label>
                                <br>
                                <select name="student_class" class="form-select form-select-sm">
                                    <option value="" disabled selected> Select Class </option>
                                    <option value="html">HTML</option>
                                    <option value="css">CSS</option>
                                    <option value="js">Javascript</option>
                                </select>
                            </div>
                            <hr>
                            <button type="submit" name="studentFrmSubmit" class="btn btbn-sm btn-success"> Submit </button>
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