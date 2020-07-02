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



</body>
</html>