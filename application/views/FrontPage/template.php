<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Inductee Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
    Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>

    <title>KasamaKa- Credit Cooperative </title>

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url();?>assets/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="<?php echo base_url();?>assets/css/font-awesome.min.css" rel="stylesheet">

    <!-- apps CSs -->
    <link href="<?php echo base_url();?>assets/css/app.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/css/front.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/css/animate.min.css" rel="stylesheet">

   
         <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script src="<?php echo base_url();?>assets/js/wow.min.js"></script>
    <script>
     new WOW().init();
    </script>    
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
    <!-- Script to Activate the Carousel --> 
    
   
</body>

</html>