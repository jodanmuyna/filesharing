<?php if ($this->session->flashdata('error')) { ?>
    <div class="alert bg-danger" role="alert"> <?= $this->session->flashdata('error') ?> </div>
<?php } ?>
<?php if ($this->session->flashdata('success')) { ?>
    <div class="alert bg-success" role="alert"> <?= $this->session->flashdata('success') ?> </div>
<?php } ?>
<div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content modal-popup">
				<a href="#" class="close-link"><i class="icon_close_alt2"></i></a>
				<h3 class="white">Sign Up</h3>
				<form action="<?php echo site_url(); ?>/authentication/login" method="POST" role="form">	
					<div class="modal-body">
						<div class="form-group">
							<label for="">Username</label>
							<input type="text" class="form-control" name="userName" id="" placeholder="Username">
						</div>
						<div class="form-group">
							<label for="">Password</label>
							<input type="password" class="form-control" name="password" id="" placeholder="Password">
						</div>
					</div>
					<div class="modal-footer">
						<button type="submit" class="btn btn-submit">login</button>
					</div>
				</form>
			</div>
		</div>
	</div>

<div class="preloader">
<img src="<?php echo base_url(); ?>assets/img/loader.gif" alt="Preloader image">
</div>
<nav class="navbar">
	<div class="container">
		<!-- Brand and toggle get grouped for better mobile display -->
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<?php if (isset($logo->file)): ?>
				<a href="<?php echo site_url(); ?>"><img src="<?php echo base_url(); ?>uploads/home/<?php echo $logo->file; ?>" style="max-height: 80px; "></a>		
			<?php else: ?>
				<a class="navbar-brand" href="#"><img src="<?php echo base_url(); ?>assets/img/loader.gif" data-active-url="<?php echo base_url(); ?>assets/img/loader.gif" alt=""></a>
			<?php endif ?>
			
		</div>
		<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			<ul class="nav navbar-nav navbar-right main-nav">
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
						
				<?php if ($this->session->userdata('id') != NULL  ): ?>
					<div class="dropdown">
						  <li><a href="#" class="dropbtn"><i class="glyphicon glyphicon-user"></i>  <i class="glyphicon glyphicon-chevron-down"></i></a></li>
					  <div class="dropdown-content">
					  	<?php if ($this->session->userdata('role') != 'staff'): ?>
					  		<a href="<?php echo site_url('Dashboard')?>">Dashboard</a>
					  	<?php endif ?>
					    <?php if ($this->session->userdata('role') == 'staff'): ?>
					  		<a href="<?php echo site_url('FrontPage/myAccount')?>">My Account</a>
					  	<?php endif ?>
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
			</ul>
				
			</ul>
		</div>
		<!-- /.navbar-collapse -->
	</div>
		<!-- /.container-fluid -->
</nav>