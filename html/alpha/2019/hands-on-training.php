<?php require '../includes/head.php';?>
<?php 
$date = date('Y-m-d');
$training = new Ataztrain;
$trainings = $training->fetch_data($date);
?>

<body>
    <?php require '../includes/nav.php';?>
    <main>


        <!-- Blog Minimal Blocks -->
        <div class="container g-pt-100 g-pb-20">
            <div class="row justify-content-between">
                <div class="col-lg-9 order-lg-2 g-mb-80">
                    <div class="g-pl-20--lg">
                        <!-- Blog Minimal Blocks -->
                        <?php 
foreach($trainings as $training) { ?>
                        <article class="g-mb-100">
                            <div class="g-mb-30">
                                <span
                                    class="d-block g-color-gray-dark-v4 g-font-weight-700 g-font-size-12 text-uppercase mb-2"><?php echo date('l F jS, Y', strtotime($training['dates'])); ?></span>
                                <h2 class="h4 g-color-black g-font-weight-600 mb-3">
                                    <a class="u-link-v5 g-color-black g-color-primary--hover"
                                        href="#!"><?php echo $training['event']; ?></a>
                                </h2>
                                <h3>Location: <?php echo $training['location']; ?> </h3>
                                <p>This is where we put a description of the training
                                    This is where we put a description of the training
                                    This is where we put a description of the training
                                    This is where we put a description of the training
                                    This is where we put a description of the training
                                </p>

                                <!-- <a class="g-font-size-13" href="#!">Read more...</a> -->
                            </div>

                            <ul class="list-inline g-brd-y g-brd-gray-light-v3 g-font-size-13 g-py-13 mb-0">
                                <li class="list-inline-item g-color-gray-dark-v4 mr-2">
                                    <span class="d-inline-block g-color-gray-dark-v4">
                                        <img class="g-g-width-20 g-height-20 rounded-circle mr-2"
                                            src="../../assets/img/ataz/staff/Angela_Goldenberg.jpg"
                                            alt="Image Description">
                                        <?php echo $training['contact']; ?>
                                    </span>
                                </li>
                                <li class="list-inline-item g-color-gray-dark-v4">
                                    <a class="d-inline-block g-color-gray-dark-v4 g-color-white--hover g-bg-gray-dark-v2--hover rounded g-transition-0_3 g-text-underline--none--hover g-px-15 g-py-5"
                                        href="#!">
                                        <i class="align-middle g-font-size-default mr-1 icon-clock u-line-icon-pro"></i>
                                        From <?php echo date('g:i A', strtotime($training['start']));  ?>
                                        -
                                        <?php echo date('g:i A', strtotime($training['end']));  ?>
                                    </a>
                                </li>
                                <li class="list-inline-item g-color-gray-dark-v4">
                                    <a class="d-inline-block g-color-gray-dark-v4 g-color-white--hover g-bg-gray-dark-v2--hover rounded g-transition-0_3 g-text-underline--none--hover g-px-15 g-py-5"
                                        href="emailto:<?php echo $training['contact_email']; ?>"></a>
                                        <i class="align-middle g-font-size-default mr-1 icon-phone u-line-icon-pro"></i>

                                        <?php echo $training['contact_phone']; ?> ||
                                        <?php echo $training['contact_email']; ?></a>
                                    </a>
                                </li>
                            </ul>
                        </article>
                        <?php } ?>
                        <!-- End Blog Minimal Blocks -->



                        <!-- Pagination -->
                        <nav id="stickyblock-end" class="text-center" aria-label="Page Navigation">
                            <ul class="list-inline">
                                <li class="list-inline-item float-left g-hidden-xs-down">
                                    <a class="u-pagination-v1__item u-pagination-v1-4 g-brd-gray-light-v3 g-brd-primary--hover g-rounded-50 g-pa-7-16"
                                        href="#!" aria-label="Previous">
                                        <span aria-hidden="true">
                                            <i class="fa fa-angle-left g-mr-5"></i> Previous
                                        </span>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a class="u-pagination-v1__item u-pagination-v1-4 u-pagination-v1-4--active g-rounded-50 g-pa-7-14"
                                        href="#!">1</a>
                                </li>
                                <li class="list-inline-item">
                                    <a class="u-pagination-v1__item u-pagination-v1-4 g-rounded-50 g-pa-7-14"
                                        href="#!">2</a>
                                </li>
                                <li class="list-inline-item float-right g-hidden-xs-down">
                                    <a class="u-pagination-v1__item u-pagination-v1-4 g-brd-gray-light-v3 g-brd-primary--hover g-rounded-50 g-pa-7-16"
                                        href="#!" aria-label="Next">
                                        <span aria-hidden="true">
                                            Next <i class="fa fa-angle-right g-ml-5"></i>
                                        </span>
                                        <span class="sr-only">Next</span>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                        <!-- End Pagination -->
                    </div>
                </div>

                <div class="col-lg-3 order-lg-1 g-brd-right--lg g-brd-gray-light-v4 g-mb-80">
                    <div class="g-pr-20--lg">
                        <!-- Links -->
                        <div class="g-mb-50">
                            <h3 class="h5 g-color-black g-font-weight-600 mb-4">Links</h3>
                            <ul class="list-unstyled g-font-size-13 mb-0">
                                <li>
                                    <a class="d-block u-link-v5 g-color-gray-dark-v4 rounded g-px-20 g-py-8"
                                        href="#!"><i class="mr-2 fa fa-angle-right"></i>Our People</a>
                                </li>
                                <li>
                                    <a class="d-block u-link-v5 g-color-gray-dark-v4 rounded g-px-20 g-py-8"
                                        href="#!"><i class="mr-2 fa fa-angle-right"></i>Schedule a training</a>
                                </li>
                                <li>
                                    <a class="d-block u-link-v5 g-color-gray-dark-v4 rounded g-px-20 g-py-8"
                                        href="#!"><i class="mr-2 fa fa-angle-right"></i> A.T. &amp; IT</a>
                                </li>
                                <li>
                                    <a class="d-block u-link-v5 g-color-gray-dark-v4 rounded g-px-20 g-py-8"
                                        href="#!"><i class="mr-2 fa fa-angle-right"></i>Resources</a>
                                </li>
                                <li>
                                    <a class="d-block active u-link-v5 g-color-black g-bg-gray-light-v5 g-font-weight-600 g-rounded-50 g-px-20 g-py-8"
                                        href="#!"><i class="mr-2 fa fa-angle-right"></i>WIOA Locations</a>
                                </li>
                            </ul>
                        </div>
                        <!-- End Links -->

                        <hr class="g-brd-gray-light-v4 g-mt-50 mb-0">

                        <div id="stickyblock-start" class="js-sticky-block g-sticky-block--lg g-pt-50"
                            data-start-point="#stickyblock-start" data-end-point="#stickyblock-end">
                            <!-- Publications -->
                            <div class="g-mb-50">
                                <h3 class="h5 g-color-black g-font-weight-600 mb-4">Distance Learning</h3>
                                <ul class="list-unstyled g-font-size-13 mb-0">
                                    <li>
                                        <article class="media g-mb-35">
                                            <img class="d-flex g-width-40 g-height-40 rounded-circle mr-3"
                                                src="../../assets/img/ataz/lgshow.jpg" alt="Image Description">
                                            <div class="media-body">
                                                <h4 class="h6 g-color-black g-font-weight-600">Vision</h4>
                                                <p class="g-color-gray-dark-v4">We will pu a brief description here.</p>
                                                <a class="btn u-btn-outline-primary g-font-size-11 g-rounded-25"
                                                    href="#!">Get started</a>
                                            </div>
                                        </article>
                                    </li>
                                    <li>
                                        <article class="media g-mb-35">
                                            <img class="d-flex g-width-40 g-height-40 rounded-circle mr-3"
                                                src="../../assets/img/ataz/lgshow.jpg" alt="Image Description">
                                            <div class="media-body">
                                                <h4 class="h6 g-color-black g-font-weight-600">Hearing</h4>
                                                <p class="g-color-gray-dark-v4">We will pu a brief description here.</p>
                                                <a class="btn u-btn-outline-primary g-font-size-11 g-rounded-25"
                                                    href="#!">Get started</a>
                                            </div>
                                        </article>
                                    </li>
                                    <li>
                                        <article class="media g-mb-35">
                                            <img class="d-flex g-width-40 g-height-40 rounded-circle mr-3"
                                                src="../../assets/img/ataz/lgshow.jpg" alt="Image Description">
                                            <div class="media-body">
                                                <h4 class="h6 g-color-black g-font-weight-600">Learning</h4>
                                                <p class="g-color-gray-dark-v4">We will pu a brief description here.</p>
                                                <a class="btn u-btn-outline-primary g-font-size-11 g-rounded-25"
                                                    href="#!">Get started</a>
                                            </div>
                                        </article>
                                    </li>
                                    <li>
                                        <article class="media g-mb-35">
                                            <img class="d-flex g-width-40 g-height-40 rounded-circle mr-3"
                                                src="../../assets/img/ataz/lgshow.jpg" alt="Image Description">
                                            <div class="media-body">
                                                <h4 class="h6 g-color-black g-font-weight-600">Physical</h4>
                                                <p class="g-color-gray-dark-v4">We will pu a brief description here.</p>
                                                <a class="btn u-btn-outline-primary g-font-size-11 g-rounded-25"
                                                    href="#!">Get started</a>
                                            </div>
                                        </article>
                                    </li>
                                </ul>
                            </div>
                            <!-- End Publications -->

                            <hr class="g-brd-gray-light-v4 g-my-50">



                            <hr class="g-brd-gray-light-v4 g-my-50">

                            <!-- Newsletter -->
                            <div class="g-mb-50">
                                <h3 class="h5 g-color-black g-font-weight-600 mb-4">Events Newsletter</h3>
                                <div class="input-group">
                                    <span class="input-group-btn">
                                        <button class="btn u-btn-primary g-rounded-left-50 g-py-13 g-px-20">
                                            <i class="icon-communication-062 u-line-icon-pro g-pos-rel g-top-1"></i>
                                        </button>
                                    </span>
                                    <input
                                        class="form-control g-brd-primary g-placeholder-gray-dark-v5 border-left-0 g-rounded-right-50 g-px-15"
                                        type="email" placeholder="Enter your email ...">
                                </div>
                            </div>
                            <!-- End Newsletter -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Blog Minimal Blocks -->




    </main>



    <?php require '../includes/footer.php';?>

</body>