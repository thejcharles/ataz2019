<!-- Header -->
<header id="js-header" class="u-header u-header--static u-header--show-hide u-header--change-appearance"
    data-header-fix-moment="500" data-header-fix-effect="slide">
    <div class="u-header__section u-header__section--dark g-bg-black g-transition-0_3 g-py-10"
        data-header-fix-moment-exclude="g-bg-black g-py-10"
        data-header-fix-moment-classes="g-bg-black-opacity-0_7 g-py-0">
        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <!-- Responsive Toggle Button -->
                <button
                    class="navbar-toggler navbar-toggler-right btn g-line-height-1 g-brd-none g-pa-0 g-pos-abs g-top-3 g-right-0"
                    type="button" aria-label="Toggle navigation" aria-expanded="false" aria-controls="navBar"
                    data-toggle="collapse" data-target="#navBar">
                    <span class="hamburger hamburger--slider">
                        <span class="hamburger-box">
                            <span class="hamburger-inner"></span>
                        </span>
                    </span>
                </button>
                <!-- End Responsive Toggle Button -->

                <!-- Navigation -->
                <div class="collapse navbar-collapse align-items-center flex-sm-row g-pt-10 g-pt-5--lg" id="navBar">
                    <ul class="navbar-nav align-items-lg-center mx-auto text-uppercase g-font-weight-600 u-nav-hover-v1"
                        data-splitted-breakpoint="992">
                        <li class="nav-item g-mx-20--lg">
                            <a href="index.php" class="nav-link px-0">Home

                            </a>
                        </li>
                        <li class="nav-item g-mx-20--lg">
                            <a href="wioa-locations.php" class="nav-link px-0">AZ WIOA Locations

                            </a>
                        </li>
                        <li class="nav-item g-mx-20--lg active">
                            <a href="hands-on-training.php" class="nav-link px-0">Events and Trainings
                                <span class="sr-only">(current)</span>
                            </a>
                        </li>
                        <!-- Logo -->
                        <li class="nav-logo-item g-mx-40--lg">
                            <a href="index.php" class="navbar-brand mr-0">
                                <img src="../../../html/assets/img/logo/atazlogo.gif" alt="Image Description"
                                    style="height:4rem; width: auto;">
                            </a>
                        </li>
                        <!-- End Logo -->
                        <li class="nav-item g-mx-20--lg">
                            <a href="printable-resources.php" class="nav-link px-0">Resources

                            </a>
                        </li>
                        <li class="nav-item g-mx-20--lg">
                            <a href="#!" class="nav-link px-0">About Us

                            </a>
                        </li>
                        <?php   if(!$user->isLoggedIn()) {?>
                        <li class="nav-item g-mx-20--lg">
                            <a href="login.php" class="nav-link px-0">Log In

                            </a>
                        </li>
                        <?php  } ?>
                        <?php  if($user->isLoggedIn()) {?>
                        <li class="nav-item dropdown g-mx-20--lg">
                            <a href="#!" class="nav-link dropdown-toggle g-px-0" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">Settings </a>
                            <!-- Submenu (Bootstrap) -->
                            <ul class="dropdown-menu rounded-0 g-text-transform-none g-brd-none g-brd-top g-brd-primary g-brd-top-2 g-mt-20 g-mt-10--lg--scrolling"
                                style="background-color:#ff6600; color: rgba(33, 67, 89, 1)">
                                <li class="dropdown-item active" style="color: rgb(33, 67, 89);">
                                    <a class="nav-link g-px-0" href="#!">Profile</a>
                                </li>
                                <li class="dropdown-item">
                                    <a class="nav-link g-px-0" href="#!"
                                        style="color: rgb(33, 67, 89);">Administration</a>
                                </li>
                                <li class="dropdown-item">
                                    <a class="nav-link g-px-0" href="#!" style="color: rgb(33, 67, 89);">Get Support</a>
                                </li>
                                <li class="dropdown-item">
                                    <a class="nav-link g-px-0" href="logout.php" style="color: rgb(33, 67, 89);">Log
                                        Out</a>
                                </li>
                            </ul>
                            <!-- End Submenu (Bootstrap) -->
                        </li>
                        <?php } ?>
                    </ul>
                </div>
                <!-- End Navigation -->
            </div>
        </nav>
    </div>
</header>
<!-- End Header -->