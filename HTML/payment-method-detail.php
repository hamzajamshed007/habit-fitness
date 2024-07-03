<?php include 'includes/header.php'; ?>


<div class="popular_page_wrapper">
    <section class="course_section">
        <div class="container">
            <h5 class="course_title">Payment <span>Method</span></h5>
            <div class="course__tabs">
                <div class="payment_history_detail">
                    <div class="payment__course__img">
                        <img src="assets/images/video_4.png" alt="">
                    </div>
                    <div class="payment__desc">
                        <div class="course_video_desc">
                            <div class="course_left_desc">
                                <h5 class="course_title">Running</h5>
                                <p class="regular__text">250 est calories </p>
                            </div>
                            <h5 class="course_title">$50.99</h5>
                        </div>
                        <p class="paragraph">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                    </div>
                </div>
            </div>
            <div class="payment_detail confirm_payment_detail">
                <div class="row">
                    <div class="col-12 col-md-6 col-lg-6">
                        <div class="payment__Cards">
                            <div class="card_boxes">
                                <span class="card_img">
                                    <img src="assets/images/Payment_icon1.png" alt="">
                                </span>
                                <span class="card__detail">
                                    <p class="card_name">Visa ending in 1234</p>
                                    <p class="card_exp">Expiry 06/2024</p>
                                    <span class="card_action_btn">
                                        <a href="javascript:void(0)">Set as default</a>
                                        <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#deleteCard">Delete</a>
                                    </span>
                                </span>
                            </div>
                            <div class="card_boxes">
                                <span class="card_img">
                                    <img src="assets/images/Payment_icon2.png" alt="">
                                </span>
                                <span class="card__detail">
                                    <p class="card_name">Mastercard ending in 1234</p>
                                    <p class="card_exp">Expiry 06/2024</p>
                                    <span class="card_action_btn">
                                        <a href="javascript:void(0)">Set as default</a>
                                        <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#deleteCard">Delete</a>
                                    </span>
                                </span>
                            </div>
                            <div class="card_boxes">
                                <span class="card_img">
                                    <img src="assets/images/Payment_icon3.png" alt="">
                                </span>
                                <span class="card__detail">
                                    <p class="card_name">Stripe (Visa ending 1234)</p>
                                    <p class="card_exp">Expiry 06/2024</p>
                                    <span class="card_action_btn">
                                        <a href="javascript:void(0)">Set as default</a>
                                        <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#deleteCard">Delete</a>
                                    </span>
                                </span>
                            </div>
                            <div class="card_boxes">
                                <span class="card_img">
                                    <img src="assets/images/Payment_icon4.png" alt="">
                                </span>
                                <span class="card__detail">
                                    <p class="card_name">PayPal (Visa ending 1234)</p>
                                    <p class="card_exp">Expiry 06/2024</p>
                                    <span class="card_action_btn">
                                        <a href="javascript:void(0)">Set as default</a>
                                        <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#deleteCard">Delete</a>
                                    </span>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-6">
                        <div class="add_new_card">
                            <a href="javascript:void(0)" class="add_newCrd" data-bs-toggle="modal" data-bs-target="#addNewCard">
                                <img src="assets/images/cards.png" alt="">
                                Add New Card
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<?php include 'includes/footer.php'; ?>