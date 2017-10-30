<?php
foreach($product->result() as $row){
  
  $product_title=$row->product_title;
  $product_descrption=$row->product_descrption;
  $product_code=$row->product_code;
  $product_category=$row->product_category;
  $product_image=$row->product_image_1;
  $product_catalog=$row->product_catalog;
  $user_manual=$row->user_manual;
  $product_video=$row->product_video;
}
?>
<div class="about-pattern">
	<div class="detail_product" style="position: relative;">
		<div class="detail_left"></div>
		<div class="detail_right"></div>
		<div class="container">
			<div class="row">
				<div class="info">
					<div class="col-lg-6 flex"  style="height: 400px;">
						<img class="img-responsive" src="<?php echo base_url('assets/image/product/'.$product_image); ?>">
					</div>
					<div class="col-lg-6">
						<h2><?php echo $product_title; ?></h2>
						<?php echo $product_descrption; ?>
						<div class="videobox">
							<iframe width="560" height="315" src="https://www.youtube.com/embed/<?php echo $product_video; ?>" frameborder="0" allowfullscreen></iframe>
							<div class="vtext"><h2>Video Sample</h2></div>
							<div class="vsample"></div>
						</div>
						<a download href="<?php echo base_url('assets/catalog/'.$product_catalog); ?>">
						<div class="catalog">
							
							<p><strong>Klik Disini</strong><br>Untuk Download Catalog</p>
						</div>
						</a>
						<div class="usermanual">
							<p><strong>Klik Disini</strong><br>Untuk Download Usermanual</p>
						</div>
					</div>
				</div>
			</div>

			<div class="title row">
				<h2>Produk Terkait</h2>
				<div class="purple_border"></div>
			</div>
			<div class="row">
				
				<?php foreach ($category as $terkait) { ?>
					
					<div class="col-lg-3 col-md-6 col-xs-6 flex">
					<a href="<?php echo base_url("product/detail/".$terkait->product_category.'/'.$terkait->product_id); ?>">
						<div class="flex" style="height:250px; overflow: hidden;">
							<img class="img-responsive"  style="width: 80%; margin: auto;" src="<?php echo base_url("assets/image/product/".$terkait->product_image_1); ?>">
						</div>
						<h2 style="font-size: 15px; margin: auto; color: #000; text-align: center;"><?php echo $terkait->product_title; ?></h2>
						<div style="text-align: center; margin-top: 15px; color: #000; text-align: center;">
							<?php echo $terkait->product_descrption; ?>
						</div>
					</a>
					</div>
					
				<?php } ?>
				
			</div>
		</div>
	</div>
</div>