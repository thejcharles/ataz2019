<?php
//use this to avoid sending multiple headers
 ob_start();
 require '../core/init.php';
$user = new User();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Title -->
    <title>AT Arizona | | Home</title>

    <!-- Required Meta Tags Always Come First -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <script src="//cdnjs.cloudflare.com/ajax/libs/list.js/1.5.0/list.min.js"></script>
    <!-- Favicon -->
    <link rel="shortcut icon" href="../../../html/assets/img/ataz/favicon.ico">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
    <!-- CSS Global Compulsory -->
    <link rel="stylesheet" href="../../assets/vendor/bootstrap/bootstrap.min.css">
    <!-- CSS Global Icons -->
    <link rel="stylesheet" href="../../assets/vendor/icon-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="../../assets/vendor/icon-line/css/simple-line-icons.css">
    <link rel="stylesheet" href="../../assets/vendor/icon-etlinefont/style.css">
    <link rel="stylesheet" href="../../assets/vendor/icon-line-pro/style.css">
    <link rel="stylesheet" href="../../assets/vendor/icon-hs/style.css">
    <link rel="stylesheet" href="../../assets/vendor/animate.css">
    <link rel="stylesheet" href="../../assets/vendor/dzsparallaxer/dzsparallaxer.css">
    <link rel="stylesheet" href="../../assets/vendor/dzsparallaxer/dzsscroller/scroller.css">
    <link rel="stylesheet" href="../../assets/vendor/dzsparallaxer/advancedscroller/plugin.css">
    <link rel="stylesheet" href="../../assets/vendor/slick-carousel/slick/slick.css">
    <link rel="stylesheet" href="../../assets/vendor/fancybox/jquery.fancybox.css">
    <link rel="stylesheet" href="../../assets/vendor/hs-megamenu/src/hs.megamenu.css">
    <link rel="stylesheet" href="../../assets/vendor/hamburgers/hamburgers.min.css">

    <!-- CSS Unify -->
    <link rel="stylesheet" href="../../assets/css/unify-core.css">
    <link rel="stylesheet" href="../../assets/css/unify-components.css">
    <link rel="stylesheet" href="../../assets/css/unify-globals.css">

    <!-- CSS Customization -->
    <link rel="stylesheet" href="../../assets/css/custom.css">
</head>