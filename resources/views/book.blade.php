@extends('layouts.guest')

@section('content')
    <!-- Start Banner  -->
    <section class="cs_banner cs_style_3 cs_bg_filed" data-src="assets/img/about/banner_bg.svg">
        <div class="cs_banner_img">
            <img src="assets/img/home/banner.png" alt="Banner Image" class="cs_main_banner_img">
        </div>
        <div class="container">
            <div class="cs_banner_text">
                <h2 class="cs_banner_title cs_fs_72">My Amica Home HealthCare</h2>
                <p class="cs_banner_subtitle cs_fs_20 mb-0 cs_heading_color">A friend is always there to support,<br>comfort, listen, laugh and talk</p>
            </div>
        </div>
    </section>
    <!-- End Banner  -->
    <!-- Start Appointment -->
    <section>
        <div class="cs_height_200 cs_height_xl_150 cs_height_lg_110"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <h2 class="cs_fs_40 cs_medium mb-0">Appointnment</h2>
                    <div class="cs_height_42 cs_height_xl_25"></div>
                    <div class="row">
                        <div class="col-lg-6">
                            <label class="cs_input_label cs_heading_color">Name</label>
                            <input type="text" class="cs_form_field" placeholder="David John">
                            <div class="cs_height_42 cs_height_xl_25"></div>
                        </div>
                        <div class="col-lg-6">
                            <label class="cs_input_label cs_heading_color">Phone Number</label>
                            <input type="text" class="cs_form_field" placeholder="(123) 456 - 789">
                            <div class="cs_height_42 cs_height_xl_25"></div>
                        </div>
                        <div class="col-lg-12">
                            <label class="cs_input_label cs_heading_color">Medical Record Number</label>
                            <input type="text" class="cs_form_field" placeholder="123456-7890-0987">
                            <div class="cs_height_42 cs_height_xl_25"></div>
                        </div>
                        <div class="col-lg-6">
                            <label class="cs_input_label cs_heading_color">Reason for visit</label>
                            <select name="reason_for_visit" class="cs_select" data-placeholder="Reason for visit">
                                <!-- <option></option> -->
                                <option value="routine-checkup">Routine Checkup</option>
                                <option value="Operation">Operation</option>
                                <option value="pathology-est">Pathology Test</option>
                                <option value="report-checkup">Report Checkup</option>
                                <option value="other-reason">Other Reason</option>
                            </select>
                            <div class="cs_height_42 cs_height_xl_25"></div>
                        </div>
                        <div class="col-lg-6">
                            <label class="cs_input_label cs_heading_color">Department</label>
                            <select name="category" class="cs_select" data-placeholder="Category">
                                <!-- <option></option> -->
                                <option value="emergency-department">Emergency Department</option>
                                <option value="pediatric-departement">Pediatric Departement</option>
                                <option value="gynecology-department">Gynecology Department</option>
                                <option value="cardiology-department">Cardiology Department</option>
                                <option value="neurology-department">Neurology Department</option>
                                <option value="psychiatry-department">Psychiatry Department</option>
                                <option value="Others">Others</option>
                            </select>
                            <div class="cs_height_42 cs_height_xl_25"></div>
                        </div>
                        <div class="col-lg-6">
                            <label class="cs_input_label cs_heading_color">Preferred Date</label>
                            <div class="cs_with_icon_input">
                                <input type="text" class="cs_form_field" id="datepicker" placeholder="August 24, 2023">
                                <i class="fa-solid fa-calendar-days"></i>
                            </div>
                            <div class="cs_height_42 cs_height_xl_25"></div>
                        </div>
                        <div class="col-lg-6">
                            <label class="cs_input_label cs_heading_color">Preferred Time</label>
                            <div class="cs_with_icon_input">
                                <input type="text" class="cs_form_field cs_timepicker" placeholder="10:00AM">
                                <i class="fa-regular fa-clock"></i>
                            </div>
                            <div class="cs_height_42 cs_height_xl_25"></div>
                        </div>
                        <div class="col-lg-12">
                            <div class="cs_height_18"></div>
                            <button class="cs_btn cs_style_1">
                                <span>Submit</span>
                                <i>
                                    <img src="assets/img/icons/arrow_white.svg" alt="Icon">
                                    <img src="assets/img/icons/arrow_white.svg" alt="Icon">
                                </i>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 offset-lg-1">
                    <div class="cs_height_lg_100"></div>
                    <h2 class="cs_fs_40 cs_medium mb-0">Contact Info</h2>
                    <div class="cs_height_60 cs_height_xl_40"></div>
                    <img src="assets/img/appointments/appointment_img.jpg" alt="Appointment" class="cs_radius_25 w-100">
                    <div class="cs_height_100 cs_height_xl_60"></div>
                    <ul class="cs_contact_info cs_style_1 cs_mp0">
                        <li>
                            <h3 class="cs_fs_24 cs_semibold mb-0">Phone</h3>
                            <p class="mb-0 cs_heading_color">123-456-7890</p>
                        </li>
                        <li>
                            <h3 class="cs_fs_24 cs_semibold mb-0">Email Us</h3>
                            <p class="mb-0 cs_heading_color"><a href="https://static.laralink.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="adc5c8c1c1c2ceccc1c1cec8c3d9c8dfedcac0ccc4c183cec2c0">[email&#160;protected]</a></p>
                        </li>
                        <li>
                            <h3 class="cs_fs_24 cs_semibold mb-0">Our Location</h3>
                            <p class="mb-0 cs_heading_color">123 Anywhere St., Any City, 12345</p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- End Appointment -->
    <div class="cs_height_100 cs_height_lg_110"></div>
@endsection
