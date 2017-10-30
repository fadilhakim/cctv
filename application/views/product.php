<?php if(!empty($category->result())) {?>
<?php
        foreach($category->result() as $row){
          $product_category=$row->product_category;
?>
<?php     } ?>


<div class="product_list">
    <div class="product_shape_left"></div>
    <div class="product_shape_right"></div>
    <div class="container">
        <h2><?php echo $product_category; ?></h2>
        <div class="row">
          
            <?php
                foreach($category->result() as $row){
                      $product_id=$row->product_id;
                      $product_title=$row->product_title;
                      $product_descrption=$row->product_descrption;
                      $product_code=$row->product_code;
                      $product_category=$row->product_category;
                      $product_image=$row->product_image_1;
                      $product_catalog=$row->product_catalog;
                      $product_slug=$row->product_slug;
                      $user_manual=$row->user_manual;
                      $product_video = $row->product_video;
                ?>
            <div class="col-lg-4">
                <a href="<?php echo base_url('product/detail/'.$product_category.'/'.$product_slug.'/'.$product_id) ?>">
                    <div class="boximg flex">
                        <img class="img-responsive" src="<?php echo base_url('assets/image/product/'.$product_image); ?>">
                    </div>
                    
                    <p class="product_title"><?php echo $product_title; ?></p>
                    <div class="product_desc">
                        <?php echo $product_descrption; ?>
                    </div>
                </a>
            </div>

            <?php } ?>

        
            
        </div>
    </div>
</div>

<?php } else {?>


<div class="product_list">
    <div class="container">
        <h2>Sorry, Still no product in this category</h2>
    </div>
</div>
<?php } ?>
