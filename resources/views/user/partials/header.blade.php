<header class="header">
    <div class="container">
        <div class="header__section d_flexSpacebetween">
            <div  id="main-nav" class="header__menu stellarnav left desktop">
                <ul class="header__list">
                    <li>
                        <a href="index.php"> Home </a>
                    </li>
                    <li>
                        <a href="featured-workout.php"> Workouts </a>
                    </li>
                    <li>
                        <a href="group-classes.php"> Group Classes </a>
                    </li>
                    <li>
                        <a href="personal-training.php"> Small Group Training </a>
                    </li>
                    <li>
                        <a href="popular-courses.php"> Sport Specific Training </a>
                    </li>
                </ul>
            </div>
            <div class="header__logo">
                <a href="index.php">
                    <img src="assets/images/logo.png" alt="logo">
                </a>
            </div>
            <div class="header__userSection d_flexSpacebetween">
                <a href="contact-us.php" class="contactUs">Contact Us</a>

                @if(\Auth::check())
                    <div class="userSection">
                        <a href="javascript:void(0)">
                            <span class="userdetail">
                                <span><i class="fa fa-user"></i></span>
                                <p>John Smith</p>
                            </span>
                            <img src="assets/images/arrow-down.png" class="arrow-down-icon" alt="arrow-down">
                        </a>
                        <div class="Userprofile_detail">
                            <ul class="header__list">
                                <li>
                                    <a href="course-classes.php">My Course</a>
                                </li>
                                <li>
                                    <a href="payment.php">Payment History</a>
                                </li>
                                <li>
                                    <a href="profile.php">Profile</a>
                                </li>
                                <li>
                                    <a href="settings.php">Settings</a>
                                </li>
                                <li>
                                    <a href="login.php">Logout</a>
                                </li>
                            </ul>
                        </div>
                    </div> 
                @else
                    <a href="{{ route('register') }}" class="cta">Register</a>
                @endif
            </div>
        </div>
    </div>
</header>