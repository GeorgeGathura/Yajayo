<?php
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
<?php require_once('includes/header.php'); ?>
    <!-- Start Hero Section -->
    <section class="cs_slider cs_style_1 cs_heading_bg">
      <div class="cs_slider_container" data-autoplay="0" data-loop="1" data-speed="900" data-center="0" data-variable-width="0" data-fade-slide="1" data-slides-per-view="1">
        <div class="cs_slider_wrapper">
            <div class="cs_slide">
            <div class="cs_hero cs_style_4 cs_heading_bg cs_center">
              <div class="cs_hero_bg cs_bg_filed" data-src="assets/img/banner/hero3.webp"></div>
              <div class="container">
                <div class="cs_hero_text">
                    <h1 class="cs_hero_title cs_fs_70 cs_white_color cs_mb_60 cs_mb_lg_40">We buy recyclable waste directly from local aggregators</h1>
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
              <div class="cs_hero_bg cs_bg_filed" data-src="assets/img/banner/hero1.webp"></div>
              <div class="container">
                <div class="cs_hero_text">
                  <h1 class="cs_hero_title cs_fs_70 cs_white_color cs_mb_60 cs_mb_lg_40">Recover post-consumer packaging waste for re-use and recycling</h1>
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
            <div class="cs_slide">
            <div class="cs_hero cs_style_4 cs_heading_bg cs_center">
              <div class="cs_hero_bg cs_bg_filed" data-src="assets/img/banner/hero2.webp"></div>
              <div class="container">
                <div class="cs_hero_text">
                  <h1 class="cs_hero_title cs_fs_70 cs_white_color cs_mb_60 cs_mb_lg_40">Measure, manage, and report ESG performance with precision</h1>
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
    <div class="container">
      <div class="cs_hero_4_iconbox cs_shadow_1 cs_white_bg">
        <div class="cs_iconbox cs_style_2">
          <div class="cs_iconbox_icon"><img src="assets/img/bottle.svg" alt=""></div>
          <h3 class="cs_iconbox_title mb-0 cs_fs_28 cs_semibold">  10M+ <br/>Bottles Reclaimed
          </h3>
        </div>
        <div class="cs_iconbox cs_style_2">
          <div class="cs_iconbox_icon"><img src="assets/img/recycle.svg" alt=""></div>
          <h3 class="cs_iconbox_title mb-0 cs_fs_28 cs_semibold"> 100+ <br/>tonnes of <br/>plastic recycled</h3>
        </div>
        <div class="cs_iconbox cs_style_2">
          <div class="cs_iconbox_icon"><img src="assets/img/dispatch.svg" alt=""></div>
          <h3 class="cs_iconbox_title mb-0 cs_fs_28 cs_semibold">1M<br/> Bottles dispatched <br/> monthly </h3>
        </div>
       
      </div>
    </div>
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

           
              <div class="cs_funfact_2_list">
                <div class="cs_funfact cs_style_2">
                  <p class="cs_funfact_number cs_fs_70 mb-0 cs_bold">
                    <span class="odometer" data-count-to="10"></span>M
                  </p>
                  <p class="cs_funfact_title mb-0 cs_fs_18"> spirit Glass Bottles Reclaimed</p>
                </div>
                <div class="cs_funfact cs_style_2">
                  <p class="cs_funfact_number cs_fs_70 mb-0 cs_bold">
                    <span class="odometer" data-count-to="1"></span>M
                  </p>
                  <p class="cs_funfact_title mb-0 cs_fs_18">Dispatched spirit glass bottles Monthly</p>
                </div>
                <div class="cs_funfact cs_style_2">
                  <p class="cs_funfact_number cs_fs_70 mb-0 cs_bold">
                    <span class="odometer" data-count-to="500"></span>+
                  </p>
                  <p class="cs_funfact_title mb-0 cs_fs_18">Aggregators since inception</p>
                </div>
                <div class="cs_funfact cs_style_2">
                  <p class="cs_funfact_number cs_fs_70 mb-0 cs_bold">
                    <span class="odometer" data-count-to="100"></span>T
                  </p>
                  <p class="cs_funfact_title mb-0 cs_fs_18">Tonnes of plastic recycled</p>
                </div>
              </div>
              <div class="cs_height_45 cs_height_lg_30"></div>
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
    <!-- Start Feature Section -->
    <section class="cs_gray_bg_2">
      <div class="cs_height_0 cs_height_lg_80"></div>
      <div class="container">
        <div class="row">
          <div class="col-lg-6">
            <div class="cs_half_screen_left">
              <div class="cs_half_screen_thumb cs_bg_filed" data-src="assets/img/agriculture/feature_bg.jpg"></div>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="cs_pl_95 wow fadeInRight" data-wow-duration="0.8s" data-wow-delay="0.25s">
              <div class="cs_height_93 cs_height_lg_45"></div>
              <div class="cs_section_heading cs_style_1">
                <h3 class="cs_fs_21 cs_semibold cs_accent_color cs_mb_13">Lets Save Planet Together</h3>
                <h2 class="cs_fs_51 mb-0">Quenching Thirst, Saving Lives with Support</h2>
              </div>
              <div class="cs_height_50 cs_height_lg_50"></div>
              <ul class="cs_list cs_style_2 cs_mp_0">
                <li>
                  <span class="cs_list_number cs_fs_70 cs_bold cs_heading_font">01</span>
                  <div class="cs_list_right">
                    <h3 class="cs_fs_28 cs_semibold cs_mb_10">Donate</h3>
                    <p class="mb-0">Help us protect wildlife, advocate for animal welfare, and promote environmental sustainability.</p>
                  </div>
                </li>
                <li>
                  <span class="cs_list_number cs_fs_70 cs_bold cs_heading_font">02</span>
                  <div class="cs_list_right">
                    <h3 class="cs_fs_28 cs_semibold cs_mb_10">Fundraisers</h3>
                    <p class="mb-0">Join our fundraising efforts and be a catalyst for positive change.</p>
                  </div>
                </li>
                <li>
                  <span class="cs_list_number cs_fs_70 cs_bold cs_heading_font">03</span>
                  <div class="cs_list_right">
                    <h3 class="cs_fs_28 cs_semibold cs_mb_10">Volunteer</h3>
                    <p class="mb-0">Join our passionate community of volunteers dedicated to making a positive impact on wildlife.</p>
                  </div>
                </li>
              </ul>
              <div class="cs_height_100 cs_height_lg_70"></div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End Feature Section -->
    <!-- Start Event Section -->
    <section class="cs_shape_wrap">
      <div class="cs_height_145 cs_height_lg_75"></div>
      <div class="cs_shape cs_shape_position_4"><img src="assets/svg/blog_shape1.svg" style="height:100px" alt=""></div>
      <div class="cs_shape cs_shape_position_5"><img src="assets/svg/blog_shape2.svg" style="height:100px" alt=""></div>
      <div class="container">
        <div class="cs_section_heading cs_style_1 text-center">
          <h3 class="cs_fs_21 cs_semibold cs_accent_color cs_mb_13 wow fadeIn" data-wow-duration="0.8s" data-wow-delay="0.25s">Events</h3>
          <h2 class="cs_fs_51 mb-0 wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.25s">Our Upcoming Events</h2>
        </div>
        <div class="cs_height_90 cs_height_lg_50"></div>
        <div class="cs_event_card_1_list">
          <div class="cs_event_card cs_style_1 cs_shadow_1 cs_white_bg">
            <div class="cs_event_card_in">
              <a href="event-details.html" class="cs_event_card_thumb"><img src="assets/img/agriculture/event_card_img_1.jpg" alt=""></a>
              <div class="cs_event_card_info">
                <div class="cs_event_card_meta cs_mb_15 cs_heading_font cs_fs_21">
                  <span>Time : 08:00 - 09:00</span>
                  <span>Date : 11 Dec 2024</span>
                </div>
                <h2 class="cs_event_card_title cs_fs_38 cs_semibold cs_mb_20"><a href="event-details.html">Sustainable Farming For Better Life</a></h2>
                <p class="cs_event_card_posted_by mb-0 cs_fs_21 cs_semibold cs_heading_font">By <span>Kerua Zoshua</span> Environment Activist</p>
              </div>
            </div>
            <div class="cs_event_card_btn">
              <a href="event-details.html" class="cs_btn cs_style_2 cs_type_1 cs_heading_color cs_fs_21 cs_semibold cs_heading_font">
                See Details
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
          <div class="cs_event_card cs_style_1 cs_shadow_1 cs_white_bg">
            <div class="cs_event_card_in">
              <a href="event-details.html" class="cs_event_card_thumb"><img src="assets/img/agriculture/event_card_img_2.jpg" alt=""></a>
              <div class="cs_event_card_info">
                <div class="cs_event_card_meta cs_mb_15 cs_heading_font cs_fs_21">
                  <span>Time : 09:00 - 10:00</span>
                  <span>Date : 10 Dec 2024</span>
                </div>
                <h2 class="cs_event_card_title cs_fs_38 cs_semibold cs_mb_20"><a href="event-details.html">Empowering Farmers Worldwide</a></h2>
                <p class="cs_event_card_posted_by mb-0 cs_fs_21 cs_semibold cs_heading_font">By <span>Mili Zadeja</span> Biologist</p>
              </div>
            </div>
            <div class="cs_event_card_btn">
              <a href="event-details.html" class="cs_btn cs_style_2 cs_type_1 cs_heading_color cs_fs_21 cs_semibold cs_heading_font">
                See Details
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
          <div class="cs_event_card cs_style_1 cs_shadow_1 cs_white_bg">
            <div class="cs_event_card_in">
              <a href="event-details.html" class="cs_event_card_thumb"><img src="assets/img/agriculture/event_card_img_3.jpg" alt=""></a>
              <div class="cs_event_card_info">
                <div class="cs_event_card_meta cs_mb_15 cs_heading_font cs_fs_21">
                  <span>Time : 08:00 - 09:00</span>
                  <span>Date : 08 Dec 2024</span>
                </div>
                <h2 class="cs_event_card_title cs_fs_38 cs_semibold cs_mb_20"><a href="event-details.html">Green Community Cleanup Day</a></h2>
                <p class="cs_event_card_posted_by mb-0 cs_fs_21 cs_semibold cs_heading_font">By <span>Kerua Zoshua</span> Environment Activist</p>
              </div>
            </div>
            <div class="cs_event_card_btn">
              <a href="event-details.html" class="cs_btn cs_style_2 cs_type_1 cs_heading_color cs_fs_21 cs_semibold cs_heading_font">
                See Details
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
      <div class="cs_height_150 cs_height_lg_80"></div>
    </section>
    <!-- End Event Section -->


    <!-- Start Blog Section -->
    <section>
      <div class="cs_height_145 cs_height_lg_75"></div>
      <div class="container">
        <div class="cs_section_heading cs_style_1 text-center">
          <h3 class="cs_fs_21 cs_semibold cs_accent_color cs_mb_13 wow fadeIn" data-wow-duration="0.8s" data-wow-delay="0.25s">Blog Post</h3>
          <h2 class="cs_fs_51 mb-0 wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.25s">Our Latest News & Updates</h2>
        </div>
        <div class="cs_height_90 cs_height_lg_50"></div>
        <div class="row cs_gap_y_50">
          <div class="col-lg-6">
            <div class="cs_post cs_style_1 cs_type_1">
              <a href="/beyond-factory-gates-do-manufacturers-own-waste-products-create" class="cs_post_thumb">
                <img src="assets/img/beyond_factory-600x400.webp" alt="Post">
              </a>
              <div class="cs_post_info">
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
            <div class="cs_height_25 cs_height_lg_25"></div>
            <div class="cs_post cs_style_1 cs_type_1">
              <a href="/recycling-glass-bottles-why-its-no-brainer" class="cs_post_thumb">
                <img src="assets/img/recycling_bottle_glass-600x400.webp" alt="Post">
              </a>
              <div class="cs_post_info">
                <ul class="cs_post_meta cs_mp_0">
                  <li><i class="fa-solid fa-user-pen"></i>Yajayo</li>
                  <li><i class="fa-solid fa-tag"></i>Recycling</li>
                </ul>
                <h2 class="cs_post_title cs_semibold cs_fs_28 cs_mb_22"><a href="recycling-glass-bottles-why-its-no-brainer.php">Recycling Glass Bottles: Why It’s a No-Brainer</a></h2>
                <p class="cs_post_subtitle cs_mb_16">Glass is all around us. It’s strong, safe, versatile, and trusted for packaging food, drinks, and medicine. In short, glass is part...</p>
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
          <div class="col-lg-6">
            <div class="cs_post cs_style_1 cs_type_2">
              <a href="recycling-glass-bottles-why-its-no-brainer.php" class="cs_post_thumb">
                <img src="assets/img/recycling_bottle_glass.webp" alt="Post">
              </a>
              <div class="cs_post_info">
                <ul class="cs_post_meta cs_mp_0 cs_white_color">
                  <li><i class="fa-solid fa-user-pen"></i>Yajayo</li>
                  <li><i class="fa-solid fa-tag"></i>Environment</li>
                </ul>
                <h2 class="cs_post_title cs_semibold cs_fs_28 cs_mb_22 cs_white_color"><a href="recycling-glass-bottles-why-its-no-brainer.php">Beyond the Factory Gates: Do Manufacturers Own the Waste Their Products Create?</a></h2>
                <p class="cs_post_subtitle cs_mb_16 cs_white_color">Exploring Extended Producer Responsibility (EPR) and how it’s reshaping waste management in Kenya...</p>
                <a href="recycling-glass-bottles-why-its-no-brainer.php" class="cs_btn cs_style_2 cs_white_color">
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
      <div class="cs_height_150 cs_height_lg_80"></div>
    </section>
    <!-- End Blog Section -->
<?php
require_once 'includes/footer.php';
