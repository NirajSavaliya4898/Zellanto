<?php include("header.php"); ?>
    <!-- Top Bar -->
    <?php include("topbar.php");?>
    <!-- Navbar -->
    <?php include("navbar.php");?>
    <div class="contact-page">
      <!-- Breadcrumb -->
      <div class="container">
        <div>&nbsp;</div>
        <ol class="breadcrumb">
          <li class="breadcrumb-item text-uppercase"> <a href="index.php" class="text-primary">Home</a></li>
          <li class="breadcrumb-item text-uppercase"> <a href="cart.php" class="text-primary">Add Cart</a></li>
          <li class="breadcrumb-item active text-uppercase"><a href="order.php" class="text-primary">Order</a></li>
          <li class="breadcrumb-item active text-uppercase">Payment</li>
        </ol>
      </div>
      <!-- Contact page-->
       <br>
        <div id="payment-form" class="container payment-form">
            <div class="row">
                <div class="col-md-8 offset-md-2">
                    <div class="form">
                        <div class="note">
                            <p>Payment</p>
                        </div>
                        <div class="panel-body">
                            <!-- <form action="orderprocess.php"> -->
                                    <?php
                                    if(isset($_SESSION['cart']))
                                    {
                                    $total = 0;
                                    foreach ($_SESSION['cart'] as $key => $value){
                                    $total = $total + $value['cart_total'];
                                   }
                                   }?>
                                    <div class="col-md-12"><strong>Card Type:</strong></div>
                                            <div class="col-md-12">
                                                <select id="CreditCardType" required="" name="CreditCardType" class="form-control">
                                                    <option value="5">Visa</option>
                                                    <option value="6">MasterCard</option>
                                                    <option value="7">American Express</option>
                                                    <option value="8">Discover</option>
                                                </select>
                                            </div>
                                            <div class="col-md-12"><strong>Credit Card Number:</strong></div>
                                            <div class="col-md-12"><input type="text" required="" class="form-control" name="car_number" value="" /></div>
                                            <div class="col-md-12"><strong>Card CVV:</strong></div>
                                            <div class="col-md-12"><input type="text" required="" class="form-control" name="car_code" value="" /></div>
                                            <div class="col-md-12">
                                                <strong>Expiration Date</strong>
                                            </div>
                                            <div class="col-md-6">
                                                <select class="form-control" required="" name="">
                                                    <option value="">Month</option>
                                                    <option value="01">01</option>
                                                    <option value="02">02</option>
                                                    <option value="03">03</option>
                                                    <option value="04">04</option>
                                                    <option value="05">05</option>
                                                    <option value="06">06</option>
                                                    <option value="07">07</option>
                                                    <option value="08">08</option>
                                                    <option value="09">09</option>
                                                    <option value="10">10</option>
                                                    <option value="11">11</option>
                                                    <option value="12">12</option>
                                            </select><br/>
                                            <select class="form-control" required="" name="">
                                                    <option value="">Year</option>
                                                    <option value="2015">2015</option>
                                                    <option value="2016">2016</option>
                                                    <option value="2017">2017</option>
                                                    <option value="2018">2018</option>
                                                    <option value="2019">2019</option>
                                                    <option value="2020">2020</option>
                                                    <option value="2021">2021</option>
                                                    <option value="2022">2022</option>
                                                    <option value="2023">2023</option>
                                                    <option value="2024">2024</option>
                                                    <option value="2025">2025</option>
                                            </select>
                                            </div><br/>
                                            <div class="col-md-12">
                                                <span>Pay secure using your credit card.</span>
                                            </div>
                                            <div class="col-md-12">
                                                <img src="../zellanto/img/payment.png" class="img-responsive" alt="emptycart" class="img-fluid">
                                                <div class="clearfix"></div>
                                            </div><br/>
                                            <div class="col-md-12" align="right">
                                                <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
                                                <input type="hidden" name="cmd" value="_s-xclick" />
                                                <input type="hidden" name="hosted_button_id" value="RLVM6MJFNSZUY" />
                                                <button type="submit" class="btn btn-primary btn-submit-fix" name="submit" title="PayPal - The safer, easier way to pay online!" alt="Pay with PayPal button"> Pay <i class='fa fa-inr'>  <?php echo $ftot= number_format($total+$total*6/100+$total*6/100,2); ?></i></button>
                                                <!-- <input type="image" height="40px" width="100px" src="../zellanto/img/pay_button.png" border="0" name="submit" title="PayPal - The safer, easier way to pay online!" alt="Pay with PayPal button" /> -->
                                                <!-- <img alt="" border="0" src="https://www.paypal.com/en_IN/i/scr/pixel.gif" width="1" height="1" /> -->
                                                </form> 
                                            </div><br/>
                                </div>
                                <!-- </form> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
              
<style type="text/css">
.note
{
    text-align: center;
    height: 80px;
    background: -webkit-linear-gradient(left, #000000 , #b1b4bb);
    color: #fff;
    font-weight: bold;
    line-height: 80px;
}
.form-content
{
    padding: 5%;
    border: 1px solid #ced4da;
    margin-bottom: 2%;
}
.form-control{
    border-radius:1.5rem;
}
.btnSubmit
{
    border:none;
    border-radius:1.5rem;
    padding: 1%;
    width: 20%;
    cursor: pointer;
    background: #0062cc;
    color: #fff;
}
</style>

    <!-- Search Panel-->
    <?php include("searchpanel.php");?>
    <!-- Footer-->
    <?php include("footer.php");?>