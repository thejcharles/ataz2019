<?php require '../includes/head.php';?>
<?php require '../includes/nav.php';?>
<style>
.location-image {
    max-height: 10rem;
    width: 100%
}
</style>

<?php 
$onestop = new Onestop();
$onestops = $onestop->fetch_all_city();
?>
<!-- Page Title -->
<section class="dzsparallaxer auto-init height-is-based-on-content use-loading"
    data-options='{direction: "reverse", settings_mode_oneelement_max_offset: "150"}'>
    <!-- Parallax Image -->
    <div class="divimage dzsparallaxer--target w-100 g-bg-cover g-bg-black-gradient-opacity-v3--after"
        style="height: 140%; background-image: url(../../assets/img/ataz/apache.jpg);"></div>
    <!-- End Parallax Image -->

    <div class="container text-center g-py-100--md g-py-80">
        <!-- <h2 class="h1 text-uppercase g-font-weight-600 g-mb-30">Search Results</h2> -->

        <!-- Search Form -->
        <div class="g-bg-white g-pa-30">
            <!-- Input Group -->
            <form>
                <div class="row g-mx-0--md">
                    <div class="col-md-4 col-lg-4 g-px-0--md g-mb-30">
                        <input class="search form-control rounded-0 g-brd-gray-light-v3 g-px-20 g-py-15" type="text"
                            id="locationSearch" onkeyup="filterLocations()"
                            placeholder="Search by City, Address, ZIP ...">
                    </div>

                    <!-- Button Group -->
                    <div class="col-sm-6 col-md-4 col-lg-4 g-px-0--md g-mb-30">
                        <select
                            class="js-custom-select w-100 h-100 u-select-v1 g-min-width-150 g-brd-left-none--md g-brd-gray-light-v3 g-color-main g-color-primary--hover g-pt-12 g-pb-13"
                            required data-placeholder="All Cities" data-open-icon="fa fa-angle-down"
                            data-close-icon="fa fa-angle-up">
                            <option>Filter by accommodations</option>
                            <option
                                class="g-brd-none g-color-main g-color-white--hover g-color-white--active g-bg-primary--hover g-bg-primary--active"
                                value="NY">Vision</option>
                            <option
                                class="g-brd-none g-color-main g-color-white--hover g-color-white--active g-bg-primary--hover g-bg-primary--active"
                                value="VC">Hearing</option>
                            <option
                                class="g-brd-none g-color-main g-color-white--hover g-color-white--active g-bg-primary--hover g-bg-primary--active"
                                value="LN">Learning</option>
                            <option
                                class="g-brd-none g-color-main g-color-white--hover g-color-white--active g-bg-primary--hover g-bg-primary--active"
                                value="BR">Physical</option>
                            <option
                                class="g-brd-none g-color-main g-color-white--hover g-color-white--active g-bg-primary--hover g-bg-primary--active"
                                value="ML">Communication</option>
                            <option
                                class="g-brd-none g-color-main g-color-white--hover g-color-white--active g-bg-primary--hover g-bg-primary--active"
                                value="PR">Other</option>
                        </select>
                    </div>
                    <!-- End Button Group -->

                    <!-- Button Group -->
                    <div class="col-sm-6 col-md-3 col-lg-2 g-px-0--md g-mb-30">
                        <select
                            class="js-custom-select w-100 h-100 u-select-v1 g-min-width-150 g-brd-left-none--md g-brd-gray-light-v3 g-color-main g-color-primary--hover g-pt-12 g-pb-13"
                            required data-placeholder="All Cities" data-open-icon="fa fa-angle-down"
                            data-close-icon="fa fa-angle-up">
                            <option>Select a city</option>
                            <option
                                class="g-brd-none g-color-main g-color-white--hover g-color-white--active g-bg-primary--hover g-bg-primary--active"
                                value="NY">Phoenix</option>
                            <option
                                class="g-brd-none g-color-main g-color-white--hover g-color-white--active g-bg-primary--hover g-bg-primary--active"
                                value="VC">Tucson</option>
                            <option
                                class="g-brd-none g-color-main g-color-white--hover g-color-white--active g-bg-primary--hover g-bg-primary--active"
                                value="LN">Apache Junction</option>
                            <option
                                class="g-brd-none g-color-main g-color-white--hover g-color-white--active g-bg-primary--hover g-bg-primary--active"
                                value="BR">Glendale</option>
                            <option
                                class="g-brd-none g-color-main g-color-white--hover g-color-white--active g-bg-primary--hover g-bg-primary--active"
                                value="ML">Tempe</option>
                            <option
                                class="g-brd-none g-color-main g-color-white--hover g-color-white--active g-bg-primary--hover g-bg-primary--active"
                                value="PR">Scottsdaleis</option>
                            <option
                                class="g-brd-none g-color-main g-color-white--hover g-color-white--active g-bg-primary--hover g-bg-primary--active"
                                value="MS">Prescott</option>
                        </select>
                    </div>
                    <!-- End Button Group -->

                    <!-- Button Group -->
                    <div class="col-sm-6 col-md-3 col-lg-2 g-px-0--md g-mb-30">
                        <select
                            class="js-custom-select w-100 h-100 u-select-v1 g-min-width-150 g-brd-left-none--md g-brd-gray-light-v3 g-color-main g-color-primary--hover g-pt-12 g-pb-13"
                            required data-placeholder="All Areas" data-open-icon="fa fa-angle-down"
                            data-close-icon="fa fa-angle-up">
                            <option>Select a county</option>
                            <option
                                class="g-brd-main g-color-main g-color-white--hover g-color-white--active g-bg-primary--hover g-bg-primary--active"
                                value="NR">Apache</option>
                            <option
                                class="g-brd-none g-color-main g-color-white--hover g-color-white--active g-bg-primary--hover g-bg-primary--active"
                                value="NTE">Coconino</option>
                            <option
                                class="g-brd-none g-color-main g-color-white--hover g-color-white--active g-bg-primary--hover g-bg-primary--active"
                                value="NTW">Cochise</option>
                            <option
                                class="g-brd-none g-color-main g-color-white--hover g-color-white--active g-bg-primary--hover g-bg-primary--active"
                                value="EA">Gila</option>
                            <option
                                class="g-brd-none g-color-main g-color-white--hover g-color-white--active g-bg-primary--hover g-bg-primary--active"
                                value="SO">Graham</option>
                            <option
                                class="g-brd-none g-color-main g-color-white--hover g-color-white--active g-bg-primary--hover g-bg-primary--active"
                                value="SOE">Greenlee</option>
                            <option
                                class="g-brd-none g-color-main g-color-white--hover g-color-white--active g-bg-primary--hover g-bg-primary--active"
                                value="SOW">La Paz</option>
                            <option
                                class="g-brd-none g-color-main g-color-white--hover g-color-white--active g-bg-primary--hover g-bg-primary--active"
                                value="WE">Maricopa</option>
                            <option
                                class="g-brd-none g-color-main g-color-white--hover g-color-white--active g-bg-primary--hover g-bg-primary--active"
                                value="WE">Mohave</option>
                            <option
                                class="g-brd-none g-color-main g-color-white--hover g-color-white--active g-bg-primary--hover g-bg-primary--active"
                                value="WE">Navajo</option>
                            <option
                                class="g-brd-none g-color-main g-color-white--hover g-color-white--active g-bg-primary--hover g-bg-primary--active"
                                value="WE">Pima</option>
                            <option
                                class="g-brd-none g-color-main g-color-white--hover g-color-white--active g-bg-primary--hover g-bg-primary--active"
                                value="WE">Pinal</option>
                            <option
                                class="g-brd-none g-color-main g-color-white--hover g-color-white--active g-bg-primary--hover g-bg-primary--active"
                                value="WE">Santa Cruz</option>
                            <option
                                class="g-brd-none g-color-main g-color-white--hover g-color-white--active g-bg-primary--hover g-bg-primary--active"
                                value="WE">Yavapai</option>
                            <option
                                class="g-brd-none g-color-main g-color-white--hover g-color-white--active g-bg-primary--hover g-bg-primary--active"
                                value="WE">Yuma</option>







                        </select>
                    </div>
                    <!-- End Button Group -->
                </div>


                <button
                    class="btn btn-block u-btn-primary g-color-white g-bg-primary-dark-v1--hover g-font-weight-600 rounded-0 g-px-18 g-py-15"
                    type="submit">
                    Search
                </button>

            </form>
            <!-- End Input Group -->
        </div>

        <!-- End Search Form -->
    </div>
