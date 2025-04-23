@extends('layouts.app')


@section('content')
<div class="cs_header_search">
    <div class="cs_header_search_in">
      <div class="container">
        <div class="cs_header_search_box">
          <form action="#" class="cs_search_form">
            <input type="text" placeholder="Search Here...">
            <button class="cs_search_btn">
              <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M8.07914 0C3.62682 0 0 3.62558 0 8.07641C0 12.5272 3.62682 16.1599 8.07914 16.1599C9.98086 16.1599 11.7299 15.4936 13.1122 14.3875L16.4775 17.7498C16.6473 17.9126 16.8741 18.0024 17.1094 18C17.3446 17.9975 17.5695 17.9032 17.736 17.737C17.9025 17.5708 17.9972 17.3461 17.9999 17.111C18.0027 16.8758 17.9132 16.6489 17.7506 16.4789L14.3853 13.1148C15.4928 11.7308 16.16 9.97968 16.16 8.07641C16.16 3.62558 12.5315 0 8.07914 0ZM8.07914 1.79517C11.561 1.79517 14.3625 4.59577 14.3625 8.07641C14.3625 11.557 11.561 14.3647 8.07914 14.3647C4.59732 14.3647 1.79575 11.557 1.79575 8.07641C1.79575 4.59577 4.59732 1.79517 8.07914 1.79517Z" fill="currentColor"></path>
              </svg>                
            </button>
          </form>
          <button class="cs_close" type="button"><img src="assets/images/close.svg" alt="Close"></button>
        </div>
      </div>
    </div>
    <div class="cs_sidenav_overlay"></div>
  </div>
  <!-- End Header Section -->
  <!-- Start Hero Section -->
  <section class="cs_page_header cs_bg_filed cs_primary_bg" data-src="assets/images/chardham.jpg">
    <div class="container">
      <div class="cs_page_header_text text-center">
        <h1 class="cs_page_title cs_fs_70 cs_white_color cs_bold">Chardham Yatra</h1>
        {{-- <p class="cs_page_subtitle cs_fs_24 mb-0">Modern & Beautiful Travel Theme</p> --}}
      </div>
    </div>
  </section>
  <!-- End Hero Section -->
 <!-- Start Destination Details Section -->
 <section>
  <div class="cs_height_140 cs_height_lg_80"></div>
  <div class="container">
    <div class="row cs_gap_y_50">
      <div class="col-lg-8">
        <div class="cs_post_details">
          <h2 class="cs_tour_details_title">Iceberg, Greenland <small>$1200/<span>Day Night tour</span></small></h2>
          <img src="assets/images/tour_details.jpeg" alt="Tour Thumb">
          <h3>Marriage And Greenland Have More In Common Than You Think Greenland Have More</h3>
          <p>Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur  ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus condimentum rhon sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blanditvel, luctus pulvinar, hendrerit id,lorem. Maecenas nec odio ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante. Etiam sit</p>
         <hr>
        </div>

        <div class="cs_post_details">
            <h2 class="cs_tour_details_title">Iceberg, Greenland <small>$1200/<span>Day Night tour</span></small></h2>
            <img src="assets/images/tour_details.jpeg" alt="Tour Thumb">
            <h3>Marriage And Greenland Have More In Common Than You Think Greenland Have More</h3>
            <p>Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur  ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus condimentum rhon sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blanditvel, luctus pulvinar, hendrerit id,lorem. Maecenas nec odio ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante. Etiam sit</p>
           <hr>
          </div>

          <div class="cs_post_details">
            <h2 class="cs_tour_details_title">Iceberg, Greenland <small>$1200/<span>Day Night tour</span></small></h2>
            <img src="assets/images/tour_details.jpeg" alt="Tour Thumb">
            <h3>Marriage And Greenland Have More In Common Than You Think Greenland Have More</h3>
            <p>Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur  ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus condimentum rhon sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blanditvel, luctus pulvinar, hendrerit id,lorem. Maecenas nec odio ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante. Etiam sit</p>
           <hr>
          </div>

          <div class="cs_post_details">
            <h2 class="cs_tour_details_title">Iceberg, Greenland <small>$1200/<span>Day Night tour</span></small></h2>
            <img src="assets/images/tour_details.jpeg" alt="Tour Thumb">
            <h3>Marriage And Greenland Have More In Common Than You Think Greenland Have More</h3>
            <p>Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur  ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus condimentum rhon sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blanditvel, luctus pulvinar, hendrerit id,lorem. Maecenas nec odio ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante. Etiam sit</p>
           <hr>
          </div>c:\My Web Sites\travel pro\travelpro-html.vercel.app\tour-details.html
        <div class="cs_tabs">
          <ul class="cs_tab_links cs_style_1 cs_mp0">
            <li class="active"><a href="#tab_1" class="cs_primary_bg cs_white_color cs_radius_5">
              Tour Plan</a></li>
            <li><a href="#tab_2" class="cs_primary_bg cs_white_color cs_radius_5">Location</a></li>
            <li><a href="#tab_3" class="cs_primary_bg cs_white_color cs_radius_5">Gallary</a></li>
            <li><a href="#tab_4" class="cs_primary_bg cs_white_color cs_radius_5">Reviews</a></li>
          </ul>
          <div class="cs_tab_body">
            <div class="cs_tab active" id="tab_1">
              <ul class="cs_tour_plan_list cs_mp0">
                <li class="cs_list_item">
                  <div class="cs_list_index cs_center"><span></span></div>
                  <div class="cs_list_content">
                   <h3 class="cs_list_item_title cs_fs_24 cs_semibold">Day 1: Departure</h3>
                   <p class="cs_list_item_subtitle mb-0">Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim Donec pede justo, fringilla vel, aliquet nec vulputate eget, arcu. In enim justo, rhoncus ut, venenatis vitae justo. Nullam dictum felis eu pede mollis pretium.</p>
                 </div>
              </li>
              <li class="cs_list_item">
                <div class="cs_list_index cs_center"><span></span></div>
                <div class="cs_list_content">
                  <h3 class="cs_list_item_title cs_fs_24 cs_semibold">Day 2: Visiting Amsterdam, Prague and Vienna</h3>
                  <p class="cs_list_item_subtitle mb-0">Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim Donec pede justo, fringilla vel, aliquet nec vulputate eget, arcu. In enim justo, rhoncus ut, venenatis vitae justo. Nullam dictum felis eu pede mollis pretium.</p>
                </div>
              </li>
              <li class="cs_list_item">
                <div class="cs_list_index cs_center"><span></span></div>
                <div class="cs_list_content">
                  <h3 class="cs_list_item_title cs_fs_24 cs_semibold">Day 3: Rest</h3>
                  <p class="cs_list_item_subtitle mb-0">Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim Donec pede justo, fringilla vel, aliquet nec vulputate eget, arcu. In enim justo, rhoncus ut, venenatis vitae justo. Nullam dictum felis eu pede mollis pretium.</p>
                </div>
              </li>
              <li class="cs_list_item">
                <div class="cs_list_index cs_center"><span></span></div>
                <div class="cs_list_content">
                  <h3 class="cs_list_item_title cs_fs_24 cs_semibold">Day 4: Historical Tour</h3>
                  <p class="cs_list_item_subtitle mb-0">Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim Donec pede justo, fringilla vel, aliquet nec vulputate eget, arcu. In enim justo, rhoncus ut, venenatis vitae justo. Nullam dictum felis eu pede mollis pretium.</p>
                </div>
              </li>
              <li class="cs_list_item">
                <div class="cs_list_index cs_center"><span></span></div>
                <div class="cs_list_content">
                  <h3 class="cs_list_item_title cs_fs_24 cs_semibold">Day 5: Return</h3>
                  <p class="cs_list_item_subtitle mb-0">Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim Donec pede justo, fringilla vel, aliquet nec vulputate eget, arcu. In enim justo, rhoncus ut, venenatis vitae justo. Nullam dictum felis eu pede mollis pretium.</p>
                </div>
              </li>
              </ul>
            </div>
            <div class="cs_tab" id="tab_2">
              <iframe id="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d96652.27317354927!2d-74.33557928194516!3d40.79756494697628!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c3a82f1352d0dd%3A0x81d4f72c4435aab5!2sTroy+Meadows+Wetlands!5e0!3m2!1sen!2sbd!4v1563075599994!5m2!1sen!2sbd" allowfullscreen></iframe>
            </div>
            <div class="cs_tab" id="tab_3">
              <div class="cs_grid_3 cs_gallery_list cs_style_1">
                <a href="assets/images/gallery_1.jpeg" class="cs_gallery_item cs_zoom">
                  <img src="assets/images/gallery_1.jpeg" alt="Gallery Image" class="cs_zoom_in">
                  <div class="cs_gallery_overlay"></div>
                  <div class="cs_gallery_icon position-absolute">
                    <img src="assets/images/icons/plus_icon.svg" alt="Icon">
                  </div>
                </a>
                <a href="assets/images/gallery_2.jpeg" class="cs_gallery_item cs_zoom">
                  <img src="assets/images/gallery_2.jpeg" alt="Gallery Image" class="cs_zoom_in">
                  <div class="cs_gallery_overlay"></div>
                  <div class="cs_gallery_icon position-absolute">
                    <img src="assets/images/icons/plus_icon.svg" alt="Icon">
                  </div>
                </a>
                <a href="assets/images/gallery_3.jpeg" class="cs_gallery_item cs_zoom">
                  <img src="assets/images/gallery_3.jpeg" alt="Gallery Image" class="cs_zoom_in">
                  <div class="cs_gallery_overlay"></div>
                  <div class="cs_gallery_icon position-absolute">
                    <img src="assets/images/icons/plus_icon.svg" alt="Icon">
                  </div>
                </a>
                <a href="assets/images/gallery_4.jpeg" class="cs_gallery_item cs_zoom">
                  <img src="assets/images/gallery_4.jpeg" alt="Gallery Image" class="cs_zoom_in">
                  <div class="cs_gallery_overlay"></div>
                  <div class="cs_gallery_icon position-absolute">
                    <img src="assets/images/icons/plus_icon.svg" alt="Icon">
                  </div>
                </a>
                <a href="assets/images/gallery_5.jpeg" class="cs_gallery_item cs_zoom">
                  <img src="assets/images/gallery_5.jpeg" alt="Gallery Image" class="cs_zoom_in">
                  <div class="cs_gallery_overlay"></div>
                  <div class="cs_gallery_icon position-absolute">
                    <img src="assets/images/icons/plus_icon.svg" alt="Icon">
                  </div>
                </a>
                <a href="assets/images/gallery_6.jpeg" class="cs_gallery_item cs_zoom">
                  <img src="assets/images/gallery_6.jpeg" alt="Gallery Image" class="cs_zoom_in">
                  <div class="cs_gallery_overlay"></div>
                  <div class="cs_gallery_icon position-absolute">
                    <img src="assets/images/icons/plus_icon.svg" alt="Icon">
                  </div>
                </a>
              </div>
            </div>
            <div class="cs_tab" id="tab_4">
              <div class="cs_review_content">
                <h3 class="cs_review_title cs_semibold">Our Clients Reviews Details</h3>
                <div class="row align-items-center">
                <div class="col-xl-3 col-lg-4">
                  <div class="cs_review_count_box cs_radius_5 text-center">
                    <h3 class="cs_rating_value cs_fs_30">4.5</h3>
                    <div class="cs_rating_container">
                      <div class="cs_rating" data-rating="4.5">
                        <div class="cs_rating_percentage"></div>
                      </div>
                    </div>
                    <p>5 Reviews</p>
                  </div>
                </div>
                <div class="col-xl-9 col-lg-8">
                  <div class="cs_progress_bars">
                    <div class="cs_progress_bar">
                      <div class="cs_rating_number cs_medium cs_primary_color">5</div>
                      <div class="cs_rating_container">
                        <div class="cs_rating" data-rating="5">
                          <div class="cs_rating_percentage"></div>
                        </div>
                      </div>
                      <div class="cs_progress_line"></div>
                      <div class="cs_progress_hint_value cs_primary_color">20</div>
                    </div>
                    <div class="cs_progress_bar">
                      <div class="cs_rating_number cs_medium cs_primary_color">4</div>
                      <div class="cs_rating_container">
                        <div class="cs_rating" data-rating="4">
                          <div class="cs_rating_percentage"></div>
                        </div>
                      </div>
                      <div class="cs_progress_line"></div>
                      <div class="cs_progress_hint_value cs_primary_color">15</div>
                    </div>
                    <div class="cs_progress_bar">
                      <div class="cs_rating_number cs_medium cs_primary_color">3</div>
                      <div class="cs_rating_container">
                        <div class="cs_rating" data-rating="3">
                          <div class="cs_rating_percentage"></div>
                        </div>
                      </div>
                      <div class="cs_progress_line"></div>
                      <div class="cs_progress_hint_value cs_primary_color">5</div>
                    </div>
                    <div class="cs_progress_bar">
                      <div class="cs_rating_number cs_medium cs_primary_color">2</div>
                      <div class="cs_rating_container">
                        <div class="cs_rating" data-rating="2">
                          <div class="cs_rating_percentage"></div>
                        </div>
                      </div>
                      <div class="cs_progress_line"></div>
                      <div class="cs_progress_hint_value cs_primary_color">0</div>
                    </div>
                    <div class="cs_progress_bar">
                      <div class="cs_rating_number cs_medium cs_primary_color">1</div>
                      <div class="cs_rating_container">
                        <div class="cs_rating" data-rating="1">
                          <div class="cs_rating_percentage"></div>
                        </div>
                      </div>
                      <div class="cs_progress_line"></div>
                      <div class="cs_progress_hint_value cs_primary_color">0</div>
                    </div>
                  </div>
                </div>
              </div>
              </div>
            </div>
          </div>
        </div>
        <div class="cs_tour_gallery">
          <h3 class="cs_gallery_title cs_fs_30 cs_semibold">From Our Gallery</h3>
          <div class="cs_grid_4">
          <div class="cs_gallery_img cs_radius_5">
            <img src="assets/images/gallery_7.jpeg" alt="Gallery Image">
          </div>
          <div class="cs_gallery_img cs_radius_5">
            <img src="assets/images/gallery_8.jpeg" alt="Gallery Image">
          </div>
          <div class="cs_gallery_img cs_radius_5">
            <img src="assets/images/gallery_9.jpeg" alt="Gallery Image">
          </div>
        </div>
        </div>
      </div>
      <aside class="col-lg-4">
        <div class="cs_sidebar cs_style_1 cs_white_bg cs_right_sidebar">
          <div class="cs_info_widget cs_white_bg">
            <h3 class="cs_widget_title cs_fs_24 cs_medium">Basic Information:</h3>
            <p class="cs_widget_subtitle">Aliquam lorem ante, dapibus in, viverra quis, feugiat viverra nulla ut metus varius laoreet. Quisque</p>
            <ul class="cs_info_list cs_mp0">
              <li class="cs_info_item">
              <h3 class="cs_info_title cs_fs_16 cs_semibold mb-0">Destination</h3>
              <p class="cs_info_subtitle mb-0">Iceberg,Greenland</p>
              </li>
              <li class="cs_info_item">
              <h3 class="cs_info_title cs_fs_16 cs_semibold mb-0">Duration</h3>
              <p class="cs_info_subtitle mb-0">3 Days 2 Nights</p>
              </li>
              <li class="cs_info_item">
              <h3 class="cs_info_title cs_fs_16 cs_semibold mb-0">Departure</h3>
              <p class="cs_info_subtitle mb-0">Square, Old Town</p>
              </li>
              <li class="cs_info_item">
              <h3 class="cs_info_title cs_fs_16 cs_semibold mb-0">Departure Time</h3>
              <p class="cs_info_subtitle mb-0">mately 8.30AM</p>
              </li>
              <li class="cs_info_item">
              <h3 class="cs_info_title cs_fs_16 cs_semibold mb-0">Return Time</h3>
              <p class="cs_info_subtitle mb-0">Approximately 7.30PM</p>
              </li>
              <li class="cs_info_item">
              <h3 class="cs_info_title cs_fs_16 cs_semibold mb-0">Dress Code</h3>
              <p class="cs_info_subtitle mb-0">Casual <br> comfortable and light</p>
              </li>
              <li class="cs_info_item">
              <h3 class="cs_info_title cs_fs_16 cs_semibold mb-0">Included</h3>
              <p class="cs_info_subtitle mb-0">Airport Transfer,<br> Personal Guide</p>
              </li>
              <li class="cs_info_item">
              <h3 class="cs_info_title cs_fs_16 cs_semibold mb-0">Not Included</h3>
              <p class="cs_info_subtitle mb-0">Gallery Ticket, Lunch</p>
              </li>
              <li class="cs_info_item">
              <h3 class="cs_info_title cs_fs_16 cs_semibold mb-0">Reviews</h3>
              <div class="cs_rating_container">
                <div class="cs_rating scale_half" data-rating="4">
                  <div class="cs_rating_percentage"></div>
                </div>
              </div>
              </li>
            </ul>
            <div class="cs_booking_widget cs_gray_bg">
              <h3 class="cs_widget_title cs_fs_24 cs_medium">Drop Messege For Book</h3>
              <form action="#" class="cs_booking_form">
                <div class="cs_input_field position-relative">
                  <span><i class="fa-solid fa-user"></i></span>
                  <input type="text" placeholder="Your Name*" class="cs_form_field cs_radius_5">
                </div>
                <div class="cs_input_field position-relative">
                  <span><i class="fa-solid fa-envelope"></i></span>
                  <input type="email" placeholder="Your Email*" class="cs_form_field cs_radius_5">
                </div>
                <div class="cs_input_field position-relative">
                  <span><i class="fa-solid fa-comment"></i></span>
                  <textarea rows="5" class="" placeholder="Message"></textarea>
                </div>
                  <button type="submit" class="cs_btn cs_style_1 cs_fs_18 cs_medium cs_radius_4">Send Message</button>
              </form>
            </div>
          </div>
          <div class="cs_post_widget">
            <h3 class="cs_widget_title cs_fs_24 cs_semibold">Popular Destination</h3>
            <ul class="cs_recent_posts cs_mp0">
              <li>
                <article class="cs_recent_post">
                  <a href="blog-details.html" class="cs_recent_post_thumb cs_zoom">
                    <img src="assets/images/latest_post_5.jpeg" alt="Post Thumb" class="cs_zoom_in w-100 h-100 object-fit-cover">
                  </a>
                  <div class="cs_recent_post_info">
                    <h3 class="cs_recent_post_title cs_fs_18 cs_medium">
                      <a href="blog-details.html">Eiffel Tower</a>
                    </h3>
                    <div class="cs_recent_post_meta">
                      <span>Paris, 24 Trips</span>
                    </div>
                  </div>
                </article>
              </li>
              <li>
                <article class="cs_recent_post">
                  <a href="blog-details.html" class="cs_recent_post_thumb cs_zoom">
                    <img src="assets/images/latest_post_6.jpeg" alt="Post Thumb" class="cs_zoom_in w-100 h-100 object-fit-cover">
                  </a>
                  <div class="cs_recent_post_info">
                    <h3 class="cs_recent_post_title cs_fs_18 cs_medium">
                      <a href="blog-details.html">Pryde Mountains</a>
                    </h3>
                    <div class="cs_recent_post_meta">
                      <span>Prydelands, 100 Trips</span>
                    </div>
                  </div>
                </article>
              </li>
              <li>
                <article class="cs_recent_post">
                  <a href="blog-details.html" class="cs_recent_post_thumb cs_zoom">
                    <img src="assets/images/latest_post_7.jpeg" alt="Post Thumb" class="cs_zoom_in w-100 h-100 object-fit-cover">
                  </a>
                  <div class="cs_recent_post_info">
                    <h3 class="cs_recent_post_title cs_fs_18 cs_medium">
                      <a href="blog-details.html">Lao Lading Island</a>
                    </h3>
                    <div class="cs_recent_post_meta cs_fs_14">
                      <span>Krabal, 12 Trips</span>
                    </div>
                  </div>
                </article>
              </li>
            </ul>
          </div>
        </div>
      </aside>
    </div>
  </div>
  <div class="cs_height_140 cs_height_lg_80"></div>
 </section>
 <!-- End Destination Details Section -->



@endsection