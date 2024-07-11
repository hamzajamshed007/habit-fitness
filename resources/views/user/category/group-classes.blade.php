@extends('layouts.app')

@section('content')

<div class="courses_page_wrapper">
    <section class="course_section">
        <div class="container">
            <div class="d_flexSpacebetween">
                <h3 class="traveler__fontBold">{{ $category->title }}</h3>
            </div>
            <div class="row mt-5">
                @forelse($courses as $course)
                    <div class="col-12 col-sm-6 col-md-4 col-lg-4">
                        <a href="{{ route('course.detail', ['id' => $course->id]) }}" class="cousre__video">
                            <div class="video__Box">
                                <img src="{{ asset('assets/images/course/'.$course->image) }}" alt="course_image">
                            </div>
                            <div class="course_video_desc">
                                <div class="course_left_desc">
                                    <h5 class="course_title">{{ $course->title }}</h5>
                                    <p class="regular__text">250 est calories </p>
                                </div>
                                <span class="video_time">58:24</span>
                            </div>
                        </a>
                    </div>
                @empty
                    <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                        <h2 class="text-white">No Record Found</h2>
                    </div>
                @endforelse
            </div>
        </div>
    </section>

    @include('user.partials.sub-footer')
</div>

@endsection