</section>
<!-- Page Title -->

<section class="g-pt-50 g-pb-90">
    <div class="container">
        <div class="row">


            <!-- Search Results -->
            <div class="col-lg-9">
                <!-- Search Info -->
                <div class="d-md-flex justify-content-between g-mb-30">
                    <h3 class="h6 text-uppercase g-mb-10 g-mb--lg">About <span class="g-color-gray-dark-v1">56</span>
                        results</h3>
                    <ul class="list-inline">
                        <li class="list-inline-item g-mr-30">
                            <a class="u-link-v5 g-color-gray-dark-v1 g-color-primary--hover" href="#!">
                                <i class="icon-grid g-pos-rel g-top-1 g-mr-5"></i> List View
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a class="u-link-v5 g-color-gray-dark-v5 g-color-gray-dark-v5--hover" href="#!">
                                <i class="icon-list g-pos-rel g-top-1 g-mr-5"></i> Grid View
                            </a>
                        </li>
                    </ul>
                </div>
                <!-- End Search Info -->

                <div class="row" id="locations">
                    <?php foreach($onestops as $onestop) {?>
                    <div class="col-lg-4 g-mb-30">

                        <!-- Search Result -->
                        <article class="g-pa-25 u-shadow-v11 rounded" style="height:18rem;">
                            <div style="height:40px;">

                                <a class=" g-color-gray-dark-v1 g-color-primary--hover"
                                    href="location-info.php?id=<?php echo $onestop['id']?>"><?php echo $onestop['name'];?></a>
                            </div>

                            <!-- Search Info -->
                            <ul class="list-inline d-flex justify-content-between ">
                                <li class="list-inline-item">

                                </li>
                            </ul>

                            <!-- End Search Info -->

                            <img class="img-fluid g-brd-around g-brd-gray-light-v2 location-image"
                                src="../../assets/img/ataz/onestops/<?php echo $onestop['photo']?>"
                                alt="Image Description">

                            <!-- Search Rating -->
                            <!-- <div class="g-mb-15">
                    <span class="js-rating g-color-primary mr-2" data-rating="5"></span>
                    <span class="g-color-gray-dark-v5">Relevance 5.0 out of 4902 votes</span>
                  </div> -->
                            <!-- End Search Rating -->

                            <!-- address -->
                            <ul class="list-inline d-flex justify-content-between g-mb-20">
                                <li class="list-inline-item">
                                    <i class="icon-office g-pos-rel g-top-1 g-color-gray-dark-v5 g-mr-5"></i>
                                    <?php echo $onestop['address'];?> - <?php echo $onestop['city'];?>
                                </li>
                            </ul>
                            <!-- end address -->
                        </article>
                        <!-- End Search Result -->
                    </div>
                    <?php } ?>


                </div>

                <hr class="g-brd-gray-light-v4 g-mt-10 g-mb-40">

                <!-- Pagination -->
                <nav class="g-mb-50" aria-label="Page Navigation">
                    <ul class="list-inline">
                        <li class="list-inline-item">
                            <a class="u-pagination-v1__item u-pagination-v1-5 rounded g-pa-4-13" href="#!"
                                aria-label="Previous">
                                <span aria-hidden="true">
                                    <i class="fa fa-angle-left"></i>
                                </span>
                                <span class="sr-only">Previous</span>
                            </a>
                        </li>
                        <li class="list-inline-item g-hidden-sm-down">
                            <a class="u-pagination-v1__item u-pagination-v1-5 u-pagination-v1-5--active rounded g-pa-4-11"
                                href="#!">1</a>
                        </li>
                        <li class="list-inline-item g-hidden-sm-down">
                            <a class="u-pagination-v1__item u-pagination-v1-5 rounded g-pa-4-11" href="#!">2</a>
                        </li>
                        <li class="list-inline-item g-hidden-sm-down">
                            <a class="u-pagination-v1__item u-pagination-v1-5 rounded g-pa-4-11" href="#!">3</a>
                        </li>
                        <li class="list-inline-item g-hidden-sm-down">
                            <span class="g-pa-4-11">...</span>
                        </li>
                        <li class="list-inline-item g-hidden-sm-down">
                            <a class="u-pagination-v1__item u-pagination-v1-5 rounded g-pa-4-11" href="#!">80</a>
                        </li>
                        <li class="list-inline-item">
                            <a class="u-pagination-v1__item u-pagination-v1-5 rounded g-pa-4-13" href="#!"
                                aria-label="Next">
                                <span aria-hidden="true">
                                    <i class="fa fa-angle-right"></i>
                                </span>
                                <span class="sr-only">Next</span>
                            </a>
                        </li>
                        <li class="list-inline-item float-right">
                            <span class="u-pagination-v1__item-info g-pa-4-11">Page 1 of 10</span>
                        </li>
                    </ul>
                </nav>
                <!-- End Pagination -->

            </div>
            <!-- End Search Results -->
        </div>
    </div>
