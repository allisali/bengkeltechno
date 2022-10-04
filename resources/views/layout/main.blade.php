<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Home | E-Shopper</title>

    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/font-awesome.min.css" rel="stylesheet">
    <link href="assets/css/prettyPhoto.css" rel="stylesheet">
    <link href="assets/css/price-range.css" rel="stylesheet">
    <link href="assets/css/animate.css" rel="stylesheet">
    <link href="assets/css/main.css" rel="stylesheet">
    <link href="assets/css/responsive.css" rel="stylesheet">
    <script src="assets/js/html5shiv.js"></script>
    <link href="assets/css/whatsapp.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">



</head>

<body>
    <header id="header">
        <!--header-->
        @include('header.header-top')
        <!--/header_top-->
        @include('header.header-midle')
        <!--/header-middle-->
        @include('header.header-bottom')
        <!--/header-bottom-->
    </header>
    <!--/header-->


    <section>
        <div class="container">
            @yield('index')
        </div>
    </section>

    <footer id="footer">
        <!--Footer-->
        @include('footer.footer-top')
        @include('footer.footer-midle')
        @include('footer.footer-bot')





    </footer>
    <!--/Footer-->
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery.scrollUp.min.js"></script>
    <script src="assets/js/price-range.js"></script>
    <script src="assets/js/jquery.prettyPhoto.js"></script>
    <script src="assets/js/main.js"></script>
</body>

</html>
