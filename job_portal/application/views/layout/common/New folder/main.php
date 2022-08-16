<!DOCTYPE html>
<html lang="en">
<?php $this->load->view('layout/common/css')?>
<body class="hold-transition sidebar-mini layout-fixed">
  <div class="wrapper">



    <!-- Main Sidebar Container -->
    <?php
    $this->load->view('layout/header');
    ?>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
  

      <!-- /.content -->
      <?php
        if (isset($_view) && $_view)
        $this->load->view($_view);
      ?>
    </div>
    
    <!-- /.content-wrapper -->
    <?php
    $this->load->view('layout/common/scripts');
    ?>
    </html>

