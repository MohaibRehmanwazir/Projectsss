<?php
$protocol = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? 'https://' : 'http://';
$host = $_SERVER['HTTP_HOST'];

$base_url = $protocol . $host . '/' . 'muhib/lms/';
?>

<script src="<?php echo $base_url; ?>assets/vendor/global/global.min.js"></script>
<script src="<?php echo $base_url; ?>assets/vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
<script src="<?php echo $base_url; ?>assets/js/custom.js"></script>
<script src="<?php echo $base_url; ?>assets/js/deznav-init.js"></script>
<script src="<?php echo $base_url; ?>assets/js/demo.js"></script>
<script src="<?php echo $base_url; ?>assets/js/styleSwitcher.js"></script>