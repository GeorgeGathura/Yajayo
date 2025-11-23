<?php 
$title="Onsite Management";
include('includes/header2.php'); ?>
  
    <section class="cs_page_heading cs_bg_filed cs_center text-center cs_heading_bg" data-src="/assets/img/banner/onsite-management.webp">
      <div class="container">
        <h1 class="cs_fs_51 cs_white_color cs_mb_11"><?php echo $title; ?></h1>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">Home</a></li>
          <li class="breadcrumb-item active"><?php echo $title; ?></li>
        </ol>
      </div>
    </section>
 
    <section>
      <div class="cs_height_150 cs_height_lg_80"></div>
      <div class="container">
        <div class="row cs_gap_y_80">
          <div class="col-xl-4 col-lg-5">
            <div class="cs_nav_widget cs_shadow_1">
              <h3 class="cs_nav_widget_title cs_accent_bg cs_white_color cs_fs_28 cs_semibold mb-0">Our Services</h3>
                <?php
                include('includes/services-nav.php');
                ?>
            </div>
            <div class="cs_height_50 cs_height_lg_40"></div>
            <div class="cs_contact_widget cs_bg_filed text-center cs_" data-src="assets/img/contact2.webp">
              <div class="cs_contact_widget_in cs_center">
                <div class="cs_contact_widget_icon cs_accent_bg cs_center cs_mb_24"><img src="assets/img/others/contact_icon.svg" alt=""></div>
                <h3 class="cs_contact_widget_title cs_white_color cs_fs_38 cs_semibold cs_mb_40">Have Any Query Feel Free Contact</h3>
                <a href="contact.php" class="cs_btn cs_style_1">
                  Contact Now
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
            <div class="cs_height_50 cs_height_lg_40"></div>
            <div class="cs_form_widget cs_shadow_1">
            
                <a href="/contact" class="cs_btn cs_style_1 w-100">
                    Get In touch with us
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
          <div class="col-xl-8 col-lg-7">
          
                <p>We bring sustainability to your doorstep. Our trained onsite waste management teams help clients recover, sort, and manage waste right
                    at their own facilities. From color-coded bins and sorting stations to staff sensitization and waste audits, we embed efficient systems 
                    that make recycling seamless.</p>
                <p>Our goal is to reduce contamination, increase recovery rates, and ensure your waste streams are properly traced and reported.
                    With Yajayo managing your waste onsite, you can focus on your core business  confident that every discarded item is handled responsibly 
                    and in compliance with environmental standards.</p>
              <div class="row">
                  <div class="col-sm-12">
                      <figure>
                          <img src="/assets/img/onsite/collecting.webp" alt="">
                          <figcaption>Our onsite waste collection team is trained to handle all types of waste, ensuring that every item is handled responsibly.</figcaption>
                      </figure>

                  </div>
              </div>
                <h4>Why It Matters to your organization</h4>
                <p>Professional onsite waste management ensures that every waste stream is handled correctly from the source — preventing contamination, 
                    increasing recovery, and reducing landfill disposal costs.</p>
                <p>It eliminates inefficiencies caused by untrained staff or inconsistent systems. For clients, this results in smoother operations,
                    stronger compliance, and safer workplaces. Proper onsite practices help companies monitor performance, reduce losses of recyclable materials,
                    and embed sustainability into everyday processes. It strengthens ESG outcomes and positions your organization 
                    as a responsible and forward-thinking partner.</p>
                <p>Ultimately, it transforms waste from an operational challenge into a valuable resource.</p>
          
              <div class="row">
                
                <div class="col-sm-12">
                    <figure>
                        <img src="/assets/img/onsite/packing.webp" alt="">
                        <figcaption>Our onsite waste sorting team is equipped to sort waste efficiently, ensuring that it is properly categorized and stored in the right bins.</figcaption>
                    </figure>
                 
                </div>
              </div>
            
            <?php include('includes/faq.php'); ?>
          </div>
          </div>
        </div>
      </div>
      <div class="cs_height_140 cs_height_lg_80"></div>
    </section>
    <!-- End Service Details Section -->
<?php require_once('includes/footer.php'); ?>