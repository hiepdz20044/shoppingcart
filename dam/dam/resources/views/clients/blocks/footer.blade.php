@section('footer')
   <!-- footer area start  -->
   <footer data-background="" class="footer2-bg">
    <section class="footer-area footer-area2 footer-area2-bg pt-95 pb-55">
       <div class="container">
          <div class="row">
             <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 order-xl-1">
                <div class="footer-widget footer2-widget footer2-widget1 mb-40">
                   <div class="footer-widget-logo mb-20">
                      <a href="index.html"><img src="{{ asset('assets/clients/img/logo/logo-2-w.png') }}" alt="img"></a>
                   </div>
                   <p class="mb-20">Ecomart is a fashion theme for presents a complete wardrobe of uniquely crafted
                      Ethnic
                      Wear, Casuals, Edgy Denims, &
                      Accessories inspired from the most contemporary</p>
                   <div class="social__links social-border">
                      <ul>
                         <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                         <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                         <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                         <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                      </ul>
                   </div>
                </div>
             </div>
             <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 order-xl-5">
                <div class="footer-widget footer2-widget footer2-widget5 mb-40 ">
                   <div class="footer-widget-title">
                      <h4>Newsletter</h4>
                   </div>
                   <p class="mb-20">Enter your email below to be the first to know about
                      new collections and product launches.</p>
                   <form action="#" class="subscribe-form subscribe-form-footer2">
                      <input type="text" placeholder="Enter your email">
                      <button type="submit">Subscribe Now<i class="fas fa-long-arrow-right"></i></button>
                   </form>
                </div>
             </div>
             <div class="col-xl-2 col-lg-4 col-md-6 col-sm-6 order-xl-2">
                <div class="footer-widget footer2-widget footer2-widget2 mb-40">
                   <div class="footer-widget-title">
                      <h4>Category</h4>
                   </div>
                   <ul>
                      <li><a href="#">Handbags & Wallets</a></li>
                      <li><a href="#">Women's Clothing</a></li>
                      <li><a href="#">Plus Sizes</a></li>
                      <li><a href="#">Complete Your Look</a></li>
                      <li><a href="#">Baby Corner</a></li>
                      <li><a href="#">Man & Woman Shoe</a></li>
                   </ul>
                </div>
             </div>
             <div class="col-xl-2 col-lg-4 col-md-6 col-sm-6 order-xl-3">
                <div class="footer-widget footer2-widget footer2-widget3 mb-40">
                   <div class="footer-widget-title">
                      <h4>Information</h4>
                   </div>
                   <ul>
                      <li><a href="#">About Company</a></li>
                      <li><a href="#">Payment Type</a></li>
                      <li><a href="#">Awards Winning</a></li>
                      <li><a href="#">World Media Partner</a></li>
                      <li><a href="#">Become an Agent</a></li>
                      <li><a href="#">Refund Policy</a></li>
                   </ul>
                </div>
             </div>
             <div class="col-xl-2 col-lg-4 col-md-6 col-sm-6 order-xl-4">
                <div class="footer-widget footer2-widget footer2-widget4 mb-40 ">
                   <div class="footer-widget-title">
                      <h4>Help & Support</h4>
                   </div>
                   <ul>
                      <li><a href="#">Dealers & Agents</a></li>
                      <li><a href="#">FAQ Information</a></li>
                      <li><a href="#">Return Policy</a></li>
                      <li><a href="#">Shipping & Delivery</a></li>
                      <li><a href="#">Order Tranking</a></li>
                      <li><a href="#">List of Shops</a></li>
                   </ul>
                </div>
             </div>
          </div>
       </div>
    </section>
    <div class="copyright-area copyright2-area">
       <div class="container">
          <div class="copyright2-inner">
             <div class="copyright-text copyright2-text">
                Copyright by <a href="https://themeforest.net/user/bdevs/portfolio">BDevs</a>. All Rights Reserved
             </div>
             <div class="copyright-link">
                <a href="#" class="text-btn">Privacy Policy</a>
                <a href="#" class="text-btn">Terms & Conditions</a>
                <a href="#" class="text-btn">Sitemap</a>
             </div>
             <div class="cards-wrapper">
                <p>We Support</p>
                <div class="card-links">
                   <ul>
                      <li><a href="#"><img src="{{ asset('assets/clients/img/cards/card-1.png') }}" alt="card-img"></a></li>
                      <li><a href="#"><img src="{{ asset('assets/clients/img/cards/card-2.png') }}" alt="card-img"></a></li>
                      <li><a href="#"><img src="{{ asset('assets/clients/img/cards/card-3.png') }}" alt="card-img"></a></li>
                      <li><a href="#"><img src="{{ asset('assets/clients/img/cards/card-4.png') }}" alt="card-img"></a></li>
                   </ul>
                </div>
             </div>
          </div>
       </div>
    </div>
 </footer>
 <!-- footer area end  -->

 <!-- pre loader area start -->
 <div id="loading">
    <div id="loading-center">
       <div id="loading-center-absolute">
          <div class="loading-icon text-center d-flex flex-column align-items-center justify-content-center">
             <img src="{{ asset('assets/clients/img/logo/logo-text.png') }}" alt="logo-img">
             <img class="loading-logo" src="{{ asset('assets/clients/img/logo/preloader.svg" alt="img">
          </div>
       </div>
    </div>
 </div>
 <!-- pre loader area end -->

 <!-- back to top start -->
 <div class="progress-wrap">
    <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
       <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
    </svg>
 </div>
 <!-- back to top end -->
 @endsection