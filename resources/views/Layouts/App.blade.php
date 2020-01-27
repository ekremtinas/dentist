<!DOCTYPE html>
<html lang="tr">
<head>
    @yield('title')
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Konya Ortodonti, Konya Ortodonti Uzmanı, Konya Ortodontist, Konya Diş Teli, Konya Şeffaf Diş Teli, Konya Görünmez Diş Teli, Konya Diş Teli Fiyatı, Fiyatları"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="Konya Ortodonti, Konya Ortodonti Uzmanı, Konya Ortodontist, Konya Diş Teli, Konya Şeffaf Diş Teli, Konya Görünmez Diş Teli, Konya Diş Teli Fiyatı, Fiyatları">
    <meta name="robots" content="index, follow">
    <meta name="google-site-verification" content="jyc-JfpQ-O1jZzGAb8TNBMLt1A2HD1_E6hFI3QZrkqQ" />
    <meta name="revisit-after" content="1 days">
    <meta property="og:locale" content="tr_TR" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Konya Ortodonti Uzmanı Prof. Dr. Faruk Ayhan BAŞÇİFTÇİ" />
    <meta property="og:description" content="Konya Ortodonti, Konya Ortodonti Uzmanı, Konya Ortodontist, Konya Diş Teli, Konya Şeffaf Diş Teli, Konya Görünmez Diş Teli, Konya Diş Teli Fiyatı, Fiyatları" />
   
    <link rel="icon" href="/logo.ico" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="/components/styles/bootstrap4/bootstrap.min.css">
    <link href="/components/plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="/components/plugins/OwlCarousel2-2.2.1/owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="/components/plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
    <link rel="stylesheet" type="text/css" href="/components/plugins/OwlCarousel2-2.2.1/animate.css">
    <link rel="stylesheet" type="text/css" href="/components/styles/main_styles.css">
    <link rel="stylesheet" type="text/css" href="/components/styles/responsive.css">
    @yield('css')
</head>
<body onload="openCity(event, 'tab1')">

<div class="super_container">

    <!-- Menu -->

    @include('Layouts.Menu')

    <!-- Home -->

    <div class="home">
   <img id="ustresim" style="margin-top: 200px;margin-bottom: 50px" width="100%" src="/components/images/index-ortodonti.gif">

        <!-- Header -->

        @include('Layouts.Header')

      @yield('content')

    <!-- Footer -->

        @include('Layouts.Footer')



</div>

<script src="/components/js/jquery-3.3.1.min.js"></script>
<script src="/components/styles/bootstrap4/popper.js"></script>
<script src="/components/styles/bootstrap4/bootstrap.min.js"></script>
<script src="/components/plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="/components/plugins/easing/easing.js"></script>
<script src="/components/plugins/parallax-js-master/parallax.min.js"></script>
<script src="/components/js/custom.js"></script>

@yield('js')





</body>
</html>
