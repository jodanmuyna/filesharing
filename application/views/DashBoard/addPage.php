<div class="content-wrapper">
<!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
         	Add New Page
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
            <form action="<?php echo site_url(); ?>/DashBoard/addNewPage" method="POST" role="form">
              <div class="form-group has-feedback">
                <label>Child Of</label>
                  <select name="parent" class="form-control">
                    <option value="0">None</option>
                    <?php foreach ($parent as $page): ?>
                      <option value="<?php echo $page->id ?>"><?php echo $page->title ?></option>
                    <?php endforeach ?>
                    option
                  </select>
                  <div class="help-block with-errors"></div>
              </div>
              <div class="form-group has-feedback">
                <label>Page Title</label>
                  <input type="text" class="form-control" name="title" placeholder="Title" value="" required >
                  <div class="help-block with-errors"></div>
              </div>
              <div class="form-group has-feedback">
                <label>Content</label>
                  <textarea style = "height: 200px; " id="text-editor" class = "form-control" name="content" ></textarea>
                  <div class="help-block with-errors"></div>
              </div>
              <button type="submit" class="btn btn-primary">Publish</button>
            </form>        
        </div><!-- /.box-body -->
      </div><!-- /.box -->
    </section><!-- /.content -->

</div>