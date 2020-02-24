<html>

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/mbr-additional.css" type="text/css">
    <link rel="canonical" href="https://getbootstrap.com/docs/4.1/examples/carousel/">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
    <link type="text/css" rel="stylesheet" href="css/style.css">


    <!-- Script for make responsize custom -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.js"></script>
    <script type="text/javascript" src="js/main.js"></script>
    <script type="text/javascript" src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
    <script>
        var stateManager = (function () {
            var state = null;
            var resizePage = function () {

                if ($('body').width() > 1500) {
                    if (state !== "desktop") { displayDesktop(); }

                }
                if ($('body').width() < 1500) {
                    if (state !== "desktopsm") { displayDesktopsm(); }

                }
                if ($('body').width() < 1100) {
                    if (state !== "mobile") { displayMobile(); }

                }

            };

            var displayMobile = function () {
                state = "mobile";
                console.log("enter mobile");
                $('#swap').attr('src', 'img/banner31.jpg');
                //$("#res").height(1200);
            };
            var displayDesktopsm = function () {
                state = "desktopsm";
                console.log("enter desktopsm");
                $('#swap').attr('src', 'img/banner2.jpg');
                //$("#res").height(none);
            };
            var displayDesktop = function () {
                state = "desktop";
                console.log("enter desktop");
                $('#swap').attr('src', 'img/banner1.jpg');
                //$("#res").height(none);
            };

            return {
                init: function () {
                    resizePage();
                    $(window).on('resize', resizePage);
                }
            };
        }());
        stateManager.init();    
    </script>

</head>

<body>

    <!-- Navigation Bar -->
    <?php include ('asset/headder.html');?>


    <div id="carousel-example-1z" class="carousel slide carousel-fade" data-ride="carousel">
        <!-- banner -->
        <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
                <img class="d-block w-100" id="swap" src="img/banner1.jpg" alt="First slide">
                <div class="carousel-caption " id="res">

                <!-- form box -->
                    <div id="booking" class="section">
                        <div class="section-center">
                            <div class="container animated fadeInUp">
                                <div class="row">
                                    <div class="booking-form">
                                        <div class="form-header">
                                            <h1>Make your reservation</h1>
                                        </div>
                                        <!-- form -->
                                        <form action="db/insert.php" method="POST">
                                            <div class="form-group">
                                                <input class="form-control" name="fullname" type="text"
                                                    placeholder="Full Name" required="">
                                                <span class="form-label">Full Name</span>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <input class="form-control" name="checkin" type="date"
                                                            required="">
                                                        <span class="form-label">Check In</span>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <input class="form-control" name="checkout" type="date"
                                                            required="">
                                                        <span class="form-label">Check out</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <select class="form-control" name="roomtype" required="">
                                                            <option value="" selected="" hidden="">Romm Types</option>
                                                            <option>SUPERIOR ROOM</option>
                                                            <option>PREMIER SUITE</option>
                                                            <option>PLATINUM SUITE</option>
                                                        </select>
                                                        <span class="select-arrow"></span>
                                                        <span class="form-label">Rooms</span>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <select class="form-control" name="adult" required="">
                                                            <option value="" selected="" hidden="">No of Adults</option>
                                                            <option>1</option>
                                                            <option>2</option>
                                                            <option>3</option>
                                                        </select>
                                                        <span class="select-arrow"></span>
                                                        <span class="form-label">Adults</span>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <select class="form-control" name="children" required="">
                                                            <option value="" selected="" hidden="">No of Children
                                                            </option>
                                                            <option>0</option>
                                                            <option>1</option>
                                                            <option>2</option>
                                                        </select>
                                                        <span class="select-arrow"></span>
                                                        <span class="form-label">Children</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <input class="form-control" type="email" name="email"
                                                            placeholder="Enter your Email">
                                                        <span class="form-label">Email</span>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <input class="form-control" type="number" name="number"
                                                            placeholder="Enter you Phone">
                                                        <span class="form-label">Phone</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-btn">
                                                <button class="submit-btn">Book Now</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <!-- Footer -->
            <?php include ('asset/footer.html');?>




            <script src="js/jquery.min.js" type="text/javascript"></script>
            <script type="text/javascript">
                $('.form-control').each(function () {
                    floatedLabel($(this));
                });

                $('.form-control').on('input', function () {
                    floatedLabel($(this));
                });

                function floatedLabel(input) {
                    var $field = input.closest('.form-group');
                    if (input.val()) {
                        $field.addClass('input-not-empty');
                    } else {
                        $field.removeClass('input-not-empty');
                    }
                }
            </script>
            <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
                integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
                crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
                integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
                crossorigin="anonymous"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
                integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
                crossorigin="anonymous"></script>

                
                <!-- from calander -->
            <script async="" src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"
                type="text/javascript"></script>
            <script type="text/javascript">
                window.dataLayer = window.dataLayer || [];
                function gtag() { dataLayer.push(arguments); }
                gtag('js', new Date());

                gtag('config', 'UA-23581568-13');
            </script>
            <!---------------->

</body>

</html>