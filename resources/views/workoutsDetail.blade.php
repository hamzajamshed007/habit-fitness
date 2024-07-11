@extends('layouts.app')

@section('content')
   <div class="featured__workout__wrapper">
        <section class="feature_workout_section">
            <div class="container">
                <h3 class="traveler__fontBold text-center">FEATURED WORKOUTS</h3>
                <div class="row mt-5">
                    <div class="col-12">
                        <div class="training_detail_section">
                            <div class="training_img">
                                <img src="{{ $workoutDetail->image?asset('assets/images/featuredWorkout'. '/' . $workoutDetail->image) : asset('assets/images/featured_workout_default.png') }}" style="height: 600px; object-fit:cover; object-position:100% 10%;" alt="training-gym">
                            </div>
                            <p class="paragraph">"{{ $workoutDetail->description }}"</p>
                        </div>
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
                         @forelse($testimonials as $item)
                                <div class="swiper-slide">
                                    <div class="testimonial_box">
                                        <a href="javascript:void(0)">
                                            <img src="{{ $item->testimonial_image?asset('assets/images/testimonial'. '/' . $item->testimonial_image) : asset('assets/images/testimonial_default.png') }}" alt="testimonial image">
                                        </a>
                                        <p class="paragraph">{{ $item->description }}</p>
                                        <div class="testimonial__user">
                                            <span class="user__img">
                                                <img src="{{ $item->user_image?asset('assets/images/testimonial'. '/' . $item->user_image) : asset('assets/images/testimonial_default.png') }}" alt="user image">
                                            </span>
                                            <span class="userDetail">
                                                <p class="user__name">{{ $item->name }}</p>
                                                <p class="user_desc">{{ $item->designation }}</p>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            @empty
                                <h1 class="title_white text-center mt-5">No Testinomial record Found</h1>
                            @endforelse
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
    </div>
@endsection
