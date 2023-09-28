<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DHI</title>
    <!-- meta des -->
    <meta name="keywords" content="DHI">
    <meta name="description" content="DHI">
    <meta property="og:title" content="">
    <meta property="og:image" content="">
    <meta property="og:description" content="DHI">
    <!------------Website Theme Color---------------------->
    <!-- Chrome, Firefox OS and Opera -->
    <meta name="theme-color" content="#3A8291">
    <!-- Windows Phone -->
    <meta name="msapplication-navbutton-color" content="#3A8291">
    <!-- iOS Safari -->
    <meta name="apple-mobile-web-app-status-bar-style" content="#3A8291">
    <!---------------------- favicon ---------------------->
    <link rel="icon" href="assets/images/favicon.png">
    <!---------------------- css ---------------------->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/stylesheet.css">
  </head>

  <body>
    <div class="wrapper">
    <!---------------------header------------------------>
      <!------------  header ----------->
        <?php include 'header.php';?>
        <!------------ // header ----------->


    <!-------------------- thanks banner --------------->
      <section class="custom-breadcrumbs thank-you">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12">
                    <div class="breadcrumbs-content">
                      <h1></h1>  
                    </div>
                </div>
            </div>
        </div>
      </section>
    <!--------------------// thanks banner ------------->

    <!------------------ thanks ------------------>
      <section class="thanks p-top50 p-bottom50">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 offset-sm-3">
                    <div class="thanks-content custom-center light-grey p-top50 p-bottom50">
                        <h1>THANK YOU!</h1>
                        <p class="custom-p">For filling out your information!</p>
                        <div class="custom-center">
                            <a href="/" class="btn btn-req">Go Home</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      </section>
    <!-----------------//company overview ----------------->
  
    <!---------------------footer------------------------->
      <?php include 'footer.php';?>

      <!----------------------------//footer---------------->
      <!-----back to top html------>
      <a id="back2Top" title="Back to top" href="#" style="display: none;"><i class="icofont-swoosh-up back-to-i"></i></a>
    </div><!-- wrapper end -->
    <!----------------------js----------------->
    <script src="assets/js/jquery-3.7.0.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/custom.js"></script>
    <script src="assets/js/custom/script.js"></script>
    <!------------------back to top-------------->
    <script>
      $(window).scroll(function() {
        var height = $(window).scrollTop();
        if (height > 100) {
          $('#back2Top').fadeIn();
        } else {
          $('#back2Top').fadeOut();
        }
      });
      $(document).ready(function() {
        $("#back2Top").click(function(event) {
          event.preventDefault();
          $("html, body").animate({
            scrollTop: 0
          }, "slow");
          return false;
        });
      });
    </script>
    <!------------------//back to top-------------->
 
  </body>
</html>