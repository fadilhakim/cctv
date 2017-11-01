<body>
<header>
    <div class="container container-table">
        <div class="row">
            <div class="logo">
     
            </div>
            <nav class="text-center col-lg-12">
                <ul>
                    <li><a href="<?php echo base_url(""); ?>">Beranda</a></li>
                    <li><a href="<?php echo base_url("about"); ?>">Tentang Kami</a></li>
                    <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown">Produk<b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <?php foreach ($category_product as $cp) { ?>
                            <li><a href="<?php echo base_url('product_list/'.$cp->category_url); ?>"><?php echo $cp->category_title; ?></a></li>
                        <?php } ?>
                    </ul>
                    </li>
                    <li><a href="<?php echo base_url("iot"); ?>">Teknologi IOT</a></li>
                    <!-- <li><a href="<?php echo base_url("klien"); ?>">Klien Kami</a></li> -->
                    <li><a href="<?php echo base_url("kontak"); ?>">Kontak</a></li>
                    <li><a href="<?php echo base_url("blog"); ?>">Blog</a></li>
                </ul>
            </nav>
        </div>
        
        <div class="row vertical-center-row">
            <div class="col-md-4"></div>
            <div class="col-md-4"></div>
        </div>



</header>

<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#"><img src="<?php echo base_url('assets/image/logo_mobile.png'); ?>"></a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a class="reitam" href="<?php echo base_url(""); ?>">Beranda</a></li>
        <li><a class="reitam" href="<?php echo base_url("about"); ?>">Tentang Kami</a></li>
        <li class="dropdown">
          <a class="reitam" href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Produk <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <?php foreach ($category_product as $cp) { ?>
                <li><a href="<?php echo base_url('product_list/'.$cp->category_url); ?>"><?php echo $cp->category_title; ?></a></li>
            <?php } ?>
          </ul>
        </li>
        <li><a class="reitam" href="<?php echo base_url("iot"); ?>">Teknologi IOT</a></li>
        <!-- <li><a href="<?php echo base_url("klien"); ?>">Klien Kami</a></li> -->
        <li><a class="reitam" href="<?php echo base_url("kontak"); ?>">Kontak</a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>


<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title gotham">Follow Us On</h4>
      </div>
      <div class="modal-body">
        <div class="row">
            <a  class="col-lg-1" href="">   
                <i class="fa fa-instagram" style="font-size:48px;color:white"></i>
            </a>
            <a  class="col-lg-2" href="https://www.instagram.com/glenzsecurity/">   
                <i class="fa fa-instagram" style="font-size:48px;color:red"></i>
            </a>
            <a  class="col-lg-2" href="https://twitter.com/glenzsecurity">  
                <i class="fa fa-twitter" style="font-size:48px;color:red"></i>
            </a>
            <a  class="col-lg-2" href="https://web.facebook.com/cctvgpstracker/">  
                <i class="fa fa-facebook" style="font-size:48px;color:red"></i>
            </a>
            <a  class="col-lg-2" href="">  
                <i class="fa fa-youtube" style="font-size:48px;color:red"></i>
            </a>
            <a  class="col-lg-2" href="">  
                <i class="fa fa-linkedin" style="font-size:48px;color:red"></i>
            </a>
              <a  class="col-lg-1" href="">   
                <i class="fa fa-instagram" style="font-size:48px;color:white"></i>
            </a>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default btn-danger" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>