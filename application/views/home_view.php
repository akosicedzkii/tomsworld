
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
                        <h3><?php echo $row->title;?></h3>
                        <p><?php echo $row->description;?></p>
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
    <section id="services">
        <div class="container">
            <div class="row text-center">
                <div class="col-md-8 col-md-offset-2 pad-bottom" data-scroll-reveal="enter from the bottom after 0.2s">
                    <h2><strong>Services</strong></h2>
                    <p></p>

                </div>
            </div>

            <div class="row text-center" id="portfolio-div">

                <?php foreach($charities as $charity){?>
                <div class="col-md-4 col-sm-4 html">
                    <div class="work-wrapper">
                       
                        <a class="fancybox-media" title="<h3><?php echo $charity->title;?></h3><br><p style='text-align: justify;'><?php echo $charity->description;?></p>" href="<?php echo base_url()."uploads/charities/".$charity->file_name;?>">
                            <h3><?php echo $charity->title;?></h3>
                            <!--<img src="<?php echo base_url()."uploads/charities/".$charity->file_name;?>" class="img-responsive " alt="" />-->
                        </a>


                    </div>
                </div>
                <?php }?>
            </div>
        </div>
    </section>
    <!-- WORK SECTION END  -->
    <div id="technology" data-scroll-reveal="enter from the bottom after 0.2s">
        <div class="overlay">
            <div class="container">
                <div class="row text-center">
                    <div class="col-md-4 col-md-offset-4 col-sm-4 col-sm-offset-4">
                        <i class="ion-ios-drag clr-set f-big"></i>
                        <br />
                        <h2>
                        Technology
                        </h2>
                        <h3>
                        Secure Data Exchange

                        </h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- TESTIMONIAL SECTION END  -->
    <section id="osi">
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