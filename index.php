<?php

session_start();

include("includes/db.php");
include("includes/header.php");
include("functions/functions.php");
include("includes/main.php");

?>


  <!-- Cover -->
  <main>
    <div class="hero">
      <a href="shop.php" class="btn1">View all products
</a>
    </div>
    <!-- Main -->
    <div class="wrapper">
            <h1>Featured Collection<h1>
            
      </div>



    <div id="content" class="container"><!-- container Starts -->

    <div class="row"><!-- row Starts -->

    <?php

    getPro();

    ?>

    </div><!-- row Ends -->

    </div><!-- container Ends -->
    <!-- FOOTER -->
    <footer class="page-footer">

      <div class="footer-nav">
        <div class="container clearfix">

          <div class="footer-nav__col footer-nav__col--info">
            <div class="footer-nav__heading">Information</div>
            <ul class="footer-nav__list">
              <li class="footer-nav__item">
                <a href="https://academia.srmist.edu.in/" class="footer-nav__link">The brand</a>
              </li>
              <li class="footer-nav__item">
                <a href="https://www.google.com/search?q=local+store&safe=active&sxsrf=ALeKk03zJJ2yoa-1QoigChnZeRHZ-ZdJ6Q:1620378551909&source=lnms&tbm=isch&sa=X&ved=2ahUKEwjO0PO_nLfwAhUX7HMBHe1oDb0Q_AUoAnoECAMQBA&biw=1396&bih=686" class="footer-nav__link">Local stores</a>
              </li>
              <li class="footer-nav__item">
                <a href="contact.php" class="footer-nav__link">Customer service</a>
              </li>
              <li class="footer-nav__item">
                <a href="terms.php" class="footer-nav__link">Privacy &amp; cookies</a>
              </li>
              <li class="footer-nav__item">
                <a href="https://goo.gl/maps/qWmDWwvvGN72XhLs8" class="footer-nav__link">Site map</a>
              </li>
            </ul>
          </div>

          <div class="footer-nav__col footer-nav__col--whybuy">
            <div class="footer-nav__heading">Why buy from us</div>
            <ul class="footer-nav__list">
              <li class="footer-nav__item">
                <a href="contact.php" class="footer-nav__link">Shipping &amp; returns</a>
              </li>
              <li class="footer-nav__item">
                <a href="terms.php" class="footer-nav__link">Secure shipping</a>
              </li>
              <li class="footer-nav__item">
                <a href="terms.php" class="footer-nav__link">Testimonials</a>
              </li>
              <li class="footer-nav__item">
                <a href="https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.indiatoday.in%2Findia%2Fstory%2Fislamic-nations-that-honoured-pm-modi-with-highest-civilian-award-1591334-2019-08-25&psig=AOvVaw2i86IY87JlqtEDRykir1Np&ust=1620465454951000&source=images&cd=vfe&ved=0CAIQjRxqFwoTCKiz27Cet_ACFQAAAAAdAAAAABAD" class="footer-nav__link">Award winning</a>
              </li>
              <li class="footer-nav__item">
                <a href="images/stonks.jpg" class="footer-nav__link">Ethical trading</a>
              </li>
            </ul>
          </div>

          <div class="footer-nav__col footer-nav__col--account">
            <div class="footer-nav__heading">Your account</div>
            <ul class="footer-nav__list">
              <li class="footer-nav__item">
                <a href="checkout.php" class="footer-nav__link">Sign in</a>
              </li>
              <li class="footer-nav__item">
                <a href="customer_register.php" class="footer-nav__link">Register</a>
              </li>
              <li class="footer-nav__item">
                <a href="cart.php" class="footer-nav__link">View cart</a>
              </li>
              <li class="footer-nav__item">
                <a href="customer/my_account.php?my_wishlist" class="footer-nav__link">View your lookbook</a>
              </li>
              <li class="footer-nav__item">
                <a href="customer/my_account.php?my_orders" class="footer-nav__link">Track an order</a>
              </li>
              <li class="footer-nav__item">
                <a href="customer/my_account.php?edit_account" class="footer-nav__link">Update information</a>
              </li>
            </ul>
          </div>


          <div class="footer-nav__col footer-nav__col--contacts">
            <div class="footer-nav__heading">Contact details</div>
            <address class="address">
            Head Office: SRM<br>
            CORONA KE TIME CLASS KYU RUKH TE HO
          </address>
            <div class="phone">
              Telephone:
              <a class="phone__number" href="tel:0123456789">0123-456-789</a>
            </div>
            <div class="email">
              Email:
              <a href="mailto:support@yourwebsite.com" class="email__addr">support@yourwebsite.com</a>
            </div>
          </div>

        </div>
      </div>

      <div class="banners">
        <div class="container clearfix">

          <div class="banner-award">
            <span>Award winner</span><br> Fashion awards 2016
          </div>

          <div class="banner-social">
            <a href="#" class="banner-social__link">
            <i class="icon-facebook"></i>
          </a>
            <a href="#" class="banner-social__link">
            <i class="icon-twitter"></i>
          </a>
            <a href="#" class="banner-social__link">
            <i class="icon-instagram"></i>
          </a>
            <a href="#" class="banner-social__link">
            <i class="icon-pinterest-circled"></i>
          </a>
          </div>

        </div>
      </div>

      <div class="page-footer__subline">
        <div class="container clearfix">

          <div class="copyright">
            &copy; 1947 SrmKart&trade;
          </div>

          <div class="developer">
            Dev by Ritish Chaudhary
          </div>

          <div class="designby">
            Design by Ritish Chaudhary
          </div>

        </div>
      </div>
    </footer>
</body>

</html>
