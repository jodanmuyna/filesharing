<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Prov. Government of Albay </title>

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url();?>assets/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/fonts/font-awesome-4.1.0/css/font-awesome.min.css">

    <!-- Normalize -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/normalize.css">
    <!-- Owl -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/owl.css">
    <!-- Animate.css -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/animate.css">
    <!-- Elegant Icons -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/fonts/eleganticons/et-icons.css">
    <!-- Main style -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/cardio.css">

    <!-- apps CSs -->
    <link href="<?php echo base_url();?>assets/css/app.css" rel="stylesheet">


   
         <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style>
      .alert {
          padding: 15px;
            margin-bottom: 20px;
            border: 1px solid transparent;
            border-radius: 4px;
            position: absolute;
            right: 45%; 
            top: 17px;
            z-index: 100;
      }
    </style> 
    
</head>

<body>
    <div class="body-class">

    <?php 
    $this->load->view($header);

	$this->load->view($content);

    $this->load->view($footer); 
    ?>
    </div>

	
    <!-- jQuery -->
    <script src="<?php echo base_url();?>assets/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/jquery.maskedinput.min.js"></script> 
    <!-- Scripts -->
    <script src="<?php echo base_url();?>assets/js/owl.carousel.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/wow.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/typewriter.js"></script>
    <script src="<?php echo base_url();?>assets/js/jquery.onepagenav.js"></script>
    <script src="<?php echo base_url();?>assets/js/main.js"></script>
    <script src="<?php echo base_url();?>assets/js/hoverIntent.js"></script>
    <!-- validate -->
    <script src="<?php echo base_url('assets/dist/js/validator.min.js')?>"></script>
    <script>
      $(".alert").show().delay(3000).fadeOut();
    </script>
    
   
</body>

</html>