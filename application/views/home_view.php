
  <h2>Carousel Example</h2>
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    
    <ol class="carousel-indicators">
    <?php if($banners != null)
    {
        $increment = 0;
        foreach($banners as $row)
        {?>
            <li data-target="#myCarousel" data-slide-to="<?php echo $increment;?>" <?php if($increment==0){ echo 'class="active"';}?>></li>
            <?php 
            $increment++;
        }
    }?>
    </ol>
    <div class="carousel-inner">
        <?php if($banners != null)
        {
            $increment = 0;
            foreach($banners as $row)
            {?>
                <div class="item<?php if($increment==0){ echo ' active';}?>">
                    <img class="carousel-bg" src="<?php echo base_url()."uploads/banners/".$row->banner_image;?>">
                    <div class="carousel-caption">
                        <h3>Los Angeles</h3>
                        <p>LA is always so much fun!</p>
                    </div>
                    <?php if($row->inner_banner_image != null || $row->inner_banner_image != ""){?>
                        <!--<img id="doing-your-part-copy" class="carousel-content animate fade-in" src="<?php echo base_url()."uploads/banners/".$row->inner_banner_image;?>">-->
                    <?php }?>
                </div>
        <?php 
            $increment++;   }
        }?>
    </div>
   
    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
    <!--
    <section id="services">
        <div class="container">
            <div class="row text-center">
                <div class="col-md-6 col-md-offset-3 pad-bottom" data-scroll-reveal="enter from the bottom after 0.2s">
                    <h2><strong>OUR SERVICES</strong></h2>
                    Consectetur adipiscing elit felis dolor felis dolor vitae.Eelit felis dolor vitae

                </div>
            </div>
            <div class="row text-center pad-bottom" data-scroll-reveal="enter from the bottom after 0.4s">
                <div class="col-md-3">
                    <i class="ion-ios-cloud-outline"></i>
                    <h4><strong>Service Name # 1 </strong></h4>
                    Consectetur adipiscing elit felis dolor felis dolor vitae.Eelit felis dolor vitae felis dolor vitae
                </div>
                <div class="col-md-3">
                    <i class="ion-card"></i>
                    <h4><strong>Service Name # 2 </strong></h4>
                    Consectetur adipiscing elit felis dolor felis dolor vitae.Eelit felis dolor vitae felis dolor vitae
                </div>
                <div class="col-md-3">
                    <i class="ion-speedometer"></i>
                    <h4><strong>Service Name # 3 </strong></h4>
                    Consectetur adipiscing elit felis dolor felis dolor vitae.Eelit felis dolor vitae felis dolor vitae
                </div>
                <div class="col-md-3">
                    <i class="ion-ios-settings"></i>
                    <h4><strong>Service Name # 4 </strong></h4>
                    Consectetur adipiscing elit felis dolor felis dolor vitae.Eelit felis dolor vitae felis dolor vitae
                </div>
            </div>
            <div class="row text-center" data-scroll-reveal="enter from the bottom after 0.6s">
                <div class="col-md-3">
                    <i class="ion-ios-chatboxes-outline"></i>
                    <h4><strong>Service Name # 5 </strong></h4>
                    Consectetur adipiscing elit felis dolor felis dolor vitae.Eelit felis dolor vitae felis dolor vitae
                </div>
                <div class="col-md-3">
                    <i class="ion-ios-pulse-strong"></i>
                    <h4><strong>Service Name # 6 </strong></h4>
                    Consectetur adipiscing elit felis dolor felis dolor vitae.Eelit felis dolor vitae felis dolor vitae
                </div>
                <div class="col-md-3">
                    <i class="ion-ios-browsers-outline"></i>
                    <h4><strong>Service Name # 7 </strong></h4>
                    Consectetur adipiscing elit felis dolor felis dolor vitae.Eelit felis dolor vitae felis dolor vitae
                </div>
                <div class="col-md-3">
                    <i class="ion-ios-people-outline"></i>
                    <h4><strong>Service Name # 8 </strong></h4>
                    Consectetur adipiscing elit felis dolor felis dolor vitae.Eelit felis dolor vitae felis dolor vitae
                </div>
            </div>
        </div>


    </section> 
    <div id="clients">
        <div class="overlay">
            <div class="container">
                <div class="row text-center">
                    <div class="col-md-12" data-scroll-reveal="enter from the bottom after 0.2s">
                        <div class="carousel slide clients-carousel" id="clients-slider">
                            <div class="carousel-inner">
                                <div class="item active">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <a class="thumbnail" href="#">
                                                <img src="<?php echo base_url()."pink/assets/";?>img/themeforest.png" alt="" />
                                            </a>
                                        </div>
                                        <div class="col-md-3">
                                            <a class="thumbnail" href="#">
                                                <img src="<?php echo base_url()."pink/assets/";?>img/facebook.png" alt="" />
                                            </a>
                                        </div>
                                        <div class="col-md-3">
                                            <a class="thumbnail" href="#">
                                                <img src="<?php echo base_url()."pink/assets/";?>img/google.png" alt="" />
                                            </a>
                                        </div>
                                        <div class="col-md-3">
                                            <a class="thumbnail" href="#">
                                                <img src="<?php echo base_url()."pink/assets/";?>img/graphic.png" alt="" />
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <a class="thumbnail" href="#">
                                                <img src="<?php echo base_url()."pink/assets/";?>img/themeforest.png" alt="" />
                                            </a>
                                        </div>
                                        <div class="col-md-3">
                                            <a class="thumbnail" href="#">
                                                <img src="<?php echo base_url()."pink/assets/";?>img/facebook.png" alt="" />
                                            </a>
                                        </div>
                                        <div class="col-md-3">
                                            <a class="thumbnail" href="#">
                                                <img src="<?php echo base_url()."pink/assets/";?>img/google.png" alt="" />
                                            </a>
                                        </div>
                                        <div class="col-md-3">
                                            <a class="thumbnail" href="#">
                                                <img src="<?php echo base_url()."pink/assets/";?>img/graphic.png" alt="" />
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <a class="thumbnail" href="#">
                                                <img src="<?php echo base_url()."pink/assets/";?>img/themeforest.png" alt="" />
                                            </a>
                                        </div>
                                        <div class="col-md-3">
                                            <a class="thumbnail" href="#">
                                                <img src="<?php echo base_url()."pink/assets/";?>img/facebook.png" alt="" />
                                            </a>
                                        </div>
                                        <div class="col-md-3">
                                            <a class="thumbnail" href="#">
                                                <img src="<?php echo base_url()."pink/assets/";?>img/google.png" alt="" />
                                            </a>
                                        </div>
                                        <div class="col-md-3">
                                            <a class="thumbnail" href="#">
                                                <img src="<?php echo base_url()."pink/assets/";?>img/graphic.png" alt="" />
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <a data-slide="prev" href="#clients-slider" class="left carousel-control">‹</a>
                            <a data-slide="next" href="#clients-slider" class="right carousel-control">›</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
  -->
    <section id="charities">
        <div class="container">
            <div class="row text-center">
                <div class="col-md-8 col-md-offset-2 pad-bottom" data-scroll-reveal="enter from the bottom after 0.2s">
                    <h2><strong>Charities</strong></h2>
                    <p>Become a Gift2Share Charity</p>
                    <p>The purpose of 'Gift2Share' is to help make party organizing easy and also help charities by way of donation. </p>

                    <p>If you would like to become a Gift2Share chosen charity, then please leave us a message in our contact us form below.</p>

                </div>
            </div>

            <div class="row text-center" id="portfolio-div">

                <?php foreach($charities as $charity){?>
                <div class="col-md-4 col-sm-4 html">
                    <div class="work-wrapper">

                        <a class="fancybox-media" title="<h3><?php echo $charity->title;?></h3><br><p style='text-align: justify;'><?php echo $charity->description;?></p>" href="<?php echo base_url()."uploads/charities/".$charity->file_name;?>">

                            <img src="<?php echo base_url()."uploads/charities/".$charity->file_name;?>" class="img-responsive " alt="" />
                        </a>


                    </div>
                </div>
                <?php }?>
            </div>
        </div>
    </section>
    <!-- WORK SECTION END  -->
    <div id="testimonial" data-scroll-reveal="enter from the bottom after 0.2s">
        <div class="overlay">
            <div class="container">
                <div class="row text-center">
                    <div class="col-md-4 col-md-offset-4 col-sm-4 col-sm-offset-4">
                        <i class="ion-ios-drag clr-set f-big"></i>
                        <br />
                        <p>
                            Consectetur adipiscing elit felis dolor felis dolor vitae.
                     Consectetur adipiscing elit felis dolor felis dolor vitae.Eelit felis dolor vitae felis dolor vitae
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- TESTIMONIAL SECTION END  -->
    <section id="team">
        <div class="container">

            <div class="row text-center" data-scroll-reveal="enter from the bottom after 0.2s">
                <div class="col-md-6 col-md-offset-3 pad-bottom">
                    <h2><strong>AWESOME TEAM</strong></h2>
                    Consectetur adipiscing elit felis dolor felis dolor vitae.Eelit felis dolor vitae

                </div>
            </div>
            <div class="row pad-bottom" data-scroll-reveal="enter from the bottom after 0.4s">

                <div class="col-md-6 col-sm-6">
                    <div class="media">
                        <a class="media-left" href="#">
                            <img src="<?php echo base_url()."pink/assets/";?>img/1.jpg" alt="" class="img-circle" />
                        </a>
                        <div class="media-body">
                            <h3 class="media-heading">Technical Director</h3>
                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid.
           3 wolf moon officia aute, non cupidatat skateboard dolor brunch. 
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6">
                    <div class="media">
                        <a class="media-left" href="#">
                            <img src="<?php echo base_url()."pink/assets/";?>img/2.jpg" alt="" class="img-circle" />
                        </a>
                        <div class="media-body">
                            <h3 class="media-heading">Marketing Director</h3>
                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid.
           3 wolf moon officia aute, non cupidatat skateboard dolor brunch. 
                        </div>
                    </div>
                </div>
            </div>

            <div class="row" data-scroll-reveal="enter from the bottom after 0.6s">

                <div class="col-md-6 col-sm-6">
                    <div class="media">
                        <a class="media-left" href="#">
                            <img src="<?php echo base_url()."pink/assets/";?>img/3.jpg" alt="" class="img-circle" />
                        </a>
                        <div class="media-body">
                            <h3 class="media-heading">Clients Manager</h3>
                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid.
           3 wolf moon officia aute, non cupidatat skateboard dolor brunch. 
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6">
                    <div class="media">
                        <a class="media-left" href="#">
                            <img src="<?php echo base_url()."pink/assets/";?>img/4.jpg" alt="" class="img-circle" />
                        </a>
                        <div class="media-body">
                            <h3 class="media-heading">Support Director</h3>
                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid.
           3 wolf moon officia aute, non cupidatat skateboard dolor brunch. 
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- TEAM SECTION END -->