<?php
echo $this->Html->css(array(
    'front/about.css',
));
?>
<?= $this->element('/front/breadcrumb'); ?>
<div class="container">
    <div class="sixteen columns">
        <div class="box_head">
            <h3>Good To Know Us</h3>
        </div><!--end box_head -->

        <div class="seven columns alpha">
            <div class="welcome_img">
                <img src="images/photos/welcome_img.jpg" alt="">
            </div>
        </div><!--end four-->
        <div class="nine columns omega">
            <div class="welcome_text">
                <h2>Important Header Goes Here</h2>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum ac nibh est. Nunc eget mauris eget purus aliquam auctor. In malesuada mauris in mi dignissim dictum. Curabitur sed mauris nibh, tristique volutpat purus. Ut sagittis lorem eu leo venenatis ultrices faucibus tortor adipiscing. Suspendisse ut dui elit. Donec arcu lorem, pretium a volutpat sit amet, congue nec tellus. Nam eget dapibus eros. Nunc pharetra tincidunt quam, eu fringilla turpis congue eget. Quisque sit amet orci dui. Aliquam rutrum, enim eu bibendum accumsan, nulla dolor feugiat nibh, sed sagittis sem metus vel nulla.
                </p>
                <p>
                    In ante urna, porta pellentesque vehicula ut, convallis non nulla. Praesent libero lorem, euismod eu semper eget, condimentum vitae nunc. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec sagittis lectus sit amet orci dictum pretium eu vitae ante. Vivamus luctus fringilla urna at mattis. Donec fermentum sollicitudin porttitor. Aliquam et libero eu ligula rhoncus tincidunt. Vivamus ligula lectus, ornare vel eleifend.
                </p>
                <a class="gray_btn" href="#">Take Quick Tour</a>
            </div>
        </div><!--end fourteen-->
    </div><!--end sixteen-->

    <div class="sixteen columns">
        <div id="tagLine" class="clearfix">
            <div class="twelve columns">
                <h5>
                    Shoploop <span>lets you upload and sell digital goodies easily.</span><br>
                    <small>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque non scelerisque lectus</small>
                </h5>
            </div>
            <div class="three columns">
                <a class="red_btn" href="#">start browsing</a>
            </div>

        </div><!--end tagLine-->
    </div><!--end sixteen-->

    <div class="eight columns">
        <div class="ourTeam">
            <div class="box_head">
                <h3>Meet The Team</h3>
                <div class="pagers center">
                    <a class="prev team_prev" href="#prev">Prev</a>
                    <a class="nxt team_nxt" href="#nxt">Next</a>
                </div>
            </div><!--end box_head -->
            <div class="cycle-slideshow" 
                 data-cycle-fx="scrollHorz"
                 data-cycle-timeout=0
                 data-cycle-slides="> ul"
                 data-cycle-prev="div.pagers a.team_prev"
                 data-cycle-next="div.pagers a.team_nxt"
                 >
                <ul class="team_show">
                    <li>
                        <div class="img">
                            <img src="images/photos/four_column.jpg" alt="product">
                        </div>
                        <h6>This is: <strong><a href="#">John Doe</a></strong></h6>
                        <ul class="socials">
                            <li><a class="twitter" href="#">twitter</a></li>
                            <li><a class="facebook" href="#">face</a></li>
                            <li><a class="googlep" href="#">google+</a></li>
                            <li><a class="vimeo" href="#">vimeo</a></li>
                            <li><a class="skype" href="#">skype</a></li>
                            <li><a class="linked" href="#">linked</a></li>
                        </ul>	
                    </li>
                    <li>
                        <div class="img">
                            <img src="images/photos/four_column.jpg" alt="product">
                        </div>
                        <h6>This is: <strong><a href="#">John Doe</a></strong></h6>
                        <ul class="socials">
                            <li><a class="twitter" href="#">twitter</a></li>
                            <li><a class="facebook" href="#">face</a></li>
                            <li><a class="googlep" href="#">google+</a></li>
                            <li><a class="vimeo" href="#">vimeo</a></li>
                            <li><a class="skype" href="#">skype</a></li>
                            <li><a class="linked" href="#">linked</a></li>
                        </ul>	
                    </li>
                </ul>
                <ul class="team_show">
                    <li>
                        <div class="img">
                            <img src="images/photos/four_column.jpg" alt="product">
                        </div>
                        <h6>This is: <strong><a href="#">Yassen Doe</a></strong></h6>
                        <ul class="socials">
                            <li><a class="twitter" href="#">twitter</a></li>
                            <li><a class="facebook" href="#">face</a></li>
                            <li><a class="googlep" href="#">google+</a></li>
                            <li><a class="vimeo" href="#">vimeo</a></li>
                            <li><a class="skype" href="#">skype</a></li>
                            <li><a class="linked" href="#">linked</a></li>
                        </ul>	
                    </li>
                    <li>
                        <div class="img">
                            <img src="images/photos/four_column.jpg" alt="product">
                        </div>
                        <h6>This is: <strong><a href="#">Ahmed Doe</a></strong></h6>
                        <ul class="socials">
                            <li><a class="twitter" href="#">twitter</a></li>
                            <li><a class="facebook" href="#">face</a></li>
                            <li><a class="googlep" href="#">google+</a></li>
                            <li><a class="vimeo" href="#">vimeo</a></li>
                            <li><a class="skype" href="#">skype</a></li>
                            <li><a class="linked" href="#">linked</a></li>
                        </ul>	
                    </li>
                </ul>

            </div>
        </div><!--end latest-->
    </div><!--end eight-->


    <div class="eight columns">

        <div id="testimonial" class="seven columns omega">
            <div class="box_head">
                <h3>Clients Say</h3>
            </div>

            <div id="tab_outer">

                <ul id="tabNav">
                    <li>
                        <a href="#client_1">
                            <img src="images/photos/thumbnail.jpg" alt="">
                        </a>
                    </li>
                    <li class="currentTestimonial">
                        <a href="#client_2">
                            <img src="images/photos/thumbnail.jpg" alt="">
                        </a>
                    </li>
                    <li>
                        <a href="#client_3">
                            <img src="images/photos/thumbnail.jpg" alt="">
                        </a>
                    </li>
                    <li>
                        <a href="#client_4">
                            <img src="images/photos/thumbnail.jpg" alt="">
                        </a>
                    </li>
                    <li>
                        <a href="#client_5">
                            <img src="images/photos/thumbnail.jpg" alt="">
                        </a>
                    </li>
                </ul>

                <div id="client_1">
                    <h6>This is amizing Template in very Long Title.</h6>
                    <p>Praesent id bibendum mi. Cras ac diam arcu. Sed venenatis, mi dictum eleifend sollicitudin, metus eros mattis mauris, nec gravida dui augue sed odio. Nulla id lectus purus. Cras malesuada erat in libero ultricies vestibulum. Nam et lacus neque. Sed volutpat ante id mauris laoreet vestibulum. Nam et lacus neque. Sed volutpat ante id mauris laoreet vestibulum.</p>
                    <span>Written By: <a href="#">John Smith</a></span>
                </div>

                <div id="client_2">
                    <h6>Nice eCommerce Out there.</h6>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas metus nulla, commodo a sodales sed, dignissim pretium nunc. Nam et lacus neque. Sed volutpat ante id mauris laoreet vestibulum. Nam et lacus neque. Sed volutpat ante id mauris laoreet vestibulum.</p>
                    <span>Written By: <a href="#">John Smith</a></span>
                </div>

                <div id="client_3">
                    <h6>Thanks To make my life match easier.</h6>
                    <p>Nam bibendum condimentum turpis pharetra cursus. Fusce tortor tortor, placerat ac cursus eget, laoreet id odio. Integer dui metus, vulputate at congue adipiscing, accumsan ornare neque. Nam et lacus neque. Sed volutpat ante id mauris laoreet vestibulum.</p>
                    <span>Written By: <a href="#">John Smith</a></span>
                </div>

                <div id="client_4">
                    <h6>The best one at all.</h6>
                    <p>Aliquam eleifend, magna sit amet convallis fringilla, lectus erat viverra diam, volutpat accumsan sem ligula sit amet ipsum. Morbi quis est in ante volutpat bibendum vitae at ante. Nulla ligula nisl. Nam et lacus neque. Sed volutpat ante id mauris laoreet vestibulum.</p>
                    <span>Written By: <a href="#">John Smith</a></span>
                </div>

                <div id="client_5">
                    <h6>And another Testminal with very long title.</h6>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas metus nulla, commodo a sodales sed, dignissim pretium nunc. Nam et lacus neque. Sed volutpat ante id mauris laoreet vestibulum. Nam et lacus neque. Sed volutpat ante id mauris laoreet vestibulum.</p>
                    <span>Written By: <a href="#">John Smith</a></span>
                </div>

            </div><!--end tabOuter-->
        </div><!--end testimonial-->

    </div><!--end eight-->


    <div class="sixteen columns">
        <div class="brands">

            <div class="box_head">
                <h3>brands</h3>
                <div class="pagers center">
                    <a class="prev brand_prev" href="#prev">Prev</a>
                    <a class="nxt brand_nxt" href="#nxt">Next</a>
                </div>
            </div><!--end box_head -->

            <div class="brandOuter">
                <ul>
                    <li>
                        <a href="#">
                            <img src="images/brands/logo_adidas-130x130.jpg" alt="brand">
                        </a></li>
                    <li>
                        <a href="#">
                            <img src="images/brands/logo_asics-130x130.jpg" alt="brand">
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="images/brands/logo_conv-130x130.jpg" alt="brand">
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="images/brands/logo_nike-130x130.jpg" alt="brand">
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="images/brands/logo_puma-130x130.jpg" alt="brand">
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="images/brands/logo_rbk-130x130.jpg" alt="brand">
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="images/brands/logo_nike-130x130.jpg" alt="brand">
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="images/brands/logo_asics-130x130.jpg" alt="brand">
                        </a>
                    </li>
                </ul>
            </div>
        </div><!--end brands-->
    </div><!--end sixteen-->


</div><!--end container-->