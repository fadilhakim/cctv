<!-- ============================================================== -->
<!-- Start right Content here -->
<!-- ============================================================== -->
<?php foreach ($blog->result() as $row) {
    
      $blog_id=$row->blog_id;
      $blog_name=$row->blog_title;
      $blog_image=$row->blog_image;
      $blog_thumbnail=$row->blog_thumbnail;
      $blog_desc=$row->blog_desc;
}

?>
<div class="content-page">
	<!-- Start content -->
	<div class="content">
		<div class="container">  
            <div class="row">
                <div class="col-lg-12">
                    <h4 class="page-title">blog</h4>
                    <div class="row">
                        <div class="col-lg-10">
                            <div class="card-box">
                                <h4 class="header-title m-t-0 m-b-30">Add blog</h4>
                                <form class="form-horizontal group-border-dashed" enctype="multipart/form-data" action="<?php echo base_url('admin/edit/blog_f'); ?>"  method="post">
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label" style="text-align:left;">blog Title</label>
                                        <div class="col-sm-9">
                                            <input class="form-control" value="<?php echo $blog_id; ?>" name="blog_id" required placeholder="blog Title" type="hidden">
                                            <input class="form-control" value="<?php echo $blog_name; ?>" name="blog_name" required placeholder="blog Title" type="text">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-sm-3 control-label" style="text-align:left;">blog Thumbnail</label>
                                        <div class="col-sm-9">
                                            <?php if($blog_thumbnail != '') {?>
                                                <img src="<?php echo base_url('assets/image/blog/').$blog_thumbnail; ?>" class="img-responsive">
                                            <?php } else {?>
                                                <img src="<?php echo base_url('assets/image/no-image.png')?>" class="img-responsive">
                                            <?php } ?>
                                            <input class="" value="<?php echo $blog_thumbnail; ?>" name="blog_thumb_old" required="" type="hidden">
                                            <br>
                                            <p>Change Image Thumbnail <input class="" name="blog_thumb"  type="file"></p>
                                            
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-sm-3 control-label" style="text-align:left;">blog image</label>
                                        <div class="col-sm-9">
                                            <?php if($blog_image != '') {?>
                                                <img src="<?php echo base_url('assets/image/blog/').$blog_image; ?>" class="img-responsive">
                                            <?php } else {?>
                                                <img src="<?php echo base_url('assets/image/no-image.png')?>" class="img-responsive">
                                            <?php } ?>
                                            <input class="" value="<?php echo $blog_image; ?>" name="blog_image_old" required="" type="hidden">
                                            <br>
                                            <p>Change Image <input class="" name="blog_image"  type="file"></p>
                                            
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-sm-3 control-label" style="text-align:left;">blog Description</label>
                                        <div class="col-sm-9">
                                            <textarea id="editor3"  class="form-control" name="blog_desc" required="" placeholder="Description"><?php echo $blog_desc; ?></textarea> 
                                        </div>
                                    </div>
                                     <script type="text/javascript">
                                            CKEDITOR.replace( 'editor3' );
                                            CKEDITOR.add            
                                    </script>
                                    <div class="form-group text-right m-b-0">
                                        <button class="btn btn-primary waves-effect waves-light" type="submit";>
                                            Edit blog
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end row -->
            <footer class="footer">
                2017 © Glenz security | Go To : <a href="<?php echo base_url('home'); ?>" target="_blank" class="text-muted">Glenzsecurity.com</a>
            </footer>
        </div> <!-- container -->
    </div> <!-- content -->



</div>