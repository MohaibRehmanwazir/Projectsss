 <?php
    $protocol = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? 'https://' : 'http://';
    $host = $_SERVER['HTTP_HOST'];

    $base_url = $protocol . $host . '/' . 'muhib/lms/';
    ?>
 <meta charset="utf-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="keywords" content="">
 <meta name="author" content="">
 <meta name="robots" content="">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <meta name="description" content="W3crm:Customer Relationship Management Admin Bootstrap 5 Template">
 <meta property="og:title" content="W3crm:Customer Relationship Management Admin Bootstrap 5 Template">
 <meta property="og:description" content="W3crm:Customer Relationship Management Admin Bootstrap 5 Template">
 <meta property="og:image" content="social-image.png">
 <meta name="format-detection" content="telephone=no">

 <!-- FAVICONS ICON -->
 <link rel="shortcut icon" type="image/png" href="images/favicon.png">
 <link href="https://fonts.googleapis.com/css2?family=Material+Icons" rel="stylesheet">
 <link href="<?php echo $base_url; ?>assets/vendor/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet">
 <link href="<?php echo $base_url; ?>assets/css/style.css" rel="stylesheet">