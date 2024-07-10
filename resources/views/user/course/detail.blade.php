@extends('layouts.app')

@section('content')

<div class="coursesdetail_page_wrapper">
    <section class="course_detail_sect">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6 col-lg-6">
                    <div class="course_detail_img">
                        <img src="{{ asset('assets/images/course/'.$course->image) }}" alt="course-detail">
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-6">
                    <div class="course_detail_content">
                        <h3 class="traveler__fontBold">{{ strtoupper($course->title) }}</h3>
                        <p class="paragraph">{{ $course->description }}</p>
                        <div class="accordion" id="accordionExample">
                            @if(!empty($course->accordions))
                                @foreach($course->accordions as $item)
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingOne">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                            {{ $item->title }}
                                        </button>
                                    </h2>
                                    <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <p class="paragraph">{{ $item->description }}</p>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            @endif
                        </div>
                        <div class="btn__Section">
                            <a href="subscription.php" class="cta">Enroll Now</a>
                            {{-- <a href="schedule-payment-method.php" class="cta cta_transparent">Pay Later</a> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="course_section">
        <div class="container">
            <div class="row mt-5">
                @foreach($courses as $item)
                <div class="col-12 col-sm-6 col-md-4 col-lg-4">
                    <a href="{{ route('course.detail', ['id' => $item->id]) }}" class="cousre__video">
                        <div class="cousre__video">    
                            <div class="video__Box">
                                <img src="{{ asset('assets/images/course/'.$item->image) }}" alt="video_1">
                            </div>
                            <div class="course_video_desc">
                                <div class="course_left_desc">
                                    <h5 class="course_title">{{ $item->title }}</h5>
                                    <p class="regular__text">250 est calories </p>
                                </div>
                                <span class="video_time">58:24</span>
                            </div>
                        </div>
                    </a>
                </div>
                @endforeach
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
                                <img src="assets/images/logo-1.png" alt="logo">
                            </a>
                            <p class="paragraph">Non risus viverra enim, quis. Eget vitae arcu vivamus sit tellus, viverra turpis lorem. Varius a turpis urna id porttitor.</p>
                            <div class="testimonial__user">
                                <span class="user__img">
                                    <img src="assets/images/user-1.png" alt="user image">
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
                                <img src="assets/images/logo-2.png" alt="logo">
                            </a>
                            <p class="paragraph">Aliquet ridiculus mi porta habitant vulputate rhoncus, mattis amet enim. Sit purus venenatis velit semper lectus sed ornare quam nulla. Lacus, ut congue sagittis vel nisi integer imperdiet a vitae.</p>
                            <div class="testimonial__user">
                                <span class="user__img">
                                    <img src="assets/images/user-1.png" alt="user image">
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
                                <img src="assets/images/logo-3.png" alt="logo">
                            </a>
                            <p class="paragraph">A eget sed posuere dui risus habitasse mauris. Venenatis aliquet id ultrices a lacus. Pretium vehicula pretium posuere justo sed lorem cursus.</p>
                            <div class="testimonial__user">
                                <span class="user__img">
                                    <img src="assets/images/user-1.png" alt="user image">
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
                                <img src="assets/images/logo-4.png" alt="logo">
                            </a>
                            <p class="paragraph">Magna egestas aliquet ut integer non. Sed diam enim nibh sit. Aliquam laoreet aenean metus nibh eu scelerisque.</p>
                            <div class="testimonial__user">
                                <span class="user__img">
                                    <img src="assets/images/user-2.png" alt="user image">
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
                                <img src="assets/images/logo-1.png" alt="logo">
                            </a>
                            <p class="paragraph">Amet morbi enim sodales quis dui, in habitant pharetra. Risus id fringilla sed adipiscing volutpat sit varius turpis. Sed pretium semper rhoncus, tellus semper.</p>
                            <div class="testimonial__user">
                                <span class="user__img">
                                    <img src="assets/images/user-1.png" alt="user image">
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
                                <img src="assets/images/logo-1.png" alt="logo">
                            </a>
                            <p class="paragraph">Aliquet ridiculus mi porta habitant vulputate rhoncus, mattis amet enim. Sit purus venenatis velit semper lectus sed ornare quam nulla. Lacus, ut congue sagittis vel nisi integer imperdiet a vitae.</p>
                            <div class="testimonial__user">
                                <span class="user__img">
                                    <img src="assets/images/user-2.png" alt="user image">
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


    <section class="get__Started_section">
        <div class="container">
            <div class="getStartedSEct">
                <div class="get_started_leftSect">
                    <img src="assets/images/hero_lifestyle.png" alt="hero lifestyle">
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
</div>

@endsection