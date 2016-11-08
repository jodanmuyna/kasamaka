	<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="<?php echo site_url(); ?>/DashBoard"><span>Dashboard</span></a>
				<ul class="user-menu">
					<li class="dropdown pull-right">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown"><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg> User <span class="caret"></span></a>
						<ul class="dropdown-menu" role="menu">
							<li><a href="<?php echo site_url(); ?>/DashBoard/profile"><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg> My Profile</a></li>
							<li><a href="<?php echo site_url()?>/Authentication/logout"><svg class="glyph stroked cancel"><use xlink:href="#stroked-cancel"></use></svg> Logout</a></li>
						</ul>
					</li>
				</ul>
			</div>
							
		</div><!-- /.container-fluid -->
	</nav>
		
	<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
		<form role="search">
			
		</form>
		<ul class="nav menu">
			<li class=""><a href="<?php echo site_url(); ?>"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg> Visit Site</a></li>
			<li role="presentation" class="divider"></li>
			<li class=""><a href="<?php echo site_url(); ?>/DashBoard"><svg class="glyph stroked dashboard-dial"><use xlink:href="#stroked-dashboard-dial"></use></svg> Dashboard</a></li>
			<li><a href="<?php echo site_url(); ?>/DashBoard/profile"><svg class="glyph stroked star"><use xlink:href="#stroked-star"></use></svg> My Profile</a></li>
			<li><a href="<?php echo site_url(); ?>/DashBoard/accountList"><svg class="glyph stroked star"><use xlink:href="#stroked-star"></use></svg> Accounts</a></li>
			<li class="parent ">
				<a href="#">
					<span data-toggle="collapse" href="#sub-item-1"><svg class="glyph stroked chevron-down"><use xlink:href="#stroked-chevron-down"></use></svg></span> Page 
				</a>
				<ul class="children collapse" id="sub-item-1">
					<li>
						<a class="" href="<?php echo site_url(); ?>/DashBoard/addPage">
							<svg class="glyph stroked chevron-right"><use xlink:href="#stroked-chevron-right"></use></svg> Add Page
						</a>
					</li>
					<li>
						<a class="" href="<?php echo site_url(); ?>/DashBoard/page">
							<svg class="glyph stroked chevron-right"><use xlink:href="#stroked-chevron-right"></use></svg> Pages
						</a>
					</li>
					<li>
						<a class="" href="<?php echo site_url(); ?>/DashBoard/staticPage">
							<svg class="glyph stroked chevron-right"><use xlink:href="#stroked-chevron-right"></use></svg> Static Pages
						</a>
					</li>
					<li>
						<a class="" href="<?php echo site_url(); ?>/DashBoard/homeContent">
							<svg class="glyph stroked chevron-right"><use xlink:href="#stroked-chevron-right"></use></svg> Home Content
						</a>
					</li>
				</ul>
			</li>
			<li role="presentation" class="divider"></li>
		</ul>

	</div><!--/.sidebar-->