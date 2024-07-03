<?php include 'includes/header-link.php'; ?>
<section class="LoginPage">
    <form class="loginForm">
        <h1 class="loginHeading mb-5">Signup</h1>
        <div class="login_content">
            <div class="inputForm">
                <label for="">Full Name</label>
                <input type="text" placeholder="">
            </div>
            <div class="inputForm">
                <label for="">Email</label>
                <input type="email" placeholder="">
            </div>
            <div class="inputForm">
                <label for="">Password</label>
                <input type="password" placeholder="">
            </div>
            <div class="btn__section">
                <a href="index.php" class="cta">Signup</a>
            </div>
            <div class="login_links mt-5">
                <p class="paragraph ">Don't have an account?<a href="login.php">login</a></p>
                <div class="social_links mt-5">
                    <a href="#" class="apps"><i class="fa-brands fa-facebook-f"></i></a>
                    <a href="#" class="apps"><i class="fa-brands fa-instagram"></i></a>
                    <a href="#" class="apps"><i class="fa-brands fa-twitter"></i></a>
                </div>
            </div>
        </div>
    </form>
</section>
<?php include 'includes/footer-link.php'; ?>