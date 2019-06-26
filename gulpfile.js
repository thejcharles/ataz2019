/* File: gulpfile.js */

// grab our packages
let gulp = require("gulp");
let sass = require("gulp-sass");
var elixir = require("laravel-elixir");
elixir.config.sourcemaps = false;
autoprefixer = require("gulp-autoprefixer");
concat = require("gulp-concat");

gulp.task("sass", function() {
  return gulp
    .src("./resources/assets/include/**/*.scss")
    .pipe(sass().on("error", sass.logError))
    .pipe(gulp.dest("./public/css"));
});

// define the default task and add the watch task to it
gulp.task("default", function() {
  gulp.watch("./resources/assets/include/**/*.scss", ["sass"]);
});

elixir(function(mix) {
  // compile sass to css
  //mix.sass(['resources/assets/include/scss/**/*.scss'], 'resources/assets/css');
  //combine css files
  mix.styles(
    [
      "/vendor/bootstrap/bootstrap.min.css",
      "/vendor/bootstrap/offcanvas.css",
      "/vendor/dzsparallaxer/dzsparallaxer.css",
      "/vendor/dzsparallaxer/dzsscroller/scroller.css",
      "/vendor/dzsparallaxer/advancedscroller/plugin.css",
      "/vendor/animate.css",
      "/vendor/hamburgers/hamburgers.min.css",
      "/vendor/malihu-scrollbar/jquery.mCustomScrollbar.min.css",
      "/vendor/slick-carousel/slick/slick.css",
      "/vendor/fancybox/jquery.fancybox.css",
      "/vendor/icon-awesome/css/font-awesome.min.css",
      "/vendor/icon-line/css/simple-line-icons.css",
      "/vendor/icon-etlinefont/style.css",
      "/vendor/icon-line-pro/style.css",
      "/vendor/icon-hs/style.css",
      "css/app.css",
      "css/unify-globals.css",
      "css/unify-components.css",
      "css/unify-core.css",
      "css/unify.css",
      "css/custom.css"
    ],
    "public/css/shell.css", // output file
    "resources/assets"
  );
  // javascript
  mix.scripts(
    [
      "/vendor/jquery/jquery.min.js",
      "/vendor/jquery-migrate/jquery-migrate.min.js",
      "/vendor/popper.js/popper.min.js",
      "/vendor/bootstrap/bootstrap.min.js",

      "/vendor/hs-megamenu/src/hs.megamenu.js",
      "/vendor/dzsparallaxer/dzsparallaxer.js",
      "/vendor/dzsparallaxer/dzsscroller/scroller.js",
      "/vendor/dzsparallaxer/advancedscroller/plugin.js",
      "/vendor/fancybox/jquery.fancybox.min.js",
      "/vendor/slick-carousel/slick/slick.js",

      "/js/hs.core.js",
      "/js/components/hs.header.js",
      "/js/helpers/hs.hamburgers.js",
      "/js/components/hs.dropdown.js",
      "/js/components/hs.popup.js",
      "/js/components/hs.carousel.js",
      "/js/components/hs.go-to.js",
      "js/custom.js",
      "resources/assets/js/**/*.js",
      "resources/assets/vendor/**/*.js"
    ],
    "public/js/shell.js", // output file
    "resources/assets"
  );

  //configure the jshint task
  gulp.task("jshint", function() {
    return gulp.src("source/javascript/**/*.js");
    // .pipe(jshint())
    // .pipe(jshint.reporter('jshint-stylish'));
  });

  // configure which files to watch and what tasks to use on file changes
  gulp.task("watch", function() {});
  gulp.watch("./resources/assets/include/**/*.scss", [
    "jshint",
    "default",
    "sass"
  ]);
});
