<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>KasamaKa - Dashboard</title>

<!-- Bootstrap -->
    <link href="<?php echo base_url();?>assets/css/bootstrap.min.css" rel="stylesheet">
    <!-- styles -->
    <link href="<?php echo base_url();?>assets/css/styles.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/css/app.css" rel="stylesheet">
    <!-- datatables -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/datatables/dataTables.bootstrap.css">

<!--Icons-->
<script src="<?php echo base_url(); ?>assets/js/lumino.glyphs.js"></script>

<!--[if lt IE 9]>
<script src="js/html5shiv.js"></script>
<script src="js/respond.min.js"></script>
<![endif]-->

</head>
<body class="dashboard">
  	<?php 
    $this->load->view($header);

    $this->load->view($content);
 
    ?>  

        </div>
                
      </div><!--/.col-->
    </div><!--/.row-->
  </div>  <!--/.main-->

  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="<?php echo base_url();?>assets/js/jquery.js"></script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
  <!-- datatables -->
  <script src="<?php echo base_url(); ?>assets/plugins/datatables/jquery.dataTables.min.js"></script>
  <!-- Ckeditor Plugin -->
  <script type="text/javascript" src="<?php echo base_url(); ?>assets/plugins/tinymce/js/tinymce/tinymce.min.js"></script>
  <script type="text/javascript" src="<?php echo base_url(); ?>assets/plugins/tinymce/js/tinymce/tinyMCE.js"></script>
  <script>

    !function ($) {
        $(document).on("click","ul.nav li.parent > a > span.icon", function(){          
            $(this).find('em:first').toggleClass("glyphicon-minus");      
        }); 
        $(".sidebar span.icon").find('em:first').addClass("glyphicon-plus");
    }(window.jQuery);

    $(window).on('resize', function () {
      if ($(window).width() > 768) $('#sidebar-collapse').collapse('show')
    })
    $(window).on('resize', function () {
      if ($(window).width() <= 767) $('#sidebar-collapse').collapse('hide')
    })
  </script> 
</body>

</html>