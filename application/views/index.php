<?php
    $this->load->helper("url");
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>首页</title>
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="<?php echo  base_url();?>css/style.css">
    <link rel="stylesheet" type="text/css" href="<?php echo  base_url();?>css/index.css">
    <link rel="stylesheet" type="text/css"  href="<?php echo  base_url();?>css/bootstrap.min.css">
<!--    <link rel="stylesheet" type="text/css"  href="--><?php //echo  base_url();?><!--css/templatemo-style.css">-->
    <base href="<?php echo site_url();?>">
    <script>
        window.addEventListener("load",function(){
            setTimeout(hideURLbar,0);

        },false);
        function hideURLbar(){
            window.scrollTo(0,1);
        }
    </script>
</head>
<body>
<div class="responsive-header visible-xs visible-sm">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="top-section">
                    <div class="profile-image">
                        <img src="img/7.jpg" alt="Volton">
                    </div>
                    <div class="profile-content">
                        <h3 class="profile-title">Volton</h3>
                        <p class="profile-description">Pro Photography</p>
                    </div>
                </div>
            </div>
        </div>
        <a href="#" class="toggle-menu"><i class="fa fa-bars"></i></a>
        <div class="main-navigation responsive-menu">
            <ul class="navigation">
                <li><a href="#top"><i class="fa fa-home"></i>Home</a></li>
                <li><a href="#about"><i class="fa fa-user"></i>About Me</a></li>
                <li><a href="#projects"><i class="fa fa-newspaper-o"></i>My Gallery</a></li>
                <li><a href="#contact"><i class="fa fa-envelope"></i>Contact Me</a></li>
            </ul>
        </div>
    </div>
</div>
<div class ="sidebar-menu hidden-xs hidden-sm">
    <div class="top-section">
        <div class="profile-image">
            <img src="img/7.jpg">
        </div>
        <h3 class="profile-title">Gloria 柳昊妍</h3>
        <div class="total-location">
            <span class="location-icon"></span>
            <span class="school">黑龙江大学</span>
        </div>
    </div>
    <div class="main-navigation">
        <ul class="navigation">
            <li>
                <a href="#top" class="active"><i class="fa fa-globe"></i>welcome</a>
            </li>
            <li>
                <a href="#about"><i class="fa fa-pencil"></i>skills</a>
            </li>
            <li>
                <a href="#projects"><i class="fa fa-paperclip"></i>projects</a>
            </li>
            <li>
                <a href="#contact"><i class="fa fa-link"></i>contact me</a>
            </li>
        </ul>
    </div>
    <div class="social-icons">
        <ul>
            <li>
                <a href="#">
                    <i class="fa fa-facebook"></i>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="fa fa-twitter"></i>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="fa fa-linkedin"></i>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="fa fa-google-plus"></i>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="fa fa-youtube"></i>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="fa fa-rss"></i>
                </a>
            </li>
        </ul>
    </div>
</div>
<div class="banner-bg" id="top">
    <div class="banner-overlay"></div>
    <div class="welcome-text">
        <h2>WELCOME MY WEBSITE</h2>
        <h5>IF YOU HAVE DREAMS<br>
            YOU MUST TRY YOUR BEST TO COMPLETE IT</h5>
    </div>
</div>

<div class="main-content">
    <div class="fluid-container">
        <div class="content-wrapper">

            <!-- skills -->
            <div class=" skills-content" id="about">
                <div class="text-title">
                    <div>skills</div>
                </div>
                <span class="learn-skills">JS:</span>
                <div class="progress">
                    <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="45" aria-valuemin="0" ariavaluemax="100" style="width: 80%"></div>
                    <span class="sr-only">80% Complete</span>
                </div>

                <span class="learn-skills">JQuery:</span>
                <div class="progress">
                    <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="45" aria-valuemin="0" ariavaluemax="100" style="width: 70%"></div>
                    <span class="sr-only">70% Complete</span>
                </div>


                <span class="learn-skills">PHP:</span>
                <div class="progress">
                    <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="45" aria-valuemin="0" ariavaluemax="100" style="width:55%"></div>
                    <span class="sr-only">55% Complete</span>
                </div>


                <span class="learn-skills">NodeJs:</span>
                <div class="progress">
                    <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="45" aria-valuemin="0" ariavaluemax="100" style="width: 60%"></div>
                    <span class="sr-only">60% Complete</span>
                </div>


                <span class="learn-skills">Angular:</span>
                <div class="progress">
                    <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="45" aria-valuemin="0" ariavaluemax="100" style="width: 45%"></div>
                    <span class="sr-only">45% Complete</span>
                </div>
            </div>
            <hr>
            <!--skills end-->
            
            <!-- project -->
            <div class="page-section" id="projects">
                <div class="row">
                    <div class="col-md-12">
                        <h4 class="widget-title">PHOTOS OF WHAT I DO</h4>
                        <p>Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Maecenas et lorem molestie, maximus justo dignissim, cursus nisl. Nullam at ante quis ex pharetra pulvinar quis id dolor. Integer lorem odio, euismod ut sem sit amet, imperdiet condimentum diam.</p>
                    </div>
                </div>
