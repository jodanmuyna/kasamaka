<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
	<div class="row">
		<ol class="breadcrumb">
			<li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
			<li class="active">Icons</li>
		</ol>
	</div><!--/.row-->
	
	<div class="row">
		<div class="col-lg-12">
			<h1 class="page-header">Update Page</h1>
		</div>
	</div><!--/.row-->
  	<div class="row">
		<div class="col-lg-12">
			<div class="panel panel-default">
				<div class="panel-heading"></div>
				<div class="panel-body">
  					<form action="<?php echo site_url(); ?>/DashBoard/updateSavePage" method="POST" role="form">
  						<input type="hidden" name="id" value="<?php echo $page->id; ?>">
	                  <div class="form-group has-feedback">
	                    <label>Page Title</label>
	                      <input type="text" class="form-control" name="title" placeholder="Title" value="<?php echo $page->title; ?>" required >
	                      <div class="help-block with-errors"></div>
	                  </div>
	                  <div class="form-group has-feedback">
		                    <label>Child of : </label>
		                      <select name="parent" >
		                      	<?php if ($page->parent_id != 0): ?>
		                      		<option value="<?php echo $page->id ?>"><?php echo $page->title ?></option>
		                      	<?php endif ?>
		                      	<option value="0">None</option>
		                      	<?php foreach ($parent as $pages): ?>
		                      	
		                      		<option value="<?php echo $pages->id ?>"><?php echo $pages->title ?></option>
		                      	<?php endforeach ?>
		                      	option
		                      </select>
		                      <div class="help-block with-errors"></div>
		                  </div>
	                  <div class="form-group has-feedback">
	                    <label>Content</label>
	                      <textarea style = "height: 200px; " id="text-editor" class = "form-control" name="content" ><?php echo $page->content; ?></textarea>
	                      <div class="help-block with-errors"></div>
	                  </div>
	                  <button type="submit" class="btn btn-primary">Update</button>
	                </form>
  				</div>
			</div>
		</div>
	</div><!--/.row-->
	
</div>	<!--/.main-->