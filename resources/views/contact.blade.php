@extends('layouts.guest')

@section('content')
<!-- Start Banner  -->
<section class="cs_banner cs_style_5 cs_bg_filed" data-src="assets/img/about/banner_bg.svg">
    <div class="cs_banner_img">
        <img src="assets/img/contact/banner.png" alt="Banner Image" class="cs_main_banner_img">
{{--        <img src="assets/img/contact/banner_element_1.html" alt="Banner Element" class="cs_element_1 position-absolute">--}}
{{--        <img src="assets/img/contact/banner_element_2.html" alt="Banner Element" class="cs_element_3 position-absolute">--}}
    </div>
    <div class="container">
        <h2 class="cs_banner_title cs_fs_72">Contact Us</h2>
        <p class="cs_banner_subtitle cs_fs_20 mb-0 cs_heading_color">Kindly reach us to get the fastest response and assistance</p>
    </div>
</section>
<!-- End Banner  -->
<!-- Start Contact Section -->
<section>
    <div class="container cs_mt_minus_110">
        <form action="{{route('contact.send')}}" method="post">
            @csrf
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <div class="cs_contact_form cs_style_1 cs_white_bg cs_radius_30">
                        <div class="row">
                            <div class="col-lg-6">
                                <label class="cs_input_label cs_heading_color">Name</label>
                                <input type="text" class="cs_form_field" placeholder="David John" required>
                                <div class="cs_height_42 cs_height_xl_25"></div>
                            </div>
                            <div class="col-lg-6">
                                <label class="cs_input_label cs_heading_color">Email</label>
                                <input type="email" class="cs_form_field" placeholder="example@gmail.com" required>
                                <div class="cs_height_42 cs_height_xl_25"></div>
                            </div>
                            <div class="col-lg-12">
                                <label class="cs_input_label cs_heading_color">Subject</label>
                                <input type="text" class="cs_form_field" placeholder="Your subject" required>
                                <div class="cs_height_42 cs_height_xl_25"></div>
                            </div>
                            <div class="col-lg-12">
                                <label class="cs_input_label cs_heading_color">Message</label>
                                <textarea cols="30" rows="10" class="cs_form_field" placeholder="Write something..." required></textarea>
                                <div class="cs_height_42 cs_height_xl_25"></div>
                            </div>
                            <div class="col-lg-12">
                                <div class="cs_height_18"></div>
                                <button type="submit" class="cs_btn cs_style_1">
                                    <span>Submit</span>
                                    <i>
                                        <img src="assets/img/icons/arrow_white.svg" alt="Icon">
                                        <img src="assets/img/icons/arrow_white.svg" alt="Icon">
                                    </i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</section>
<!-- End Contact Section -->
    <div class="cs_height_100 cs_height_lg_110"></div>
@endsection
