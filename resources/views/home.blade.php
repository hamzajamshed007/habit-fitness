@extends('layouts.app')

@section('content')
<section class="index__sect1">
    <div class="container">
        <div class="index__inner_content">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                    <div class="index__left__Sect1">
                        <h6 class="badge__title"><span>New</span> High Intensity workout to burn calories</h6>
                        <h3 class="traveler__fontBold">Cardio Exercise</h3>
                        <p class="paragraph">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        <div class="btn__Section">
                            <a href="popular-courses.php" class="cta">Get Started</a>
                            <a href="javascript:void(0)" class="cta cta_transparent">Preview</a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                    <div class="index__right__Sect1">
                        <div class="time__section">
                            <h5 class="timer" id="timer">00:00</h5>
                            <span class="small_txt">Time</span>
                        </div>
                        <div class="calories__section">
                            <h5 class="timer">165</h5>
                            <span class="small_txt">Est Calories</span>
                        </div>
                        <img src="{{ asset('assets/images/vector-1.png') }}" class="banner__vector" alt="vector">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="about__section">
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                <div class="aboutLeft__sect">
                    <h5 class="title">About Us</h5>
                    <h3 class="traveler__fontBold">Workout Program Made For You</h3>
                    <img src="{{ asset('assets/images/vector-2.png') }}" alt="vector 02">
                </div>
            </div>
            <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                <div class="aboutRight__sect">
                    <p class="paragraph">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua consectetur adipiscing.</p>
                    <div class="btn__section">
                        <a href="javascript:void(0)" class="cta">Learn More</a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                <div class="about_left_images">
                    <div class="about__items__box about__items__box1">
                        <div class="about__images">
                            <img src="{{ asset('assets/images/about-img1.png') }}" alt="">
                        </div>
                        <div class="about__detail">
                            <p class="medium__text">Samantha William</p>
                            <p class="regular__text">Trainer</p>
                        </div>
                    </div>
                    <div class="about__items__box about__items__box2">
                        <div class="about__images">
                            <img src="{{ asset('assets/images/about-img2.png') }}" alt="">
                        </div>
                        <div class="about__detail">
                            <p class="medium__text">Karen Summer</p>
                            <p class="regular__text">Trainer</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-12 col-md-6 col-lg-6 p-0">
                <div class="about_right_images">
                    <div class="about__items__box about__items__box3">
                        <div class="about__images">
                            <img src="{{ asset('assets/images/about-img3.png') }}" alt="">
                        </div>
                        <div class="about__detail">
                            <p class="medium__text">Jonathan Wise</p>
                            <p class="regular__text">Trainer</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <img src="{{ asset('assets/images/about_left_vector.png') }}" class="about_left_vector" alt="">
    <img src="{{ asset('assets/images/about_right_vector.png') }}" class="about_right_vector" alt="">

</section>

