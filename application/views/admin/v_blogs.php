<!-- ============================================================== -->
<!-- Start right Content here -->
<!-- ============================================================== -->
<div class="content-page">
	<!-- Start content -->
	<div class="content">
		<div class="container">  
            <div class="row">
                <div class="col-lg-12">
                    <h4 class="page-title">Blogs</h4>
                    <div class="row">
                        <div class="col-lg-10">
                            <div class="card-box">
                                <h4 class="header-title m-t-0 m-b-30">Add Blog</h4>
                                <form class="form-horizontal group-border-dashed" enctype="multipart/form-data" action="<?php echo base_url('admin/add/blog'); ?>"  method="post">
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label" style="text-align:left;">Blog Title</label>
                                        <div class="col-sm-9">
                                            <input class="form-control" name="blog_name" required placeholder="blog Title" type="text">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-sm-3 control-label" style="text-align:left;">Blog Thumbnail Image</label>
                                        <div class="col-sm-9">
                                            <input class="" name="blog_thumb_image" required="" type="file">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-sm-3 control-label" style="text-align:left;">Blog image</label>
                                        <div class="col-sm-9">
                                            <input class="" name="blog_image" required="" type="file">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-sm-3 control-label" style="text-align:left;">Highlight </label>
                                        <div class="col-sm-9">
                                            <select class="form-control" name="hightlight">
                                                <option value="0">No</option>
                                                <option value="1">Yes</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-sm-3 control-label" style="text-align:left;">Blog Description</label>
                                        <div class="col-sm-9">
                                            <textarea id="editor3"  class="form-control" name="blog_desc" required="" placeholder="Description"></textarea> 
                                        </div>
                                    </div>
                                    <script type="text/javascript">
                                            CKEDITOR.replace( 'editor3' );
                                            CKEDITOR.add            
                                    </script>
                                    <div class="form-group text-right m-b-0">
                                        <button class="btn btn-primary waves-effect waves-light" type="submit";>
                                            Add blog
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                    <div class="col-lg-10">
                            <div class="card-box">
                                <h4 class="header-title m-t-0 m-b-30">blog List</h4>

                                <table class="table m-0">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>blog Title</th>
                                            <th>blog Image</th>
                                            <th>blog Desc</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $i=1; foreach ($blog as $e) { ?>
                                        <tr>
                                            <th scope="row"><?php echo $i; $i++;?></th>
                                            <td><?php echo $e->blog_title; ?></td>
                                            <td><img src="<?php echo base_url('assets/image/blog').'/'.$e->blog_image;; ?>" class="img-responsive"></td>
                                            <td><?php echo $e->blog_desc; ?></td>
                                            <td>
                                                <a href="<?php echo base_url('admin/edit/blog/'.$e->blog_id); ?>" class="btn btn-warning btn-bordred waves-effect w-md waves-light m-b-5">Edit</a>
                                                <a href="<?php echo base_url('admin/delete/blog/'.$e->blog_id); ?>" id="" class="delete-blog btn btn-danger btn-bordred waves-effect w-md waves-light m-b-5">Delete</a>
                                            </td>
                                        </tr>

                                        <?php } ?>
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end row -->
            <footer class="footer">
                2017 © Glenz security | Go To : <a href="<?php echo base_url('home'); ?>" target="_blank" class="text-muted">Glenzsecurity.com/a>
            </footer>
        </div> <!-- container -->
    </div> <!-- content -->



</div>