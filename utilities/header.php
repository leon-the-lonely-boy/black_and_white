<?php
include "config.php";
include "helper.php";
?>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="shortcut icon" href="images/logo/logo.png" sizes="128x128" />
    <!-- Font Awesome -->
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <!-- <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css"> -->
    <!-- Tempusdominus Bbootstrap 4 -->
    <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="plugins/css/adminlte.min.css">
    <link rel="stylesheet" href="plugins/css/admin.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
    
    <!-- Google Font: Source Sans Pro -->
    <!-- <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet"> -->

    <!-- Select2 -->
    <link rel="stylesheet" href="plugins/select2/css/select2.min.css">
    <link rel="stylesheet" href="plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
    
    <!-- Data Tables -->
    <link rel="stylesheet" href="plugins/datatables/datatables.min.css">
    <link rel="stylesheet" href="plugins/datatables/Responsive-2.2.5/css/responsive.bootstrap4.css">

    <!-- croppie -->
    <!-- <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/croppie/2.6.5/croppie.css"> -->
    <!-- custom desgin  -->
    <link rel="stylesheet" type="text/css" href="plugins/css/customdesign.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<script type="text/javascript">
$(document).ready(function() {
    $('#manga-table').DataTable({
        "language": {
          "emptyTable": "No manga found in the database.",
          "zeroRecords": "No matching manga found in the database."
        }
    });
} );
$(document).ready(function() {
    // $('.select2').select2();
    var select2=$('.select2').select2();
     //select2.data('select2').$selection.css('height', '38px');

});


</script>
