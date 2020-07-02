<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$_SESSION['thm_bg_primary'] = '#3b5998';
$_SESSION['thm_fg_primary'] = '#fff'; 

$_SESSION['thm_bg_secondary'] = '#dfe3ee';
$_SESSION['thm_fg_secondary'] = '#fff'; 

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title><?php echo isset($title) ? "My Portal - $title" : null; ?></title>

  <!-- General CSS Files -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/vendor/bootstrap/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/bootstrap-social/bootstrap-social.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/stisla/css/style.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/stisla/css/components.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/selectric/public/selectric.css">
  <!-- CSS Libraries -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/datatables/media/css/jquery.dataTables.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/datatables.net-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/datatables.net-select-bs4/css/select.bootstrap4.min.css">
  
</head>



<body>
  <div id="app"><!-- App -->
    <div class="main-wrapper"><!-- Main Wrapper -->
      
            <div class="navbar-bg" style="background-color:<?php echo $_SESSION['thm_bg_primary']; ?>;"></div>

            <?php
            $this->load->view('layout/template_top_nav.php');
            $this->load->view('layout/template_side_nav.php');
            $this->load->view($main_content);
            ?>	
      
      </div><!-- Main Wrapper -->
  </div><!-- AppID -->

  <!-- General JS Scripts -->
  <script src="<?php echo base_url(); ?>assets/vendor/jquery/dist/jquery.min.js"></script>
  <script src="https://getbootstrap.com/docs/4.1/assets/js/vendor/popper.min.js" ></script>
  <script src="<?php echo base_url(); ?>assets/vendor/bootstrap/dist/js/bootstrap.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/vendor/jquery.nicescroll/jquery.nicescroll.js"></script>
  <script src="<?php echo base_url(); ?>assets/vendor/moment/min/moment.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/stisla/js/stisla.js"></script>
  
    
  <script src="<?php echo base_url(); ?>assets/vendor/fullcalendar/dist/fullcalendar.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/vendor/sweetalert/dist/sweetalert.min.js"></script>
  
  <script src="<?php echo base_url(); ?>assets/stisla/js/scripts.js"></script>
  <script src="<?php echo base_url(); ?>assets/stisla/js/custom.js"></script>

  <script src="<?php echo base_url(); ?>assets/stisla/js/page/modules-calendar.js"></script>
  <script src="<?php echo base_url(); ?>assets/stisla/js/page/modules-sweetalert.js"></script>
  <script src="<?php echo base_url(); ?>assets/vendor/selectric/src/jquery.selectric.js"></script>
  <script src="<?php echo base_url(); ?>assets/vendor/datatables/media/js/jquery.dataTables.min.js"></script>
  <script>
    $(document).ready( function () {
        $('#DataTable').DataTable();
     } ); 
  </script>
</body>
</html>