<div class="container klien-kami">
	<h1>Klien Kami</h1>
	
	<div class="row">
	<?php foreach ($clients as $cl ) { ?>
		<div class="col-lg-2" data-aos="flip-left">
			<img src="<?php echo base_url('assets/image/clients/'.$cl->client_image); ?>">
		</div>
	<?php } ?>
		
	</div>

</div>