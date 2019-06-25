@extends('home.layout.base')
@section('title', 'About Us')

@section('content')

    <!-- Promo Block -->
    <section
            class="dzsparallaxer auto-init height-is-based-on-content use-loading mode-scroll loaded dzsprx-readyall"
            data-options='{direction: "fromtop", animation_duration: 25, direction: "reverse"}'>
        <!-- Parallax Image -->
        <div class="divimage dzsparallaxer--target w-100 g-bg-cover g-bg-pos-center g-bg-black-opacity-0_2--after"
             style="height: 140%; background-image: url(img/med-alert/promo-blocks/1484861871591_962699.jpg);">
        </div>
        <!-- End Parallax Image -->

        <!-- Promo Block Content -->
        <div class="container g-color-white text-center g-py-150" style="margin-top:40px;">
            <h1><span class="d-block g-font-weight-300 g-font-size-25 mb-3">Discover more about us</span></h1>
            <h3 class="h1 text-uppercase mb-0">Medical Red Alert Id</h3>
        </div>
        <!-- Promo Block Content -->
    </section>
    <!-- End Promo Block -->

    <section class="container g-pt-100 g-pb-50">
        <div class="row justify-content-center g-mb-60">
            <div class="col-lg-7">
                <!-- Heading -->
                <div class="text-center">
                    <h2 class="h3 g-color-black text-uppercase mb-2">Medical Red Alert ID</h2>
                    <div class="d-inline-block g-width-35 g-height-2 g-bg-primary mb-2"></div>
                    <p class="mb-0">Medical Red Alert ID is the future of human safety that not only applies to the
                        workplace but in all aspects of our lives. Join the Revolution now!</p>
                </div>
                <!-- End Heading -->
            </div>
        </div>

        <div class="row">
            <div class="col-lg-6 g-mb-50">
                <img class="img-fluid" src="img/med-alert/product1.jpg" alt="Image of medical alert id product">
            </div>
            <div class="col-lg-6">
                <div class="mb-5">
                    <p class="g-mb-30">Medical Red Alert ID is an integrated file storage and retrieval system with
                        a quick and comprehensive method of helping emergency personnel with crucial medical and
                        identity information when time is critical in a medical emergency situation.
                    </p>

                    <p class="g-mb-30">Medical Red Alert ID creates a unique QR Code (Quick Response Code) and
                        website that when scanned by a QR Reader will re-direct the end user or emergency medical
                        personnel to a unique website that will display emergency information. The end user also
                        will have the capability of encrypted file storage and secure password access to their
                        unique website. The files stored and associated with this website are controlled by the end
                        user. These files will be accessible both by a “smartphone” or a computer to be retrieved or
                        printed.
                    </p>

                    <p class="g-mb-30">Medical Red Alert ID was created to increase the potential to save lives in
                        emergency medical situations when time is of the essence and allows the end user quick and
                        easy access to their personal medical files. Healthcare issues dominate our culture and each
                        individual must take personal responsibility for their own medical information. The Medical
                        Red Alert ID sticker and Card/Fob are merely tools to facilitate the best flow of medical
                        information at all times both for emergency and nonemergency health care.
                    </p>

                </div>
            </div>
        </div>
    </section>

    <!-- Icon Blocks -->
    <section class="g-bg-gray-light-v5">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 g-py-100 g-px-40--sm">
                    <!-- Icon Blocks -->
                    <div class="text-center">
                            <span class="u-icon-v2 g-color-white g-bg-primary rounded-circle mb-4">
                                <i class="icon-education-087 u-line-icon-pro"></i>
                            </span>
                        <h3 class="h5 g-color-black text-uppercase mb-3">Integrated File Storage</h3>

                    </div>
                    <!-- End Icon Blocks -->
                </div>

                <div class="col-lg-4 g-brd-left--lg g-brd-gray-light-v4 g-py-100 g-px-40--sm">
                    <!-- Icon Blocks -->
                    <div class="text-center">
                            <span class="u-icon-v2 g-color-white g-bg-primary rounded-circle mb-4">
                                <i class="icon-education-035 u-line-icon-pro"></i>
                            </span>
                        <h3 class="h5 g-color-black text-uppercase mb-3">Accessible</h3>

                    </div>
                    <!-- End Icon Blocks -->
                </div>

                <div class="col-lg-4 g-brd-left--lg g-brd-gray-light-v4 g-py-100 g-px-40--sm">
                    <!-- Icon Blocks -->
                    <div class="text-center">
                            <span class="u-icon-v2 g-color-white g-bg-primary rounded-circle mb-4">
                                <i class="icon-education-141 u-line-icon-pro"></i>
                            </span>
                        <h3 class="h5 g-color-black text-uppercase mb-3">responsive</h3>
                    </div>
                    <!-- End Icon Blocks -->
                </div>
            </div>
        </div>
    </section>

@endsection