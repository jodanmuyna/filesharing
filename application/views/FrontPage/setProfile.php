<section id="team" class="section gray-bg">
  <div class="container">
    <div class="row title">
        <h2 class="margin-top text-center">User Information</h2>
        <br>
          <form method="POST" action="<?php echo site_url(); ?>/DashBoard/myprofile" class="form-horizontal" role="form">
          		<input type="hidden" name="userID" value="<?php echo $this->session->userdata('id'); ?>">
            <div class="form-group">
              <label for="inputEmail3" class="col-sm-2 control-label">Lastname</label>
              <div class="col-sm-10">
                <input value="" type="text" name="lname" class="form-control" id="" placeholder="Lastname">
              </div>
            </div>
            <div class="form-group">
              <label for="inputEmail3" class="col-sm-2 control-label">Firstname</label>
              <div class="col-sm-10">
                <input value="" type="text" name="fname" class="form-control" id="" placeholder="First	name">
              </div>
            </div>
            <div class="form-group">
              <label for="inputEmail3" class="col-sm-2 control-label">MI</label>
              <div class="col-sm-10">
                <input value="" type="text" name="mi" class="form-control" id="" placeholder="MI">
              </div>
            </div>
            <div class="form-group">
              <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
              <div class="col-sm-10">
                <input value="" type="text" name="email" class="form-control" id="" placeholder="MI">
              </div>
            </div>
            <div class="form-group">
              <label class="col-sm-2 control-label">Address</label>
              <div class="col-sm-10">
                <textarea name="address" class="form-control" placeholder="Addres" rows="3"></textarea>
              </div>
            </div>	
            <div class="form-group">
              <label for="inputEmail3" class="col-sm-2 control-label">Contact Number</label>
              <div class="col-sm-10">
                <input value="" type="text" name="contact" class="form-control" id="" placeholder="Contact Number">
              </div>
            </div>						  
            <div class="form-group">
              <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-blue">Save</button>
              </div>
            </div>
          </form>
      </div>
  </div>
</section>