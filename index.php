<?php
$title = 'Home';
// Extensionless URL routing for Nginx/Herd (no .htaccess needed)
// If the request path maps to an existing PHP file in the project root,
// include that file and exit. Otherwise, continue rendering the homepage.
$__uri = parse_url($_SERVER['REQUEST_URI'] ?? '/', PHP_URL_PATH);
$__path = trim($__uri, '/');
if ($__path !== '' && $__path !== 'index' && $__path !== 'index.php') {
    // Basic hardening: disallow traversal and only allow simple slugs
    if (strpos($__path, '..') === false && preg_match('/^[A-Za-z0-9-]+$/', $__path)) {
        $___candidate = __DIR__ . DIRECTORY_SEPARATOR . $__path . '.php';
        if (is_file($___candidate)) {
            include $___candidate;
            exit;
        }
    }
}
?>
<?php require_once('includes/header2.php'); ?>
    <!-- Start Hero Section -->
    <section class="cs_slider cs_style_1 cs_heading_bg">
      <div class="cs_slider_container" data-autoplay="0" data-loop="1" data-speed="900" data-center="0" data-variable-width="0" data-fade-slide="1" data-slides-per-view="1">
        <div class="cs_slider_wrapper">

            <div class="cs_slide">
                <div class="cs_hero cs_style_4 cs_heading_bg cs_center">
                    <div class="cs_hero_bg cs_bg_filed" data-src="assets/img/banner/hero1.webp"></div>
                    <div class="container">
                        <div class="cs_hero_text">
                            <h1 class="cs_hero_title cs_fs_70 cs_white_color cs_mb_60 cs_mb_lg_40">Helping organisations recover back their packaging for re-use and recycling</h1>
                            <a href="about.php" class="cs_btn cs_style_1">
                                Learn More
                                <i>
                                    <svg width="9" height="10" viewBox="0 0 9 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M0.5 9L8.5 1M8.5 1L0.5 1M8.5 1L8.5 9" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                    <svg width="9" height="10" viewBox="0 0 9 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M0.5 9L8.5 1M8.5 1L0.5 1M8.5 1L8.5 9" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="cs_slide">
            <div class="cs_hero cs_style_4 cs_heading_bg cs_center">
              <div class="cs_hero_bg cs_bg_filed" data-src="assets/img/banner/hero3.webp"></div>
              <div class="container">
                <div class="cs_hero_text">
                    <h1 class="cs_hero_title cs_fs_70 cs_white_color cs_mb_60 cs_mb_lg_40">We work with local communities to recover waste for recycling</h1>
                    <a href="/services" class="cs_btn cs_style_1">
                        Learn More
                        <i>
                            <svg width="9" height="10" viewBox="0 0 9 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M0.5 9L8.5 1M8.5 1L0.5 1M8.5 1L8.5 9" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                            <svg width="9" height="10" viewBox="0 0 9 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M0.5 9L8.5 1M8.5 1L0.5 1M8.5 1L8.5 9" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </i>
                    </a>
                </div>
              </div>
            </div>
          </div>
            <div class="cs_slide">
            <div class="cs_hero cs_style_4 cs_heading_bg cs_center">
              <div class="cs_hero_bg cs_bg_filed" data-src="assets/img/banner/hero2.webp"></div>
              <div class="container">
                <div class="cs_hero_text">
                  <h1 class="cs_hero_title cs_fs_70 cs_white_color cs_mb_60 cs_mb_lg_40">
                      We help you keep track of your environmental impact in your ESG journey
                  </h1>
                  <a href="about.php" class="cs_btn cs_style_1">
                    Learn More
                    <i>
                      <svg width="9" height="10" viewBox="0 0 9 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M0.5 9L8.5 1M8.5 1L0.5 1M8.5 1L8.5 9" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"/>
                      </svg>
                      <svg width="9" height="10" viewBox="0 0 9 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M0.5 9L8.5 1M8.5 1L0.5 1M8.5 1L8.5 9" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"/>
                      </svg>
                    </i>
                  </a>
                </div>
              </div>
            </div>
          </div>
            <div class="cs_slide">
                <div class="cs_hero cs_style_4 cs_heading_bg cs_center">
                    <div class="cs_hero_bg cs_bg_filed" data-src="assets/img/banner/hero4.webp"></div>
                    <div class="container">
                        <div class="cs_hero_text">
                            <h1 class="cs_hero_title cs_fs_70 cs_white_color cs_mb_60 cs_mb_lg_40">Our compliance experts ensure your business stays aligned with NEMA guidelines</h1>
                            <a href="about.php" class="cs_btn cs_style_1">
                                Learn More
                                <i>
                                    <svg width="9" height="10" viewBox="0 0 9 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M0.5 9L8.5 1M8.5 1L0.5 1M8.5 1L8.5 9" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                    <svg width="9" height="10" viewBox="0 0 9 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M0.5 9L8.5 1M8.5 1L0.5 1M8.5 1L8.5 9" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      </div>
      <div class="cs_pagination cs_style_2 cs_type_1"></div>
    </section>


    <!-- Start Funfact  -->

    <div class="container">
        <div class=" cs_funfact_1_list">
            <div class="cs_funfact cs_style_1">
                <h2 class="cs_funfact_number cs_fs_70 mb-0">
                    <span class="odometer-h" data-count-to="10"></span>M
                </h2>
                <p class="cs_funfact_title mb-0">Bottles <br/>  Reclaimed</p>
            </div>
            <div class="cs_funfact cs_style_1">
                <h2 class="cs_funfact_number cs_fs_70 mb-0">
                    <span class="odometer-h" data-count-to="1"></span>M
                </h2>
                <p class="cs_funfact_title mb-0">Dispatched <br>Bottles Monthly</p>
            </div>
            <div class="cs_funfact cs_style_1">
                <h2 class="cs_funfact_number cs_fs_70 mb-0">
                    <span class="odometer-h" data-count-to="500"></span>+
                </h2>
                <p class="cs_funfact_title mb-0">Aggregators</p>
            </div>
            <div class="cs_funfact cs_style_1">
                <h2 class="cs_funfact_number cs_fs_70 mb-0">
                    <span class="odometer-h" data-count-to="100"></span>T
                </h2>
                <p class="cs_funfact_title mb-0">Plastic <br/> Recycled</p>
            </div>
        </div>
    </div>

    <!-- End Funfact  -->
    <!-- End Hero Section -->
    <!-- Start About Section -->
    <section class="cs_shape_wrap">
      <div class="cs_height_140 cs_height_lg_70"></div>
      <div class="cs_shape cs_shape_position_7"><img src="assets/img/nature/about_shape_2.svg" alt=""></div>
      <div class="container">
        <div class="row align-items-center cs_gap_y_50">
          <div class="col-lg-6">
            <div class="cs_pr_75">
              <h3 class="cs_accent_color cs_fs_21 cs_semibold cs_mb_13">About Us</h3>
              <h2 class="cs_fs_51 cs_mb_29">Closing the Loop for a sustainable tomorrow</h2>
              <p class="cs_mb_30">At Yajayo, we are redefining waste management in Kenya through innovation, empowerment, and environmental stewardship. We partner with businesses, communities, and local aggregators to recover, recycle, and reimagine waste as a valuable resource.</p>

              <p class="cs_mb_30">Rooted in our core values of Environmental Sustainability, Empowerment, and Innovation, we provide end-to-end solutions — from reverse logistics and EPR compliance to onsite waste management and ESG reporting.   </p>
              <p class="cs_mb_30">Our mission is simple yet powerful: to create a cleaner planet, sustainable livelihoods, and a truly circular economy where nothing goes to waste.   </p>

           
              <a href="about.php" class="cs_btn cs_style_1">
                Learn More
                <i>
                  <svg width="9" height="10" viewBox="0 0 9 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M0.5 9L8.5 1M8.5 1L0.5 1M8.5 1L8.5 9" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"></path>
                  </svg>
                  <svg width="9" height="10" viewBox="0 0 9 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M0.5 9L8.5 1M8.5 1L0.5 1M8.5 1L8.5 9" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"></path>
                  </svg>
                </i>
              </a>
            </div>
          </div>
          <div class="col-lg-6">
            <a href="https://www.youtube.com/embed/rRid6GCJtgc" class="cs_video_block cs_style_1 cs_bg_filed cs_video_open cs_center" data-src="assets/img/home2.webp">
              <span class="cs_player_btn cs_white_color">
                <svg width="70" height="70" viewBox="0 0 70 70" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M35 0C15.7004 0 0 15.7004 0 35C0 54.2996 15.7004 70 35 70C54.2996 70 70 54.2996 70 35C70 15.7004 54.2996 0 35 0ZM35 64.1667C18.9175 64.1667 5.83333 51.0825 5.83333 35C5.83333 18.9175 18.9175 5.83333 35 5.83333C51.0825 5.83333 64.1667 18.9175 64.1667 35C64.1667 51.0825 51.0825 64.1667 35 64.1667ZM23.3333 51.4704L52.6167 35L23.3333 18.5296V51.4733V51.4704ZM29.1667 28.5017L40.7167 35L29.1667 41.4983V28.5017Z" fill="currentColor"/>
                </svg>                  
              </span>
            </a>
          </div>
        </div>
      </div>
    </section>
    <!-- End About Section -->
    <section>
        <div class="cs_height_145 cs_height_lg_75"></div>
    </section>
    <!-- Start Service Section -->
    <section class="cs_bg_filed cs_bg_fixed" data-src="assets/img/banner/services_overlay.webp">
        <div class="cs_height_145 cs_height_lg_75"></div>
        <div class="container">
            <div class="cs_section_heading cs_style_1 text-left">
                <h3 class="cs_fs_21 cs_semibold cs_accent_color cs_mb_13">What We Do</h3>
                <h2 class="cs_fs_51 cs_mb_9 cs_white_color">Our Services</h2>
                <p class="mb-0 cs_white_color">Discover a range of services aimed at promoting environmental <br>awareness, sustainability, and positive action.</p>
            </div>
            <div class="cs_height_90 cs_height_lg_50"></div>
        </div>
        <div class="cs_slider cs_style_1 cs_slider_gap_24 cs_ptb_12">
            <div class="container">
                <div class="cs_slider_container" data-autoplay="0" data-loop="1" data-speed="800" data-center="0" data-variable-width="0" data-slides-per-view="responsive" data-xs-slides="1" data-sm-slides="2" data-md-slides="3" data-lg-slides="4" data-add-slides="4">
                    <div class="cs_slider_wrapper">
                        <div class="cs_slide">
                            <div class="cs_iconbox cs_style_5 text-center cs_accent_bg">
                                <div class="cs_iconbox_icon cs_center cs_mb_27">
                                    <i class="fa-solid fa-arrows-spin" style="color: #fff;font-size: 80px"></i>
                                </div>
                                <h3 class="cs_iconbox_title cs_white_color cs_fs_21 cs_semibold cs_mb_50"><a href="reverse-logistics.php">Reverse Logistics</a></h3>
                                <a href="reverse-logistics.php" class="cs_btn cs_style_2 cs_white_color">
                                    Learn More
                                    <i>
                                        <svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M1 9L9 1M9 1L1 1M9 1L9 9" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"></path>
                                        </svg>
                                        <svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M1 9L9 1M9 1L1 1M9 1L9 9" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"></path>
                                        </svg>
                                    </i>
                                </a>
                            </div>
                        </div>
                        <div class="cs_slide">
                            <div class="cs_iconbox cs_style_5 text-center cs_accent_bg">
                                <div class="cs_iconbox_icon cs_center cs_mb_27">
                                   
                                    <i class="fa-solid fa-handshake" style="color: #fff;font-size: 80px"></i>
                                </div>
                                <h3 class="cs_iconbox_title cs_white_color cs_fs_21 cs_semibold cs_mb_50">
                                    <a href="onsite-management.php">Onsite Management</a></h3>
                                <a href="onsite-management.php" class="cs_btn cs_style_2 cs_white_color">
                                    Learn More
                                    <i>
                                        <svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M1 9L9 1M9 1L1 1M9 1L9 9" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"></path>
                                        </svg>
                                        <svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M1 9L9 1M9 1L1 1M9 1L9 9" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"></path>
                                        </svg>
                                    </i>
                                </a>
                            </div>
                        </div>
                        <div class="cs_slide">
                            <div class="cs_iconbox cs_style_5 text-center cs_accent_bg">
                                <div class="cs_iconbox_icon cs_center cs_mb_27">
                                 
                                    <i class="fa-solid fa-check-double" style="color: #fff;font-size: 80px"></i>
                                </div>
                                <h3 class="cs_iconbox_title cs_white_color cs_fs_21 cs_semibold cs_mb_50">
                                    <a href="service-details.html">EPR Compliance</a></h3>
                                <a href="service-details.html" class="cs_btn cs_style_2 cs_white_color">
                                    Learn More
                                    <i>
                                        <svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M1 9L9 1M9 1L1 1M9 1L9 9" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"></path>
                                        </svg>
                                        <svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M1 9L9 1M9 1L1 1M9 1L9 9" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"></path>
                                        </svg>
                                    </i>
                                </a>
                            </div>
                        </div>
                        <div class="cs_slide">
                            <div class="cs_iconbox cs_style_5 text-center cs_accent_bg">
                                <div class="cs_iconbox_icon cs_center cs_mb_27">
                                    <i class="fa-solid fa-seedling" style="color: #fff;font-size: 80px"></i>
                                </div>
                                <h3 class="cs_iconbox_title cs_white_color cs_fs_21 cs_semibold cs_mb_50">
                                    <a href="service-details.html">ESG Reporting</a></h3>
                                <a href="service-details.html" class="cs_btn cs_style_2 cs_white_color">
                                    Learn More
                                    <i>
                                        <svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M1 9L9 1M9 1L1 1M9 1L9 9" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"></path>
                                        </svg>
                                        <svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M1 9L9 1M9 1L1 1M9 1L9 9" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"></path>
                                        </svg>
                                    </i>
                                </a>
                            </div>
                        </div>
               
                    </div>
                </div>
            </div>
            <div class="cs_slider_arrows cs_style_3 cs_type_1 mt-2">
                <div class="cs_left_arrow rounded-circle cs_center">
                    <svg width="22" height="16" viewBox="0 0 22 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M0.292892 7.29289C-0.0976315 7.68342 -0.0976315 8.31658 0.292892 8.70711L6.65685 15.0711C7.04738 15.4616 7.68054 15.4616 8.07107 15.0711C8.46159 14.6805 8.46159 14.0474 8.07107 13.6569L2.41421 8L8.07107 2.34315C8.46159 1.95262 8.46159 1.31946 8.07107 0.928932C7.68054 0.538408 7.04738 0.538408 6.65685 0.928932L0.292892 7.29289ZM22 7L1 7V9L22 9V7Z" fill="currentColor"/>
                    </svg>
                </div>
                <div class="cs_right_arrow rounded-circle cs_center">
                    <svg width="22" height="16" viewBox="0 0 22 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M21.7071 8.70711C22.0976 8.31658 22.0976 7.68342 21.7071 7.29289L15.3431 0.928932C14.9526 0.538408 14.3195 0.538408 13.9289 0.928932C13.5384 1.31946 13.5384 1.95262 13.9289 2.34315L19.5858 8L13.9289 13.6569C13.5384 14.0474 13.5384 14.6805 13.9289 15.0711C14.3195 15.4616 14.9526 15.4616 15.3431 15.0711L21.7071 8.70711ZM0 9L21 9V7L0 7L0 9Z" fill="currentColor"/>
                    </svg>
                </div>
            </div>
        </div>
        <div class="cs_height_150 cs_height_lg_80"></div>
    </section>
    <!-- End Service Section -->

    <!-- Start Blog Section -->
    <section class="cs_gray_bg_2">
        <div class="cs_height_145 cs_height_lg_75"></div>
        <div class="cs_slider cs_style_1 cs_slider_gap_24 cs_ptb_12">
            <div class="container">
                <div class="cs_slider_heading_1">
                    <div class="cs_section_heading cs_style_1">
                        <h3 class="cs_fs_21 cs_semibold cs_accent_color cs_mb_13 wow fadeIn" data-wow-duration="0.8s" data-wow-delay="0.25s">Blog Post</h3>
                        <h2 class="cs_fs_51 mb-0 wow fadeInRight" data-wow-duration="0.8s" data-wow-delay="0.25s">Our Latest News & Updates</h2>
                    </div>
                    <div class="cs_slider_arrows cs_style_3 cs_hide_lg">
                        <div class="cs_left_arrow rounded-circle cs_center">
                            <svg width="22" height="16" viewBox="0 0 22 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M0.292892 7.29289C-0.0976315 7.68342 -0.0976315 8.31658 0.292892 8.70711L6.65685 15.0711C7.04738 15.4616 7.68054 15.4616 8.07107 15.0711C8.46159 14.6805 8.46159 14.0474 8.07107 13.6569L2.41421 8L8.07107 2.34315C8.46159 1.95262 8.46159 1.31946 8.07107 0.928932C7.68054 0.538408 7.04738 0.538408 6.65685 0.928932L0.292892 7.29289ZM22 7L1 7V9L22 9V7Z" fill="currentColor"/>
                            </svg>
                        </div>
                        <div class="cs_right_arrow rounded-circle cs_center">
                            <svg width="22" height="16" viewBox="0 0 22 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M21.7071 8.70711C22.0976 8.31658 22.0976 7.68342 21.7071 7.29289L15.3431 0.928932C14.9526 0.538408 14.3195 0.538408 13.9289 0.928932C13.5384 1.31946 13.5384 1.95262 13.9289 2.34315L19.5858 8L13.9289 13.6569C13.5384 14.0474 13.5384 14.6805 13.9289 15.0711C14.3195 15.4616 14.9526 15.4616 15.3431 15.0711L21.7071 8.70711ZM0 9L21 9V7L0 7L0 9Z" fill="currentColor"/>
                            </svg>
                        </div>
                    </div>
                </div>
                <div class="cs_height_90 cs_height_lg_50"></div>
                <div class="cs_full_screen_right cs_variable_width_wrap">
                    <div class="cs_slider_container" data-autoplay="0" data-loop="1" data-speed="700" data-center="0" data-variable-width="1" data-slides-per-view="1">
                        <div class="cs_slider_wrapper">
                            <div class="cs_slide">
                         
                                <div class="cs_post cs_style_1">
                                    
                                    <a href="/beyond-factory-gates-do-manufacturers-own-waste-products-create" class="cs_post_thumb">
                                        <img src="assets/img/beyond_factory-600x400.webp" alt="Post">
                                    </a>
                                    <div class="cs_post_info cs_shadow_1">
                                        <ul class="cs_post_meta cs_mp_0">
                                            <li><i class="fa-solid fa-user-pen"></i>Yajayo</li>
                                            <li><i class="fa-solid fa-tag"></i>Environment</li>
                                        </ul>
                                     
                                        <h2 class="cs_post_title cs_semibold cs_fs_28 cs_mb_22"><a href="recycling-glass-bottles-why-its-no-brainer.php">Beyond the Factory Gates: Do Manufacturers Own the Waste Their Products Create?</a></h2>
                                        <p class="cs_post_subtitle cs_mb_16">Exploring Extended Producer Responsibility (EPR) and how it’s reshaping waste management in Kenya...</p>
                                        <a href="recycling-glass-bottles-why-its-no-brainer.php" class="cs_btn cs_style_2 cs_heading_color">
                                            Learn More
                                            <i>
                                                <svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M1 9L9 1M9 1L1 1M9 1L9 9" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"/>
                                                </svg>
                                                <svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M1 9L9 1M9 1L1 1M9 1L9 9" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"/>
                                                </svg>
                                            </i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="cs_slide">
                                <div class="cs_post cs_style_1">
                                    <a href="recycling-glass-bottles-why-its-no-brainer.php" class="cs_post_thumb">
                                        <img src="assets/img/recycling/recycling_bottle_glass.webp" alt="Post">
                                    </a>
                                    <div class="cs_post_info cs_shadow_1">
                                        <ul class="cs_post_meta cs_mp_0">
                                            <li><i class="fa-solid fa-user-pen"></i>Yajayo</li>
                                            <li><i class="fa-solid fa-tag"></i>Environment</li>
                                        </ul>
                                        <h2 class="cs_post_title cs_semibold cs_fs_28 cs_mb_22 "><a href="recycling-glass-bottles-why-its-no-brainer.php">Recycling Glass Bottles: Why It’s a No-Brainer</a></h2>
                                        <p class="cs_post_subtitle cs_mb_16 ">Glass is all around us. It’s strong, safe, versatile, and trusted for packaging food, drinks, and medicine. In short, glass is part of our everyday life.</p>
                                        <a href="recycling-glass-bottles-why-its-no-brainer.php" class="cs_btn cs_style_2 cs_heading_color">
                                            Learn More
                                            <i>
                                                <svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M1 9L9 1M9 1L1 1M9 1L9 9" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"/>
                                                </svg>
                                                <svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M1 9L9 1M9 1L1 1M9 1L9 9" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"/>
                                                </svg>
                                            </i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                         
                        </div>
                    </div>
                </div>
                <div class="cs_slider_arrows cs_style_1 cs_show_lg">
                    <div class="cs_left_arrow rounded-circle cs_center">
                        <svg width="22" height="16" viewBox="0 0 22 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M0.292892 7.29289C-0.0976315 7.68342 -0.0976315 8.31658 0.292892 8.70711L6.65685 15.0711C7.04738 15.4616 7.68054 15.4616 8.07107 15.0711C8.46159 14.6805 8.46159 14.0474 8.07107 13.6569L2.41421 8L8.07107 2.34315C8.46159 1.95262 8.46159 1.31946 8.07107 0.928932C7.68054 0.538408 7.04738 0.538408 6.65685 0.928932L0.292892 7.29289ZM22 7L1 7V9L22 9V7Z" fill="currentColor"></path>
                        </svg>
                    </div>
                    <div class="cs_right_arrow rounded-circle cs_center">
                        <svg width="22" height="16" viewBox="0 0 22 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M21.7071 8.70711C22.0976 8.31658 22.0976 7.68342 21.7071 7.29289L15.3431 0.928932C14.9526 0.538408 14.3195 0.538408 13.9289 0.928932C13.5384 1.31946 13.5384 1.95262 13.9289 2.34315L19.5858 8L13.9289 13.6569C13.5384 14.0474 13.5384 14.6805 13.9289 15.0711C14.3195 15.4616 14.9526 15.4616 15.3431 15.0711L21.7071 8.70711ZM0 9L21 9V7L0 7L0 9Z" fill="currentColor"></path>
                        </svg>
                    </div>
                </div>
            </div>
        </div>
        <div class="cs_height_150 cs_height_lg_80"></div>
    </section>
    <!-- End Blog Section -->

<?php
require_once 'includes/footer.php';
