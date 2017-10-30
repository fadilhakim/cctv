<div class="about-pattern">
<div class="container blogpage">
    <h1 class="gotham" style="text-align: center; margin-bottom: 35px;">Our Blog</h1>
    <div class="row">
        <?php foreach ($blogs as $bg ) { ?>
            <article class="col-md-6">

            <figure class="col-lg-12">
            <a href="<?php echo base_url('blog/detail/'.$bg->blog_id); ?>">
                <!-- <img class="img img-responsive article-img" src="http://farm1.staticflickr.com/510/18737505996_98a20bf592_k.jpg"> -->
                <img class="img img-responsive article-img" src="<?php echo base_url("assets/image/blog/".$bg->blog_image)  ?>">
            </a>
            <figcaption class="article-caption"><h1 class="article-title "><a class="gotham" href="<?php echo base_url('blog/detail/'.$bg->blog_id); ?>"><?php echo $bg->blog_title; ?></a></h1>
            </figcaption>
            </figure>
            <div class="article-intro col-lg-12" style="padding-top: 10px;">
                <strong>
                    <?php echo $bg->blog_desc ;  ?>
                </strong>
            </div>
                
            </article>

        <?php } ?>
        
    </div>
</div>
</div>