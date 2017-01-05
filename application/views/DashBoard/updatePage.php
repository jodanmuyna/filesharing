<div class="content-wrapper">
<!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
         	Update Page
          <small></small>
        </h1>
        <ol class="breadcrumb">
          <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
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
			<form action="<?php echo site_url(); ?>/DashBoard/updateSavePage" method="POST" role="form">
					<input type="hidden" name="id" value="<?php echo $page->id; ?>">
			  <div class="form-group has-feedback">
                <label>Child of <?php echo $page->parent_id; ?></label><br>
                  <select name="parent" class="form-control">
                  	<?php foreach ($parent as $pages): ?>
                  		<?php if ($page->parent_id != 0	&& $page->parent_id == $pages->id): ?>
                  			<option value="<?php echo $pages->parent_id ?>"><?php echo $pages->title ?></option>
                  		<?php endif ?>
                  	<?php endforeach ?>
                  	<option value="0">None</option>
                  	<?php foreach ($parent as $pages): ?>
                  		<?php if ($pages->parent_id == 0): ?>
                  			<option value="<?php echo $pages->id ?>"><?php echo $pages->title ?></option>
                  		<?php endif ?>
                  	<?php endforeach ?>
                  	option
                  </select>
                  <div class="help-block with-errors"></div>
              </div>
              <div class="form-group has-feedback">
                <label>Page Title</label>
                  <input type="text" class="form-control" name="title" placeholder="Title" value="<?php echo $page->title; ?>" required >
                  <div class="help-block with-errors"></div>
              </div>
              <div class="form-group has-feedback">
                <label>Content</label>
                  <textarea style = "height: 200px; " id="text-editor" class = "form-control" name="content" ><?php echo $page->content; ?></textarea>
                  <div class="help-block with-errors"></div>
              </div>
              <button type="submit" class="btn btn-primary">Update</button>
            </form>
			</div><!-- /.box-body -->
		</div><!-- /.box -->
    </section><!-- /.content -->

</div>