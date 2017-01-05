<div class="content-wrapper">
<!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
          Home Page Content
          <small></small>
        </h1>
     </section>
    
    <!-- Main content -->
    <section class="content">
    <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
           <h3 class="box-title"></h3>
        </div>
        <div class="box-body">
        	 <div class="row">
              <div class="col-md-4 logo-upload">
                <h3>Site Logo</h3>
                <hr>
                <?php echo form_open_multipart('uploadLogo/do_upload');?>
                            <?php echo "<input type='file' name='userfile' size='20' />"; ?>
                            <?php echo "<input type='submit' name='submit' value='upload' /> ";?>
                            <?php echo "</form>"?>
                            <br>
                            <?php if (isset($logo->file)): ?>
                    <a href="<?php echo site_url(); ?>"><img src="<?php echo base_url(); ?>uploads/home/<?php echo $logo->file; ?> " class="img-responsive upload logo"></a>    
                <?php endif; ?>
              </div>
              <div class="col-md-8">
                <h3>Site Banner</h3>
                <hr>
                <?php echo form_open_multipart('uploadBanner/do_upload');?>
                            <?php echo "<input type='file' name='userfile' size='20' />"; ?>
                            <?php echo "<input type='submit' name='submit' value='upload' /> ";?>
                            <?php echo "</form>"?>
                            <br>
                            <?php if (isset($banner->file)): ?>
                    <a href="<?php echo site_url(); ?>"><img src="<?php echo base_url(); ?>uploads/home/<?php echo $banner->file; ?>" class="img-responsive upload banner"></a>   
                <?php endif; ?>
              </div>
            </div>
            <hr>
            <br>
            <div class="row">
              <div class="col-md-6">
                <h3>About us Message</h3>
                <hr>
                <form method="POST" action="<?php echo site_url(); ?>/DashBoard/setAbout" class="form-horizontal" role="form">
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Title</label>
                    <div class="col-sm-10">
                      <input value="<?php if(isset($getAbout->title)){ echo $getAbout->title; } ?>" type="text" name="title" class="form-control" id="" placeholder="Title">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Content</label>
                    <div class="col-sm-10">
                      <textarea name="content" class="form-control" placeholder="Content" rows="3"><?php if(isset($getAbout->content)){ echo $getAbout->content; } ?></textarea>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                      <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                  </div>
                </form>
              </div>
              <div class="col-md-6">
                <h3>Caption</h3>
                <hr>
                <form method="POST" action="<?php echo site_url(); ?>/DashBoard/setCaption" class="form-horizontal" role="form">
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Title</label>
                    <div class="col-sm-10">
                      <input value="<?php if(isset($getCaption->title)){ echo $getCaption->title; } ?>" type="text" name="title" class="form-control" id="" placeholder="Title">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Content</label>
                    <div class="col-sm-10">
                      <textarea name="content" class="form-control" placeholder="Content" rows="3"><?php if(isset($getCaption->content)){ echo $getCaption->content; } ?></textarea>
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
        </div><!-- /.box-body -->
        <div class="box-footer">
        </div><!-- /.box-footer-->
      </div><!-- /.box -->

    </section><!-- /.content -->
    
</div><!-- /.content-wrapper -->