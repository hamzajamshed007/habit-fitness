<footer class="footer">
    <div class="container">
        <div class="ft_section">
            <a href="index.php" class="logo"><img src="{{ asset('assets/images/logo.png') }}" alt="logo"></a>
            <p class="paragraph">© 2024 Habbit Fitness. All rights reserved.</p>
            <ul class="socialIcons__sect">
                <li>
                    <a href="javascript:void(0)" class="social_icons"><i class="fa-brands fa-facebook-f"></i></a>
                </li>
                <li>
                    <a href="javascript:void(0)" class="social_icons"><i class="fa-brands fa-instagram"></i></a>
                </li>
                <li>
                    <a href="javascript:void(0)" class="social_icons"><i class="fa-brands fa-twitter"></i></a>
                </li>
            </ul>
        </div>
    </div>
</footer>

<!-- Add New Card Modal -->
<div class="modal fade Custom_modal_css" id="addNewCard" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      <div class="modal-body">
        <form action="" class="addCard">
            <h5 class="course_title">Add New <span>Card</span></h5>
            <div class="row">
                <div class="col-12 col-md-6 col-lg-6">
                    <div class="inputForm">
                        <label for="">Card Holder</label>
                        <input type="text" placeholder="">
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-6">
                    <div class="inputForm">
                        <label for="">Card Number</label>
                        <input type="number" placeholder="">
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-6">
                    <div class="inputForm">
                        <label for="">Expiry Date</label>
                        <input type="date" placeholder="">
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-6">
                    <div class="inputForm">
                        <label for="">CVV</label>
                        <input type="number" placeholder="">
                    </div>
                </div>

                <div class="col-12 btn__Section mt-3">
                    <button type="button" class="cta" data-bs-dismiss="modal" aria-label="Close" data-bs-toggle="modal" data-bs-target="#sucessfulladdCard">Add Card Now</button>
                </div>
            </div>
        </form>
      </div>
    </div>
  </div>
</div>


<!-- Enroll Modal -->
<div class="modal fade Custom_modal_css" id="enrollModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-body">
        <form action="" class="addCard">
            <h5 class="course_title">You Have Successful Enroll</h5>
            <div class="btn__Section mt-3">
                <a href="course-classes.php" class="cta">Continue</a>
                <a href="javascript:void(0)" class="cta cta_transparent" data-bs-dismiss="modal" aria-label="Close">Cancel</a>
            </div>
        </form>
      </div>
    </div>
  </div>
</div>

<!-- Payment Delete Card Modal -->
<div class="modal fade Custom_modal_css" id="deleteCard" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-body">
        <form action="" class="addCard">
            <h5 class="course_title">Payment <span>Delete</span></h5>
            <p class="paragraph mt-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae, nisi.</p>
            <div class="btn__Section">
                <a href="javascript:void(0)" class="cta">Delete</a>
                <a href="javascript:void(0)" class="cta cta_transparent">Cancel</a>
            </div>
        </form>
      </div>
    </div>
  </div>
</div>

<!-- Sucessfull Add Card Modal -->
<div class="modal fade Custom_modal_css" id="sucessfulladdCard" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-body">
        <form action="" class="addCard">
            <h5 class="course_title">Successful Add <span>Card</span></h5>
            <p class="paragraph mt-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae, nisi.</p>
            <div class="btn__Section">
                <a href="select-trainer.php" class="cta">Containue</a>
                <a href="javascript:void(0)" class="cta cta_transparent" data-bs-dismiss="modal" aria-label="Close">Cancel</a>
            </div>
        </form>
      </div>
    </div>
  </div>
</div>


<!-- Profile Update Modal -->
<div class="modal fade Custom_modal_css" id="ProfileUpdate" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      <div class="modal-body">
        <form action="" class="addCard">
            <h5 class="course_title">Profile <span>Update</span></h5>
            <div class="row">
                <div class="col-12 col-md-6 col-lg-6">
                    <div class="inputForm">
                        <label for="">Full name</label>
                        <input type="text" placeholder="">
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-6">
                    <div class="inputForm">
                        <label for="">Email </label>
                        <input type="email" placeholder="">
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-6">
                    <div class="inputForm">
                        <label for="">Phone Number</label>
                        <input type="text" placeholder="">
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-6">
                    <div class="inputForm">
                        <label for="">Address</label>
                        <input type="text" placeholder="">
                    </div>
                </div>
                <div class="col-12">
                    <div class="inputForm">
                        <label for="">Bio</label>
                        <textarea name=""></textarea>
                    </div>
                </div>

                <div class="col-12 btn__Section mt-3">
                    <button type="button" class="cta">Update</button>
                </div>
            </div>
        </form>
      </div>
    </div>
  </div>
</div>
