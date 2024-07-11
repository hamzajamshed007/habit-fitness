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
                            <a href="{{ route('subscription.index') }}" class="cta">Enroll Now</a>
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

    @include('user.partials.sub-footer')
</div>

@endsection