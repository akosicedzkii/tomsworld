
  <h2></h2>
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
                       
                       <a class="fancybox-media" title="<h3><?php echo $charity->title;?></h3><br><p style='text-align: justify;'><?php echo $charity->description;?></p>" href="#">
                       <center><h3><?php echo $charity->title;?></h3></center>
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
                       <?php echo $dynamic_settings->about_us;?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- TESTIMONIAL SECTION END  -->
    <section id="osi">
        <div class="container">

            <div class="row text-center" data-scroll-reveal="enter from the bottom after 0.2s">
                <div class="col-md-12  pad-bottom">
                <?php echo $dynamic_settings->faqs;?>
                </div>
            </div>
           


        </div>
    </section>
    <!-- TEAM SECTION END -->