</section>



<?php require '../includes/footer.php';?>


<!-- JS Global Compulsory -->
<script src="../../assets/vendor/jquery/jquery.min.js"></script>
<script src="../../assets/vendor/jquery-migrate/jquery-migrate.min.js"></script>
<script src="../../assets/vendor/popper.min.js"></script>
<script src="../../assets/vendor/bootstrap/bootstrap.min.js"></script>


<!-- JS Implementing Plugins -->
<script src="../../assets/vendor/appear.js"></script>
<script src="../../assets/vendor/hs-megamenu/src/hs.megamenu.js"></script>
<script src="../../assets/vendor/dzsparallaxer/dzsparallaxer.js"></script>
<script src="../../assets/vendor/dzsparallaxer/dzsscroller/scroller.js"></script>
<script src="../../assets/vendor/dzsparallaxer/advancedscroller/plugin.js"></script>

<!-- JS Unify -->
<script src="../../assets/js/hs.core.js"></script>
<script src="../../assets/js/helpers/hs.hamburgers.js"></script>
<script src="../../assets/js/components/hs.header.js"></script>
<script src="../../assets/js/components/hs.tabs.js"></script>
<script src="../../assets/js/helpers/hs.focus-state.js"></script>
<script src="../../assets/js/components/hs.rating.js"></script>
<script src="../../assets/js/components/hs.go-to.js"></script>

<!-- JS Customization -->
<script src="../../assets/js/custom.js"></script>

<!-- JS Plugins Init. -->
<script>
$(document).on('ready', function() {
    // initialization of go to
    $.HSCore.components.HSGoTo.init('.js-go-to');

    // initialization of tabs
    $.HSCore.components.HSTabs.init('[role="tablist"]');

    // initialization of rating
    $.HSCore.components.HSRating.init($('.js-rating'), {
        spacing: 2
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
    });

    $(window).on('resize', function() {
        setTimeout(function() {
            $.HSCore.components.HSTabs.init('[role="tablist"]');
        }, 200);
    });
});
</script>

<script>
function filterLocations() {
    var input, filter, table, tr, td, i, txtValue;
    input = document.getElementById("locationSearch");
    filter = input.value.toUpperCase();
    div = document.getElementById("locations");
    article = table.getElementsByTagName("article");
    for (i = 0; i < article.length; i++) {
        div = article[i].getElementsByTagName("div")[0];
        if (div) {
            txtValue = td.textContent || div.innerText;
            if (txtValue.toUpperCase().indexOf(filter) > -1) {
                article[i].style.display = "";
            } else {
                article[i].style.display = "none";
            }
        }
    }
}
</script>