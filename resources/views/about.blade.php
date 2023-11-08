@extends('layouts.guest')

@section('content')
    <!-- Start Banner  -->
    <section class="cs_banner cs_style_3 cs_bg_filed" data-src="assets/img/about/banner_bg.svg">
        <div class="cs_banner_img">
            <img src="assets/img/home/about.png" alt="Banner Image" class="cs_main_banner_img">
        </div>
        <div class="container">
            <div class="cs_banner_text">
                <h2 class="cs_banner_title cs_fs_72">Learn More About Us</h2>
                <p class="cs_banner_subtitle cs_fs_20 mb-0 cs_heading_color">A friend is always there to support, comfort, listen, laugh and talk</p>
            </div>
        </div>
    </section>
    <!-- End Banner  -->
    <div class="cs_height_100 cs_height_lg_110"></div>
    <!-- Start About Section -->
    <section class="cs_about cs_style_1">
        <div class="container">
            <div class="align-items-center flex-lg-row flex-column-reverse cs_gap_y_40">
                <div class="">
                    <div class="cs_about_content">
                        <div class="cs_section_heading cs_style_1">
                            <h2 class="cs_section_title cs_fs_72 m-0">About Us</h2>
{{--                            <div class="cs_height_5"></div>--}}
{{--                            <h3 class="cs_section_subtitle text-uppercase cs_accent_color cs_semibold m-0 cs_accent_color cs_fs_32">My Amica Home HealthCare</h3>--}}
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
                        <div class="cs_height_72 cs_height_lg_50"></div>
                        <ul class="cs_about_text_list">
                            <li>
                                <i class="cs_accent_color">
                                    <svg width="35" height="24" viewBox="0 0 35 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M34.5342 13.0789L23.3977 23.5789C23.0977 23.8522 22.6958 24.0034 22.2787 23.9999C21.8615 23.9965 21.4625 23.8388 21.1675 23.5607C20.8726 23.2825 20.7053 22.9063 20.7016 22.513C20.698 22.1197 20.8584 21.7408 21.1482 21.4579L29.5689 13.5184H1.59092C1.16899 13.5184 0.764327 13.3604 0.465971 13.0791C0.167615 12.7978 0 12.4163 0 12.0184C0 11.6206 0.167615 11.2391 0.465971 10.9578C0.764327 10.6765 1.16899 10.5184 1.59092 10.5184H29.5689L21.1482 2.57893C20.9962 2.44056 20.875 2.27505 20.7916 2.09204C20.7083 1.90903 20.6644 1.7122 20.6625 1.51303C20.6607 1.31386 20.7009 1.11635 20.7809 0.932003C20.8609 0.747658 20.9791 0.580179 21.1284 0.439341C21.2778 0.298502 21.4554 0.18712 21.651 0.111698C21.8465 0.0362778 22.056 -0.00167465 22.2672 5.53131e-05C22.4785 0.00178719 22.6872 0.0431671 22.8813 0.12178C23.0754 0.200394 23.251 0.314665 23.3977 0.457932L34.5342 10.9579C34.8325 11.2392 35 11.6207 35 12.0184C35 12.4162 34.8325 12.7976 34.5342 13.0789Z" fill="#f39220"/>
                                    </svg>
                                </i>
                                <h3 class="cs_normal cs_fs_32 cs_body_color">You are Welcome!</h3>
                                <p class="m-0">“A friend is always there to support, comfort, listen, laugh and talk”.</p>
                                <p class="mt-4">This has been said about our friendly staff by our clients, their concerned and loving family members, and everyday observers.</p>
                                <p class="mt-4">You can trust the care that your loved ones will receive from <strong>My Amica Home HealthCare</strong>. Our caring and experienced professionals are completely focused on meeting the health, emotional and independence needs of your loved ones. Whether those placed in our care are recovering from a physical injury, surgery, living with a permanent disability or simply dealing with the natural process of aging, you can rest assured that they will be in good hands.  At <strong>My Amica Home HealthCare</strong>, we treat each client as a member of our family.</p>
                            </li>
                        </ul>
                        <div class="cs_height_72 cs_height_lg_50"></div>
                        <ul class="cs_about_text_list">
                            <li>
                                <i class="cs_accent_color">
                                    <svg width="35" height="24" viewBox="0 0 35 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M34.5342 13.0789L23.3977 23.5789C23.0977 23.8522 22.6958 24.0034 22.2787 23.9999C21.8615 23.9965 21.4625 23.8388 21.1675 23.5607C20.8726 23.2825 20.7053 22.9063 20.7016 22.513C20.698 22.1197 20.8584 21.7408 21.1482 21.4579L29.5689 13.5184H1.59092C1.16899 13.5184 0.764327 13.3604 0.465971 13.0791C0.167615 12.7978 0 12.4163 0 12.0184C0 11.6206 0.167615 11.2391 0.465971 10.9578C0.764327 10.6765 1.16899 10.5184 1.59092 10.5184H29.5689L21.1482 2.57893C20.9962 2.44056 20.875 2.27505 20.7916 2.09204C20.7083 1.90903 20.6644 1.7122 20.6625 1.51303C20.6607 1.31386 20.7009 1.11635 20.7809 0.932003C20.8609 0.747658 20.9791 0.580179 21.1284 0.439341C21.2778 0.298502 21.4554 0.18712 21.651 0.111698C21.8465 0.0362778 22.056 -0.00167465 22.2672 5.53131e-05C22.4785 0.00178719 22.6872 0.0431671 22.8813 0.12178C23.0754 0.200394 23.251 0.314665 23.3977 0.457932L34.5342 10.9579C34.8325 11.2392 35 11.6207 35 12.0184C35 12.4162 34.8325 12.7976 34.5342 13.0789Z" fill="#f39220"/>
                                    </svg>
                                </i>
                                <h3 class="cs_normal cs_fs_32 cs_body_color">At <strong>My Amica Home HealthCare</strong>, we are dedicated to:</h3>
                                <p class="m-0"><strong>Ensuring – </strong>Our clients are provided high quality individualized and compassionate homecare designed to suit their needs.</p>
                                <p class="mt-4"><strong>Working – </strong>Hand in hand with our client’s loved ones to make sure that those in our care have the protective environment that is so essential to their health and well-being.</p>
                                <p class="mt-4"><strong>Providing – </strong>Friendly, gentle and compassionate care at a reasonable price.</p>
                                <p class="mt-4">24/7 care coordinators who are directly available by phone to respond to emergencies and to    re-staff your service in the event your normal caregiver is unavailable.</p>
                                <p class="mt-4">A free in-home assessment during which a custom care plan will be developed that is specific to your needs.</p>
                            </li>
                        </ul>
                        <div class="cs_height_72 cs_height_lg_50"></div>
                        <ul class="cs_about_text_list">
                            <li>
                                <i class="cs_accent_color">
                                    <svg width="35" height="24" viewBox="0 0 35 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M34.5342 13.0789L23.3977 23.5789C23.0977 23.8522 22.6958 24.0034 22.2787 23.9999C21.8615 23.9965 21.4625 23.8388 21.1675 23.5607C20.8726 23.2825 20.7053 22.9063 20.7016 22.513C20.698 22.1197 20.8584 21.7408 21.1482 21.4579L29.5689 13.5184H1.59092C1.16899 13.5184 0.764327 13.3604 0.465971 13.0791C0.167615 12.7978 0 12.4163 0 12.0184C0 11.6206 0.167615 11.2391 0.465971 10.9578C0.764327 10.6765 1.16899 10.5184 1.59092 10.5184H29.5689L21.1482 2.57893C20.9962 2.44056 20.875 2.27505 20.7916 2.09204C20.7083 1.90903 20.6644 1.7122 20.6625 1.51303C20.6607 1.31386 20.7009 1.11635 20.7809 0.932003C20.8609 0.747658 20.9791 0.580179 21.1284 0.439341C21.2778 0.298502 21.4554 0.18712 21.651 0.111698C21.8465 0.0362778 22.056 -0.00167465 22.2672 5.53131e-05C22.4785 0.00178719 22.6872 0.0431671 22.8813 0.12178C23.0754 0.200394 23.251 0.314665 23.3977 0.457932L34.5342 10.9579C34.8325 11.2392 35 11.6207 35 12.0184C35 12.4162 34.8325 12.7976 34.5342 13.0789Z" fill="#f39220"/>
                                    </svg>
                                </i>
                                <h3 class="cs_normal cs_fs_32 cs_body_color">We require that our caregivers-</h3>
{{--                                <ol>--}}
                                    <p class="m-0">Pass a criminal background check and drug test.</p>
                                    <p class="mt-4">Complete a recent physical exam.</p>
                                    <p class="mt-4">Possess a current Nurse’s Aide (CNA) or Home Health Care Certificate (HHA).</p>
                                    <p class="mt-4">Be certified in First Aid and CPR.</p>
                                    <p class="mt-4">Be trained by registered nurse in the areas of dementia care and safety awareness and work in conjunction with other professional service providers when necessary or required.</p>
                                    <p class="mt-4">Function as first-line reporters in identifying changes in their client’s condition and to report such changes to the appropriate individual.</p>
                                    <p class="mt-4">Be fully oriented to client’s medical condition and needs before starting service.</p>
{{--                                </ol>--}}
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End About Section -->
    <div class="cs_height_100 cs_height_lg_110"></div>
@endsection