<!--                xinjiade 新加的-->
<!--                <ul class="blog-cate">-->
<!--                    <li><a href="#" class="default">ALL</a></li>-->
<!--                    --><?php
//                    foreach($categories as $cate){
//                       ?>
<!--                        <li><a href="#">--><?php //echo $category->cate_name;?><!--</li>-->
<!--                    --><?php
//                    }
//                    ?>
<!--                    <li><a href="#">Web</a></li>-->
<!--                    <li><a href="#" >Mobile</a></li>-->
<!--                </ul>-->
<!--                xinjiadejieshu新加的结束-->

<!--                <div class="row projects-holder">-->
<!--                    --><?php
//                        foreach($blogs as $blog) {
//                            ?>
<!--                            <div class="col-md-4 col-sm-6">-->
<!--                                <div class="project-item">-->
<!--                                    <img src="--><?php //echo $blog->img;?><!--" alt="">-->
<!--                                    <div class="project-hover">-->
<!--                                        <div class="inside">-->
<!--                                            <h5><a href="#">Pellentesque porta ligula</a></h5>-->
<!--                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam-->
<!--                                                cursus</p>-->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                    <div class="blog-desc">-->
<!--                                        <p class="blog-title">--><?php //echo $blog->title;?><!--</p>-->
<!--                                        <span class="blog-clicked">--><?php //echo $blog->cliked;?><!--</span>-->
<!--                                    </div>-->
<!---->
<!--                                </div>-->
<!--                            </div>-->
<!--                            --><?php
//                        }
//                    ?>
                 </div>
                <div class="row projects-holder">
                    <div class="col-md-4 col-sm-6">
                        <div class="project-item">
                            <img src="img/1.jpg" alt="">

                            <div class="project-hover">
                                <div class="inside">
                                    <h5><a href="#">Pellentesque porta ligula</a></h5>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam cursus</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="project-item">
                            <img src="img/2.jpg" alt="">
                            <div class="project-hover">
                                <div class="inside">
                                    <h5><a href="#">Pellentesque porta ligula</a></h5>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam cursus</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="project-item">
                            <img src="img/3.jpg" alt="">
                            <div class="project-hover">
                                <div class="inside">
                                    <h5><a href="#">Pellentesque porta ligula</a></h5>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam cursus.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="project-item">
                            <img src="img/4.jpg" alt="">
                            <div class="project-hover">
                                <div class="inside">
                                    <h5><a href="#">Pellentesque porta ligula</a></h5>
                                    <p>Quisque mattis sit amet dolor eu scelerisque. Vivamus bibendum massa et nisl tempus commodo.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="project-item">
                            <img src="img/5.jpg" alt="">
                            <div class="project-hover">
                                <div class="inside">
                                    <h5><a href="#">Pellentesque porta ligula</a></h5>
                                    <p>Quisque mattis sit amet dolor eu scelerisque. Vivamus bibendum massa et nisl tempus commodo.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="project-item">
                            <img src="img/6.jpg" alt="">
                            <div class="project-hover">
                                <div class="inside">
                                    <h5><a href="#">Pellentesque porta ligula</a></h5>
                                    <p>Quisque mattis sit amet dolor eu scelerisque. Vivamus bibendum massa et nisl tempus commodo.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <hr>

            <!-- projects ends -->

                <!--  titles -->

                <!--  titles ends-->

                <!--  contact me -->
                <div class="page-section" id="contact">
                    <div class="row">
                        <div class="col-md-12">
                            <h4 class="widget-title">PLACE TO TALK WITH ME</h4>
                            <p>Vestibulum ac iaculis erat, in semper dolor. Maecenas et lorem molestie, maximus justo dignissim, cursus nisl. Nullam at ante quis ex pharetra pulvinar quis id dolor. Integer lorem odio, euismod ut sem sit amet, imperdiet condimentum diam.</p>
                        </div>
                    </div>
                    <div class="row">
                        <form action="#" method="post" class="contact-form">
                            <fieldset class="col-md-4 col-sm-6">
                                <input type="text" id="your-name" placeholder="Your Name...">
                            </fieldset>
                            <fieldset class="col-md-4 col-sn-6">
                                <input type="text" id="email" placeholder="Your Email...">
                            </fieldset>
                            <fieldset class="col-md-4 col-sn-12">
                                <input type="text" id="your-subject" placeholder="Subject...">
                            </fieldset>
                            <fieldset class="col-md-12 col-sm-12">
                                <textarea name="message" id="message" rows="6" placeholder="Leave your message..."></textarea>
                            </fieldset>
                            <fieldset class="col-md-12 col-sm-12">
                                <input type="submit" class="button big default" value="Send Message">
                            </fieldset>
                        </form>
                    </div>
                </div>
                <hr>
                <!--  contact me ends-->
            </div>
        </div>
    </div>
    <div class="footer">
        <div></div>
    </div>




    <script  src="<?php echo base_url();?>js/jquery-1.10.2.min.js"></script>
    <script  src="<?php echo base_url();?>js/bootstrap.js"></script>
    <script  src="<?php echo base_url();?>js/modernizr-2.6.2.min.js"></script>
    <script  src="<?php echo base_url();?>js/index.js"></script>
    <script  src="<?php echo base_url();?>js/main.js"></script>
   
</body>
</html>