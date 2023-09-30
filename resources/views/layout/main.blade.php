<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <!-- Favicon -->
    <link rel="icon" href="/confer/img/core-img/logo.png">

    <!-- Stylesheet -->
    <link rel="stylesheet" href="/confer/style.css">
    <link rel="stylesheet" href="/css/app.css">
    <title>@yield('title')</title>
    <style>
        .owl-item {
            height: 100%;
        }
    </style>

</head>

<body style="background-color: #111343;">

    <div id="preloader">
        <div class="loader"></div>
    </div>
    <!-- /Preloader -->

    <!-- Header Area Start -->

    @yield('container')
    <section class="call-to-action-area jarallax section-padding-100">
        <div class="container">
            <div class="row">
                <div class="col-12" style="margin-top: 220px;margin-bottom: 200px;">
                    <div class="call-to-action-content text-center">
                        <div class="call-to-action-heading">
                            <h6>to use the API you can go to</h6>
                            <h2 style="color: #FF6C37;">POSTMAN&nbsp;</h2>
                            <h2> LINK BELOW</h2>
                        </div>
                        <div class="event-time">
                            <p><a style="color: white;" href="https://documenter.getpostman.com/view/15110416/TzRYeQqa"><i class="zmdi zmdi-cloud-outline-alt"></i> Click me !</p></a>
                        </div>
                        <div class="call-to-action-heading mt-4">
                            <p>This Boardgame API will return as JSON response and you can use GET, POST, PUT, or DELETE command.
                                For detailed information you can go to the documentation link ahead.
                            </p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- **** All JS Files ***** -->
    <!-- jQuery 2.2.4 -->
    <script src="/confer/js/jquery.min.js"></script>
    <!-- Popper -->
    <script src="/confer/js/popper.min.js"></script>
    <!-- Bootstrap -->
    <script src="/confer/js/bootstrap.min.js"></script>
    <!-- All Plugins -->
    <script src="/confer/js/confer.bundle.js"></script>
    <!-- Active -->
    <script src="/confer/js/default-assets/active.js"></script>

</body>

</html>