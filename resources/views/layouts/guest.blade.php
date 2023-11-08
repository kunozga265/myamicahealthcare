<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>My Amica Home HealthCare</title>
    <link rel="icon" href="assets/img/favicon.png">
    <!-- Site Title -->
    <link rel="stylesheet" href="assets/css/plugins/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/plugins/fontawesome.min.css">
    <link rel="stylesheet" href="assets/css/plugins/animate.css">
    <link rel="stylesheet" href="assets/css/plugins/slick.css">
    <link rel="stylesheet" href="assets/css/plugins/odometer.css">
    <link rel="stylesheet" href="assets/css/plugins/lightgallery.min.css">
    <link rel="stylesheet" href="assets/css/plugins/jquery.timepicker.min.css">
    <link rel="stylesheet" href="assets/css/plugins/jquery-ui.css">
    <link rel="stylesheet" href="assets/css/plugins/select2.min.css">
    <link rel="stylesheet" href="assets/css/style.css">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
<div>
    <!-- Start Preloader -->
    <div class="cs_perloader">
        <div class="cs_perloader_in">
            <div class="lds-roller"><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div></div>
        </div>
    </div>
    <!-- End Preloader -->
    <!-- Start Header Section -->
    <header class="cs_site_header cs_style1 cs_sticky_header cs_heading_color">
        <div class="cs_main_header">
            <div class="container">
                <div class="cs_main_header_in">
                    <div class="cs_main_header_left">
                        <a class="cs_site_branding" href="{{route('home')}}">
                            <img src="assets/img/logo_1.svg" alt="Logo">
                        </a>
                        <nav class="cs_nav">
                            <ul class="cs_nav_list">
                                <li><a href="{{route('home')}}">Home</a></li>
                                <li><a href="{{route('services')}}">Services</a></li>
{{--                                <li><a href="{{route('book')}}">Book</a></li>--}}
                                <li><a href="{{route('about')}}">About</a></li>
                                <li><a href="{{route('contact')}}">Contact</a></li>



                            </ul>
                        </nav>
                    </div>
                  {{--  <div class="cs_main_header_right">
                        <div class="cs_toolbox">
                            <button class="cs_toolbox_btn cs_search_toggle_btn" type="button">
                                <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M13.1684 0C5.91146 0 0 5.90944 0 13.164C0 20.4184 5.91146 26.3394 13.1684 26.3394C16.2681 26.3394 19.1188 25.2535 21.3719 23.4505L26.8571 28.931C27.1339 29.1962 27.5036 29.3426 27.887 29.3386C28.2704 29.3347 28.6371 29.1809 28.9084 28.91C29.1797 28.6392 29.3342 28.2729 29.3386 27.8896C29.3431 27.5064 29.1972 27.1365 28.9322 26.8595L23.4471 21.3762C25.2521 19.1204 26.3397 16.2662 26.3397 13.164C26.3397 5.90944 20.4254 0 13.1684 0ZM13.1684 2.926C18.8435 2.926 23.4099 7.49078 23.4099 13.164C23.4099 18.8371 18.8435 23.4134 13.1684 23.4134C7.4933 23.4134 2.92695 18.8371 2.92695 13.164C2.92695 7.49078 7.4933 2.926 13.1684 2.926Z" fill="currentColor"/>
                                </svg>
                            </button>
                            <button class="cs_toolbox_btn cs_sidebar_toggle_btn" type="button">
                                <svg width="35" height="30" viewBox="0 0 35 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M0.483887 2.46544C0.483887 1.10383 1.14618 0 1.96315 0H33.5208C34.3377 0 35 1.10383 35 2.46544C35 3.82708 34.3377 4.93088 33.5208 4.93088H1.96315C1.14618 4.93088 0.483887 3.82708 0.483887 2.46544Z" fill="currentColor"/>
                                    <path d="M0.483887 14.6694C0.483887 13.3074 1.14618 12.2039 1.96315 12.2039H33.5208C34.3377 12.2039 35 13.3074 35 14.6694C35 16.0309 34.3377 17.1348 33.5208 17.1348H1.96315C1.14618 17.1348 0.483887 16.0309 0.483887 14.6694Z" fill="currentColor"/>
                                    <path d="M0.483887 26.6267C0.483887 25.2648 1.14618 24.1613 1.96315 24.1613H33.5208C34.3377 24.1613 35 25.2648 35 26.6267C35 27.9883 34.3377 29.0922 33.5208 29.0922H1.96315C1.14618 29.0922 0.483887 27.9883 0.483887 26.6267Z" fill="currentColor"/>
                                </svg>
                            </button>
                        </div>
                    </div>--}}
                </div>
            </div>
        </div>
    </header>
  {{--  <div class="cs_sidenav">
        <div class="cs_sidenav_overlay"></div>
        <div class="cs_sidenav_in">
            <button class="cs_close" type="button"><img src="assets/img/icons/close.svg" alt="Close"></button>
            <div class="cs_logo_box">
                <img src="assets/img/logo.svg" alt="Logo">
                <div class="cs_height_15"></div>
                <h3 class="cs_fs_24 cs_semibold mb-0">Your Partner in Health and Wellness</h3>
            </div>
            <div class="cs_height_35"></div>
            <hr>
            <div class="cs_height_70 cs_height_lg_50"></div>
            <div class="cs_iconbox cs_style_11 cs_radius_25">
                <div class="cs_iconbox_icon">
                    <img src="assets/img/contact/icon_1.svg" alt="Icon">
                </div>
                <div class="cs_iconbox_right">
                    <h3 class="cs_iconbox_title cs_fs_24 mb-0">Phone</h3>
                    <p class="cs_iconbox_subtitle mb-0 cs_heading_color">123-456-7890</p>
                </div>
            </div>
            <div class="cs_height_30"></div>
            <div class="cs_iconbox cs_style_11 cs_radius_25">
                <div class="cs_iconbox_icon">
                    <img src="assets/img/contact/icon_2.svg" alt="Icon">
                </div>
                <div class="cs_iconbox_right">
                    <h3 class="cs_iconbox_title cs_fs_24 mb-0">Email</h3>
                    <p class="cs_iconbox_subtitle mb-0 cs_heading_color"><a href="https://static.laralink.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="761e131a1a1915171a1a15131802130436111b171f1a5815191b">[email&#160;protected]</a></p>
                </div>
            </div>
            <div class="cs_height_30"></div>
            <div class="cs_iconbox cs_style_11 cs_radius_25">
                <div class="cs_iconbox_icon">
                    <img src="assets/img/contact/icon_3.svg" alt="Icon">
                </div>
                <div class="cs_iconbox_right">
                    <h3 class="cs_iconbox_title cs_fs_24 mb-0">Location</h3>
                    <p class="cs_iconbox_subtitle mb-0 cs_heading_color">123 Anywhere St., Any City, 12345</p>
                </div>
            </div>
            <div class="cs_height_60"></div>
            <div class="cs_newsletter cs_style1">
                <h2 class="cs_newsletter_title">Be Our Subscribers</h2>
                <div class="cs_newsletter_subTitle">To get the latest news about health from our experts</div>
                <form action="#" class="cs_newsletter_form">
                    <input type="email" class="cs_newsletter_input" placeholder="example@email.com">
                    <button class="cs_btn cs_style_1">
                        <span>Submit</span>
                        <i>
                            <img src="assets/img/icons/arrow_white.svg" alt="Icon">
                            <img src="assets/img/icons/arrow_white.svg" alt="Icon">
                        </i>
                    </button>
                </form>
            </div>
            <div class="cs_height_70 cs_height_lg_50"></div>
            <hr>
            <div class="cs_height_70 cs_height_lg_50"></div>
            <div class="cs_social_links_wrap">
                <h2>Follow Us</h2>
                <div class="cs_social_links">
                    <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                    <a href="#"><i class="fa-brands fa-youtube"></i></a>
                    <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                    <a href="#"><i class="fa-brands fa-twitter"></i></a>
                    <a href="#"><i class="fa-brands fa-instagram"></i></a>
                </div>
            </div>
        </div>
    </div>
    <div class="cs_header_search">
        <div class="cs_header_search_in">
            <div class="container">
                <div class="cs_header_search_box">
                    <form action="#" class="cs_search_form">
                        <input type="text" placeholder="Search Doctors">
                        <button class="cs_search_btn">
                            <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M8.07914 0C3.62682 0 0 3.62558 0 8.07641C0 12.5272 3.62682 16.1599 8.07914 16.1599C9.98086 16.1599 11.7299 15.4936 13.1122 14.3875L16.4775 17.7498C16.6473 17.9126 16.8741 18.0024 17.1094 18C17.3446 17.9975 17.5695 17.9032 17.736 17.737C17.9025 17.5708 17.9972 17.3461 17.9999 17.111C18.0027 16.8758 17.9132 16.6489 17.7506 16.4789L14.3853 13.1148C15.4928 11.7308 16.16 9.97968 16.16 8.07641C16.16 3.62558 12.5315 0 8.07914 0ZM8.07914 1.79517C11.561 1.79517 14.3625 4.59577 14.3625 8.07641C14.3625 11.557 11.561 14.3647 8.07914 14.3647C4.59732 14.3647 1.79575 11.557 1.79575 8.07641C1.79575 4.59577 4.59732 1.79517 8.07914 1.79517Z" fill="currentColor"></path>
                            </svg>
                        </button>
                    </form>
                    <button class="cs_close" type="button"><img src="assets/img/icons/close.svg" alt="Close"></button>
                </div>
            </div>
        </div>
        <div class="cs_sidenav_overlay"></div>
    </div>--}}
    <!-- End Header Section -->

    <div>
        @yield('content')

        <!-- Start Footer Section -->
            <footer class="cs_footer cs_style_2 cs_accent_bg cs_white_color">
                <div class="container">
                    <div class="cs_footer_in">
                        <div class="cs_footer_col">
                            <div class="cs_footer_item">
                                <div class="cs_text_widget">
                                    <img src="assets/img/logo_transparent.svg" alt="Logo">
                                    <p class="cs_medium">My Amica Home HealthCare</p>
                                </div>
                                <ul class="cs_contact_widget">
                                    <li>
                                        <i class="cs_accent_bg">
                                            <svg width="9" height="12" viewBox="0 0 9 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M4.5 11.3896C3.21094 9.32715 0.955078 6.53131 0.955078 4.12506C0.955078 2.04008 2.54533 0.343815 4.5 0.343815C6.45467 0.343815 8.04492 2.04008 8.04492 4.12506C8.04492 6.53131 5.78906 9.32715 4.5 11.3896Z" stroke="#f39220" stroke-width="0.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                                <path d="M4.5 5.84375C3.61156 5.84375 2.88867 5.07267 2.88867 4.125C2.88867 3.17733 3.61156 2.40625 4.5 2.40625C5.38844 2.40625 6.11133 3.17733 6.11133 4.125C6.11133 5.07267 5.38844 5.84375 4.5 5.84375Z" stroke="#f39220" stroke-width="0.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                            </svg>
                                        </i>
                                        Connecticut, US
                                    </li>
                                    <li>
                                        <i class="cs_accent_bg">
                                            <svg width="9" height="9" viewBox="0 0 9 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M1.82381 5.98259C2.71487 7.04372 3.7875 7.8792 5.01177 8.47037C5.47789 8.69043 6.10126 8.95151 6.79576 8.99627C6.83881 8.99813 6.87999 9 6.92305 9C7.38917 9 7.76356 8.83962 8.06869 8.50953C8.07057 8.50767 8.07431 8.50394 8.07618 8.50021C8.18476 8.36966 8.30831 8.25218 8.43747 8.12723C8.52545 8.04331 8.61531 7.95566 8.70142 7.86614C9.10015 7.45213 9.10015 6.92623 8.69768 6.52528L7.57262 5.40448C7.38168 5.2068 7.1533 5.10236 6.91369 5.10236C6.67408 5.10236 6.44383 5.2068 6.24727 5.40261L5.5771 6.07024C5.51533 6.03481 5.45168 6.00311 5.39178 5.97327C5.3169 5.93597 5.24764 5.90054 5.18586 5.86138C4.5756 5.47534 4.0215 4.97182 3.49173 4.3247C3.22404 3.98715 3.04433 3.70369 2.91891 3.41463C3.09488 3.25611 3.25961 3.09014 3.41873 2.92789C3.47489 2.87008 3.53292 2.81227 3.59095 2.75445C3.79312 2.55305 3.90169 2.31993 3.90169 2.08309C3.90169 1.84625 3.79499 1.61314 3.59095 1.41173L3.0331 0.855988C2.96758 0.790717 2.90581 0.72731 2.84216 0.662039C2.71861 0.535226 2.58944 0.404683 2.46215 0.287194C2.26934 0.0988396 2.04283 0 1.80322 0C1.56548 0 1.3371 0.0988396 1.1368 0.289059L0.436681 0.986531C0.182094 1.24016 0.0379521 1.54787 0.00800063 1.90406C-0.0275668 2.34977 0.0547998 2.82346 0.268204 3.39598C0.595799 4.28181 1.09 5.10423 1.82381 5.98259ZM0.464761 1.94322C0.487224 1.69519 0.582695 1.48819 0.762404 1.30916L1.45878 0.615416C1.56735 0.510982 1.68716 0.4569 1.80322 0.4569C1.91741 0.4569 2.03347 0.510982 2.14017 0.619146C2.26559 0.73477 2.38353 0.855988 2.51082 0.984666C2.57447 1.04994 2.63999 1.11521 2.70551 1.18235L3.26335 1.73809C3.37941 1.85371 3.43932 1.9712 3.43932 2.08682C3.43932 2.20245 3.37941 2.31993 3.26335 2.43556C3.20532 2.49337 3.14729 2.55305 3.08926 2.61086C2.91517 2.78616 2.75231 2.95213 2.5726 3.11065C2.56885 3.11438 2.56698 3.11625 2.56324 3.11998C2.40786 3.27476 2.4322 3.42209 2.46964 3.53398C2.47151 3.53958 2.47338 3.54331 2.47525 3.5489C2.6194 3.89391 2.8197 4.22213 3.13231 4.61376C3.69391 5.30377 4.28545 5.839 4.93689 6.25114C5.01739 6.30336 5.1035 6.34438 5.18399 6.38541C5.25887 6.42271 5.32813 6.45814 5.38991 6.49731C5.3974 6.50104 5.40301 6.50477 5.4105 6.5085C5.47227 6.5402 5.53218 6.55512 5.59208 6.55512C5.74184 6.55512 5.83918 6.46001 5.871 6.42831L6.57112 5.73083C6.67969 5.62267 6.79763 5.56486 6.91369 5.56486C7.05596 5.56486 7.17202 5.65251 7.24503 5.73083L8.37383 6.8535C8.59846 7.07729 8.59659 7.31973 8.36821 7.55657C8.28959 7.64049 8.20722 7.72068 8.11924 7.8046C7.9882 7.93141 7.85155 8.06196 7.728 8.20928C7.51272 8.44053 7.25626 8.54869 6.92492 8.54869C6.8931 8.54869 6.8594 8.54683 6.82758 8.54496C6.21357 8.5058 5.64262 8.26709 5.21394 8.06382C4.04958 7.50249 3.02748 6.70617 2.17948 5.6954C1.48124 4.85806 1.01138 4.07853 0.700629 3.24306C0.507816 2.73021 0.434809 2.31807 0.464761 1.94322Z" fill="#f39220"/>
                                            </svg>
                                        </i>
                                        123-456-7890
                                    </li>
                                    <li>
                                        <i class="cs_accent_bg">
                                            <svg width="10" height="8" viewBox="0 0 10 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M9.16666 0.25H0.83334C0.37373 0.25 0 0.62373 0 1.08334V6.91668C0 7.37627 0.37373 7.75 0.83334 7.75H9.16668C9.62627 7.75 10 7.37627 10 6.91666V1.08334C10 0.62373 9.62627 0.25 9.16666 0.25ZM0.83334 0.66666H9.16668C9.19738 0.66666 9.22443 0.677852 9.25324 0.68418C8.53178 1.34447 6.13951 3.53299 5.30234 4.28727C5.23684 4.34627 5.13125 4.41666 5.00002 4.41666C4.86879 4.41666 4.7632 4.34627 4.69748 4.28707C3.86039 3.53291 1.46799 1.34428 0.746641 0.684219C0.775508 0.677891 0.802617 0.66666 0.83334 0.66666ZM0.41666 6.91666V1.08334C0.41666 1.04252 0.428965 1.00549 0.43998 0.968184C0.992168 1.47357 2.66139 3.00061 3.74373 3.98484C2.6649 4.91154 0.995254 6.49451 0.438672 7.02525C0.428848 6.98982 0.41666 6.95518 0.41666 6.91666ZM9.16666 7.33334H0.83334C0.800059 7.33334 0.770469 7.32174 0.739394 7.31432C1.31453 6.76604 2.9948 5.17396 4.05467 4.26727C4.19283 4.3926 4.31904 4.50688 4.41854 4.59652C4.59025 4.75156 4.79125 4.83334 5 4.83334C5.20875 4.83334 5.40975 4.75154 5.58125 4.59672C5.68078 4.50703 5.80709 4.39266 5.94533 4.26727C7.00525 5.17387 8.68529 6.76582 9.26061 7.31432C9.22953 7.32174 9.19998 7.33334 9.16666 7.33334ZM9.58334 6.91666C9.58334 6.95516 9.57115 6.98982 9.56135 7.02525C9.00455 6.49424 7.3351 4.91145 6.25629 3.98486C7.33867 3.00063 9.00764 1.47373 9.56002 0.968144C9.57104 1.00545 9.58334 1.0425 9.58334 1.08332V6.91666Z" fill="#f39220"/>
                                            </svg>
                                        </i>
                                        <a href="mailto:info@myamicacare.com" class="__cf_email__" data-cfemail="dfb7bab3b3b0bcbeb3b3bcbab1abbaad9fb8b2beb6b3f1bcb0b2">info@myamicacare.com</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="cs_footer_col">
                            <div class="cs_footer_item">
                                <ul class="cs_menu_widget cs_mp0">
                                    <li><a href="{{route('home')}}">Home</a></li>
                                    <li><a href="{{route('services')}}">Services</a></li>
{{--                                    <li><a href="{{route('book')}}">Book</a></li>--}}
                                    <li><a href="{{route('about')}}">About</a></li>
                                    <li><a href="{{route('contact')}}">Contact</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="cs_footer_col">
                            <div class="cs_footer_item">
                                <ul class="cs_menu_widget cs_mp0">
                                    <li><a href="#">Privacy Policy</a></li>
                                    <li><a href="#">Terms and Conditions</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="cs_footer_col">
                            <div class="cs_footer_item">

                                <div class="cs_social_links_wrap">
                                    <h2 class="cs_white_color">Follow Us</h2>
                                    <div class="cs_social_links">
                                        <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                                        <a href="#"><i class="fa-brands fa-youtube"></i></a>
                                        <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                                        <a href="#"><i class="fa-brands fa-twitter"></i></a>
                                        <a href="#"><i class="fa-brands fa-instagram"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="cs_footer_bottom">
                    <div class="container">
                        <div class="cs_copyright">Copyright © 2024 My Amica Home HealthCare. All rights reserved.</div>
                    </div>
                </div>
            </footer>
            <!-- End Footer Section -->

  {{--  <div class="cs_height_175 cs_height_xl_125 cs_height_lg_85"></div>
    <!-- Start Banner Section -->
    <div class="cs_footer_margin_0">
        <div class="container">
            <div class="cs_banner cs_style_4 cs_bg_filed text-center overflow-hidden" data-src="assets/img/about/banner_bg_2.jpg">
                <h2 class="cs_banner_title cs_white_color cs_fs_72">Don’t Let Your Health <br>Take a Backseat!</h2>
                <p class="cs_banner_subtitle cs_white_color cs_fs_20 m-0">Schedule an appointment with one of our experienced <br>medical professionals today!</p>
            </div>
        </div>
    </div>
    <!-- End Banner Section -->--}}
    <!-- Start Footer -->
    {{--<footer class="cs_footer cs_style_1 cs_heading_color">
--}}{{--        <div class="cs_footer_logo_wrap" data-src="assets/img/footer_bg_1.svg">--}}{{--
--}}{{--            <div class="cs_footer_brand" data-src="assets/img/footer_logo_bg.svg">--}}{{--
--}}{{--                <img src="assets/img/logo_icon.svg" alt="Logo Icon" class="cs_footer_brand_icon">--}}{{--
--}}{{--                <h2 class="cs_footer_brand_text">ProHealth</h2>--}}{{--
--}}{{--            </div>--}}{{--
--}}{{--        </div>--}}{{--
--}}{{--        <div class="cs_footer_main">--}}{{--
--}}{{--            <div class="container">--}}{{--
--}}{{--                <div class="row">--}}{{--
--}}{{--                    <div class="col-lg-4">--}}{{--
--}}{{--                        <div class="cs_footer_item">--}}{{--
--}}{{--                            <div class="cs_text_widget">--}}{{--
--}}{{--                                <p>ProHealth Medical & <br>Healthcare Center</p>--}}{{--
--}}{{--                            </div>--}}{{--
--}}{{--                            <ul class="cs_contact_widget">--}}{{--
--}}{{--                                <li>--}}{{--
--}}{{--                                    <i class="cs_accent_bg">--}}{{--
--}}{{--                                        <svg width="9" height="12" viewBox="0 0 9 12" fill="none" xmlns="http://www.w3.org/2000/svg">--}}{{--
--}}{{--                                            <path d="M4.5 11.3896C3.21094 9.32715 0.955078 6.53131 0.955078 4.12506C0.955078 2.04008 2.54533 0.343815 4.5 0.343815C6.45467 0.343815 8.04492 2.04008 8.04492 4.12506C8.04492 6.53131 5.78906 9.32715 4.5 11.3896Z" stroke="white" stroke-width="0.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>--}}{{--
--}}{{--                                            <path d="M4.5 5.84375C3.61156 5.84375 2.88867 5.07267 2.88867 4.125C2.88867 3.17733 3.61156 2.40625 4.5 2.40625C5.38844 2.40625 6.11133 3.17733 6.11133 4.125C6.11133 5.07267 5.38844 5.84375 4.5 5.84375Z" stroke="white" stroke-width="0.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>--}}{{--
--}}{{--                                        </svg>--}}{{--
--}}{{--                                    </i>--}}{{--
--}}{{--                                    123 Anywhere St., Any City 12345--}}{{--
--}}{{--                                </li>--}}{{--
--}}{{--                                <li>--}}{{--
--}}{{--                                    <i class="cs_accent_bg">--}}{{--
--}}{{--                                        <svg width="9" height="9" viewBox="0 0 9 9" fill="none" xmlns="http://www.w3.org/2000/svg">--}}{{--
--}}{{--                                            <path d="M1.82381 5.98259C2.71487 7.04372 3.7875 7.8792 5.01177 8.47037C5.47789 8.69043 6.10126 8.95151 6.79576 8.99627C6.83881 8.99813 6.87999 9 6.92305 9C7.38917 9 7.76356 8.83962 8.06869 8.50953C8.07057 8.50767 8.07431 8.50394 8.07618 8.50021C8.18476 8.36966 8.30831 8.25218 8.43747 8.12723C8.52545 8.04331 8.61531 7.95566 8.70142 7.86614C9.10015 7.45213 9.10015 6.92623 8.69768 6.52528L7.57262 5.40448C7.38168 5.2068 7.1533 5.10236 6.91369 5.10236C6.67408 5.10236 6.44383 5.2068 6.24727 5.40261L5.5771 6.07024C5.51533 6.03481 5.45168 6.00311 5.39178 5.97327C5.3169 5.93597 5.24764 5.90054 5.18586 5.86138C4.5756 5.47534 4.0215 4.97182 3.49173 4.3247C3.22404 3.98715 3.04433 3.70369 2.91891 3.41463C3.09488 3.25611 3.25961 3.09014 3.41873 2.92789C3.47489 2.87008 3.53292 2.81227 3.59095 2.75445C3.79312 2.55305 3.90169 2.31993 3.90169 2.08309C3.90169 1.84625 3.79499 1.61314 3.59095 1.41173L3.0331 0.855988C2.96758 0.790717 2.90581 0.72731 2.84216 0.662039C2.71861 0.535226 2.58944 0.404683 2.46215 0.287194C2.26934 0.0988396 2.04283 0 1.80322 0C1.56548 0 1.3371 0.0988396 1.1368 0.289059L0.436681 0.986531C0.182094 1.24016 0.0379521 1.54787 0.00800063 1.90406C-0.0275668 2.34977 0.0547998 2.82346 0.268204 3.39598C0.595799 4.28181 1.09 5.10423 1.82381 5.98259ZM0.464761 1.94322C0.487224 1.69519 0.582695 1.48819 0.762404 1.30916L1.45878 0.615416C1.56735 0.510982 1.68716 0.4569 1.80322 0.4569C1.91741 0.4569 2.03347 0.510982 2.14017 0.619146C2.26559 0.73477 2.38353 0.855988 2.51082 0.984666C2.57447 1.04994 2.63999 1.11521 2.70551 1.18235L3.26335 1.73809C3.37941 1.85371 3.43932 1.9712 3.43932 2.08682C3.43932 2.20245 3.37941 2.31993 3.26335 2.43556C3.20532 2.49337 3.14729 2.55305 3.08926 2.61086C2.91517 2.78616 2.75231 2.95213 2.5726 3.11065C2.56885 3.11438 2.56698 3.11625 2.56324 3.11998C2.40786 3.27476 2.4322 3.42209 2.46964 3.53398C2.47151 3.53958 2.47338 3.54331 2.47525 3.5489C2.6194 3.89391 2.8197 4.22213 3.13231 4.61376C3.69391 5.30377 4.28545 5.839 4.93689 6.25114C5.01739 6.30336 5.1035 6.34438 5.18399 6.38541C5.25887 6.42271 5.32813 6.45814 5.38991 6.49731C5.3974 6.50104 5.40301 6.50477 5.4105 6.5085C5.47227 6.5402 5.53218 6.55512 5.59208 6.55512C5.74184 6.55512 5.83918 6.46001 5.871 6.42831L6.57112 5.73083C6.67969 5.62267 6.79763 5.56486 6.91369 5.56486C7.05596 5.56486 7.17202 5.65251 7.24503 5.73083L8.37383 6.8535C8.59846 7.07729 8.59659 7.31973 8.36821 7.55657C8.28959 7.64049 8.20722 7.72068 8.11924 7.8046C7.9882 7.93141 7.85155 8.06196 7.728 8.20928C7.51272 8.44053 7.25626 8.54869 6.92492 8.54869C6.8931 8.54869 6.8594 8.54683 6.82758 8.54496C6.21357 8.5058 5.64262 8.26709 5.21394 8.06382C4.04958 7.50249 3.02748 6.70617 2.17948 5.6954C1.48124 4.85806 1.01138 4.07853 0.700629 3.24306C0.507816 2.73021 0.434809 2.31807 0.464761 1.94322Z" fill="white"/>--}}{{--
--}}{{--                                        </svg>--}}{{--
--}}{{--                                    </i>--}}{{--
--}}{{--                                    123-456-7890--}}{{--
--}}{{--                                </li>--}}{{--
--}}{{--                                <li>--}}{{--
--}}{{--                                    <i class="cs_accent_bg">--}}{{--
--}}{{--                                        <svg width="10" height="8" viewBox="0 0 10 8" fill="none" xmlns="http://www.w3.org/2000/svg">--}}{{--
--}}{{--                                            <path d="M9.16666 0.25H0.83334C0.37373 0.25 0 0.62373 0 1.08334V6.91668C0 7.37627 0.37373 7.75 0.83334 7.75H9.16668C9.62627 7.75 10 7.37627 10 6.91666V1.08334C10 0.62373 9.62627 0.25 9.16666 0.25ZM0.83334 0.66666H9.16668C9.19738 0.66666 9.22443 0.677852 9.25324 0.68418C8.53178 1.34447 6.13951 3.53299 5.30234 4.28727C5.23684 4.34627 5.13125 4.41666 5.00002 4.41666C4.86879 4.41666 4.7632 4.34627 4.69748 4.28707C3.86039 3.53291 1.46799 1.34428 0.746641 0.684219C0.775508 0.677891 0.802617 0.66666 0.83334 0.66666ZM0.41666 6.91666V1.08334C0.41666 1.04252 0.428965 1.00549 0.43998 0.968184C0.992168 1.47357 2.66139 3.00061 3.74373 3.98484C2.6649 4.91154 0.995254 6.49451 0.438672 7.02525C0.428848 6.98982 0.41666 6.95518 0.41666 6.91666ZM9.16666 7.33334H0.83334C0.800059 7.33334 0.770469 7.32174 0.739394 7.31432C1.31453 6.76604 2.9948 5.17396 4.05467 4.26727C4.19283 4.3926 4.31904 4.50688 4.41854 4.59652C4.59025 4.75156 4.79125 4.83334 5 4.83334C5.20875 4.83334 5.40975 4.75154 5.58125 4.59672C5.68078 4.50703 5.80709 4.39266 5.94533 4.26727C7.00525 5.17387 8.68529 6.76582 9.26061 7.31432C9.22953 7.32174 9.19998 7.33334 9.16666 7.33334ZM9.58334 6.91666C9.58334 6.95516 9.57115 6.98982 9.56135 7.02525C9.00455 6.49424 7.3351 4.91145 6.25629 3.98486C7.33867 3.00063 9.00764 1.47373 9.56002 0.968144C9.57104 1.00545 9.58334 1.0425 9.58334 1.08332V6.91666Z" fill="white"/>--}}{{--
--}}{{--                                        </svg>--}}{{--
--}}{{--                                    </i>--}}{{--
--}}{{--                                    <a href="https://static.laralink.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="472f222b2b2824262b2b24222933223507202a262e2b6924282a">[email&#160;protected]</a>--}}{{--
--}}{{--                                </li>--}}{{--
--}}{{--                            </ul>--}}{{--
--}}{{--                        </div>--}}{{--
--}}{{--                    </div>--}}{{--
--}}{{--                    <div class="col-lg-2">--}}{{--
--}}{{--                        <div class="cs_footer_item">--}}{{--
--}}{{--                            <ul class="cs_menu_widget cs_mp0">--}}{{--
--}}{{--                                <li><a href="#">About Us</a></li>--}}{{--
--}}{{--                                <li><a href="#">Departments</a></li>--}}{{--
--}}{{--                                <li><a href="#">Doctors</a></li>--}}{{--
--}}{{--                                <li><a href="#">Timetable</a></li>--}}{{--
--}}{{--                                <li><a href="#">Appointment</a></li>--}}{{--
--}}{{--                                <li><a href="#">Testimonials</a></li>--}}{{--
--}}{{--                            </ul>--}}{{--
--}}{{--                        </div>--}}{{--
--}}{{--                    </div>--}}{{--
--}}{{--                    <div class="col-lg-2">--}}{{--
--}}{{--                        <div class="cs_footer_item">--}}{{--
--}}{{--                            <ul class="cs_menu_widget cs_mp0">--}}{{--
--}}{{--                                <li><a href="#">Blog</a></li>--}}{{--
--}}{{--                                <li><a href="#">Contact Us</a></li>--}}{{--
--}}{{--                                <li><a href="#">FAQs</a></li>--}}{{--
--}}{{--                                <li><a href="#">Privacy Policy</a></li>--}}{{--
--}}{{--                                <li><a href="#">Terms and Conditions</a></li>--}}{{--
--}}{{--                            </ul>--}}{{--
--}}{{--                        </div>--}}{{--
--}}{{--                    </div>--}}{{--
--}}{{--                    <div class="col-lg-4">--}}{{--
--}}{{--                        <div class="cs_footer_item">--}}{{--
--}}{{--                            <div class="cs_newsletter cs_style1">--}}{{--
--}}{{--                                <h2 class="cs_newsletter_title">Be Our Subscribers</h2>--}}{{--
--}}{{--                                <div class="cs_newsletter_subTitle">To get the latest news about health from our experts</div>--}}{{--
--}}{{--                                <form action="#" class="cs_newsletter_form">--}}{{--
--}}{{--                                    <input type="email" class="cs_newsletter_input" placeholder="example@email.com">--}}{{--
--}}{{--                                    <button class="cs_btn cs_style_1">--}}{{--
--}}{{--                                        <span>Submit</span>--}}{{--
--}}{{--                                        <i>--}}{{--
--}}{{--                                            <img src="assets/img/icons/arrow_white.svg" alt="Icon">--}}{{--
--}}{{--                                            <img src="assets/img/icons/arrow_white.svg" alt="Icon">--}}{{--
--}}{{--                                        </i>--}}{{--
--}}{{--                                    </button>--}}{{--
--}}{{--                                </form>--}}{{--
--}}{{--                            </div>--}}{{--
--}}{{--                        </div>--}}{{--
--}}{{--                    </div>--}}{{--
--}}{{--                </div>--}}{{--
--}}{{--            </div>--}}{{--
--}}{{--        </div>--}}{{--
        <div class="cs_footer_bottom cs_accent_bg">
            <div class="container">
                <div class="cs_footer_bottom_in">
                    <div class="cs_social_links_wrap">
                        <h2 class="cs_white_color">Follow Us</h2>
                        <div class="cs_social_links">
                            <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                            <a href="#"><i class="fa-brands fa-youtube"></i></a>
                            <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                            <a href="#"><i class="fa-brands fa-twitter"></i></a>
                            <a href="#"><i class="fa-brands fa-instagram"></i></a>
                        </div>
                    </div>
                    <div class="cs_copyright">Copyright © 2024 Pro Health. All rights reserved.</div>
                </div>
            </div>
        </div>
    </footer>--}}
    <!-- End Footer -->
    <span class="cs_scrollup"><i class="fa-solid fa-arrow-up"></i></span>

    <!-- Script -->
    <script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="assets/js/plugins/jquery-3.6.0.min.js"></script>
    <script src="assets/js/plugins/wow.min.js"></script>
    <script src="assets/js/plugins/slick.min.js"></script>
{{--    <script src="assets/js/plugins/odometer.js"></script>--}}
    <script src="assets/js/plugins/isotope.pkg.min.js"></script>
    <script src="assets/js/plugins/lightgallery.min.js"></script>
    <script src="assets/js/plugins/jquery.timepicker.min.js"></script>
    <script src="assets/js/plugins/jquery-ui.js"></script>
    <script src="assets/js/plugins/select2.min.js"></script>
{{--    <script src="assets/js/plugins/ripples.min.js"></script>--}}
    <script src="assets/js/plugins/gsap.min.js"></script>
    <script src="assets/js/main.js"></script>

</div>
</body>
</html>
