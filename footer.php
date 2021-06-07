<footer class="main-footer">
      <div class="page-links">
        <div class="container">
          <div class="row">
            <div class="col-lg-3 col-sm-6">
              <h3>Information</h3>
              <ul class="list-unstyled">
                <li> <a href="index.php">Home</a></li>
                <li> <a href="page.php?page-id=5">About Us</a></li>
                <li> <a href="page.php?page-id=1">Treams And Conditions</a></li>
                <li> <a href="page.php?page-id=2">Privacy policy</a></li>
                <li> <a href="page.php?page-id=3">Shipping Policy</a></li>
                <li> <a href="page.php?page-id=4">Return & Refund Policy</a></li>
              </ul>
            </div>
            <div class="col-lg-3 col-sm-6">
              <h3>Categories</h3>
              <ul class="list-unstyled">
                <li> <a href="Camera.php">Cameras</a></li>
                <li> <a href="lenses.php">Lenses</a></li>
                <li> <a href="accessories.php">Accessories</a></li>
              </ul>
            </div>
            <div class="col-lg-2 col-sm-6">
              <h3>My Profile</h3>
              <ul class="list-unstyled">
                <li> <a href="myprofile.php">My Profile</a></li>
                <li> <a href="myprofile_edit.php">Update Profile</a></li>
                <li> <a href="myprofile_edit.php">Change password</a></li>
                <li> <a href="#">Order history</a></li>
                <li> <a href="wishlist.php">Wishlist</a></li>
              </ul>
            </div>
            <div class="col-lg-4 col-sm-6 details js-pull">
              <ul class="list-unstyled">
                <li class="d-flex align-items-center">
                  <div class="icon"><i class="icon-delivery-truck"></i></div>
                  <div class="text"> 
                    <h3>Free Shipping Worldwide</h3>
                    <p>On orders over $200</p>
                  </div>
                </li>
                <li class="d-flex align-items-center">
                  <div class="icon"><i class="icon-dollar-symbol"></i></div>
                  <div class="text"> 
                    <h3>30 days money back</h3>
                    <p>Money back guarantee</p>
                  </div>
                </li>
                <li class="d-flex align-items-center">
                  <div class="icon"><i class="icon-phone-call"></i></div>
                  <div class="text"> 
                    <h3>Phone: 75677-16693</h3>
                    <p>Contact with us</p>
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="copyrights">
        <div class="container">
          <div class="row">
            <div class="col-sm-6">
              <p>&copy; 2019 <span class="text-primary">Zellanto.com  </span>All rights reserved.</p>
            </div>
            <div class="col-sm-6 text-right">
              <p>Power by <a href="https://Zellanto.com/" target="_blank">Itsoul</a></p>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <!-- JavaScript files-->
      <!-- <script src="./vendor/jquery/jquery.min.js"></script> -->
      <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js" type="text/javascript"></script>
      <!-- <script src="./vendor/popper.js/umd/popper.min.js"> </script> --> 
    <script src="./vendor/jquery.cookie/jquery.cookie.js"> </script>
    <script src="./vendor/owl.carousel/owl.carousel.min.js"></script>
    <script src="./vendor/owl.carousel2.thumbs/owl.carousel2.thumbs.min.js"></script>
    <script src="./vendor/jquery-validation/jquery.validate.min.js"></script>
    <script src="./js/front.js"></script>
   <!--  <script src="./vendor/nouislider/nouislider.min.js"></script> -->
    <script src="js/jquery.easydropdown.js"></script>
    <script type="text/javascript" src="js/memenu.js"></script>
    <script src="js/simpleCart.min.js"> </script>
    <script defer src="js/jquery.flexslider.js"></script>
    <!-- <script>$('#myCarousel').carousel({
    interval: 4000
    })</script> -->
   <!--  <script>
      var snapSlider = document.getElementById('slider-snap');
      
      noUiSlider.create(snapSlider, {
        start: [ 40, 110 ],
        snap: false,
        connect: true,
          step: 1,
        range: {
          'min': 0,
          'max': 250
        }
      });
      var snapValues = [
        document.getElementById('slider-snap-value-lower'),
        document.getElementById('slider-snap-value-upper')
      ];
      snapSlider.noUiSlider.on('update', function( values, handle ) {
        snapValues[handle].innerHTML = values[handle];
      });
    </script> -->

<script type="text/javascript">
  $(function() {
  
      var menu_ul = $('.menu_drop > li > ul'),
             menu_a  = $('.menu_drop > li > a');
      
      menu_ul.hide();
  
      menu_a.click(function(e) {
          e.preventDefault();
          if(!$(this).hasClass('active')) {
              menu_a.removeClass('active');
              menu_ul.filter(':visible').slideUp('normal');
              $(this).addClass('active').next().stop(true,true).slideDown('normal');
          } else {
              $(this).removeClass('active');
              $(this).next().stop(true,true).slideUp('normal');
          }
      });
  
  });
</script>
<script>
$(document).ready(function(){

$(".memenu").memenu();
  
  $(".plus-btn").click(function(){

    var key = $(this).attr("data");
    var qty = $("#cart_qty").val();
    $.ajax({
      type: "POST",
      url : "process.php",
      data : { "action" : "update_cart", "key" : key,"qty" : qty, "btn" : "plus" },
      dataType: 'JSON',
      success:function(data){
        $("#cart_total_" + data.key).html(data.total_price);
      }
    })

  })

  // Minus Logic

  $(".minus-btn").click(function(){

    var key = $(this).attr("data");
    var qty = $("#cart_qty").val();
    $.ajax({
      type: "POST",
      url : "process.php",
      data : { "action" : "update_cart", "key" : key,"qty" : qty, "btn" : "minus" },
      dataType: 'JSON',
      success:function(data){
        $("#cart_total_" + data.key).html(data.total_price);
      }
    })

  })

});
</script>

    <!-- create your own Maps API Key for production use, this one is domain-restricted-->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBu5nZKbeK-WHQ70oqOWo-_4VmwOwKP9YQ"></script>
  </body>
</html>    
    