<div class="content-wrapper">
<!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
          Add Account
          <small></small>
        </h1>
        <ol class="breadcrumb">
          <li><a href="#"><i class="fa fa-dashboard"></i> Add Account</a></li>
        </ol>
     </section>

    <!-- Main content -->
    <section class="content">
    <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
           <h3 class="box-title"></h3>
        </div>
        <div class="box-body">
          <div class="col-md6">
          </div>
            <form method="POST" action="<?php echo site_url(); ?>/DashBoard/saveAccount" data-toggle="validator" class="form-horizontal" role="form">
              <div class="col-md-6">
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Username</label>
                  <div class="col-sm-10">
                    <input value="<?php echo set_value('userName') ?>" type="text" name="userName" class="form-control" id="" placeholder="Username" required>
                    <div class="help-block with-errors"></div>
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Password</label>
                  <div class="col-sm-10">
                    <input value="" type="password" name="password" class="form-control" id="inputPassword" placeholder="Password" required>
                    <div class="help-block with-errors"></div>
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Confirm Password</label>
                  <div class="col-sm-10">
                    <input value="" type="password" name="password2" class="form-control" id="inputPasswordConfirm" data-match="#inputPassword" placeholder="Confirm Password">
                    <div class="help-block with-errors"></div>
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
                  <div class="col-sm-10">
                    <input value="<?php echo set_value('email') ?>" type="text" name="email" class="form-control" id="" placeholder="Email" required>
                    <div class="help-block with-errors"></div>
                  </div>
                </div>
                <?php if ($this->session->userdata('role') == 'systemadmin'): ?>
                  <div class="form-group">
                    <label class="control-label col-md-2">Organi- zation</label>
                    <div class="col-md-10">
                      <select name="orgID" class="form-control" required>
                        <option value="<?php echo set_value('orgID') ?>"><?php echo set_value('orgID') ?></option>
                        <?php foreach ($organization as $org): ?>
                          <option value="<?php echo $org->id; ?>"><?php echo $org->name; ?></option>
                        <?php endforeach ?>
                      </select>
                      <div class="help-block with-errors"></div>
                    </div>
                  </div>
                  <input name="role" type="hidden" value="admin">
                <?php endif ?>
                <?php if ($this->session->userdata('role') == 'admin'): ?>
                  <input name="orgID" type="hidden" value="<?php echo $this->session->userdata('orgID'); ?>">
                  <input name="role" type="hidden" value="staff">
                <?php endif ?>
                
                
              </div>
              <div class="col-md-6">
              <div class="form-group">
                <label for="inputEmail3" class="col-sm-2 control-label">Lastname</label>
                <div class="col-sm-10">
                  <input value="<?php echo set_value('lname') ?>" type="text" name="lname" class="form-control" id="" placeholder="Lastname" required>
                  <div class="help-block with-errors"></div>
                </div>
              </div>
              <div class="form-group">
                <label for="inputEmail3" class="col-sm-2 control-label">Firstname</label>
                <div class="col-sm-10">
                  <input value="<?php echo set_value('fname') ?>" type="text" name="fname" class="form-control" id="" placeholder="First name" required>
                  <div class="help-block with-errors"></div>
                </div>
              </div>
              <div class="form-group">
                <label for="inputEmail3" class="col-sm-2 control-label">MI</label>
                <div class="col-sm-10">
                  <input value="<?php echo set_value('mi') ?>" type="text" name="mi" maxlength="2" class="form-control" id="" placeholder="MI" required>
                  <div class="help-block with-errors"></div>
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-2 control-label">Address</label>
                <div class="col-sm-10">
                  <textarea name="address" class="form-control" placeholder="Addres" rows="3" required><?php echo set_value('address') ?></textarea>
                  <div class="help-block with-errors"></div>
                </div>
              </div>
              <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Contact Number</label>
                  <div class="col-sm-10">
                    <input value="<?php echo set_value('contact') ?>" type="text" pattern="\d+" name="contact" class="form-control" id="" placeholder="Contact Number" required>
                    <div class="help-block with-errors"></div>
                  </div>
                </div>  
            </div>
            <div class="col-md-12">
              <div class="form-group">
                <div class="col-md-offset-3 col-md-6">
                  <button type="submit" class="btn btn-primary" style="width:100%">Save</button>
                </div>
              </div>
            </div>
            </form>
        
        </div><!-- /.box-body -->
      
      </div><!-- /.box -->

    </section><!-- /.content -->
</div><!-- /.content-wrapper -->