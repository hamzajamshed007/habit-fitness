@extends('layouts.app')

@section('content')

<div class="subscription_page_wrapper">
    <section class="subscription_section">
        <div class="container">
            <h3 class="traveler__fontBold">Get Your Packages</h3>
            <div class="row mt-5">
                <div class="col-12 col-sm-12 col-md-4 col-lg-4">
                    <div class="subscription_box">
                        <p class="pkg_title">Basic</p>
                        <p class="pkg_price">$ 25 Weekly</p>
                        <div class="btn__Section">
                            <a href="confirm-payment-method.php" class="cta">Subscribe Now</a>
                        </div>
                        <div class="pkg_listing">
                            <ul class="pkg_li">
                                <li>
                                    <img src="assets/images/check.png" alt="check">
                                    <span>02 Sessions</span>
                                </li>
                                <li>
                                    <img src="assets/images/check.png" alt="check">
                                    <span>Lorem Ipsum is simply dummy text.</span>
                                </li>
                                <li>
                                    <img src="assets/images/check.png" alt="check">
                                    <span>Lorem Ipsum is simply.</span>
                                </li>
                                <li>
                                    <img src="assets/images/check.png" alt="check">
                                    <span>Lorem Ipsum</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-4 col-lg-4">
                    <div class="subscription_box">
                        <p class="pkg_title">Basic</p>
                        <p class="pkg_price">$ 35 Weekly</p>
                        <div class="btn__Section">
                            <a href="confirm-payment-method.php" class="cta">Subscribe Now</a>
                        </div>
                        <div class="pkg_listing">
                            <ul class="pkg_li">
                                <li>
                                    <img src="assets/images/check.png" alt="check">
                                    <span>02 Sessions</span>
                                </li>
                                <li>
                                    <img src="assets/images/check.png" alt="check">
                                    <span>Lorem Ipsum is simply dummy text.</span>
                                </li>
                                <li>
                                    <img src="assets/images/check.png" alt="check">
                                    <span>Lorem Ipsum is simply.</span>
                                </li>
                                <li>
                                    <img src="assets/images/check.png" alt="check">
                                    <span>Lorem Ipsum</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-4 col-lg-4">
                    <div class="subscription_box">
                        <p class="pkg_title">Premium</p>
                        <p class="pkg_price">$ 45 Weekly</p>
                        <div class="btn__Section">
                            <a href="confirm-payment-method.php" class="cta">Subscribe Now</a>
                        </div>
                        <div class="pkg_listing">
                            <ul class="pkg_li">
                                <li>
                                    <img src="assets/images/check.png" alt="check">
                                    <span>02 Sessions</span>
                                </li>
                                <li>
                                    <img src="assets/images/check.png" alt="check">
                                    <span>Lorem Ipsum is simply dummy text.</span>
                                </li>
                                <li>
                                    <img src="assets/images/check.png" alt="check">
                                    <span>Lorem Ipsum is simply.</span>
                                </li>
                                <li>
                                    <img src="assets/images/check.png" alt="check">
                                    <span>Lorem Ipsum</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="course_section">
        <div class="container">
            <h3 class="traveler__fontBold">Related Training</h3>
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