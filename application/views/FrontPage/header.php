
<div class="modal fade" id="login">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title text-center">KasamaKA</h4>
			</div>
			<form action="<?php echo site_url(); ?>/authentication/login" method="POST" role="form">	
				<div class="modal-body">
					<div class="form-group">
						<label for="">Username</label>
						<input type="text" class="form-control" name="email" id="" placeholder="Username">
					</div>
					<div class="form-group">
						<label for="">Password</label>
						<input type="password" class="form-control" name="password" id="" placeholder="Password">
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					<button type="submit" class="btn btn-primary">Login</button>
				</div>
			</form>
		</div><!-- /.modal-content -->
	</div><!-- /.modal-dialog -->
</div><!-- /.modal -->


<div class="header" >
	<div class="head" >
		<div class="container">
			<div class="navbar-top">
					<!-- Brand and toggle get grouped for better mobile display -->
					<div class="navbar-header">
					  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					  </button>
						 <div class="navbar-brand logo wow fadeInLeft animated animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInLeft;">
							<h1 class="animated wow pulse" data-wow-delay=".5s">
							<a href="<?php echo site_url(); ?>"><img src="<?php echo base_url(); ?>assets/img/logo/logo.png"></a></h1>
						</div>

					</div>


					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					 <ul class="nav navbar-nav link-effect-4">
						<?php foreach ($page as $pages): ?>
							<?php if ($pages->parent_id == 0): ?>
								<div class="dropdown">
		 						  <li><a href="<?php echo site_url().'/FrontPage/page/'.$pages->slug ?>"><?php echo $pages->title; ?></a></li>
								  <div class="dropdown-content">
								  	<?php foreach ($childPage as $child): ?>
								  	<?php if ($pages->id == $child->parent_id): ?>
										<a href="<?php echo site_url().'/FrontPage/page/'.$child->slug ?>"><?php echo $child->title; ?></a>
		 						  	<?php endif ?>
		 						  	<?php endforeach ?>
								  </div>
								</div>
							<?php endif ?>
						<?php endforeach ?>
						
					  </ul>
					</div><!-- /.navbar-collapse -->
				</div>
	
			<div class="header-left wow fadeInRight animated animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInRight;">
					<?php if ($this->session->userdata('id') != NULL  ): ?>
						<div class="dropdown">
 						  <li><a href="#" class="dropbtn"><i class="glyphicon glyphicon-user"></i>  <i class="glyphicon glyphicon-chevron-down"></i></a></li>
						  <div class="dropdown-content">
						    <a href="<?php echo site_url('Dashboard')?>">Dashboard</a>
						    <a href="<?php echo site_url('Authentication/logout')?>">Logout</a>
						  </div>
						</div>
					<?php else: ?>
						<div class="dropdown">
 						  <li><a href="#" class="dropbtn"><i class="glyphicon glyphicon-user"></i>  <i class="glyphicon glyphicon-chevron-down"></i></a></li>
						  <div class="dropdown-content">
						    <a data-toggle="modal" href="#login">Login</a>
						  </div>
						</div>
					<?php endif ?>
			</div>
			  <div class="clearfix"></div>	
		</div>
	</div>
	</div>
	<!---->
<!--banner-->