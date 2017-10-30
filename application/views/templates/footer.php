<footer>

    <div class="top">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <h3>Head Office</h3>
                    <p>
                        7th Floor Panca Putra Group Building <br>
                        CBD Pluit Blok S No. 8 <br>
                        Jl. Pluit Selatan Raya <br>
                        Jakarta Utara, 14440 <br>
                        Indonesia <br>
                    </p>
                    <p>
                        <strong>P. </strong>62-21-2986 6505
                    </p>
                    <p>
                        <strong>F. </strong>62-21-2986 6505
                    </p>
                    <p>
                        <strong>E. </strong>info@pentavictorindo.com 
                    </p>
                </div>
                <div class="col-lg-4">
                    <h3>Technical Support</h3>
                    <p>
                        <strong>P.</strong> 62-21-2986 6488
                    </p>
                    <p>
                        <strong>E.</strong> support@glenzsecurity.com 
                    </p>
                </div>
                <div class="col-lg-4">
                    <h3 style="text-align: right;">Kerja Sama Strategis</h3>
                    <img class="img-responsive" src="<?php echo base_url("assets/image/kerjasama1.png"); ?>">
                    <br>
                    <img class="img-responsive" src="<?php echo base_url("assets/image/kerjasama2.jpg"); ?>">
                </div>
            </div>
        </div>
    </div>

    <div class="bottom">
        <div class="container">
            <p>
                copyright © 1996-2017 PT. Penta Victorindo Suksestama
            </p>
        </div>
    </div>  
</footer>

</body>

    <!-- script js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"  type="text/javascript"></script>
    <script src="<?php echo base_url ('assets/node_modules/bootstrap/dist/js/bootstrap.min.js') ?>" type="text/javascript"></script>
    <script src="<?php echo base_url('assets/slider/owl.carousel.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/bower_components/aos/dist/aos.js'); ?>"></script>
    <script type="text/javascript">
    
        $('.owl-carousel').owlCarousel({
        loop:true,
        items:1,
        navigation : false, // Show next and prev buttons
        slideSpeed : 300,
        autoplay:true,
        autoHeight:true,
        autoplayTimeout:5000,
    })
    </script>
    <script>
        AOS.init({
          offset: 200,
          duration: 600,
          // easing: 'ease-in-sine',
          delay: 100,
        });

        $('ul.nav li.dropdown').hover(function() {
          $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeIn(500);
        }, function() {
          $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeOut(500);
        });
    </script>
    <!--Start of Tawk.to Script-->
    <script type="text/javascript">
    var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
    (function(){
    var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
    s1.async=true;
    s1.src='https://embed.tawk.to/59ebfde1c28eca75e462764f/default';
    s1.charset='UTF-8';
    s1.setAttribute('crossorigin','*');
    s0.parentNode.insertBefore(s1,s0);
    })();
    </script>
    <!--End of Tawk.to Script-->
</html>
