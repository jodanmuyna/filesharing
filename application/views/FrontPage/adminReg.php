<section id="team" class="section gray-bg">
	<div class="container">
		<div class="row title">
				<h2 class="margin-top text-center">System Admin Account</h2>
				<br>
				<form method="POST" action="<?php echo site_url(); ?>/frontPage/setAccount" data-toggle="validator" class="form-horizontal" role="form">
	              <div class="col-md-6 col-md-offset-3">
	                <div class="form-group">
	                  <label for="inputEmail3" class="col-sm-2 control-label">Username</label>
	                  <div class="col-sm-10">
	                    <input value="" type="text" name="userName" class="form-control" id="" placeholder="Username">
	                  </div>
	                </div>
	                <div class="form-group">
	                  <label for="inputEmail3" class="col-sm-2 control-label">Password</label>
	                  <div class="col-sm-10">
	                    <input value="" type="password" name="password" class="form-control" id="inputPassword" placeholder="Password">
	                    <div class="help-block with-errors"></div>
	                  </div>
	                </div>
	                <div class="form-group">
	                  <label for="inputEmail3" class="col-sm-2 control-label">Confirm Password</label>
	                  <div class="col-sm-10">
	                    <input value="" type="password" name="cpassword" class="form-control" id="inputPasswordConfirm" data-match="#inputPassword" placeholder="Confirm Password">
	                    <div class="help-block with-errors"></div>
	                  </div>
	                </div>
	                    <input value="systemadmin" type="hidden" name="role" class="form-control" id="" readonly="readonly">
	                    <input value="0" type="hidden" name="orgID" class="form-control" id="" readonly="readonly">
		            <div class="col-md-12">
		              <div class="form-group">
		                <div class="col-md-offset-3 col-md-6">
		                  <button type="submit" class="btn btn-blue" style="width:100%">Save</button>
		                </div>
		              </div>
		            </div>
		        </form>
		</div>
	</div>
</section>