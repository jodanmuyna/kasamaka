<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
				<li class="active">Icons</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header"> Home Content </h1>
			</div>
		</div><!--/.row-->
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-heading"></div>
					<div class="panel-body">
						
					<?php echo form_open_multipart('DashBoard/do_upload');?>
                      <?php echo "<input type='file' name='userfile' size='20' />"; ?>
                      <?php echo "<input type='submit' name='submit' value='upload' /> ";?>
                      <?php echo "</form>"?>

						</form>
					</div>
				</div>
			</div>
		</div><!--/.row-->
		
	</div>	<!--/.main-->