<div class="content-wrapper">
<!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
          My Profile
          <small></small>
        </h1>
        <ol class="breadcrumb">
          <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        </ol>
     </section>
     <!-- Main content -->
    <section class="content">
    <!-- Default box -->
    <div class="row">
    	<div class="col-md-4">
	      <div class="box">
	        <div class="box-header with-border">
	           <h3 class="box-title">Profile Picture</h3>
	        </div>
	        <div class="box-body">
	        	<center>
				<img src="<?php echo base_url() ?>assets/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
				</center>
	        </div><!-- /.box-body -->
	        
	      </div><!-- /.box -->
      </div>

    	<div class="col-md-8">
	      <div class="box">
	        <div class="box-header with-border">
	           <h3 class="box-title">User Information</h3>
	        </div>
	        <div class="box-body">
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
				      <input value="<?php echo $userInfo->mi; ?>" type="text" name="mi" class="form-control" id="" placeholder="MI">
				    </div>
				  </div>
				  <div class="form-group">
				    <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
				    <div class="col-sm-10">
				      <input value="<?php echo $userInfo->email; ?>" type="text" name="email" class="form-control" id="" placeholder="MI">
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
	        </div><!-- /.box-body -->
	        
	      </div><!-- /.box -->
      </div>
    </div>

    </section><!-- /.content -->
    
</div><!-- /.content-wrapper -->