
  <body>
    <div class="cs_preloader">
      <div class="cs_preloader_in">
        <span></span>
        <span></span>
      </div>
    </div>
    <!-- Start Header Section -->
    <header class="cs_site_header cs_style_1 cs_color_1 cs_fs_18 cs_sticky_header">
      <div class="cs_top_header cs_accent_bg">
        <div class="cs_top_header_in">
          <div class="cs_top_header_left">
            <ul class="cs_top_header_list cs_mp0">
              <li><b>Address: </b>Matiyari , Lucknow</li>
              <li>contact@subhtravel.in</li>
            </ul>
          </div>
          <div class="cs_top_header_right">
            <ul class="cs_top_header_list cs_mp0">
              <li><a href="{{ url('contact-us') }}">Help</a></li>
              <li><a href="{{ url('contact-us') }}">Support</a></li>
              <li><a href="{{ url('contact-us') }}">Contact</a></li>
            </ul>
          </div>
        </div>
      </div>
      <div class="cs_main_header">
        <div class="cs_main_header_in">
          <div class="cs_main_header_left">
            <a class="cs_site_branding" href="{{ url('/') }}">
              <img class='logo_main_custom' src="assets/images/logo1.jpg" alt="Logo">
            </a>
          </div>
          <div class="cs_main_header_center">
            <div class="cs_nav cs_medium cs_primary_font">
              <ul class="cs_nav_list">
                {{-- <li class="menu-item-has-children">
                  <a href="index-2.html">Home</a>
                  <ul>
                    <li><a href="index-2.html">Home</a></li>
                    <li><a href="index-v2.html">Home</a></li>
                    <li><a href="index-v3.html">Home v3</a></li>
                  </ul>
                </li> --}}

                <li><a href="{{ url('/') }}">Home</a></li>
                <li><a href="{{ url('about-us') }}">About Us</a></li>
                {{-- <li class="menu-item-has-children">
                  <a href="destination.html">Destinations</a>
                  <ul>
                    <li><a href="destination.html">Destination</a></li>
                    <li><a href="destination-details.html">Destination Details</a></li>
                  </ul>
                </li> --}}
                <li><a href="{{ url('about-us') }}">Destinations</a></li>
                <li><a href="{{ url('about-us') }}">Tours</a></li>
                <li><a href="{{ url('about-us') }}">Blog</a></li>

               
                {{-- <li class="menu-item-has-children">
                  <a href="tour.html">Tours</a>
                  <ul>
                    <li><a href="tour.html">Tour</a></li>
                    <li><a href="tour-details.html">Tour Details</a></li>
                  </ul>
                </li> --}}
                
                <li><a href="{{ url('contact-us') }}">Contacts</a></li>
              </ul>
            </div>
          </div>
          <div class="cs_main_header_right">
            <div class="cs_header_toolbox">
              <div>
                <button class="cs_search_btn cs_fs_24" type="button"><i class="fa-solid fa-magnifying-glass"></i></button>
              </div>
              <div class="cs_fs_20 cs_medium">+91 7983008810</div>
            </div>
          </div>
        </div>
      </div>
    </header>
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