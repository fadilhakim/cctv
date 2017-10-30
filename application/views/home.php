<div class="owl-carousel owl-theme">
	
	<?php foreach ($slider as $s ) { ?>
		<div class="item">
    		<img src="<?php echo base_url("assets/image/slider/".$s->silder_image) ?>">
    	</div>
	<?php } ?>
    
</div>
<div class="service">
	<div class="container">
		<div class="row" data-aos="fade-left">
			<div class="col-lg-3 col-md-6 col-xs-6 satu">
				<p class="gotham">Layanan Purna Jual</p>
			</div>

			<div class="col-lg-3 col-md-6 col-xs-6 dua" data-aos="fade-top">
				<p class="gotham">Teknologi Baru</p>
			</div>

			<div class="col-lg-3 col-md-6 col-xs-6 tiga" data-aos="fade-top">
				<p class="gotham">Bergaransi 2 Tahun</p>
			</div>

			<div class="col-lg-3 col-md-6 col-xs-6 empat" data-aos="fade-top">
				<p class="gotham">Merk Resmi Lebih dari 11 Tahun</p>
			</div>

		</div>
	</div>
	<div class="btm-shape-service"></div>
</div>
<div class="produk-kami">
	<!-- <div class="top-shape-produk"></div> -->
	<div class="putus2-border pattern"></div>
	<div class="white-triangle pattern" data-aos="fade-up-bottom"></div>
	<div class="container" data-aos="fade-right" data-aos-offset="200" data-aos-easing="ease-in-sine" data-aos-duration="600">
		<h2>Produk Kami</h2>
		<p class="gothamrnd" style="font-size: 16px;">
			Memberikan solusi integrasi lengkap untuk sistem pengawasan dan keamanan<br>
			dengan fokus pada teknologi yang terdepan, inovatif, dan terpercaya.
		</p>
		<div class="row">
			<?php foreach ($category as $ct ) { ?>
				<div class="col-xs-6 col-lg-3 flex">
					<a style="color: #fff;" href="<?php echo base_url('product_list/'.$ct->category_url); ?>">
						<img class="img-responsive" src="<?php echo base_url('assets/image/category/'.$ct->image); ?>">
						<p class="gotham">
							
								<?php echo $ct->category_title; ?>
							
						</p>
					</a>
				</div>
			<?php } ?>
		</div>
	</div>
	<div class="btm-shape-produk"></div>
	<div class="second-border pattern"></div>
</div>

<div class="follower" data-toggle="modal" data-target="#myModal" style="cursor: pointer;">
	<img  data-aos="fade-top" src="<?php echo base_url("assets/image/follower.png"); ?>">
</div>
<div class="hubungi-kami">
	<div class="orange-shape">
		
	</div>
	<div class="pink-arrow pattern" data-aos="flip-left"></div>
	<div class="white-wave pattern" data-aos="zoom-in-up"></div>
	<div class="container">
	<div class="row">
		<div class="col-lg-12">
			<form method="post" action="<?php echo base_url('mail'); ?>">
				<h2>HUBUNGI KAMI</h2>
				<input type="text" name="name" placeholder="Nama">
				<input type="email" name="email" placeholder="Email">

				<input type="subject" name="subject" placeholder="subject">

				<select name="area">
					<option selected value="mailantikarisma@gmail.com"">Jakarta</option>
					<?php foreach ($branch as $br) { ?>
						<option value="<?php echo $br->branch_email; ?>"><?php echo $br->branch_position ?></option>
					<?php } ?>
					
				</select>
				<textarea name="textarea" placeholder="Your Message"></textarea>
				<input class="submit_btn" type="submit" value="Kirim" placeholder="Kirim">
			</form>
		</div>
	</div>
	</div>
	<div class="white-shape">
		
	</div>
	<div class="green-triangle pattern" data-aos="fade-bottom"></div>
</div>
<div class="container distribusi" data-aos="fade-right">
	<div class="row ">
		<h2>
			Distribusi Kami
		</h2>
		<div class="col-lg-12">
			<img src="<?php echo base_url("assets/image/distribusi.png"); ?>">
		</div>
		
	</div>
</div>

<div class="btm-m">
			
</div>

<div class="btmbtm"></div>