<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
				<li class="active">Icons</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">My Profile</h1>
			</div>
		</div><!--/.row-->
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-heading"></div>
					<div class="panel-body">
		  					<form method="POST" action="<?php echo site_url(); ?>/DashBoard/myprofile" class="form-horizontal" role="form">
		  						<input type="hidden" name="userID" value="<?php echo $this->session->userdata('id'); ?>">
							  <div class="form-group">
							    <label for="inputEmail3" class="col-sm-2 control-label">Lastname</label>
							    <div class="col-sm-10">
							      <input value="<?php echo $userInfo->lastName; ?>" type="text" name="lname" class="form-control" id="" placeholder="Lastname">
							    </div>
							  </div>
							  <div class="form-group">
							    <label for="inputEmail3" class="col-sm-2 control-label">Firstname</label>
							    <div class="col-sm-10">
							      <input value="<?php echo $userInfo->firstName; ?>" type="text" name="fname" class="form-control" id="" placeholder="First	name">
							    </div>
							  </div>
							  <div class="form-group">
							    <label for="inputEmail3" class="col-sm-2 control-label">MI</label>
							    <div class="col-sm-10">
							      <input value="<?php echo $userInfo->Mi; ?>" type="text" name="mi" class="form-control" id="" placeholder="MI">
							    </div>
							  </div>
							  <div class="form-group">
							    <label class="col-sm-2 control-label">Address</label>
							    <div class="col-sm-10">
							      <textarea name="address" class="form-control" placeholder="Addres" rows="3"><?php echo $userInfo->address; ?></textarea>
							    </div>
							  </div>	
							  <div class="form-group">
							    <label for="inputEmail3" class="col-sm-2 control-label">Contact Number</label>
							    <div class="col-sm-10">
							      <input value="<?php echo $userInfo->contactNumber; ?>" type="text" name="contact" class="form-control" id="" placeholder="Contact Number">
							    </div>
							  </div>						  
							  <div class="form-group">
							    <div class="col-sm-offset-2 col-sm-10">
							      <button type="submit" class="btn btn-primary">Save</button>
							    </div>
							  </div>
							</form>
		  				</div>
				</div>
			</div>
		</div><!--/.row-->
		
	</div>	<!--/.main-->