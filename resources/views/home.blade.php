@extends('layouts.guest')

@section('content')
    <!-- Start Hero -->
    <section class="cs_hero cs_style_1">
        <div class="cs_hero_wrap cs_bg_filed" data-src="assets/img/about/banner_bg.svg">
            <div class="container">
                <div class="cs_hero_text">
                    <h1 class="cs_hero_title cs_fs_94">Welcome to My Amica Home HealthCare </h1>
                    <p class="cs_hero_subtitle cs_fs_20 cs_heading_color">
                        A friend is always there to support,<br>comfort, listen, laugh and talk
{{--                        A non-medical home healthcare agency <br>based in the state Connecticut--}}
                    </p>
{{--                    <div class="cs_hero_btn_wrap">--}}
{{--                        <a href="https://www.youtube.com/embed/VcaAVWtP48A" class="cs_video_open cs_heading_color cs_text_btn_2 cs_fs_20">--}}
{{--                            <span class="cs_text_btn_icon">--}}
{{--                                <svg width="50" height="50" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">--}}
{{--                                <path d="M42.739 7.26089C32.8938 -2.48797 17.0097 -2.40994 7.26088 7.43526C-2.42029 17.2121 -2.42029 32.9623 7.26088 42.7392C17.1061 52.488 32.9902 52.41 42.739 42.5648C52.4202 32.788 52.4202 17.0377 42.739 7.26089ZM25 48.0713C12.2783 48.0713 1.92868 37.7217 1.92868 25C1.92868 12.2782 12.2782 1.9288 25 1.9288C37.7217 1.9288 48.0712 12.2784 48.0712 25.0001C48.0712 37.7218 37.7216 48.0713 25 48.0713Z" fill="currentColor"/>--}}
{{--                                <path d="M38.5996 24.1265V24.1277L18.2308 12.368C17.7487 12.0897 17.1322 12.2548 16.8539 12.737C16.7655 12.8901 16.7189 13.0637 16.7189 13.2405V36.7598C16.7191 37.3164 17.1707 37.7676 17.7273 37.7672C17.9041 37.7671 18.0778 37.7206 18.2309 37.6322L38.5997 25.8725C39.0819 25.5943 39.2471 24.9778 38.9689 24.4956C38.8803 24.3423 38.753 24.215 38.5996 24.1265Z" fill="currentColor"/>--}}
{{--                              </svg>--}}
{{--                            </span>--}}
{{--                            <span class="cs_text_btn_text">See how we work</span>--}}
{{--                        </a>--}}
{{--                    </div>--}}
                </div>
                <img src="assets/img/home/banner.png" alt="Hero" class="cs_hero_img">
                <div class="cs_hero_info_wrap cs_shadow_1 cs_white_bg cs_radius_15">
                    <div class="cs_hero_info_col">
                        <div class="cs_hero_info d-flex align-items-center">
                            <div class="cs_hero_info_icon cs_center rounded-circle cs_accent_bg">
                                <img src="assets/img/contact/icon_1.svg" alt="Icon">
                            </div>
                            <div class="cs_hero_info_right">
                                <h3 class="cs_hero_info_title cs_semibold">Hotline</h3>
                                <p class="cs_hero_info_subtitle cs_fs_20">123-456-7890</p>
                            </div>
                        </div>
                    </div>
                    <div class="cs_hero_info_col">
                        <div class="cs_hero_info d-flex align-items-center">
                            <div class="cs_hero_info_icon cs_center rounded-circle cs_accent_bg">
                                <img src="assets/img/icons/ambulance.svg" alt="Icon">
                            </div>
                            <div class="cs_hero_info_right">
                                <h3 class="cs_hero_info_title cs_semibold">Ambulance</h3>
                                <p class="cs_hero_info_subtitle cs_fs_20">876-256-876</p>
                            </div>
                        </div>
                    </div>
                    <div class="cs_hero_info_col">
                        <div class="cs_hero_info d-flex align-items-center">
                            <div class="cs_hero_info_icon cs_center rounded-circle cs_accent_bg">
                                <img src="assets/img/icons/pin.svg" alt="Icon">
                            </div>
                            <div class="cs_hero_info_right">
                                <h3 class="cs_hero_info_title cs_semibold">Location</h3>
                                <p class="cs_hero_info_subtitle cs_fs_20">Connecticut, US</p>
                            </div>
                        </div>
                    </div>
                    <div class="cs_hero_info_col">
                        <a href="{{route('contact')}}" class="cs_btn cs_style_1">
                            <span>Contact Us</span>
                            <i>
                                <img src="assets/img/icons/arrow_white.svg" alt="Icon">
                                <img src="assets/img/icons/arrow_white.svg" alt="Icon">
                            </i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Hero -->
  {{--  <!-- Start Banner  -->
    <section class="cs_banner cs_style_3 cs_bg_filed" data-src="assets/img/about/banner_bg.svg">
        <div class="cs_banner_img">
            <img src="assets/img/home/banner.png" alt="Banner Image" class="cs_main_banner_img">
        </div>
        <div class="container">
            <div class="cs_banner_text">
                <h2 class="cs_banner_title cs_fs_72">Welcome to <br>ProHealth Medical & Healthcare Center</h2>
                <p class="cs_banner_subtitle cs_fs_20 mb-0 cs_heading_color">Your Partner in Health and Wellness</p>
            </div>
        </div>
    </section>
    <!-- End Banner  -->--}}
    <!-- Start Services Section -->
    <section>
        <div class="cs_height_200 cs_height_xl_150 cs_height_lg_110"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-xl-4">
                    <div class="cs_section_heading cs_style_1">
                        <h3 class="cs_section_subtitle text-uppercase cs_accent_color cs_semibold m-0 cs_accent_color cs_fs_32">SERVICES</h3>
                        <div class="cs_height_5"></div>
                        <h2 class="cs_section_title cs_fs_72 m-0">Take a Look at Our Services</h2>
                    </div>
                    <div class="cs_height_70 cs_height_lg_50"></div>
                </div>
                <div class="col-md-6 col-xl-4">
                    <div class="cs_iconbox cs_style_4">
                        <div class="cs_iconbox_icon cs_accent_bg rounded-circle cs_center">
                            <img src="assets/img/icons/calendar_white.svg" alt="Icon">
                        </div>
                        <h2 class="cs_iconbox_title cs_fs_32">Personal Care</h2>
                        <p class="cs_iconbox_subtitle m-0">Bathing (Shower, Chair, Sponge), Dressing, Toileting, Incontinence Care, Mobility & Transfers from Bed to Chair and more
                        </p>
                        <a href="#" class="cs_iconbox_btn cs_center">
                            <img src="assets/img/icons/arrow_white.svg" alt="Icon">
                            <img src="assets/img/icons/arrow_white.svg" alt="Icon">
                        </a>
                    </div>
                </div>
                <div class="col-md-6 col-xl-4">
                    <div class="cs_iconbox cs_style_4">
                        <div class="cs_iconbox_icon cs_accent_bg rounded-circle cs_center">
                            <img src="assets/img/icons/calendar_white.svg" alt="Icon">
                        </div>
                        <h2 class="cs_iconbox_title cs_fs_32">Homemaking</h2>
                        <p class="cs_iconbox_subtitle m-0">Light housekeeping, Grocery shopping, Change bed linens, Laundry, Meal preparation & cleanup and more
                        </p>
                        <a href="#" class="cs_iconbox_btn cs_center">
                            <img src="assets/img/icons/arrow_white.svg" alt="Icon">
                            <img src="assets/img/icons/arrow_white.svg" alt="Icon">
                        </a>
                    </div>
                </div>
                <div class="col-md-6 col-xl-4">
                    <div class="cs_iconbox cs_style_4">
                        <div class="cs_iconbox_icon cs_accent_bg rounded-circle cs_center">
                            <img src="assets/img/icons/calendar_white.svg" alt="Icon">
                        </div>
                        <h2 class="cs_iconbox_title cs_fs_32">Respite Care</h2>
                        <p class="cs_iconbox_subtitle m-0">Hourly Care, 12 Hour Shifts (Day/Night), 24 Hour Live-In, Temporary or Long Term and Weekdays, Weekend & Holidays
                        </p>
                        <a href="#" class="cs_iconbox_btn cs_center">
                            <img src="assets/img/icons/arrow_white.svg" alt="Icon">
                            <img src="assets/img/icons/arrow_white.svg" alt="Icon">
                        </a>
                    </div>
                </div>
                <div class="col-md-6 col-xl-4">
                    <div class="cs_iconbox cs_style_4">
                        <div class="cs_iconbox_icon cs_accent_bg rounded-circle cs_center">
                            <img src="assets/img/icons/calendar_white.svg" alt="Icon">
                        </div>
                        <h2 class="cs_iconbox_title cs_fs_32">Nursing Care</h2>
                        <p class="cs_iconbox_subtitle m-0">Medication Administration (per request), IV Administration (per request), Wound Care (per request) and more
                        </p>
                        <a href="#" class="cs_iconbox_btn cs_center">
                            <img src="assets/img/icons/arrow_white.svg" alt="Icon">
                            <img src="assets/img/icons/arrow_white.svg" alt="Icon">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Services Section -->
    <div class="cs_height_100 cs_height_lg_110"></div>
    <!-- Start FunFact Section -->
    <section>
        <div class="container">
            <div class="cs_funfact_1_wrap cs_radius_30 cs_bg_filed" data-src="assets/img/home/fun_fact_bg.jpg">
                <div class="cs_funfact cs_style_1 text-center">
                    <h2 class="cs_funfact_number cs_fs_72"><span class="odometer" data-count-to="20"></span>+</h2>
                    <p class="cs_funfact_title m-0 cs_heading_color">Years of experience</p>
                </div>
                <div class="cs_funfact cs_style_1 text-center">
                    <h2 class="cs_funfact_number cs_fs_72"><span class="odometer" data-count-to="95"></span>%</h2>
                    <p class="cs_funfact_title m-0 cs_heading_color">Patient satisfaction rating</p>
                </div>
                <div class="cs_funfact cs_style_1 text-center">
                    <h2 class="cs_funfact_number cs_fs_72"><span class="odometer" data-count-to="5000"></span>+</h2>
                    <p class="cs_funfact_title m-0 cs_heading_color">Patients served annually</p>
                </div>
                <div class="cs_funfact cs_style_1 text-center">
                    <h2 class="cs_funfact_number cs_fs_72"><span class="odometer" data-count-to="10"></span>+</h2>
                    <p class="cs_funfact_title m-0 cs_heading_color">Healthcare providers on staff</p>
                </div>
                <div class="cs_funfact cs_style_1 text-center">
                    <h2 class="cs_funfact_number cs_fs_72"><span class="odometer" data-count-to="20"></span>+</h2>
                    <p class="cs_funfact_title m-0 cs_heading_color">Convenient locations in the area</p>
                </div>
            </div>
        </div>
    </section>
    <!-- End FunFact Section -->
    <div class="cs_height_100 cs_height_lg_110"></div>
    <!-- Start About Section -->
    <section class="cs_about cs_style_1">
        <div class="container">
            <div class="row align-items-center flex-lg-row flex-column-reverse cs_gap_y_40">
                <div class="col-lg-7">
                    <div class="cs_height_55"></div>
                    <div class="cs_about_img">
                        <img src="assets/img/home/about.png" alt="About">
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="cs_about_content">
                        <div class="cs_section_heading cs_style_1">
                            <h2 class="cs_section_title cs_fs_72 m-0">About Us</h2>
                            <div class="cs_height_5"></div>
                            <h3 class="cs_section_subtitle text-uppercase cs_accent_color cs_semibold m-0 cs_accent_color cs_fs_32">My Amica Home HealthCare</h3>
                        </div>
                        <div class="cs_height_72 cs_height_lg_50"></div>
                        <ul class="cs_about_text_list">
                            <li>
                                <i class="cs_accent_color">
                                    <svg width="35" height="24" viewBox="0 0 35 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M34.5342 13.0789L23.3977 23.5789C23.0977 23.8522 22.6958 24.0034 22.2787 23.9999C21.8615 23.9965 21.4625 23.8388 21.1675 23.5607C20.8726 23.2825 20.7053 22.9063 20.7016 22.513C20.698 22.1197 20.8584 21.7408 21.1482 21.4579L29.5689 13.5184H1.59092C1.16899 13.5184 0.764327 13.3604 0.465971 13.0791C0.167615 12.7978 0 12.4163 0 12.0184C0 11.6206 0.167615 11.2391 0.465971 10.9578C0.764327 10.6765 1.16899 10.5184 1.59092 10.5184H29.5689L21.1482 2.57893C20.9962 2.44056 20.875 2.27505 20.7916 2.09204C20.7083 1.90903 20.6644 1.7122 20.6625 1.51303C20.6607 1.31386 20.7009 1.11635 20.7809 0.932003C20.8609 0.747658 20.9791 0.580179 21.1284 0.439341C21.2778 0.298502 21.4554 0.18712 21.651 0.111698C21.8465 0.0362778 22.056 -0.00167465 22.2672 5.53131e-05C22.4785 0.00178719 22.6872 0.0431671 22.8813 0.12178C23.0754 0.200394 23.251 0.314665 23.3977 0.457932L34.5342 10.9579C34.8325 11.2392 35 11.6207 35 12.0184C35 12.4162 34.8325 12.7976 34.5342 13.0789Z" fill="#f39220"/>
                                    </svg>
                                </i>
                                <h3 class="cs_normal cs_fs_32 cs_body_color">A non-medical home healthcare agency based in Connecticut State</h3>
                                <p class="m-0">We provide home healthcare services throughout the state of Connecticut and Virginia Our caregivers will work in private homes and/or assisted living /residential facilities providing hourly, shift, or live-in care to clients of all ages.</p>

                                <p class="mt-4">    Our friendly approach to healthcare, coupled with our reliable and affordable prices, makes us a top-of-the-line home healthcare agency.</p>

                            </li>
                        </ul>
                        <div class="mt-4">
                            <a href="{{route('about')}}" class="cs_btn cs_style_1">
                                <span>Learn More</span>
                                <i>
                                    <img src="assets/img/icons/arrow_white.svg" alt="Icon">
                                    <img src="assets/img/icons/arrow_white.svg" alt="Icon">
                                </i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End About Section -->

   {{-- <!-- Start Portfolio Section -->
    <section>
        <div class="cs_height_170 cs_height_xl_120 cs_height_lg_80"></div>
        <div class="container">
            <div class="cs_isotop cs_style1 cs_isotop_col_3 cs_has_gutter_24 cs_lightgallery">
                <div class="cs_grid_sizer"></div>
                <div class="cs_isotop_item cs_w66">
                    <div class="cs_section_heading cs_style_1">
                        <h3 class="cs_section_subtitle text-uppercase cs_accent_color cs_semibold m-0 cs_accent_color cs_fs_32">HAVE A LOOK AT</h3>
                        <div class="cs_height_5"></div>
                        <h2 class="cs_section_title cs_fs_72 m-0">Our Facilities and <br>Latest Activities</h2>
                        <div class="cs_height_52 cs_height_xl_97 cs_height_lg_25"></div>
                    </div>
                </div><!-- .cs_isotop_item -->
                <div class="cs_isotop_item">
                    <div class="cs_portfolio cs_style_1 cs_size_1 cs_radius_20 overflow-hidden">
                        <a href="assets/img/about/portfolio_1_lg.jpg" class="cs_portfolio_img d-block cs_bg_filed st_lightbox_item" data-src="assets/img/about/portfolio_1.jpg"><span class="cs_link_hover"><i class="fas fa-arrows-alt"></i></span></a>
                    </div>
                </div><!-- .cs_isotop_item -->
                <div class="cs_isotop_item">
                    <div class="cs_portfolio cs_style_1 cs_radius_20 overflow-hidden">
                        <a href="assets/img/about/portfolio_2_lg.jpg" class="cs_portfolio_img d-block cs_bg_filed st_lightbox_item" data-src="assets/img/about/portfolio_2.jpg"><span class="cs_link_hover"><i class="fas fa-arrows-alt"></i></span></a>
                    </div>
                </div><!-- .cs_isotop_item -->
                <div class="cs_isotop_item">
                    <div class="cs_portfolio cs_style_1 cs_radius_20 overflow-hidden">
                        <a href="assets/img/about/portfolio_3_lg.jpg" class="cs_portfolio_img d-block cs_bg_filed st_lightbox_item" data-src="assets/img/about/portfolio_3.jpg"><span class="cs_link_hover"><i class="fas fa-arrows-alt"></i></span></a>
                    </div>
                </div><!-- .cs_isotop_item -->
                <div class="cs_isotop_item cs_w66">
                    <div class="cs_portfolio cs_style_1 cs_radius_20 overflow-hidden">
                        <a href="assets/img/about/portfolio_4_lg.jpg" class="cs_portfolio_img d-block cs_bg_filed st_lightbox_item" data-src="assets/img/about/portfolio_4.jpg"><span class="cs_link_hover"><i class="fas fa-arrows-alt"></i></span></a>
                    </div>
                </div><!-- .cs_isotop_item -->
                <div class="cs_isotop_item">
                    <div class="cs_portfolio cs_style_1 cs_radius_20 overflow-hidden">
                        <a href="assets/img/about/portfolio_5_lg.jpg" class="cs_portfolio_img d-block cs_bg_filed st_lightbox_item" data-src="assets/img/about/portfolio_5.jpg"><span class="cs_link_hover"><i class="fas fa-arrows-alt"></i></span></a>
                    </div>
                </div><!-- .cs_isotop_item -->
            </div>
        </div>
    </section>
    <!-- End Portfolio Section -->
    <!-- Start Why Choose Us -->
    <section class="cs_shape_wrap">
        <div class="cs_shape_1 cs_position_1"></div>
        <div class="cs_height_175 cs_height_xl_125 cs_height_lg_85"></div>
        <div class="container">
            <div class="row flex-xl-row flex-column-reverse">
                <div class="col-xl-5">
                    <div class="cs_pr_95 text-center cs_img_filed">
                        <img src="assets/img/about/why_choose_us.jpg" alt="Why Choose Us" class=" cs_radius_30">
                    </div>
                </div>
                <div class="col-xl-7">
                    <div class="cs_section_heading cs_style_1">
                        <h2 class="cs_section_title cs_fs_72 m-0">Why Choose Us</h2>
                    </div>
                    <div class="cs_height_85 cs_height_xl_70 cs_height_lg_50"></div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="cs_iconbox cs_style_6">
                                <div class="cs_iconbox_icon cs_center cs_accent_bg rounded-circle">
                                    <img src="assets/img/icons/professional.svg" alt="Icon">
                                </div>
                                <h2 class="cs_iconbox_title cs_fs_32 cs_semibold">Experienced Medical Professionals</h2>
                                <p class="cs_iconbox_subtitle m-0">Our team includes experienced doctors, nurses, <br>and other healthcare professionals who are <br>dedicated to providing the best possible care to <br>our patients.</p>
                            </div>
                            <div class="cs_height_85 cs_height_xl_60 cs_height_lg_35"></div>
                        </div>
                        <div class="col-md-6">
                            <div class="cs_iconbox cs_style_6">
                                <div class="cs_iconbox_icon cs_center cs_accent_bg rounded-circle">
                                    <img src="assets/img/icons/comprehensive.svg" alt="Icon">
                                </div>
                                <h2 class="cs_iconbox_title cs_fs_32 cs_semibold">Comprehensive <br>Services</h2>
                                <p class="cs_iconbox_subtitle m-0">We offer a wide range of healthcare services, <br>from preventive care to specialized treatment <br>for complex conditions.</p>
                            </div>
                            <div class="cs_height_85 cs_height_xl_60 cs_height_lg_35"></div>
                        </div>
                        <div class="col-md-6">
                            <div class="cs_iconbox cs_style_6">
                                <div class="cs_iconbox_icon cs_center cs_accent_bg rounded-circle">
                                    <img src="assets/img/icons/patient.svg" alt="Icon">
                                </div>
                                <h2 class="cs_iconbox_title cs_fs_32 cs_semibold">Patient-centered <br>Approach</h2>
                                <p class="cs_iconbox_subtitle m-0">We believe in treating each patient as an <br>individual, and we take the time to understand <br>your unique health needs and concerns.</p>
                            </div>
                            <div class="cs_height_85 cs_height_xl_60 cs_height_lg_35"></div>
                        </div>
                        <div class="col-md-6">
                            <div class="cs_iconbox cs_style_6">
                                <div class="cs_iconbox_icon cs_center cs_accent_bg rounded-circle">
                                    <img src="assets/img/icons/facilities.svg" alt="Icon">
                                </div>
                                <h2 class="cs_iconbox_title cs_fs_32 cs_semibold">State-of-the-art <br>Facilities</h2>
                                <p class="cs_iconbox_subtitle m-0">Our healthcare center is equipped with the <br>latest technology and equipment to provide our <br>patients with the most advanced care possible.</p>
                            </div>
                            <div class="cs_height_85 cs_height_xl_60 cs_height_lg_35"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Why Choose Us -->--}}
    <div class="cs_height_100 cs_height_lg_110"></div>


    {{--<!-- Start Team Section -->
    <section>
        <div class="cs_height_190 cs_height_xl_145 cs_height_lg_105"></div>
        <div class="container">
            <div class="cs_section_heading cs_style_1 text-center">
                <h3 class="cs_section_subtitle text-uppercase cs_accent_color cs_semibold m-0 cs_accent_color cs_fs_32">MEET OUR</h3>
                <div class="cs_height_5"></div>
                <h2 class="cs_section_title cs_fs_72 m-0">Experts Doctor</h2>
            </div>
            <div class="cs_height_70 cs_height_lg_50"></div>
            <div class="row gy-3">
                <div class="col-lg-4">
                    <div class="cs_team cs_style_1 text-center cs_radius_20 cs_type_1">
                        <div class="cs_member_img"><img src="assets/img/about/doctor_1.png" alt="Doctor"></div>
                        <div class="cs_team_meta">
                            <div>
                                <h3 class="cs_member_name cs_semibold cs_fs_40">Dr. James Lee, MD</h3>
                                <p class="cs_member_designation cs_fs_20 cs_heading_color">Head of Cardiologist</p>
                                <p class="cs_member_description">With expertise in managing complex heart conditions and performing advanced cardiac procedures</p>
                            </div>
                            <div>
                                <div class="cs_social_links">
                                    <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                                    <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                                    <a href="#"><i class="fa-brands fa-twitter"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="cs_team cs_style_1 text-center cs_radius_20 cs_type_1">
                        <div class="cs_member_img"><img src="assets/img/about/doctor_2.png" alt="Doctor"></div>
                        <div class="cs_team_meta">
                            <div>
                                <h3 class="cs_member_name cs_semibold cs_fs_40">Dr. John Smith, MD</h3>
                                <p class="cs_member_designation cs_fs_20 cs_heading_color">Emergency Medicine Physician</p>
                                <p class="cs_member_description">With expertise in treating acute illnesses and injuries in medicine physician</p>
                            </div>
                            <div>
                                <div class="cs_social_links">
                                    <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                                    <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                                    <a href="#"><i class="fa-brands fa-twitter"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="cs_team cs_style_1 text-center cs_radius_20 cs_type_1">
                        <div class="cs_member_img"><img src="assets/img/about/doctor_3.png" alt="Doctor"></div>
                        <div class="cs_team_meta">
                            <div>
                                <h3 class="cs_member_name cs_semibold cs_fs_40">Dr. Susan Bones, MD</h3>
                                <p class="cs_member_designation cs_fs_20 cs_heading_color">Board-certified Pediatrician</p>
                                <p class="cs_member_description">With experience in managing complex medical conditions in children</p>
                            </div>
                            <div>
                                <div class="cs_social_links">
                                    <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                                    <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                                    <a href="#"><i class="fa-brands fa-twitter"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Team Section -->

    <!-- Start Awards Section -->
    <section>
        <div class="cs_height_190 cs_height_xl_145 cs_height_lg_105"></div>
        <div class="container">
            <div class="cs_section_heading cs_style_1 text-center">
                <h3 class="cs_section_subtitle text-uppercase cs_accent_color cs_semibold m-0 cs_accent_color cs_fs_32">AWARDS</h3>
                <div class="cs_height_5"></div>
                <h2 class="cs_section_title cs_fs_72 m-0">Winning Awards and <br>Recognition</h2>
                <div class="cs_height_25"></div>
                <p class="m-0">We have been recognized for our commitment to <br>excellence in healthcare.</p>
            </div>
            <div class="cs_height_70 cs_height_lg_50"></div>
            <div class="row">
                <div class="col-xxl-3 col-md-6">
                    <div class="cs_iconbox cs_style_5 cs_white_bg cs_radius_15">
                        <div class="cs_iconbox_icon cs_center cs_accent_bg cs_radius_15">
                            <img src="assets/img/icons/award.svg" alt="">
                        </div>
                        <h2 class="cs_iconbox_title m-0 cs_fs_20 cs_medium">Malcolm Baldrige National Quality Award</h2>
                    </div>
                    <div class="cs_height_25"></div>
                </div>
                <div class="col-xxl-3 col-md-6">
                    <div class="cs_iconbox cs_style_5 cs_white_bg cs_radius_15">
                        <div class="cs_iconbox_icon cs_center cs_accent_bg cs_radius_15">
                            <img src="assets/img/icons/award.svg" alt="">
                        </div>
                        <h2 class="cs_iconbox_title m-0 cs_fs_20 cs_medium">HIMSS Davies Award</h2>
                    </div>
                    <div class="cs_height_25"></div>
                </div>
                <div class="col-xxl-3 col-md-6">
                    <div class="cs_iconbox cs_style_5 cs_white_bg cs_radius_15">
                        <div class="cs_iconbox_icon cs_center cs_accent_bg cs_radius_15">
                            <img src="assets/img/icons/award.svg" alt="">
                        </div>
                        <h2 class="cs_iconbox_title m-0 cs_fs_20 cs_medium">Healthgrades National’s Best Hospital</h2>
                    </div>
                    <div class="cs_height_25"></div>
                </div>
                <div class="col-xxl-3 col-md-6">
                    <div class="cs_iconbox cs_style_5 cs_white_bg cs_radius_15">
                        <div class="cs_iconbox_icon cs_center cs_accent_bg cs_radius_15">
                            <img src="assets/img/icons/award.svg" alt="">
                        </div>
                        <h2 class="cs_iconbox_title m-0 cs_fs_20 cs_medium">Joint Commission Gold Seal of Approval</h2>
                    </div>
                    <div class="cs_height_25"></div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Awards Section -->--}}
@endsection
