<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

       <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/mbr-additional.css" type="text/css">
    <link rel="canonical" href="https://getbootstrap.com/docs/4.1/examples/carousel/">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
      
    <title>Dining</title>
  </head>
  <body >

    <!-- Navigation Bar --> 
    <?php include ('asset/headder.html');?>

    <br><br>
 
    <hr>
 <div class="container-fluid animated fadeInRight"> <!--all animation statrt when tha page load -->
    <div class="row">
        <div class="col-sm-12">
            <h2 class="font1">Dining At Lagoon Villa Resort</h2>
        </div>
        
    </div>
    <div class="row">
        <div class="container" style="position:relate">
            <img style=";" class="carousel-item active" src="Img/dining_ban.jpg">
        </div>
    </div>
    <br>
</div>
<div class="container animated fadeInLeft">
    <br>
    <h2 class="font1"> At Hotel</h2>
    <div class="row">
        <br><br>
        <div class="col-sm-6">           
            <h3 class="font2">Dining Services</h3>

            Bar-B-Q and/or picnic area<br>
            Room service, 24-hour<br>
            Room service<br>
        </div>
        <div class="col-sm-6">
            <h3 class="font2">Breakfast</h3>            
            Buffet breakfast, fee from 16.00 USD<br>

            Continental breakfast, fee from 16.00 USD<br>

            Full American breakfast, fee from 16.00 USD<br>
        </div>
    </div>
</div>





<hr>    
<?php include ('asset/footer.html');?>
 
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

   <!-- JavaScript for animated fadeInUp using wow-->
   <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.js"></script>
    <script>
        var wow = new WOW(
      {
        boxClass:     'wow',      // animated element css class (default is wow)
        animateClass: 'animated', // animation css class (default is animated)
        offset:       -250,          // distance to the element when triggering the animation (default is 0)
        mobile:       true,       // trigger animations on mobile devices (default is true)
        live:         true,       // act on asynchronously loaded content (default is true)
        callback:     function(box) {
          // the callback is fired every time an animation is started
          // the argument that is passed in is the DOM node being animated
        },
        scrollContainer: null,    // optional scroll container selector, otherwise use window,
        resetAnimation: true,     // reset animation on end (default is true)
      }
    );
    wow.init();
	</script>
</body>
</html>