<div class="Index_Section_bg">

    <section class="feature_workout_section">
        <div class="container">
            <h3 class="traveler__fontBold text-center">FEATURED WORKOUTS</h3>
            <div class="row mt-5">
                <div class="col-12 col-md-4 col-lg-4">
                    <a href="featured-workout-detail.php" class="feature_item_box">
                        <img src="{{ asset('assets/images/feature_img1.png') }}" alt="feature images">
                        <div class="feature_descpt">
                            <h5 class="feature_title">BUCKLER MACHINES</h5>
                            <span>
                                <img src="{{ asset('assets/images/send.png') }}" alt="send">
                            </span>
                        </div>
                    </a>
                </div>
                <div class="col-12 col-md-4 col-lg-4">
                    <a href="featured-workout-detail.php" class="feature_item_box">
                        <img src="{{ asset('assets/images/feature_img2.png') }}" alt="feature images">
                        <div class="feature_descpt">
                            <h5 class="feature_title">BUCKLER CARE</h5>
                            <span>
                                <img src="{{ asset('assets/images/send.png') }}" alt="send">
                            </span>
                        </div>
                    </a>
                </div>
                <div class="col-12 col-md-4 col-lg-4">
                    <a href="featured-workout-detail.php" class="feature_item_box">
                        <img src="{{ asset('assets/images/feature_img3.png') }}" alt="feature images">
                        <div class="feature_descpt">
                            <h5 class="feature_title">BUCKLER GAAS</h5>
                            <span>
                                <img src="{{ asset('assets/images/send.png') }}" alt="send">
                                </span->
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section class="gym_detail_section">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-4 col-lg-4">
                    <div class="detail_sect">
                        <img src="{{ asset('assets/images/heart-circle.png') }}" alt="heart circle">
                        <h5 class="BoldNum">195</h5>
                        <p class="regular__text">User Countries</p>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-4 col-lg-4">
                    <div class="detail_sect">
                        <img src="{{ asset('assets/images/diamond.png') }}" alt="Valued Teachers">
                        <h5 class="BoldNum">1M</h5>
                        <p class="regular__text">Valued Teachers</p>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-4 col-lg-4">
                    <div class="detail_sect">
                        <img src="{{ asset('assets/images/school.png') }}" alt="school icon">
                        <h5 class="BoldNum">195</h5>
                        <p class="regular__text">Happy Students</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="course_section">
        <div class="container">
            <div class="d_flexSpacebetween">
                <h3 class="traveler__fontBold">Popular Courses</h3>
                <a href="javascript:void(0)" class="more__courses">SEE MORE COURSES</a>
            </div>
            <div class="row mt-5">
                <div class="col-12 col-sm-6 col-md-4 col-lg-4">
                    <a href="popular-courses.php" class="cousre__video">
                        <div class="video__Box">
                            <img src="{{ asset('assets/images/video_1.png') }}" alt="video_1">
                        </div>
                        <div class="course_video_desc">
                            <div class="course_left_desc">
                                <h5 class="course_title">Treadmill</h5>
                                <p class="regular__text">250 est calories </p>
                            </div>
                            <span class="video_time">58:24</span>
                        </div>
                    </a>
                </div>
                <div class="col-12 col-sm-6 col-md-4 col-lg-4">
                    <a href="popular-courses.php" class="cousre__video">
                        <div class="video__Box">
                            <img src="{{ asset('assets/images/video_2.png') }}" alt="video_2">
                        </div>
                        <div class="course_video_desc">
                            <div class="course_left_desc">
                                <h5 class="course_title">Stretching</h5>
                                <p class="regular__text">250 est calories </p>
                            </div>
                            <span class="video_time">58:24</span>
                        </div>
                    </a>
                </div>
                <div class="col-12 col-sm-6 col-md-4 col-lg-4">
                    <a href="popular-courses.php" class="cousre__video">
                        <div class="video__Box">
                            <img src="{{ asset('assets/images/video_3.png') }}" alt="video_3">
                        </div>
                        <div class="course_video_desc">
                            <div class="course_left_desc">
                                <h5 class="course_title">Yoga</h5>
                                <p class="regular__text">250 est calories </p>
                            </div>
                            <span class="video_time">58:24</span>
                        </div>
                    </a>
                </div>
                <div class="col-12 col-sm-6 col-md-4 col-lg-4">
                    <a href="popular-courses.php" class="cousre__video">
                        <div class="video__Box">
                            <img src="{{ asset('assets/images/video_4.png') }}" alt="video_4">
                        </div>
                        <div class="course_video_desc">
                            <div class="course_left_desc">
                                <h5 class="course_title">Running</h5>
                                <p class="regular__text">250 est calories </p>
                            </div>
                            <span class="video_time">58:24</span>
                        </div>
                    </a>
                </div>
                <div class="col-12 col-sm-6 col-md-4 col-lg-4">
                    <a href="popular-courses.php" class="cousre__video">
                        <div class="video__Box">
                            <img src="{{ asset('assets/images/video_5.png') }}" alt="video_5">
                        </div>
                        <div class="course_video_desc">
                            <div class="course_left_desc">
                                <h5 class="course_title">Lifting</h5>
                                <p class="regular__text">250 est calories </p>
                            </div>
                            <span class="video_time">58:24</span>
                        </div>
                    </a>
                </div>
                <div class="col-12 col-sm-6 col-md-4 col-lg-4">
                    <a href="popular-courses.php" class="cousre__video">
                        <div class="video__Box">
                            <img src="{{ asset('assets/images/video_6.png') }}" alt="video_6">
                        </div>
                        <div class="course_video_desc">
                            <div class="course_left_desc">
                                <h5 class="course_title">PushUp</h5>
                                <p class="regular__text">250 est calories </p>
                            </div>
                            <span class="video_time">58:24</span>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section class="testimonial_section">
        <div class="container">
            <div class="our__testimonial__titleSect">
                <h5 class="title_white">Our Friends.</h5>
                <h3 class="traveler__fontBold">They Love Us.</h3>
                <p class="paragraph">Sem malesuada sed lectus id nunc mattis est eget tincidunt.</p>
            </div>
        </div>
        <div class="testimonial_swiper">
            <!-- Swiper -->
            <div class="swiper testimonialSwiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="testimonial_box">
                            <a href="javascript:void(0)">
                                <img src="{{ asset('assets/images/logo-1.png') }}" alt="logo">
                            </a>
                            <p class="paragraph">Non risus viverra enim, quis. Eget vitae arcu vivamus sit tellus, viverra turpis lorem. Varius a turpis urna id porttitor.</p>
                            <div class="testimonial__user">
                                <span class="user__img">
                                    <img src="{{ asset('assets/images/user-1.png') }}" alt="user image">
                                </span>
                                <span class="userDetail">
                                    <p class="user__name">Hellena John</p>
                                    <p class="user_desc">Co-founder</p>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="testimonial_box">
                            <a href="javascript:void(0)">
                                <img src="{{ asset('assets/images/logo-2.png') }}" alt="logo">
                            </a>
                            <p class="paragraph">Aliquet ridiculus mi porta habitant vulputate rhoncus, mattis amet enim. Sit purus venenatis velit semper lectus sed ornare quam nulla. Lacus, ut congue sagittis vel nisi integer imperdiet a vitae.</p>
                            <div class="testimonial__user">
                                <span class="user__img">
                                    <img src="{{ asset('assets/images/user-1.png') }}" alt="user image">
                                </span>
                                <span class="userDetail">
                                    <p class="user__name">Hellena John</p>
                                    <p class="user_desc">Co-founder</p>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="testimonial_box">
                            <a href="javascript:void(0)">
                                <img src="{{ asset('assets/images/logo-3.png') }}" alt="logo">
                            </a>
                            <p class="paragraph">A eget sed posuere dui risus habitasse mauris. Venenatis aliquet id ultrices a lacus. Pretium vehicula pretium posuere justo sed lorem cursus.</p>
                            <div class="testimonial__user">
                                <span class="user__img">
                                    <img src="{{ asset('assets/images/user-1.png') }}" alt="user image">
                                </span>
                                <span class="userDetail">
                                    <p class="user__name">Hellena John</p>
                                    <p class="user_desc">Co-founder</p>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="testimonial_box">
                            <a href="javascript:void(0)">
                                <img src="{{ asset('assets/images/logo-4.png') }}" alt="logo">
                            </a>
                            <p class="paragraph">Magna egestas aliquet ut integer non. Sed diam enim nibh sit. Aliquam laoreet aenean metus nibh eu scelerisque.</p>
                            <div class="testimonial__user">
                                <span class="user__img">
                                    <img src="{{ asset('assets/images/user-2.png') }}" alt="user image">
                                </span>
                                <span class="userDetail">
                                    <p class="user__name">Hellena John</p>
                                    <p class="user_desc">Co-founder</p>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="testimonial_box">
                            <a href="javascript:void(0)">
                                <img src="{{ asset('assets/images/logo-1.png') }}" alt="logo">
                            </a>
                            <p class="paragraph">Amet morbi enim sodales quis dui, in habitant pharetra. Risus id fringilla sed adipiscing volutpat sit varius turpis. Sed pretium semper rhoncus, tellus semper.</p>
                            <div class="testimonial__user">
                                <span class="user__img">
                                    <img src="{{ asset('assets/images/user-1.png') }}" alt="user image">
                                </span>
                                <span class="userDetail">
                                    <p class="user__name">Hellena John</p>
                                    <p class="user_desc">Co-founder</p>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="testimonial_box">
                            <a href="javascript:void(0)">
                                <img src="{{ asset('assets/images/logo-1.png') }}" alt="logo">
                            </a>
                            <p class="paragraph">Aliquet ridiculus mi porta habitant vulputate rhoncus, mattis amet enim. Sit purus venenatis velit semper lectus sed ornare quam nulla. Lacus, ut congue sagittis vel nisi integer imperdiet a vitae.</p>
                            <div class="testimonial__user">
                                <span class="user__img">
                                    <img src="{{ asset('assets/images/user-2.png') }}" alt="user image">
                                </span>
                                <span class="userDetail">
                                    <p class="user__name">Hellena John</p>
                                    <p class="user_desc">Co-founder</p>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-button-next custom_prevNext">Next <i class="fa-solid fa-arrow-right"></i></div>
                <div class="swiper-button-prev custom_prevNext"><i class="fa-solid fa-arrow-left"></i> Prev</div>
            </div>
        </div>
    </section>

</div>


<section class="get__Started_section">
    <div class="container">
        <div class="getStartedSEct">
            <div class="get_started_leftSect">
                <img src="{{ asset('assets/images/hero_lifestyle.png') }}" alt="hero lifestyle">
            </div>
            <div class="get_started_rightSect">
                <h3 class="traveler__fontBold">Providing A Healthier Lifestyle</h3>
                <div class="btn__section">
                    <a href="javascript:void(0)" class="cta">Get Started</a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="information__section">
    <div class="container">
        <div class="info_detail_sect">
            <h6 class="smallTitle">UPSKILL FOR A BETTER</h6>
            <h5 class="title_white">Request More Information</h5>
            <p class="paragraph">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</p>
            <div class="btn__section">
                <a href="contact-us.php" class="cta">Contact Us</a>
            </div>
        </div>
    </div>
</section>
@endsection
