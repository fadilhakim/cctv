<?php foreach($blogs as $row){ 

  $blog_title = $row->blog_title;
  $cd = $row->createdate;
  $desc = $row->blog_desc;
  $image =  $row->blog_image;
} ?>

<div class="container">

  <div class="row blog-detail">

    <!-- Post Content Column -->
    <div class="col-lg-8">

      <!-- Title -->
      <h1 class="mt-4"><?php echo $blog_title; ?></h1>

      <!-- Author -->

      <hr>

      <!-- Date/Time -->
      <p><i style="font-style: italic;"> Post Date :</i> <?php echo $cd ?></p>

      <hr>

      <!-- Preview Image -->
      <img class="img-fluid rounded" src="<?php echo base_url('assets/image/blog/'.$image); ?>" alt="">

      <hr>

      <!-- Post Content -->
      <?php echo $desc ?>

      <hr>

    
    </div>

  </div>
  <!-- /.row -->

</div>