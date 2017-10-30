<div class="content-page">
	<!-- Start content -->
	<div class="content">
		<div class="container">  
            <div class="row">
                <div class="col-lg-12">
                    <h4 class="page-title">
                        <a href="<?php echo base_url('admin/product'); ?>" class="btn btn-success btn-bordred waves-effect w-md waves-light m-b-5">Add New Product</a>
                        <a href="<?php echo base_url('admin/product-list'); ?>" class="btn btn-success btn-bordred waves-effect w-md waves-light m-b-5">List Product</a>
                        <a href="<?php echo base_url('admin/product-category'); ?>" class="btn btn-success btn-bordred waves-effect w-md waves-light m-b-5">Category Product</a>
                    </h4>
                    <div class="row">

                      <?php
                        $cek_rol = $this->session->userdata('role_id');

                        if($cek_rol != 1 ){ ?>
                        <div class="col-lg-12">
                            <div class="card-box">
                                <h4 class="header-title m-t-0 m-b-30">You don't have access to add new product</h4>
                            </div>
                        </div>
                        <?php } else {?>
                        <div class="col-lg-12">
                            <div class="card-box">
                                <form class="form-horizontal group-border-dashed" enctype="multipart/form-data" action="<?php echo base_url('admin/add/product'); ?>" method="post">
                                    <div class="row">
                                        
                                        <h4 class="header-title m-t-0 m-b-30">Add New Product</h4>
                                        <div class="col-lg-6">
                                        
                                        
                                            <div class="form-group">
                                                <label class="col-sm-5 control-label">Product Name</label>
                                                <div class="col-sm-7">
                                                    <input class="form-control" name="product_title" required placeholder="Type something" data-parsley-id="34" kl_virtual_keyboard_secure_input="on" type="text">
                                                    
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="col-sm-5 control-label">Product Category</label>
                                                <div class="col-sm-7">
                                                    <select required class="form-control" name="product_category">
                                                        <option value="">---</option>
                                                        <?php foreach ($category as $c) { ?>
                                                            <option value="<?php echo $c->category_url; ?>"><?php echo $c->category_title; ?></option>
                                                        <?php } ?>
                                                    </select>
                                                </div>
                                            </div>

                                            
                                        </div>

                                        <div class="col-lg-6">

                                            <div class="form-group">
                                                <label class="col-sm-5 control-label">Product Image</label>
                                                <div class="col-sm-7">
                                                    <input name="product_image_1" size="20" class="" placeholder="Type something" type="file">
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="col-sm-5 control-label">Product Code</label>
                                                <div class="col-sm-7">
                                                    <input name="product_code" class="form-control" required placeholder="Type something" data-parsley-id="34" kl_virtual_keyboard_secure_input="on" type="text">
                                                </div>
                                            </div>
                                            
                                        </div>
                                        <hr>
                                    </div>
                                    <hr>
                                    <div class="row">
                                      <div class="col-lg-6">
                                      	     
                                       
                                        <div class="form-group">
                                            <label class="col-sm-5 control-label">Upload Katalog</label>
                                            <div class="col-sm-7">
                                                <input name="product_catalog" size="20" class="" placeholder="Upload" type="file">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-sm-5 control-label">Upload User Manual</label>
                                            <div class="col-sm-7">
                                                <input name="user_manual" size="20" class="" placeholder="Upload" type="file">
                                            </div>
                                        </div>
                                      
                                      </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-lg-12">

                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">Featuren Product ?</label>
                                            <div class="col-sm-9">
                                               <select name="featured_product" class="form-control">
                                                   <option selected="" value="0">No</option>
                                                   <option value="1">Yes</option>
                                               </select>
                                            </div>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">Product Video</label>
                                            <div class="col-sm-9">
                                                <input name="product_video" class="form-control"  placeholder="Copy Embeded Youtube Video URL HERE" data-parsley-id="34" kl_virtual_keyboard_secure_input="on" type="text">
                                            </div>
                                        </div>
                                        

                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">Product Description</label>
                                            <div class="col-sm-9">
                                                <textarea id="editor2" name="product_descrption" class="form-control" rows="2" placeholder=""></textarea>
                                            </div>
                                        </div>

                                           <script type="text/javascript">
                                            CKEDITOR.replace( 'editor2' );
                                            CKEDITOR.add            
                                            </script>

                                            <script type="text/javascript">
                                            CKEDITOR.replace( 'editor3' );
                                            CKEDITOR.add            
                                            </script>
                                        
                                        <div class="form-group text-right m-b-0">
                                            <button type="submit" id="" class="btn btn-success waves-effect waves-light btn-sm m-b-5">
                                            <i class="zmdi zmdi-plus-circle m-r-5"></i>
                                            <span>Add Product</span>
                                            </button>
                                        </div>

                                        <?php //echo $this->session->flashdata('message'); ?>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
            <!-- end row -->
            <footer class="footer">
                2017 © Glenzsecurity.com | Go To : <a href="<?php echo base_url('home'); ?>" target="_blank" class="text-muted">Glenzsecurity.com</a>
            </footer>
        </div> <!-- container -->
    </div> <!-- content -->

</div>
        <!-- Plugin JS -->
<script>
	function pre_order()
	{
		var pa = $("#product_availability").val();
		
		if(pa == "pre_order")
		{
		
			$("#mo_element").removeClass("hidden");
			$("#minimum_order").removeAttr("disabled");
			
			$("#eta_element").removeClass("hidden");
			$("#eta").removeAttr("disabled");
			
			
			$(".datepicker1").datepicker({
			  changeMonth: true,
			  changeYear: true,
			  dateFormat:"yy-mm-dd",
			  minDate:0	
			});
		}
       
		else
		{
			$("#mo_element").addClass("hidden");
			$("#minimum_order").attr("disabled");
			
			$("#eta_element").addClass("hidden");
			$("#eta").attr("disabled");

            
		}

        if(pa == "ready_stock" || pa == "sales_stock")
        {
            $("#stock_element").removeClass("hidden");
            $("#stock_id").removeAttr("disabled");
        }
        else {
            $("#stock_element").addClass("hidden");
            $("#stock_id").attr("disabled");
        }	
	}

	$("#product_availability").change(function(){
		
		pre_order();
	});
	
	$(document).ready(function(e) {
        pre_order();
    });
	

</script>
        