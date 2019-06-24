<?php
 require '../includes/head.php';
 require '../includes/nav.php';
 
 // initialize data
$onestop = new Onestop;
//

if(isset($_GET['id'])) {
    $id = $_GET['id'];
    $data = $onestop->fetch_data($id);
    $accommodation = new Accommodations;
    $accommodations= $accommodation->fetch_ada($id);
} else {
    Redirect::to('index.php');
}
    ?>


 


<body>
    <main>
        <?php 
            if(isset($_GET['id'])) 
            {
              $id = $_GET['id'];
              $onestop = new Onestop;
              $accommodation = new Accommodations;
              $location = $onestop->fetch_data($id);
              $accommodations= $accommodation->fetch_ada($id);
            }
	        ?>

        <!-- Breadcrumb -->
        <section class="g-my-30">
            <div class="container">
                <ul class="u-list-inline">
                    <li class="list-inline-item g-mr-7">
                        <a class="u-link-v5 g-color-main g-color-primary--hover" href="index.php">Home</a>
                        <i class="fa fa-angle-right g-ml-7"></i>
                    </li>
                    <li class="list-inline-item g-mr-7">
                        <a class="u-link-v5 g-color-main g-color-primary--hover" href="wioa-locations.php">All
                            Locations</a>
                        <i class="fa fa-angle-right g-ml-7"></i>
                    </li>
                    <li class="list-inline-item g-color-primary">
                        <span>Location Details</span>
                    </li>
                </ul>
            </div>
        </section>
        <!-- End Breadcrumb -->

        <section class="g-mb-100">
            <div class="container">
                <div class="row">
                    <!-- Profile Sidebar -->
                    <div class="col-lg-3 g-mb-50 g-mb-0--lg">
                        <!-- User Image -->
                        <div class="u-block-hover g-pos-rel">
                            <figure>
                                <img class="img-fluid w-100 u-block-hover__main--zoom-v1"
                                    src="../../assets/img/ataz/onestops/<?php echo $location['photo']?>"
                                    alt="Image Description">
                            </figure>

                            <!-- Figure Caption -->
                            <figcaption class="u-block-hover__additional--fade g-bg-black-opacity-0_5 g-pa-30">
                                <div
                                    class="u-block-hover__additional--fade u-block-hover__additional--fade-up g-flex-middle">
                                    <!-- Figure Social Icons -->
                                    <ul class="list-inline text-center g-flex-middle-item--bottom g-mb-20">
                                        <li class="list-inline-item align-middle g-mx-7">
                                            <a class="u-icon-v1 u-icon-size--md g-color-white" href="#!">
                                                <i class="icon-note u-line-icon-pro"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item align-middle g-mx-7">
                                            <a class="u-icon-v1 u-icon-size--md g-color-white" href="#!">
                                                <i class="icon-notebook u-line-icon-pro"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item align-middle g-mx-7">
                                            <a class="u-icon-v1 u-icon-size--md g-color-white" href="#!">
                                                <i class="icon-settings u-line-icon-pro"></i>
                                            </a>
                                        </li>
                                    </ul>
                                    <!-- End Figure Social Icons -->
                                </div>
                            </figcaption>
                            <!-- End Figure Caption -->

                            <!-- User Info -->
                            <span class="g-pos-abs g-top-20 g-left-0">
                                <a class="btn btn-sm u-btn-primary rounded-0 g-color-black"
                                    href="#!"><b><?php echo $location['name']?></b></a>
                                <small class="d-block g-bg-black g-color-white g-pa-5"><?php echo $location['county']?>
                                    County</small>
                            </span>
                            <!-- End User Info -->
                        </div>
                        <!-- User Image -->

                        <!-- Sidebar Navigation -->
                        <div class="list-group list-group-border-0 g-mb-40">
                            <!-- Overall -->
                            <a href="page-profile-main-1.html"
                                class="list-group-item list-group-item-action justify-content-between">
                                <span>
                                    <i class="icon-home g-pos-rel g-top-1 g-mr-8"></i><?php echo $location['address']?>
                                    <?php echo $location['zip']?></span>
                            </a>
                            <!-- End Overall -->

                            <!-- Profile -->
                            <a href="page-profile-profile-1.html"
                                class="list-group-item list-group-item-action justify-content-between active">
                                <span>
                                    <i
                                        class="icon-phone g-pos-rel g-top-1 g-mr-8"></i><?php echo $location['phone']?></span>
                            </a>
                            <!-- End Profile -->


                            <!-- My Projects -->
                            <a href="page-profile-projects-1.html"
                                class="list-group-item list-group-item-action justify-content-between">
                                <span>
                                    <i class="icon-phone g-pos-rel g-top-1 g-mr-8"></i> TTY:
                                    <?php echo $location['tty']?></span>
                            </a>
                            <!-- End My Projects -->

                            <!-- Comments -->
                            <a href="page-profile-comments-1.html"
                                class="list-group-item list-group-item-action justify-content-between">
                                <span>
                                    <i class="icon-paper g-pos-rel g-top-1 g-mr-8"></i>Fax:</span>
                                <span><?php echo $location['fax']?></span>
                            </a>

                        </div>
                        <!-- End Sidebar Navigation -->

                    </div>
                    <!-- End Profile Sidebar -->

                    <!-- Profle Content -->
                    <div class="col-lg-9">
                        <!-- Nav tabs -->
                        <ul class="nav nav-justified u-nav-v1-1 u-nav-primary g-brd-bottom--md g-brd-bottom-2 g-brd-primary g-mb-20"
                            role="tablist" data-target="nav-1-1-default-hor-left-underline"
                            data-tabs-mobile-type="slide-up-down"
                            data-btn-classes="btn btn-md btn-block rounded-0 u-btn-outline-primary g-mb-20">
                            <li class="nav-item">
                                <a class="nav-link g-py-10 active" data-toggle="tab"
                                    href="#nav-1-1-default-hor-left-underline--1" role="tab">Location Details</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link g-py-10" data-toggle="tab"
                                    href="#nav-1-1-default-hor-left-underline--2" role="tab">ADA Accomodations</a>
                            </li>

                        </ul>
                        <!-- End Nav tabs -->

                        <!-- Tab panes -->
                        <div id="nav-1-1-default-hor-left-underline" class="tab-content">
                            <!-- Edit Profile -->
                            <div class="tab-pane fade show active" id="nav-1-1-default-hor-left-underline--1"
                                role="tabpanel" data-parent="#nav-1-1-default-hor-left-underline">
                                <h2 class="h4 g-font-weight-300"><?php echo $location['name']?></h2>

                                <ul class="list-unstyled g-mb-30">
                                    <!-- Name -->
                                    <li
                                        class="d-flex align-items-center justify-content-between g-brd-bottom g-brd-gray-light-v4 g-py-15">
                                        <div class="g-pr-10">
                                            <strong
                                                class="d-block d-md-inline-block g-color-gray-dark-v2 g-width-200 g-pr-10">
                                                <?php echo $location['title']?>
                                            </strong>
                                            <span class="align-top">
                                                <?php echo $location['contact']?>
                                            </span>
                                        </div>
                                        <span>
                                            <i
                                                class="icon-pencil g-color-gray-dark-v5 g-color-primary--hover g-cursor-pointer g-pos-rel g-top-1"></i>
                                        </span>
                                    </li>
                                    <!-- End Name -->

                                    <!-- Primary Email Address -->
                                    <li
                                        class="d-flex align-items-center justify-content-between g-brd-bottom g-brd-gray-light-v4 g-py-15">
                                        <div class="g-pr-10">
                                            <strong
                                                class="d-block d-md-inline-block g-color-gray-dark-v2 g-width-200 g-pr-10"><?php echo $location['title']?>
                                                email address</strong>
                                            <span class="align-top"><?php echo $location['contact_email']?></span>
                                        </div>
                                        <span>
                                            <i
                                                class="icon-pencil g-color-gray-dark-v5 g-color-primary--hover g-cursor-pointer g-pos-rel g-top-1"></i>
                                        </span>
                                    </li>
                                    <!-- End Primary Email Address -->

                                    <!-- Linked Account -->
                                    <li
                                        class="d-flex align-items-center justify-content-between g-brd-bottom g-brd-gray-light-v4 g-py-15">
                                        <div class="g-pr-10">
                                            <strong
                                                class="d-block d-md-inline-block g-color-gray-dark-v2 g-width-200 g-pr-10"><?php echo $location['title']?>
                                                Phone</strong>
                                            <span class="align-top"><?php echo $location['contact_phone']?></span>
                                        </div>
                                        <span>
                                            <i
                                                class="icon-pencil g-color-gray-dark-v5 g-color-primary--hover g-cursor-pointer g-pos-rel g-top-1"></i>
                                        </span>
                                    </li>
                                    <!-- End Linked Account -->
                                    <!-- Name -->
                                    <li
                                        class="d-flex align-items-center justify-content-between g-brd-bottom g-brd-gray-light-v4 g-py-15">
                                        <div class="g-pr-10">
                                            <strong
                                                class="d-block d-md-inline-block g-color-gray-dark-v2 g-width-200 g-pr-10">Accessibility
                                                Contact</strong>
                                            <span class="align-top"><?php echo $location['acc_contact']?></span>
                                        </div>
                                        <span>
                                            <i
                                                class="icon-pencil g-color-gray-dark-v5 g-color-primary--hover g-cursor-pointer g-pos-rel g-top-1"></i>
                                        </span>
                                    </li>
                                    <!-- End Name -->

                                    <!-- Primary Email Address -->
                                    <li
                                        class="d-flex align-items-center justify-content-between g-brd-bottom g-brd-gray-light-v4 g-py-15">
                                        <div class="g-pr-10">
                                            <strong
                                                class="d-block d-md-inline-block g-color-gray-dark-v2 g-width-200 g-pr-10">Accessibility
                                                Contact email address</strong>
                                            <span class="align-top"><?php echo $location['acc_email']?></span>
                                        </div>
                                        <span>
                                            <i
                                                class="icon-pencil g-color-gray-dark-v5 g-color-primary--hover g-cursor-pointer g-pos-rel g-top-1"></i>
                                        </span>
                                    </li>
                                    <!-- End Primary Email Address -->

                                    <!-- Linked Account -->
                                    <li
                                        class="d-flex align-items-center justify-content-between g-brd-bottom g-brd-gray-light-v4 g-py-15">
                                        <div class="g-pr-10">
                                            <strong
                                                class="d-block d-md-inline-block g-color-gray-dark-v2 g-width-200 g-pr-10">Accessibility
                                                Contact Phone</strong>
                                            <span class="align-top"><?php echo $location['acc_phone']?></span>
                                        </div>
                                        <span>
                                            <i
                                                class="icon-pencil g-color-gray-dark-v5 g-color-primary--hover g-cursor-pointer g-pos-rel g-top-1"></i>
                                        </span>
                                    </li>
                                    <!-- End Linked Account -->

                                    <!-- Name -->
                                    <li
                                        class="d-flex align-items-center justify-content-between g-brd-bottom g-brd-gray-light-v4 g-py-15">
                                        <div class="g-pr-10">
                                            <strong
                                                class="d-block d-md-inline-block g-color-gray-dark-v2 g-width-200 g-pr-10">VR
                                                Counselor</strong>
                                            <span class="align-top"><?php echo $location['counselor']?></span>
                                        </div>
                                        <span>
                                            <i
                                                class="icon-pencil g-color-gray-dark-v5 g-color-primary--hover g-cursor-pointer g-pos-rel g-top-1"></i>
                                        </span>
                                    </li>
                                    <!-- End Name -->

                                    <!-- Primary Email Address -->
                                    <li
                                        class="d-flex align-items-center justify-content-between g-brd-bottom g-brd-gray-light-v4 g-py-15">
                                        <div class="g-pr-10">
                                            <strong
                                                class="d-block d-md-inline-block g-color-gray-dark-v2 g-width-200 g-pr-10">VR
                                                Counselor email address</strong>
                                            <span class="align-top"><?php echo $location['counselor_email']?></span>
                                        </div>
                                        <span>
                                            <i
                                                class="icon-pencil g-color-gray-dark-v5 g-color-primary--hover g-cursor-pointer g-pos-rel g-top-1"></i>
                                        </span>
                                    </li>
                                    <!-- End Primary Email Address -->

                                    <!-- Linked Account -->
                                    <li
                                        class="d-flex align-items-center justify-content-between g-brd-bottom g-brd-gray-light-v4 g-py-15">
                                        <div class="g-pr-10">
                                            <strong
                                                class="d-block d-md-inline-block g-color-gray-dark-v2 g-width-200 g-pr-10">VR
                                                Counselor Phone</strong>
                                            <span class="align-top"><?php echo $location['counselor_phone']?></span>
                                        </div>
                                        <span>
                                            <i
                                                class="icon-pencil g-color-gray-dark-v5 g-color-primary--hover g-cursor-pointer g-pos-rel g-top-1"></i>
                                        </span>
                                    </li>
                                    <!-- End Linked Account -->

                                </ul>

                                <div class="text-sm-right">
                                    <a class="btn u-btn-darkgray rounded-0 g-py-12 g-px-25 g-mr-10" href="#!">Cancel</a>
                                    <a class="btn u-btn-primary rounded-0 g-py-12 g-px-25" href="#!">Save Changes</a>
                                </div>
                            </div>
                            <!-- End Edit Profile -->

                            <!-- Security Settings -->
                            <div class="tab-pane fade" id="nav-1-1-default-hor-left-underline--2" role="tabpanel"
                                data-parent="#nav-1-1-default-hor-left-underline">
                                <h2 class="h4 g-font-weight-300">View the Assistive Technology available at this
                                    location</h2>
                                <p class="g-mb-25">Select an area below.</p>


                                <div class="shortcode-html">
                                    <div id="accordion-04" class="u-accordion" role="tablist"
                                        aria-multiselectable="true">
                                        <!-- Card -->
                                        <div class="card rounded-0 g-mb-5">
                                            <div id="accordion-04-heading-01" class="u-accordion__header" role="tab"
                                                style="background-color:yellow;">
                                                <h5 class="mb-0 g-font-weight-300">
                                                    <a class="d-flex u-link-v5 g-color-main g-color-primary--hover g-font-size-16"
                                                        href="#accordion-04-body-01" data-toggle="collapse"
                                                        data-parent="#accordion-04" aria-expanded="false"
                                                        aria-controls="accordion-04-body-01">
                                                        <i class="et-icon-map g-font-size-default g-mr-10"></i>
                                                        VISION
                                                    </a>
                                                </h5>
                                            </div>
                                            <div id="accordion-04-body-01" class="collapse" role="tabpanel"
                                                aria-labelledby="accordion-04-heading-01" data-parent="#accordion-04">
                                                <div
                                                    class="u-accordion__body g-brd-top g-brd-gray-light-v4 g-color-gray-dark-v5">
                                                    This is where we can add and information that we think may assist
                                                    the user.
                                                </div>
                                                <div class="table-responsive g-mb-40">
                                                    <table class="table u-table--v3--bordered g-color-black">
                                                        <thead>
                                                            <tr class="success">
                                                                <th>AT Category</th>
                                                                <th>Product Make/Model/Ver.</th>
                                                                <th>Location</th>
                                                            </tr>
                                                        </thead>

                                                        <tbody>
                                                            <?php
										foreach($accommodations as $accommodation){
										if($accommodation['bvi'] == "BVI") {?>
                                                            <tr>
                                                                <td><?php echo html_entity_decode($accommodation['product_name']); ?>
                                                                </td>
                                                                <td><?php echo html_entity_decode($accommodation['make']); ?>
                                                                </td>
                                                                <td><?php echo html_entity_decode($accommodation['location']); ?>
                                                                </td>
                                                            </tr>
                                                            <?php } }?>


                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- End Card -->

                                        <!-- Card -->
                                        <div class="card rounded-0 g-mb-5">
                                            <div id="accordion-04-heading-02" class="u-accordion__header" role="tab"
                                                style="background-color:green;">
                                                <h5 class="mb-0 g-font-weight-300">
                                                    <a class="d-flex collapsed u-link-v5 g-color-white g-color-white--hover g-font-size-16"
                                                        href="#accordion-04-body-02" data-toggle="collapse"
                                                        data-parent="#accordion-04" aria-expanded="false"
                                                        aria-controls="accordion-04-body-02">
                                                        <i class="et-icon-camera g-font-size-default g-mr-10"></i>
                                                        HEARING
                                                    </a>
                                                </h5>
                                            </div>
                                            <div id="accordion-04-body-02" class="collapse" role="tabpanel"
                                                aria-labelledby="accordion-04-heading-02" data-parent="#accordion-04">
                                                <div
                                                    class="u-accordion__body g-brd-top g-brd-gray-light-v4 g-color-gray-dark-v5">
                                                    <div class="table-responsive g-mb-40">
                                                        <table class="table u-table--v3--bordered g-color-black">
                                                            <thead>
                                                                <tr class="success">
                                                                    <th>AT Category</th>
                                                                    <th>Product Make/Model/Ver.</th>
                                                                    <th>Location</th>
                                                                </tr>
                                                            </thead>

                                                            <tbody>
                                                                <?php
                                      foreach($accommodations as $accommodation){
                                      if($accommodation['dhh'] == "DHH") {?>
                                                                <tr>
                                                                    <td><?php echo html_entity_decode($accommodation['product_name']); ?>
                                                                    </td>
                                                                    <td><?php echo html_entity_decode($accommodation['make']); ?>
                                                                    </td>
                                                                    <td><?php echo html_entity_decode($accommodation['location']); ?>
                                                                    </td>
                                                                </tr>
                                                                <?php } }?>


                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                        <!-- End Card -->

                                        <!-- Card -->
                                        <div class="card rounded-0 g-mb-5">
                                            <div id="accordion-04-heading-03" class="u-accordion__header" role="tab"
                                                style="background-color:pink;">
                                                <h5 class="mb-0 g-font-weight-300">
                                                    <a class="d-flex collapsed u-link-v5 g-color-main g-color-primary--hover g-font-size-16"
                                                        href="#accordion-04-body-03" data-toggle="collapse"
                                                        data-parent="#accordion-04" aria-expanded="false"
                                                        aria-controls="accordion-04-body-03">
                                                        <i class="et-icon-bargraph g-font-size-default g-mr-10"></i>
                                                        PHYSICAL
                                                    </a>
                                                </h5>
                                            </div>
                                            <div id="accordion-04-body-03" class="collapse" role="tabpanel"
                                                aria-labelledby="accordion-04-heading-03" data-parent="#accordion-04">
                                                <div
                                                    class="u-accordion__body g-brd-top g-brd-gray-light-v4 g-color-gray-dark-v5">
                                                    <div class="table-responsive g-mb-40">
                                                        <table class="table u-table--v3--bordered g-color-black">
                                                            <thead>
                                                                <tr class="success">
                                                                    <th>AT Category</th>
                                                                    <th>Product Make/Model/Ver.</th>
                                                                    <th>Location</th>
                                                                </tr>
                                                            </thead>

                                                            <tbody>
                                                                <?php
                                      foreach($accommodations as $accommodation){
                                      if($accommodation['ergo'] == "ERGO") {?>
                                                                <tr>
                                                                    <td><?php echo html_entity_decode($accommodation['product_name']); ?>
                                                                    </td>
                                                                    <td><?php echo html_entity_decode($accommodation['make']); ?>
                                                                    </td>
                                                                    <td><?php echo html_entity_decode($accommodation['location']); ?>
                                                                    </td>
                                                                </tr>
                                                                <?php } }?>


                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Card -->

                                            <!-- Card -->
                                            <div class="card rounded-0 g-mb-5">
                                                <div id="accordion-04-heading-04" class="u-accordion__header" role="tab"
                                                    style="background-color:skyblue;">
                                                    <h5 class="mb-0 g-font-weight-300">
                                                        <a class="d-flex collapsed u-link-v5 g-color-main g-color-primary--hover g-font-size-16"
                                                            href="#accordion-04-body-04" data-toggle="collapse"
                                                            data-parent="#accordion-04" aria-expanded="false"
                                                            aria-controls="accordion-04-body-03">
                                                            <i class="et-icon-bargraph g-font-size-default g-mr-10"></i>
                                                            LEARNING
                                                        </a>
                                                    </h5>
                                                </div>
                                                <div id="accordion-04-body-04" class="collapse" role="tabpanel"
                                                    aria-labelledby="accordion-04-heading-04"
                                                    data-parent="#accordion-04">
                                                    <div
                                                        class="u-accordion__body g-brd-top g-brd-gray-light-v4 g-color-gray-dark-v5">
                                                        <div class="table-responsive g-mb-40">
                                                            <table class="table u-table--v3--bordered g-color-black">
                                                                <thead>
                                                                    <tr class="success">
                                                                        <th>AT Category</th>
                                                                        <th>Product Make/Model/Ver.</th>
                                                                        <th>Location</th>
                                                                    </tr>
                                                                </thead>

                                                                <tbody>
                                                                    <?php
                                      foreach($accommodations as $accommodation){
                                      if($accommodation['dhh'] == "DHH") {?>
                                                                    <tr>
                                                                        <td><?php echo html_entity_decode($accommodation['product_name']); ?>
                                                                        </td>
                                                                        <td><?php echo html_entity_decode($accommodation['make']); ?>
                                                                        </td>
                                                                        <td><?php echo html_entity_decode($accommodation['location']); ?>
                                                                        </td>
                                                                    </tr>
                                                                    <?php } }?>


                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- End Card -->
                                            </div>
                                        </div>

                                    </div>
                                    <!-- End Security Settings -->

                                    <!-- Payment Options -->
                                    <div class="tab-pane fade" id="nav-1-1-default-hor-left-underline--3"
                                        role="tabpanel" data-parent="#nav-1-1-default-hor-left-underline">
                                        <h2 class="h4 g-font-weight-300">Manage your Payment Settings</h2>
                                        <p class="g-mb-25">Below are the payment options for your account.</p>

                                        <form>
                                            <!-- Payment Options -->
                                            <div class="row">
                                                <!-- Visa Card -->
                                                <div class="col-md-3">
                                                    <label class="u-check w-100 g-mb-25">
                                                        <strong
                                                            class="d-block g-color-gray-dark-v2 g-font-weight-700 g-mb-10">Visa
                                                            card</strong>
                                                        <input class="g-hidden-xs-up g-pos-abs g-top-10 g-right-10"
                                                            type="radio" name="profilePayments" checked="">

                                                        <div
                                                            class="g-brd-primary--checked g-bg-primary-opacity-0_2--checked g-brd-around g-brd-gray-light-v2 g-rounded-5">
                                                            <div class="media g-pa-12">
                                                                <div class="media-body align-self-center g-color-blue">
                                                                    <i
                                                                        class="fa fa-cc-visa g-font-size-30 align-self-center mx-auto"></i>
                                                                </div>

                                                                <div
                                                                    class="d-flex align-self-center g-width-20 g-ml-15">
                                                                    <div
                                                                        class="u-check-icon-radio-v5 g-pos-rel g-width-20 g-height-20">
                                                                        <i></i>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </label>
                                                </div>
                                                <!-- End Visa Card -->

                                                <!-- Master Card -->
                                                <div class="col-md-3">
                                                    <label class="u-check w-100 g-mb-25">
                                                        <strong
                                                            class="d-block g-color-gray-dark-v2 g-font-weight-700 g-mb-10">Master
                                                            card</strong>
                                                        <input class="g-hidden-xs-up g-pos-abs g-top-10 g-right-10"
                                                            type="radio" name="profilePayments">

                                                        <div
                                                            class="g-brd-primary--checked g-bg-primary-opacity-0_2--checked g-brd-around g-brd-gray-light-v2 g-rounded-5">
                                                            <div class="media g-pa-12">
                                                                <div
                                                                    class="media-body align-self-center g-color-lightred">
                                                                    <i
                                                                        class="fa fa-cc-mastercard g-font-size-30 align-self-center mx-auto"></i>
                                                                </div>

                                                                <div
                                                                    class="d-flex align-self-center g-width-20 g-ml-15">
                                                                    <div
                                                                        class="u-check-icon-radio-v5 g-pos-rel g-width-20 g-height-20">
                                                                        <i></i>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </label>
                                                </div>
                                                <!-- End Master Card -->

                                                <!-- Amazon Payments -->
                                                <div class="col-md-3">
                                                    <label class="u-check w-100 g-mb-25">
                                                        <strong
                                                            class="d-block g-color-gray-dark-v2 g-font-weight-700 g-mb-10">Amazon
                                                            payments</strong>
                                                        <input class="g-hidden-xs-up g-pos-abs g-top-10 g-right-10"
                                                            type="radio" name="profilePayments">

                                                        <div
                                                            class="g-brd-primary--checked g-bg-primary-opacity-0_2--checked g-brd-around g-brd-gray-light-v2 g-rounded-5">
                                                            <div class="media g-pa-12">
                                                                <div
                                                                    class="media-body align-self-center g-color-orange">
                                                                    <i
                                                                        class="fa fa-amazon g-font-size-30 align-self-center mx-auto"></i>
                                                                </div>

                                                                <div
                                                                    class="d-flex align-self-center g-width-20 g-ml-15">
                                                                    <div
                                                                        class="u-check-icon-radio-v5 g-pos-rel g-width-20 g-height-20">
                                                                        <i></i>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </label>
                                                </div>
                                                <!-- End Amazon Payments -->

                                                <!-- Paypal -->
                                                <div class="col-md-3">
                                                    <label class="u-check w-100 g-mb-25">
                                                        <strong
                                                            class="d-block g-color-gray-dark-v2 g-font-weight-700 g-mb-10">Paypal</strong>
                                                        <input class="g-hidden-xs-up g-pos-abs g-top-10 g-right-10"
                                                            type="radio" name="profilePayments">

                                                        <div
                                                            class="g-brd-primary--checked g-bg-primary-opacity-0_2--checked g-brd-around g-brd-gray-light-v2 g-rounded-5">
                                                            <div class="media g-pa-12">
                                                                <div
                                                                    class="media-body align-self-center g-color-darkblue">
                                                                    <i
                                                                        class="fa fa-paypal g-font-size-30 align-self-center mx-auto"></i>
                                                                </div>

                                                                <div
                                                                    class="d-flex align-self-center g-width-20 g-ml-15">
                                                                    <div
                                                                        class="u-check-icon-radio-v5 g-pos-rel g-width-20 g-height-20">
                                                                        <i></i>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </label>
                                                </div>
                                                <!-- End Paypal -->
                                            </div>
                                            <!-- End Payment Options -->

                                            <!-- Card Name and Number -->
                                            <div class="row">
                                                <!-- Card Name -->
                                                <div class="col-md-6">
                                                    <div class="form-group g-mb-20">
                                                        <label class="g-color-gray-dark-v2 g-font-weight-700 g-mb-10"
                                                            for="inputGroup1_1">Name on card</label>
                                                        <div class="input-group g-brd-primary--focus">
                                                            <input
                                                                class="form-control form-control-md border-right-0 rounded-0 g-py-13 pr-0"
                                                                type="text" placeholder="John Doe">
                                                            <div class="input-group-append">
                                                                <span
                                                                    class="input-group-text g-bg-white g-color-gray-light-v1 rounded-0">
                                                                    <i class="icon-user"></i>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- End Card Name -->

                                                <!-- Card Number -->
                                                <div class="col-md-6">
                                                    <div class="form-group g-mb-20">
                                                        <label class="g-color-gray-dark-v2 g-font-weight-700 g-mb-10"
                                                            for="inputGroup1_1">Card number</label>
                                                        <div class="input-group g-brd-primary--focus">
                                                            <input id="inputGroup1_3"
                                                                class="form-control form-control-md g-brd-right-none rounded-0 g-py-13"
                                                                type="text" placeholder="XXXX-XXXX-XXXX-XXXX"
                                                                data-mask="9999-9999-9999-9999">
                                                            <div class="input-group-append">
                                                                <span
                                                                    class="input-group-text g-bg-white g-color-gray-light-v1 rounded-0">
                                                                    <i class="icon-credit-card"></i>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- End Card Number -->
                                            </div>
                                            <!-- End Card Name and Number -->

                                            <!-- Card Expiration Dates and CVV Code -->
                                            <div class="row">
                                                <!-- Expiration Month -->
                                                <div class="col-md-4">
                                                    <label class="g-color-gray-dark-v2 g-font-weight-700 g-mb-10"
                                                        for="inputGroup1_1">Expiration month</label>
                                                    <select
                                                        class="js-custom-select u-select-v1 g-brd-gray-light-v2 g-color-gray-dark-v5 w-100 g-pt-11 g-pb-10"
                                                        data-placeholder="Month" data-open-icon="fa fa-angle-down"
                                                        data-close-icon="fa fa-angle-up">
                                                        <option selected="">Month</option>
                                                        <option value="1">January</option>
                                                        <option value="1">February</option>
                                                        <option value="3">March</option>
                                                        <option value="4">April</option>
                                                        <option value="5">May</option>
                                                        <option value="6">June</option>
                                                        <option value="7">July</option>
                                                        <option value="8">August</option>
                                                        <option value="9">September</option>
                                                        <option value="10">October</option>
                                                        <option value="11">November</option>
                                                        <option value="12">December</option>
                                                    </select>
                                                </div>
                                                <!-- End Expiration Month -->

                                                <!-- Expiration Year -->
                                                <div class="col-md-4">
                                                    <div class="form-group g-mb-20">
                                                        <label class="g-color-gray-dark-v2 g-font-weight-700 g-mb-10"
                                                            for="inputGroup1_1">Expiration year</label>
                                                        <div class="input-group g-brd-primary--focus">
                                                            <input
                                                                class="form-control form-control-md border-right-0 rounded-0 g-py-13 pr-0"
                                                                type="text" placeholder="2021">
                                                            <div class="input-group-append">
                                                                <span
                                                                    class="input-group-text g-bg-white g-color-gray-light-v1 rounded-0">
                                                                    <i class="icon-calendar"></i>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- End Expiration Year -->

                                                <!-- CVV Code -->
                                                <div class="col-md-4">
                                                    <div class="form-group g-mb-20">
                                                        <label class="g-color-gray-dark-v2 g-font-weight-700 g-mb-10"
                                                            for="inputGroup1_1">CVV code</label>
                                                        <div class="input-group g-brd-primary--focus">
                                                            <input
                                                                class="form-control form-control-md border-right-0 rounded-0 g-py-13 pr-0"
                                                                type="text" placeholder="2021">
                                                            <div class="input-group-append">
                                                                <span
                                                                    class="input-group-text g-bg-white g-color-gray-light-v1 rounded-0">
                                                                    <i class="icon-lock"></i>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- End CVV Code -->
                                            </div>
                                            <!-- End Card Expiration Dates and CVV Code -->

                                            <!-- Billing Address -->
                                            <div class="form-group">
                                                <label
                                                    class="d-block g-color-gray-dark-v2 g-font-weight-700 1text-sm-right g-mb-10">Billing
                                                    address</label>
                                                <label class="u-check g-pl-25 mb-0">
                                                    <input class="g-hidden-xs-up g-pos-abs g-top-0 g-left-0"
                                                        type="checkbox">
                                                    <div
                                                        class="u-check-icon-checkbox-v4 g-absolute-centered--y g-left-0">
                                                        <i class="fa" data-check-icon="&#xf00c"></i>
                                                    </div>
                                                    Same as shipping address?
                                                </label>
                                            </div>
                                            <!-- End Billing Address -->

                                            <hr class="g-brd-gray-light-v4 g-my-25">

                                            <div class="text-sm-right">
                                                <a class="btn u-btn-darkgray rounded-0 g-py-12 g-px-25 g-mr-10"
                                                    href="#!">Cancel</a>
                                                <a class="btn u-btn-primary rounded-0 g-py-12 g-px-25" href="#!">Save
                                                    Changes</a>
                                            </div>
                                        </form>
                                    </div>
                                    <!-- End Payment Options -->

                                    <!-- Notification Settings -->
                                    <div class="tab-pane fade" id="nav-1-1-default-hor-left-underline--4"
                                        role="tabpanel" data-parent="#nav-1-1-default-hor-left-underline">
                                        <h2 class="h4 g-font-weight-300">Manage your Notifications</h2>
                                        <p class="g-mb-25">Below are the notifications you may manage.</p>

                                        <form>
                                            <!-- Email Notification -->
                                            <div class="form-group">
                                                <label class="d-flex align-items-center justify-content-between">
                                                    <span>Email notification</span>
                                                    <div class="u-check">
                                                        <input class="g-hidden-xs-up g-pos-abs g-top-0 g-right-0"
                                                            name="emailNotification" type="checkbox" checked>
                                                        <div class="u-check-icon-radio-v7">
                                                            <i class="d-inline-block"></i>
                                                        </div>
                                                    </div>
                                                </label>
                                            </div>
                                            <!-- End Email Notification -->

                                            <hr class="g-brd-gray-light-v4 g-my-20">

                                            <!-- Comments Notification -->
                                            <!-- <div class="form-group">
                    <label class="d-flex align-items-center justify-content-between">
                      <span>Send me email notification when a user comments on my blog</span>
                      <div class="u-check">
                        <input class="g-hidden-xs-up g-pos-abs g-top-0 g-right-0" name="commentNotification" type="checkbox">
                        <div class="u-check-icon-radio-v7">
                          <i class="d-inline-block"></i>
                        </div>
                      </div>
                    </label>
                  </div> -->
                                            <!-- End Comments Notification -->


                                            <!-- Update Notification -->
                                            <div class="form-group">
                                                <label class="d-flex align-items-center justify-content-between">
                                                    <span>Send me email notification for the latest update</span>
                                                    <div class="u-check">
                                                        <input class="g-hidden-xs-up g-pos-abs g-top-0 g-right-0"
                                                            name="updateNotification" type="checkbox" checked>
                                                        <div class="u-check-icon-radio-v7">
                                                            <i class="d-inline-block"></i>
                                                        </div>
                                                    </div>
                                                </label>
                                            </div>
                                            <!-- End Update Notification -->

                                            <hr class="g-brd-gray-light-v4 g-my-25">

                                            <!-- Message Notification -->
                                            <div class="form-group">
                                                <label class="d-flex align-items-center justify-content-between">
                                                    <span>Send me email notification when Decadent Desires sends me a
                                                        message</span>
                                                    <div class="u-check">
                                                        <input class="g-hidden-xs-up g-pos-abs g-top-0 g-right-0"
                                                            name="messageNotification" type="checkbox" checked>
                                                        <div class="u-check-icon-radio-v7">
                                                            <i class="d-inline-block"></i>
                                                        </div>
                                                    </div>
                                                </label>
                                            </div>
                                            <!-- End Message Notification -->

                                            <hr class="g-brd-gray-light-v4 g-my-25">

                                            <!-- Newsletter Notification -->
                                            <div class="form-group">
                                                <label class="d-flex align-items-center justify-content-between">
                                                    <span>Receive updates when new entertainers are added</span>
                                                    <div class="u-check">
                                                        <input class="g-hidden-xs-up g-pos-abs g-top-0 g-right-0"
                                                            name="newsletterNotification" type="checkbox">
                                                        <div class="u-check-icon-radio-v7">
                                                            <i class="d-inline-block"></i>
                                                        </div>
                                                    </div>
                                                </label>
                                            </div>
                                            <!-- End Newsletter Notification -->

                                            <hr class="g-brd-gray-light-v4 g-my-25">

                                            <div class="text-sm-right">
                                                <a class="btn u-btn-darkgray rounded-0 g-py-12 g-px-25 g-mr-10"
                                                    href="#!">Cancel</a>
                                                <a class="btn u-btn-primary rounded-0 g-py-12 g-px-25" href="#!">Save
                                                    Changes</a>
                                            </div>
                                        </form>
                                    </div>
                                    <!-- End Notification Settings -->
                                </div>
                                <!-- End Tab panes -->
                            </div>
                            <!-- End Profle Content -->
                        </div>
                    </div>
        </section>

        <?php require '../includes/footer.php';?>
        <!-- End Copyright Footer -->
        <a class="js-go-to u-go-to-v1" href="#!" data-type="fixed" data-position='{
     "bottom": 15,
     "right": 15
   }' data-offset-top="400" data-compensation="#js-header" data-show-effect="zoomIn">
            <i class="hs-icon hs-icon-arrow-top"></i>
        </a>
    </main>

    <div class="u-outer-spaces-helper"></div>


    <!-- JS Global Compulsory -->
    <script src="../../assets/vendor/jquery/jquery.min.js"></script>
    <script src="../../assets/vendor/jquery-migrate/jquery-migrate.min.js"></script>
    <script src="../../assets/vendor/popper.min.js"></script>
    <script src="../../assets/vendor/bootstrap/bootstrap.min.js"></script>


    <!-- JS Implementing Plugins -->
    <script src="../../assets/vendor/appear.js"></script>
    <script src="../../assets/vendor/hs-megamenu/src/hs.megamenu.js"></script>
    <script src="../../assets/vendor/malihu-scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="../../assets/vendor/jquery.maskedinput/src/jquery.maskedinput.js"></script>
    <script src="../../assets/vendor/chosen/chosen.jquery.js"></script>

    <!-- JS Unify -->
    <script src="../../assets/js/hs.core.js"></script>
    <script src="../../assets/js/helpers/hs.hamburgers.js"></script>
    <script src="../../assets/js/components/hs.header.js"></script>
    <script src="../../assets/js/components/hs.tabs.js"></script>
    <script src="../../assets/js/components/hs.progress-bar.js"></script>
    <script src="../../assets/js/components/hs.scrollbar.js"></script>
    <script src="../../assets/js/helpers/hs.not-empty-state.js"></script>
    <script src="../../assets/js/helpers/hs.focus-state.js"></script>
    <script src="../../assets/js/components/hs.masked-input.js"></script>
    <script src="../../assets/js/components/hs.select.js"></script>
    <script src="../../assets/js/components/hs.go-to.js"></script>

    <!-- JS Customization -->
    <script src="../../assets/js/custom.js"></script>

    <!-- JS Plugins Init. -->
    <script>
    $(document).on('ready', function() {
        $.HSCore.helpers.HSFocusState.init();
        $.HSCore.helpers.HSNotEmptyState.init();

        // initialization of go to
        $.HSCore.components.HSGoTo.init('.js-go-to');

        // initialization of tabs
        $.HSCore.components.HSTabs.init('[role="tablist"]');

        // initialization of input masking
        $.HSCore.components.HSMaskedInput.init('[data-mask]');

        // initialization of custom select
        $.HSCore.components.HSSelect.init('.js-custom-select');

        // initialization of HSScrollBar component
        $.HSCore.components.HSScrollBar.init($('.js-scrollbar'));
    });

    $(window).on('load', function() {
        // initialization of header
        $.HSCore.components.HSHeader.init($('#js-header'));
        $.HSCore.helpers.HSHamburgers.init('.hamburger');

        // initialization of HSMegaMenu component
        $('.js-mega-menu').HSMegaMenu({
            event: 'hover',
            pageContainer: $('.container'),
            breakpoint: 991
        });

        // initialization of horizontal progress bars
        setTimeout(function() { // important in this case
            var horizontalProgressBars = $.HSCore.components.HSProgressBar.init('.js-hr-progress-bar', {
                direction: 'horizontal',
                indicatorSelector: '.js-hr-progress-bar-indicator'
            });
        }, 1);
    });

    $(window).on('resize', function() {
        setTimeout(function() {
            $.HSCore.components.HSTabs.init('[role="tablist"]');
        }, 200);
    });
    </script>










</body>

</html>