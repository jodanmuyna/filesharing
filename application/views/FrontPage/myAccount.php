<section id="team" class="section gray-bg">
	<div class="container">
		<div class="row title">
			<h2 class="margin-top">My Account</h2>
			<br>
			<div class="row">
				<div class="col-md-12">
			        <div class="tabbable">
			          <ul class="nav nav-tabs">
			            <li class="active"><a href="#a" data-toggle="tab">Profile Info</a></li>
			            <li><a href="#b" data-toggle="tab">Change Password</a></li>
			            <li><a href="#c" data-toggle="tab">Shared Files</a></li>
			            <li><a href="#d" data-toggle="tab">My Shared Files</a></li>
			          </ul>
			          <div class="tab-content">
			            <div class="tab-pane active" id="a">
			            	 <div class="box-body">
			            	 	<br>
								<form method="POST" action="<?php echo site_url(); ?>/frontPage/myprofile" class="form-horizontal" role="form">
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
								    <div class="col-sm-offset-2 col-sm-4">
								      <button type="submit" class="btn btn-submit btn-green">Save</button>
								    </div>
								  </div>
								</form>
					        </div><!-- /.box-body -->
			        	</div>
			            <div class="tab-pane" id="b">
			            	Secondo sed ac orci quis tortor imperdiet venenatis. Duis elementum auctor accumsan. 
			            Aliquam in felis sit amet augue.
			        	</div>
			            <div class="tab-pane" id="c">
			            	T
			            irdamuno, ipsum dolor sit amet, consectetur adipiscing elit. Duis pharetra varius quam sit amet vulputate. 
			            Quisque mauris augue, molestie tincidunt condimentum vitae.
			        	</div>
			            <div class="tab-pane" id="d">
			            	Thirdamuno, ipsum dolor sit amet, consectetur adipiscing elit. Duis pharetra varius quam sit amet vulputate. 
			            Quisque mauris augue, molestie tincidunt condimentum vitae.
			        	</div>
			           </div>
			        </div>
			        <!-- /tabs -->

			    </div>
		    </div>
    
		</div>
	</div>
</section>