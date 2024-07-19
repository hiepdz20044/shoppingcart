@extends('layouts.client')
@section('content')
<!-- banner area start  -->
<div class="banner-area banner-area2 pos-rel">
   <div class="swiper-container slider__active">
      <div class="swiper-wrapper">
         <div class="swiper-slide">
            <div class="single-banner single-banner-2 banner-800 d-flex align-items-center pos-rel">
               <div class="banner-bg banner-bg2 banner-bg2-1" data-background="assets/clients/img/banner/banner-2-1.jpg">
               </div>
               <div class="container pos-rel">
                  <div class="row align-items-center">
                     <div class="col-lg-10 col-md-10">
                        <div class="banner-content banner-content2 banner-content2-1 pt-0">
                           <div class="banner-meta-text" data-animation="fadeInUp" data-delay=".3s">
                              <!-- <span>Fashion Everyday</span> -->
                           </div>
                           <h1 class="banner-title" data-animation="fadeInUp" data-delay=".5s">
                              <br>
                              <!-- Shop -->
                           </h1>
                           <div class="banner-btn" data-animation="fadeInUp" data-delay=".7s">
                              <!-- <a href="shop.html" class="border-btn">Shop Now</a> -->
                           </div>
                        </div>
                     </div>
                     <div class="col-lg-2 col-md-2">
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="swiper-slide">
            <div class="single-banner single-banner-2 banner-800 d-flex align-items-center pos-rel">
               <div class="banner-bg banner-bg2 banner-bg2-1" data-background="{{ asset('assets/clients/img/banner/banner-2-2.jpg') }}">
               </div>
               <div class="container pos-rel">
                  <div class="row align-items-center">
                     <div class="col-lg-10 col-md-10">
                        <div class="banner-content banner-content2 banner-content2-2 pt-0">
                           <div class="banner-meta-text" data-animation="fadeInUp" data-delay=".3s">
                              <!-- <span>Fashion Everyday</span> -->
                           </div>
                           <!-- <h1 class="banner-title" data-animation="fadeInUp" data-delay=".5s">
                              Winter Exclusive
                              Collection</h1> -->
                           <div class="banner-btn" data-animation="fadeInUp" data-delay=".7s">
                              <!-- <a href="shop.html" class="border-btn">Shop Now</a> -->
                           </div>
                        </div>
                     </div>
                     <div class="col-lg-2 col-md-2">
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="swiper-slide">
            <div class="single-banner single-banner-2 banner-800 d-flex align-items-center pos-rel">
               <div class="banner-bg banner-bg2 banner-bg2-1" data-background="{{ asset('assets/clients/img/banner/banner-2-3.jpg') }}">
               </div>
               <div class="container pos-rel">

                  <div class="row align-items-center">
                     <div class="col-lg-2 col-md-2"></div>
                     <div class="col-lg-10 col-md-10">
                        <div class="banner-content banner-content2 banner-content2-3 pt-0">

                           <div class="banner-meta-text" data-animation="fadeInUp" data-delay=".3s">
                              <!-- <span>Fashion Everyday</span> -->
                           </div>
                           <!-- <h1 class="banner-title" data-animation="fadeInUp" data-delay=".5s">
                              Stylist Sunglass
                              For Hot Guy</h1> -->
                           <div class="banner-btn" data-animation="fadeInUp" data-delay=".7s">
                              <!-- <a href="shop.html" class="border-btn">Shop Now</a> -->
                           </div>
                           <!-- <div class="banner-pricing" data-animation="fadeIn" data-delay=".7s">
                              Exclusively
                              <span class="price-now">£89</span>
                           </div> -->
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- If we need navigation buttons -->
      <div class="slider-nav d-none">
         <div class="slider-button-prev"><i class="fal fa-long-arrow-left"></i></div>
         <div class="slider-button-next"><i class="fal fa-long-arrow-right"></i></div>
      </div>
      <div class="slider2-pagination-container">
         <div class="container">
            <!-- If we need pagination -->
            <div class="slider-pagination slider2-pagination"></div>
         </div>
      </div>
   </div>
</div>
<!-- banner area end  -->
<!-- product area start  -->
<section class="product-area pt-120 pb-120">
    <div class="container">
       <div class="row justify-content-center">
          <div class="col-xl-8">
             <div class="section-title text-center">
                <h2 class="section-main-title mb-35">Products Group</h2>
             </div>
          </div>
       </div>
       <div class="product-tab-wrapper">
          <div class="product-tab-nav mb-60">
             <nav>
                <div class="nav nav-tabs" id="nav-tab" role="tablist">

                   
                
                   <a href="inde">All</a>
                </div>

             </nav>
          </div>
          <form action="" method="POST">
             <input type="hidden" name="id" value="''">
          </form>
          <div class="product-tab-content">
             <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade show active" id="nav-1" role="tabpanel" aria-labelledby="nav-1-tab">
                   <div class="products-wrapper">
                      <!-- <a href="cart.html" class="add-cart-btn"><i class="fal fa-shopping-bag"></i>Add toCart</a> -->
                      
                     
                   </div>
                </div>
                <div class="tab-pane fade" id="nav-2" role="tabpanel" aria-labelledby="nav-2-tab">
                   <div class="products-wrapper">

                      <div class="single-product">
                         <div class="product-image pos-rel">
                            <a href="shop-details.html" class=""><img src="{{ asset('assets/clients/img/pant/1/1.jpg') }}" alt="img"></a>
                            <div class="product-action">
                               <a href="#" class="quick-view-btn"><i class="fal fa-eye"></i></a>
                               <a href="#" class="wishlist-btn"><i class="fal fa-heart"></i></a>
                               <a href="#" class="compare-btn"><i class="fal fa-exchange"></i></a>
                            </div>
                            <div class="product-action-bottom">
                               <a href="cart.html" class="add-cart-btn"><i class="fal fa-shopping-bag"></i>Add to
                                  Cart</a>
                            </div>

                         </div>
                         <div class="product-desc">
                            <div class="product-name"><a href="shop-details.html">Skinny Jeans Pant</a></div>
                            <div class="product-price">
                               <span class="price-now">£45.00</span>
                            </div>
                            <ul class="product-color-nav">
                               <li class="cl-navy active">
                                  <img src="{{ asset('assets/clients/img/pant/1/1.jpg') }}" alt="img">
                               </li>
                               <li class="cl-light-white">
                                  <img src="{{ asset('assets/clients/img/pant/1/4.jpg') }}" alt="img">
                               </li>
                            </ul>
                         </div>
                      </div>
                      <div class="single-product">
                         <div class="product-image pos-rel">
                            <a href="shop-details.html" class=""><img src="{{ asset('assets/clients/img/pant/2/1.jpg') }}" alt="img"></a>
                            <div class="product-action">
                               <a href="#" class="quick-view-btn"><i class="fal fa-eye"></i></a>
                               <a href="#" class="wishlist-btn"><i class="fal fa-heart"></i></a>
                               <a href="#" class="compare-btn"><i class="fal fa-exchange"></i></a>
                            </div>
                            <div class="product-action-bottom">
                               <a href="cart.html" class="add-cart-btn"><i class="fal fa-shopping-bag"></i>Add to
                                  Cart</a>
                            </div>
                            <div class="product-sticker-wrapper">
                               <span class="product-sticker discount"> -25%</span>
                            </div>
                         </div>
                         <div class="product-desc">
                            <div class="product-name"><a href="shop-details.html">Men's Flat-Front Shorts</a></div>
                            <div class="product-price">
                               <span class="price-now">£30.00</span>
                               <span class="price-old">£40.00</span>
                            </div>
                            <ul class="product-color-nav">
                               <li class="cl-brown active">
                                  <img src="{{ asset('assets/clients/img/pant/2/1.jpg') }}" alt="img">
                               </li>
                               <li class="cl-ash">
                                  <img src="{{ asset('assets/clients/img/pant/2/3.jpg') }}" alt="img">
                               </li>
                               <li class="cl-navy">
                                  <img src="{{ asset('assets/clients/img/pant/2/5.jpg') }}" alt="img">
                               </li>
                            </ul>
                         </div>
                      </div>
                      <div class="single-product">
                         <div class="product-image pos-rel">
                            <a href="shop-details.html" class=""><img src="{{ asset('assets/clients/img/shoe/1.jpg') }}" alt="img"></a>
                            <div class="product-action">
                               <a href="#" class="quick-view-btn"><i class="fal fa-eye"></i></a>
                               <a href="#" class="wishlist-btn"><i class="fal fa-heart"></i></a>
                               <a href="#" class="compare-btn"><i class="fal fa-exchange"></i></a>
                            </div>
                            <div class="product-action-bottom">
                               <a href="cart.html" class="add-cart-btn"><i class="fal fa-shopping-bag"></i>Add to
                                  Cart</a>
                            </div>
                         </div>
                         <div class="product-desc">
                            <div class="product-name"><a href="shop-details.html">Eastland Lumber Up Boots</a>
                            </div>
                            <div class="product-price">
                               <span class="price-now">£38.00</span>
                            </div>
                         </div>
                      <div class="single-product">
                         <div class="product-image pos-rel">
                            <a href="shop-details.html" class=""><img src="{{ asset('assets/clients/img/product/800_1034/Image-4-1.jpg') }}" alt="img"></a>
                            <div class="product-action">
                               <a href="#" class="quick-view-btn"><i class="fal fa-eye"></i></a>
                               <a href="#" class="wishlist-btn"><i class="fal fa-heart"></i></a>
                               <a href="#" class="compare-btn"><i class="fal fa-exchange"></i></a>
                            </div>
                            <div class="product-action-bottom">
                               <a href="cart.html" class="add-cart-btn"><i class="fal fa-shopping-bag"></i>Add to
                                  Cart</a>
                            </div>
                         </div>
                         <div class="product-desc">
                            <div class="product-name"><a href="shop-details.html">Women's Faux-Trim Shirt</a></div>
                            <div class="product-price">
                               <span class="price-now">£84.00</span>
                            </div>
                         </div>
                      </div>
                      <div class="single-product">
                         <div class="product-image pos-rel">
                            <a href="shop-details.html" class=""><img src="{{ asset('assets/clients/img/product/800_1034/Image-16-1.jpg') }}" alt="img"></a>
                            <div class="product-action">
                               <a href="#" class="quick-view-btn"><i class="fal fa-eye"></i></a>
                               <a href="#" class="wishlist-btn"><i class="fal fa-heart"></i></a>
                               <a href="#" class="compare-btn"><i class="fal fa-exchange"></i></a>
                            </div>
                            <div class="product-action-bottom">
                               <a href="cart.html" class="add-cart-btn"><i class="fal fa-shopping-bag"></i>Add to
                                  Cart</a>
                            </div>
                            <div class="product-sticker-wrapper">
                               <span class="product-sticker new">New</span>
                            </div>
                         </div>
                         <div class="product-desc">
                            <div class="product-name"><a href="shop-details.html">Soft Touch Interlock Polo</a>
                            </div>
                            <div class="product-price">
                               <span class="price-now">£45.00</span>
                            </div>
                         </div>
                      </div>
                      <div class="single-product">
                         <div class="product-image pos-rel">
                            <a href="shop-details.html" class=""><img src="{{ asset('assets/clients/img/product/product-img1.jpg') }}" alt="img"></a>
                            <div class="product-action">
                               <a href="#" class="quick-view-btn"><i class="fal fa-eye"></i></a>
                               <a href="#" class="wishlist-btn"><i class="fal fa-heart"></i></a>
                               <a href="#" class="compare-btn"><i class="fal fa-exchange"></i></a>
                            </div>
                            <div class="product-action-bottom">
                               <a href="cart.html" class="add-cart-btn"><i class="fal fa-shopping-bag"></i>Add to
                                  Cart</a>
                            </div>
                         </div>
                         <div class="product-desc">
                            <div class="product-name"><a href="shop-details.html">Ecomart Smart Watch</a></div>
                            <div class="product-price">
                               <span class="price-now">£30.00</span>
                               <span class="price-old">£38.00</span>
                            </div>
                         </div>
                      </div>
                      <div class="single-product">
                         <div class="product-image pos-rel">
                            <a href="shop-details.html" class=""><img src="{{ asset('assets/clients/img/sunglass/2.jpg') }}" alt="img"></a>
                            <div class="product-action">
                               <a href="#" class="quick-view-btn"><i class="fal fa-eye"></i></a>
                               <a href="#" class="wishlist-btn"><i class="fal fa-heart"></i></a>
                               <a href="#" class="compare-btn"><i class="fal fa-exchange"></i></a>
                            </div>
                            <div class="product-action-bottom">
                               <a href="cart.html" class="add-cart-btn"><i class="fal fa-shopping-bag"></i>Add to
                                  Cart</a>
                            </div>
                         </div>
                         <div class="product-desc">
                            <div class="product-name"><a href="shop-details.html">Ecomart Smart Glass</a></div>
                            <div class="product-price">
                               <span class="price-now">£25.00</span>
                               <span class="price-old">£39.00</span>
                            </div>
                            <ul class="product-color-nav">
                               <li class="cl-black active">
                                  <img src="{{ asset('assets/clients/img/sunglass/2.jpg') }}" alt="img">
                               </li>
                               <li class="cl-ash">
                                  <img src="{{ asset('assets/clients/img/sunglass/5.jpg') }}" alt="img">
                               </li>
                               <li class="cl-brown">
                                  <img src="{{ asset('assets/clients/img/sunglass/8.jpg') }}" alt="img">
                               </li>
                               <li class="cl-navy">
                                  <img src="{{ asset('assets/clients/img/sunglass/11.jpg') }}" alt="img">
                               </li>
                               <li class="cl-wood">
                                  <img src="{{ asset('assets/clients/img/sunglass/14.jpg') }}" alt="img">
                               </li>
                            </ul>
                         </div>
                      </div>
                      <div class="single-product">
                         <div class="product-image pos-rel">
                            <a href="shop-details.html" class=""><img src="{{ asset('assets/clients/img/shirt/2/1.jpg') }}" alt="img"></a>
                            <div class="product-action">
                               <a href="#" class="quick-view-btn"><i class="fal fa-eye"></i></a>
                               <a href="#" class="wishlist-btn"><i class="fal fa-heart"></i></a>
                               <a href="#" class="compare-btn"><i class="fal fa-exchange"></i></a>
                            </div>
                            <div class="product-action-bottom">
                               <a href="cart.html" class="add-cart-btn"><i class="fal fa-shopping-bag"></i>Add to
                                  Cart</a>
                            </div>
                         </div>
                         <div class="product-desc">
                            <div class="product-name"><a href="shop-details.html">Cotton Shirt fot Men</a></div>
                            <div class="product-price">
                               <span class="price-now">£85.00</span>
                               <span class="price-old">£99.00</span>
                            </div>
                            <ul class="product-color-nav">
                               <li class="cl-brown active">
                                  <img src="{{ asset('assets/clients/img/shirt/2/1.jpg') }}" alt="img">
                               </li>
                               <li class="cl-navy">
                                  <img src="{{ asset('assets/clients/img/shirt/2/4.jpg') }}" alt="img">
                               </li>
                               <li class="cl-ash">
                                  <img src="{{ asset('assets/clients/img/shirt/2/7.jpg') }}" alt="img">
                               </li>
                            </ul>
                         </div>
                      </div>
                      <div class="single-product">
                         <div class="product-image pos-rel">
                            <a href="shop-details.html" class=""><img src="{{ asset('assets/clients/img/product/800_1034/Image-5-1.jpg') }}" alt="img"></a>
                            <div class="product-action">
                               <a href="#" class="quick-view-btn"><i class="fal fa-eye"></i></a>
                               <a href="#" class="wishlist-btn"><i class="fal fa-heart"></i></a>
                               <a href="#" class="compare-btn"><i class="fal fa-exchange"></i></a>
                            </div>
                            <div class="product-action-bottom">
                               <a href="cart.html" class="add-cart-btn"><i class="fal fa-shopping-bag"></i>Add to
                                  Cart</a>
                            </div>
                         </div>
                         <div class="product-desc">
                            <div class="product-name"><a href="shop-details.html">Double-breasted Blazer</a></div>
                            <div class="product-price">
                               <span class="price-now">£32.00</span>
                            </div>
                         </div>
                      </div>
                      <div class="single-product">
                         <div class="product-image pos-rel">
                            <a href="shop-details.html" class=""><img src="{{ asset('assets/clients/img/product/800_1034/Image-1-1.jpg') }}" alt="img"></a>
                            <div class="product-action">
                               <a href="#" class="quick-view-btn"><i class="fal fa-eye"></i></a>
                               <a href="#" class="wishlist-btn"><i class="fal fa-heart"></i></a>
                               <a href="#" class="compare-btn"><i class="fal fa-exchange"></i></a>
                            </div>
                            <div class="product-action-bottom">
                               <a href="cart.html" class="add-cart-btn"><i class="fal fa-shopping-bag"></i>Add to
                                  Cart</a>
                            </div>
                            <div class="product-sticker-wrapper">
                               <span class="product-sticker new">New</span>
                            </div>
                         </div>
                         <div class="product-desc">
                            <div class="product-name"><a href="shop-details.html">Ribbed Cotton Bodysuits</a></div>
                            <div class="product-price">
                               <span class="price-now">£71.00</span>
                            </div>
                            <ul class="product-color-nav">
                               <li class="cl-ash active">
                                  <img src="{{ asset('assets/clients/img/product/800_1034/Image-1-1.jpg') }}" alt="img">
                               </li>
                               <li class="cl-light-white">
                                  <img src="{{ asset('assets/clients/img/product/800_1034/Image-1-2.jpg') }}" alt="img">
                               </li>
                            </ul>
                         </div>
                      </div>
                   </div>
                </div>
                <div class="tab-pane fade" id="nav-3" role="tabpanel" aria-labelledby="nav-3-tab">
                   <div class="products-wrapper">


                      <div class="single-product">
                         <div class="product-image pos-rel">
                            <a href="shop-details.html" class=""><img src="{{ asset('assets/clients/img/shirt/1/1.jpg') }}" alt="img"></a>
                            <div class="product-action">
                               <a href="#" class="quick-view-btn"><i class="fal fa-eye"></i></a>
                               <a href="#" class="wishlist-btn"><i class="fal fa-heart"></i></a>
                               <a href="#" class="compare-btn"><i class="fal fa-exchange"></i></a>
                            </div>
                            <div class="product-action-bottom">
                               <a href="cart.html" class="add-cart-btn"><i class="fal fa-shopping-bag"></i>Add to
                                  Cart</a>
                            </div>
                            <div class="product-sticker-wrapper">
                               <span class="product-sticker new">New</span>
                            </div>
                         </div>
                         <div class="product-desc">
                            <div class="product-name"><a href="shop-details.html">Comfy Winter Shirt</a></div>
                            <div class="product-price">
                               <span class="price-now">£55.00</span>
                            </div>
                            <ul class="product-color-nav">
                               <li class="cl-pink active">
                                  <img src="{{ asset('assets/clients/img/shirt/1/1.jpg') }}" alt="img">
                               </li>
                               <li class="cl-light-white">
                                  <img src="{{ asset('assets/clients/img/shirt/1/3.jpg') }}" alt="img">
                               </li>
                               <li class="cl-black">
                                  <img src="{{ asset('assets/clients/img/shirt/1/5.jpg') }}" alt="img">
                               </li>
                               <li class="cl-navy">
                                  <img src="{{ asset('assets/clients/img/shirt/1/7.jpg') }}" alt="img">
                               </li>
                            </ul>
                         </div>
                      </div>
                      <div class="single-product">
                         <div class="product-image pos-rel">
                            <a href="shop-details.html" class=""><img src="{{ asset('assets/clients/img/pant/1/1.jpg') }}" alt="img"></a>
                            <div class="product-action">
                               <a href="#" class="quick-view-btn"><i class="fal fa-eye"></i></a>
                               <a href="#" class="wishlist-btn"><i class="fal fa-heart"></i></a>
                               <a href="#" class="compare-btn"><i class="fal fa-exchange"></i></a>
                            </div>
                            <div class="product-action-bottom">
                               <a href="cart.html" class="add-cart-btn"><i class="fal fa-shopping-bag"></i>Add to
                                  Cart</a>
                            </div>

                         </div>
                         <div class="product-desc">
                            <div class="product-name"><a href="shop-details.html">Skinny Jeans Pant</a></div>
                            <div class="product-price">
                               <span class="price-now">£45.00</span>
                            </div>
                            <ul class="product-color-nav">
                               <li class="cl-navy active">
                                  <img src="{{ asset('assets/clients/img/pant/1/1.jpg') }}" alt="img">
                               </li>
                               <li class="cl-light-white">
                                  <img src="{{ asset('assets/clients/img/pant/1/4.jpg') }}" alt="img">
                               </li>
                            </ul>
                         </div>
                      </div>
                      <div class="single-product">
                         <div class="product-image pos-rel">
                            <a href="shop-details.html" class=""><img src="{{ asset('assets/clients/img/product/800_1034/Image-3-1.jpg') }}" alt="img"></a>
                            <div class="product-action">
                               <a href="#" class="quick-view-btn"><i class="fal fa-eye"></i></a>
                               <a href="#" class="wishlist-btn"><i class="fal fa-heart"></i></a>
                               <a href="#" class="compare-btn"><i class="fal fa-exchange"></i></a>
                            </div>
                            <div class="product-action-bottom">
                               <a href="cart.html" class="add-cart-btn"><i class="fal fa-shopping-bag"></i>Add to
                                  Cart</a>
                            </div>
                            <div class="product-sticker-wrapper">
                               <span class="product-sticker discount"> -25%</span>
                            </div>
                         </div>
                         <div class="product-desc">
                            <div class="product-name"><a href="shop-details.html">Grand Atlantic Chukka Boots</a>
                            </div>
                            <div class="product-price">
                               <span class="price-now">£24.00</span>
                               <span class="price-old">£32.00</span>
                            </div>
                         </div>
                      </div>
                      <div class="single-product">
                         <div class="product-image pos-rel">
                            <a href="shop-details.html" class=""><img src="{{ asset('assets/clients/img/product/800_1034/Image-4-1.jpg') }}" alt="img"></a>
                            <div class="product-action">
                               <a href="#" class="quick-view-btn"><i class="fal fa-eye"></i></a>
                               <a href="#" class="wishlist-btn"><i class="fal fa-heart"></i></a>
                               <a href="#" class="compare-btn"><i class="fal fa-exchange"></i></a>
                            </div>
                            <div class="product-action-bottom">
                               <a href="cart.html" class="add-cart-btn"><i class="fal fa-shopping-bag"></i>Add to
                                  Cart</a>
                            </div>
                         </div>
                         <div class="product-desc">
                            <div class="product-name"><a href="shop-details.html">Women's Faux-Trim Shirt</a></div>
                            <div class="product-price">
                               <span class="price-now">£84.00</span>
                            </div>
                         </div>
                      </div>
                      <div class="single-product">
                         <div class="product-image pos-rel">
                            <a href="shop-details.html" class=""><img src="{{ asset('assets/clients/img/product/800_1034/Image-16-1.jpg') }}" alt="img"></a>
                            <div class="product-action">
                               <a href="#" class="quick-view-btn"><i class="fal fa-eye"></i></a>
                               <a href="#" class="wishlist-btn"><i class="fal fa-heart"></i></a>
                               <a href="#" class="compare-btn"><i class="fal fa-exchange"></i></a>
                            </div>
                            <div class="product-action-bottom">
                               <a href="cart.html" class="add-cart-btn"><i class="fal fa-shopping-bag"></i>Add to
                                  Cart</a>
                            </div>
                            <div class="product-sticker-wrapper">
                               <span class="product-sticker new">New</span>
                            </div>
                         </div>
                         <div class="product-desc">
                            <div class="product-name"><a href="shop-details.html">Soft Touch Interlock Polo</a>
                            </div>
                            <div class="product-price">
                               <span class="price-now">£45.00</span>
                            </div>
                         </div>
                      </div>
                      <div class="single-product">
                         <div class="product-image pos-rel">
                            <a href="shop-details.html" class=""><img src="{{ asset('assets/clients/img/product/product-img1.jpg') }}" alt="img"></a>
                            <div class="product-action">
                               <a href="#" class="quick-view-btn"><i class="fal fa-eye"></i></a>
                               <a href="#" class="wishlist-btn"><i class="fal fa-heart"></i></a>
                               <a href="#" class="compare-btn"><i class="fal fa-exchange"></i></a>
                            </div>
                            <div class="product-action-bottom">
                               <a href="cart.html" class="add-cart-btn"><i class="fal fa-shopping-bag"></i>Add to
                                  Cart</a>
                            </div>
                         </div>
                         <div class="product-desc">
                            <div class="product-name"><a href="shop-details.html">Ecomart Smart Watch</a></div>
                            <div class="product-price">
                               <span class="price-now">£30.00</span>
                               <span class="price-old">£38.00</span>
                            </div>
                         </div>
                      </div>
                      <div class="single-product">
                         <div class="product-image pos-rel">
                            <a href="shop-details.html" class=""><img src="{{ asset('assets/clients/img/sunglass/2.jpg') }}" alt="img"></a>
                            <div class="product-action">
                               <a href="#" class="quick-view-btn"><i class="fal fa-eye"></i></a>
                               <a href="#" class="wishlist-btn"><i class="fal fa-heart"></i></a>
                               <a href="#" class="compare-btn"><i class="fal fa-exchange"></i></a>
                            </div>
                            <div class="product-action-bottom">
                               <a href="cart.html" class="add-cart-btn"><i class="fal fa-shopping-bag"></i>Add to
                                  Cart</a>
                            </div>
                         </div>
                         <div class="product-desc">
                            <div class="product-name"><a href="shop-details.html">Ecomart Smart Glass</a></div>
                            <div class="product-price">
                               <span class="price-now">£25.00</span>
                               <span class="price-old">£39.00</span>
                            </div>
                            <ul class="product-color-nav">
                               <li class="cl-black active">
                                  <img src="{{ asset('assets/clients/img/sunglass/2.jpg') }}" alt="img">
                               </li>
                               <li class="cl-ash">
                                  <img src="{{ asset('assets/clients/img/sunglass/5.jpg') }}" alt="img">
                               </li>
                               <li class="cl-brown">
                                  <img src="{{ asset('assets/clients/img/sunglass/8.jpg') }}" alt="img">
                               </li>
                               <li class="cl-navy">
                                  <img src="{{ asset('assets/clients/img/sunglass/11.jpg') }}" alt="img">
                               </li>
                               <li class="cl-wood">
                                  <img src="{{ asset('assets/clients/img/sunglass/14.jpg') }}" alt="img">
                               </li>
                            </ul>
                         </div>
                      </div>
                      <div class="single-product">
                         <div class="product-image pos-rel">
                            <a href="shop-details.html" class=""><img src="{{ asset('assets/clients/img/shirt/2/1.jpg') }}" alt="img"></a>
                            <div class="product-action">
                               <a href="#" class="quick-view-btn"><i class="fal fa-eye"></i></a>
                               <a href="#" class="wishlist-btn"><i class="fal fa-heart"></i></a>
                               <a href="#" class="compare-btn"><i class="fal fa-exchange"></i></a>
                            </div>
                            <div class="product-action-bottom">
                               <a href="cart.html" class="add-cart-btn"><i class="fal fa-shopping-bag"></i>Add to
                                  Cart</a>
                            </div>
                         </div>
                         <div class="product-desc">
                            <div class="product-name"><a href="shop-details.html">Cotton Shirt fot Men</a></div>
                            <div class="product-price">
                               <span class="price-now">£85.00</span>
                               <span class="price-old">£99.00</span>
                            </div>
                            <ul class="product-color-nav">
                               <li class="cl-brown active">
                                  <img src="{{ asset('assets/clients/img/shirt/2/1.jpg') }}" alt="img">
                               </li>
                               <li class="cl-navy">
                                  <img src="{{ asset('assets/clients/img/shirt/2/4.jpg') }}" alt="img">
                               </li>
                               <li class="cl-ash">
                                  <img src="{{ asset('assets/clients/img/shirt/2/7.jpg') }}" alt="img">
                               </li>
                            </ul>
                         </div>
                      </div>
                      <div class="single-product">
                         <div class="product-image pos-rel">
                            <a href="shop-details.html" class=""><img src="{{ asset('assets/clients/img/product/800_1034/Image-5-1.jpg') }}" alt="img"></a>
                            <div class="product-action">
                               <a href="#" class="quick-view-btn"><i class="fal fa-eye"></i></a>
                               <a href="#" class="wishlist-btn"><i class="fal fa-heart"></i></a>
                               <a href="#" class="compare-btn"><i class="fal fa-exchange"></i></a>
                            </div>
                            <div class="product-action-bottom">
                               <a href="cart.html" class="add-cart-btn"><i class="fal fa-shopping-bag"></i>Add to
                                  Cart</a>
                            </div>
                         </div>
                         <div class="product-desc">
                            <div class="product-name"><a href="shop-details.html">Double-breasted Blazer</a></div>
                            <div class="product-price">
                               <span class="price-now">£32.00</span>
                            </div>
                         </div>
                      </div>
                      <div class="single-product">
                         <div class="product-image pos-rel">
                            <a href="shop-details.html" class=""><img src="{{ asset('assets/clients/img/product/800_1034/Image-1-1.jpg') }}" alt="img"></a>
                            <div class="product-action">
                               <a href="#" class="quick-view-btn"><i class="fal fa-eye"></i></a>
                               <a href="#" class="wishlist-btn"><i class="fal fa-heart"></i></a>
                               <a href="#" class="compare-btn"><i class="fal fa-exchange"></i></a>
                            </div>
                            <div class="product-action-bottom">
                               <a href="cart.html" class="add-cart-btn"><i class="fal fa-shopping-bag"></i>Add to
                                  Cart</a>
                            </div>
                            <div class="product-sticker-wrapper">
                               <span class="product-sticker new">New</span>
                            </div>
                         </div>
                         <div class="product-desc">
                            <div class="product-name"><a href="shop-details.html">Ribbed Cotton Bodysuits</a></div>
                            <div class="product-price">
                               <span class="price-now">£71.00</span>
                            </div>
                            <ul class="product-color-nav">
                               <li class="cl-ash active">
                                  <img src="{{ asset('assets/clients/img/product/800_1034/Image-1-1.jpg') }}" alt="img">
                               </li>
                               <li class="cl-light-white">
                                  <img src="{{ asset('assets/clients/img/product/800_1034/Image-1-2.jpg') }}" alt="img">
                               </li>
                            </ul>
                         </div>
                      </div>
                   </div>
                </div>
                <div class="tab-pane fade" id="nav-4" role="tabpanel" aria-labelledby="nav-4-tab">
                   <div class="products-wrapper">


                      <div class="single-product">
                         <div class="product-image pos-rel">
                            <a href="shop-details.html" class=""><img src="{{ asset('assets/clients/img/pant/1/1.jpg') }}" alt="img"></a>
                            <div class="product-action">
                               <a href="#" class="quick-view-btn"><i class="fal fa-eye"></i></a>
                               <a href="#" class="wishlist-btn"><i class="fal fa-heart"></i></a>
                               <a href="#" class="compare-btn"><i class="fal fa-exchange"></i></a>
                            </div>
                            <div class="product-action-bottom">
                               <a href="cart.html" class="add-cart-btn"><i class="fal fa-shopping-bag"></i>Add to
                                  Cart</a>
                            </div>

                         </div>
                         <div class="product-desc">
                            <div class="product-name"><a href="shop-details.html">Skinny Jeans Pant</a></div>
                            <div class="product-price">
                               <span class="price-now">£45.00</span>
                            </div>
                            <ul class="product-color-nav">
                               <li class="cl-navy active">
                                  <img src="{{ asset('assets/clients/img/pant/1/1.jpg') }}" alt="img">
                               </li>
                               <li class="cl-light-white">
                                  <img src="{{ asset('assets/clients/img/pant/1/4.jpg') }}" alt="img">
                               </li>
                            </ul>
                         </div>
                      </div>
                      <div class="single-product">
                         <div class="product-image pos-rel">
                            <a href="shop-details.html" class=""><img src="{{ asset('assets/clients/img/pant/2/1.jpg') }}" alt="img"></a>
                            <div class="product-action">
                               <a href="#" class="quick-view-btn"><i class="fal fa-eye"></i></a>
                               <a href="#" class="wishlist-btn"><i class="fal fa-heart"></i></a>
                               <a href="#" class="compare-btn"><i class="fal fa-exchange"></i></a>
                            </div>
                            <div class="product-action-bottom">
                               <a href="cart.html" class="add-cart-btn"><i class="fal fa-shopping-bag"></i>Add to
                                  Cart</a>
                            </div>
                            <div class="product-sticker-wrapper">
                               <span class="product-sticker discount"> -25%</span>
                            </div>
                         </div>
                         <div class="product-desc">
                            <div class="product-name"><a href="shop-details.html">Men's Flat-Front Shorts</a></div>
                            <div class="product-price">
                               <span class="price-now">£30.00</span>
                               <span class="price-old">£40.00</span>
                            </div>
                            <ul class="product-color-nav">
                               <li class="cl-brown active">
                                  <img src="{{ asset('assets/clients/img/pant/2/1.jpg') }}" alt="img">
                               </li>
                               <li class="cl-ash">
                                  <img src="{{ asset('assets/clients/img/pant/2/3.jpg') }}" alt="img">
                               </li>
                               <li class="cl-navy">
                                  <img src="{{ asset('assets/clients/img/pant/2/5.jpg') }}" alt="img">
                               </li>
                            </ul>
                         </div>
                      </div>
                      <div class="single-product">
                         <div class="product-image pos-rel">
                            <a href="shop-details.html" class=""><img src="{{ asset('assets/clients/img/shoe/1.jpg') }}" alt="img"></a>
                            <div class="product-action">
                               <a href="#" class="quick-view-btn"><i class="fal fa-eye"></i></a>
                               <a href="#" class="wishlist-btn"><i class="fal fa-heart"></i></a>
                               <a href="#" class="compare-btn"><i class="fal fa-exchange"></i></a>
                            </div>
                            <div class="product-action-bottom">
                               <a href="cart.html" class="add-cart-btn"><i class="fal fa-shopping-bag"></i>Add to
                                  Cart</a>
                            </div>
                         </div>
                         <div class="product-desc">
                            <div class="product-name"><a href="shop-details.html">Eastland Lumber Up Boots</a>
                            </div>
                            <div class="product-price">
                               <span class="price-now">£38.00</span>
                            </div>
                         </div>
                      </div>
                      <div class="single-product">
                         <div class="product-image pos-rel">
                            <a href="shop-details.html" class=""><img src="{{ asset('assets/clients/img/shirt/3/1.jpg') }}" alt="img"></a>
                            <div class="product-action">
                               <a href="#" class="quick-view-btn"><i class="fal fa-eye"></i></a>
                               <a href="#" class="wishlist-btn"><i class="fal fa-heart"></i></a>
                               <a href="#" class="compare-btn"><i class="fal fa-exchange"></i></a>
                            </div>
                            <div class="product-action-bottom">
                               <a href="cart.html" class="add-cart-btn"><i class="fal fa-shopping-bag"></i>Add to
                                  Cart</a>
                            </div>
                         </div>
                         <div class="product-desc">
                            <div class="product-name"><a href="shop-details.html">Men's Poplin Dress Shirt</a>
                            </div>
                            <div class="product-price">
                               <span class="price-now">£25.00</span>
                            </div>
                            <ul class="product-color-nav">
                               <li class="cl-yellow active">
                                  <img src="{{ asset('assets/clients/img/shirt/3/1.jpg') }}" alt="img">
                               </li>
                               <li class="cl-black">
                                  <img src="{{ asset('assets/clients/img/shirt/3/2.jpg') }}" alt="img">
                               </li>
                               <li class="cl-navy">
                                  <img src="{{ asset('assets/clients/img/shirt/3/3.jpg') }}" alt="img">
                               </li>
                               <li class="cl-orange">
                                  <img src="{{ asset('assets/clients/img/shirt/3/4.jpg') }}" alt="img">
                               </li>
                            </ul>
                         </div>
                      </div>
                      <div class="single-product">
                         <div class="product-image pos-rel">
                            <a href="shop-details.html" class=""><img src="{{ asset('assets/clients/img/bag/1.jpg') }}" alt="img"></a>
                            <div class="product-action">
                               <a href="#" class="quick-view-btn"><i class="fal fa-eye"></i></a>
                               <a href="#" class="wishlist-btn"><i class="fal fa-heart"></i></a>
                               <a href="#" class="compare-btn"><i class="fal fa-exchange"></i></a>
                            </div>
                            <div class="product-action-bottom">
                               <a href="cart.html" class="add-cart-btn"><i class="fal fa-shopping-bag"></i>Add to
                                  Cart</a>
                            </div>
                            <div class="product-sticker-wrapper">
                               <span class="product-sticker new">New</span>
                            </div>
                         </div>
                         <div class="product-desc">
                            <div class="product-name"><a href="shop-details.html">Varsi Leather Bag</a></div>
                            <div class="product-price">
                               <span class="price-now">£65.00</span>
                            </div>
                            <ul class="product-color-nav">
                               <li class="cl-brown active">
                                  <img src="{{ asset('assets/clients/img/bag/1.jpg') }}" alt="img">
                               </li>
                               <li class="cl-ash">
                                  <img src="{{ asset('assets/clients/img/bag/2.jpg') }}" alt="img">
                               </li>
                               <li class="cl-black">
                                  <img src="{{ asset('assets/clients/img/bag/3.jpg') }}" alt="img">
                               </li>
                            </ul>
                         </div>
                      </div>
                      <div class="single-product">
                         <div class="product-image pos-rel">
                            <a href="shop-details.html" class=""><img src="{{ asset('assets/clients/img/product/product-img1.jpg') }}" alt="img"></a>
                            <div class="product-action">
                               <a href="#" class="quick-view-btn"><i class="fal fa-eye"></i></a>
                               <a href="#" class="wishlist-btn"><i class="fal fa-heart"></i></a>
                               <a href="#" class="compare-btn"><i class="fal fa-exchange"></i></a>
                            </div>
                            <div class="product-action-bottom">
                               <a href="cart.html" class="add-cart-btn"><i class="fal fa-shopping-bag"></i>Add to
                                  Cart</a>
                            </div>
                         </div>
                         <div class="product-desc">
                            <div class="product-name"><a href="shop-details.html">Ecomart Smart Watch</a></div>
                            <div class="product-price">
                               <span class="price-now">£30.00</span>
                               <span class="price-old">£38.00</span>
                            </div>
                         </div>
                      </div>
                      <div class="single-product">
                         <div class="product-image pos-rel">
                            <a href="shop-details.html" class=""><img src="{{ asset('assets/clients/img/sunglass/2.jpg') }}" alt="img"></a>
                            <div class="product-action">
                               <a href="#" class="quick-view-btn"><i class="fal fa-eye"></i></a>
                               <a href="#" class="wishlist-btn"><i class="fal fa-heart"></i></a>
                               <a href="#" class="compare-btn"><i class="fal fa-exchange"></i></a>
                            </div>
                            <div class="product-action-bottom">
                               <a href="cart.html" class="add-cart-btn"><i class="fal fa-shopping-bag"></i>Add to
                                  Cart</a>
                            </div>
                         </div>
                         <div class="product-desc">
                            <div class="product-name"><a href="shop-details.html">Ecomart Smart Glass</a></div>
                            <div class="product-price">
                               <span class="price-now">£25.00</span>
                               <span class="price-old">£39.00</span>
                            </div>
                            <ul class="product-color-nav">
                               <li class="cl-black active">
                                  <img src="{{ asset('assets/clients/img/sunglass/2.jpg') }}" alt="img">
                               </li>
                               <li class="cl-ash">
                                  <img src="{{ asset('assets/clients/img/sunglass/5.jpg') }}" alt="img">
                               </li>
                               <li class="cl-brown">
                                  <img src="{{ asset('assets/clients/img/sunglass/8.jpg') }}" alt="img">
                               </li>
                               <li class="cl-navy">
                                  <img src="{{ asset('assets/clients/img/sunglass/11.jpg') }}" alt="img">
                               </li>
                               <li class="cl-wood">
                                  <img src="{{ asset('assets/clients/img/sunglass/14.jpg') }}" alt="img">
                               </li>
                            </ul>
                         </div>
                      </div>
                      <div class="single-product">
                         <div class="product-image pos-rel">
                            <a href="shop-details.html" class=""><img src="{{ asset('assets/clients/img/shirt/2/1.jpg') }}" alt="img"></a>
                            <div class="product-action">
                               <a href="#" class="quick-view-btn"><i class="fal fa-eye"></i></a>
                               <a href="#" class="wishlist-btn"><i class="fal fa-heart"></i></a>
                               <a href="#" class="compare-btn"><i class="fal fa-exchange"></i></a>
                            </div>
                            <div class="product-action-bottom">
                               <a href="cart.html" class="add-cart-btn"><i class="fal fa-shopping-bag"></i>Add to
                                  Cart</a>
                            </div>
                         </div>
                         <div class="product-desc">
                            <div class="product-name"><a href="shop-details.html">Cotton Shirt fot Men</a></div>
                            <div class="product-price">
                               <span class="price-now">£85.00</span>
                               <span class="price-old">£99.00</span>
                            </div>
                            <ul class="product-color-nav">
                               <li class="cl-brown active">
                                  <img src="{{ asset('assets/clients/img/shirt/2/1.jpg') }}" alt="img">
                               </li>
                               <li class="cl-navy">
                                  <img src="{{ asset('assets/clients/img/shirt/2/4.jpg') }}" alt="img">
                               </li>
                               <li class="cl-ash">
                                  <img src="{{ asset('assets/clients/img/shirt/2/7.jpg') }}" alt="img">
                               </li>
                            </ul>
                         </div>
                      </div>
                      <div class="single-product">
                         <div class="product-image pos-rel">
                            <a href="shop-details.html" class=""><img src="{{ asset('assets/clients/img/product/800_1034/Image-5-1.jpg') }}" alt="img"></a>
                            <div class="product-action">
                               <a href="#" class="quick-view-btn"><i class="fal fa-eye"></i></a>
                               <a href="#" class="wishlist-btn"><i class="fal fa-heart"></i></a>
                               <a href="#" class="compare-btn"><i class="fal fa-exchange"></i></a>
                            </div>
                            <div class="product-action-bottom">
                               <a href="cart.html" class="add-cart-btn"><i class="fal fa-shopping-bag"></i>Add to
                                  Cart</a>
                            </div>
                         </div>
                         <div class="product-desc">
                            <div class="product-name"><a href="shop-details.html">Double-breasted Blazer</a></div>
                            <div class="product-price">
                               <span class="price-now">£32.00</span>
                            </div>
                         </div>
                      </div>
                      <div class="single-product">
                         <div class="product-image pos-rel">
                            <a href="shop-details.html" class=""><img src="{{ asset('assets/clients/img/product/800_1034/Image-1-1.jpg') }}" alt="img"></a>
                            <div class="product-action">
                               <a href="#" class="quick-view-btn"><i class="fal fa-eye"></i></a>
                               <a href="#" class="wishlist-btn"><i class="fal fa-heart"></i></a>
                               <a href="#" class="compare-btn"><i class="fal fa-exchange"></i></a>
                            </div>
                            <div class="product-action-bottom">
                               <a href="cart.html" class="add-cart-btn"><i class="fal fa-shopping-bag"></i>Add to
                                  Cart</a>
                            </div>
                            <div class="product-sticker-wrapper">
                               <span class="product-sticker new">New</span>
                            </div>
                         </div>
                         <div class="product-desc">
                            <div class="product-name"><a href="shop-details.html">Ribbed Cotton Bodysuits</a></div>
                            <div class="product-price">
                               <span class="price-now">£71.00</span>
                            </div>
                            <ul class="product-color-nav">
                               <li class="cl-ash active">
                                  <img src="{{ asset('assets/clients/img/product/800_1034/Image-1-1.jpg') }}" alt="img">
                               </li>
                               <li class="cl-light-white">
                                  <img src="{{ asset('assets/clients/img/product/800_1034/Image-1-2.jpg') }}" alt="img">
                               </li>
                            </ul>
                         </div>
                      </div>
                   </div>
                </div>
             </div>
          </div>
       </div>
       <div class="row">
          <div class="col-lg-12">
             <div class="product-area-btn mt-10 text-center">
                <a href="inde?act=shops" class="border-btn">View All Products</a>
             </div>
          </div>
       </div>
    </div>
 </section>
 <!-- product area end  -->
       <!-- bundle area style start -->
       <section class="bunle-pack-area pt-120 pb-120">
        <div class="container">
           <div class="row justify-content-center">
              <div class="col-xl-8">
                 <div class="section-title text-center">
                    <h2 class="section-main-title mb-50">Bundle combo Pack</h2>
                 </div>
              </div>
           </div>
           <div class="bundle-pack-wrapper">
              <div class="row">
                 <div class="col-lg-6">
                    <div class="pack-items-wrapper">
                       <div class="pack-items-inner">
                          <div class="pack-items">
                             <div class="pack-item-single">
                                <div class="product-image pos-rel">
                                   <a href="shop-details.html" class=""><img src="{{ asset('assets/clients/img/combo_pack/pack-1-1.jpg') }}" alt="procuct img"></a>
                                </div>
                                <div class="product-desc">
                                   <div class="product-name"><a href="shop-details.html">Pure Cotton Polo
                                         T-Shirt S</a>
                                   </div>
                                   <div class="product-price">
                                      <span class="price-now">£19.00</span>
                                   </div>
                                   <div class="product-rating">
                                      <i class="fas fa-star"></i>
                                      <i class="fas fa-star"></i>
                                      <i class="fas fa-star"></i>
                                      <i class="fas fa-star"></i>
                                      <i class="fas fa-star"></i>
                                   </div>
                                </div>
                             </div>
                             <div class="pack-item-single">
                                <div class="product-image pos-rel">
                                   <a href="shop-details.html" class=""><img src="{{ asset('assets/clients/img/combo_pack/pack-1-1.jpg') }}" alt="procuct img"></a>
                                </div>
                                <div class="product-desc">
                                   <div class="product-name"><a href="shop-details.html">Pure Cotton Polo
                                         T-Shirt SS</a>
                                   </div>
                                   <div class="product-price">
                                      <span class="price-now">£35.00</span>
                                   </div>
                                   <div class="product-rating">
                                      <i class="fas fa-star"></i>
                                      <i class="fas fa-star"></i>
                                      <i class="fas fa-star"></i>
                                      <i class="fas fa-star"></i>
                                      <i class="fas fa-star"></i>
                                   </div>
                                </div>
                             </div>
                             <div class="pack-item-single">
                                <div class="product-image pos-rel">
                                   <a href="shop-details.html" class=""><img src="{{ asset('assets/clients/img/combo_pack/pack-1-1.jpg') }}" alt="procuct img"></a>
                                </div>
                                <div class="product-desc">
                                   <div class="product-name"><a href="shop-details.html">Pure Cotton Polo
                                         T-Shirt SSS</a>
                                   </div>
                                   <div class="product-price">
                                      <span class="price-now">£28.00</span>
                                   </div>
                                   <div class="product-rating">
                                      <i class="fas fa-star"></i>
                                      <i class="fas fa-star"></i>
                                      <i class="fas fa-star"></i>
                                      <i class="fas fa-star"></i>
                                      <i class="fas fa-star"></i>
                                   </div>
                                </div>
                             </div>
                             <div class="pack-price-btn">
                                <div class="pack-total-price">£82.00</div>
                                <button class="add-cart-btn">Add to Cart</button>
                             </div>
                          </div>
                       </div>
                    </div>
                 </div>
                 <div class="col-lg-6">
                    <div class="pack-items-wrapper">
                       <div class="pack-items-inner">
                          <div class="pack-items">
                             <div class="pack-item-single">
                                <div class="product-image pos-rel">
                                   <a href="shop-details.html" class=""><img src="{{ asset('assets/clients/img/combo_pack/pack-1-1.jpg') }}" alt="procuct img"></a>
                                </div>
                                <div class="product-desc">
                                   <div class="product-name"><a href="shop-details.html">Pure Cotton Polo
                                         T-Shirt S</a>
                                   </div>
                                   <div class="product-price">
                                      <span class="price-now">£19.00</span>
                                   </div>
                                   <div class="product-rating">
                                      <i class="fas fa-star"></i>
                                      <i class="fas fa-star"></i>
                                      <i class="fas fa-star"></i>
                                      <i class="fas fa-star"></i>
                                      <i class="fas fa-star"></i>
                                   </div>
                                </div>
                             </div>
                             <div class="pack-item-single">
                                <div class="product-image pos-rel">
                                   <a href="shop-details.html" class=""><img src="{{ asset('assets/clients/img/combo_pack/pack-1-1.jpg') }}" alt="procuct img"></a>
                                </div>
                                <div class="product-desc">
                                   <div class="product-name"><a href="shop-details.html">Pure Cotton Polo
                                         T-Shirt SS</a>
                                   </div>
                                   <div class="product-price">
                                      <span class="price-now">£35.00</span>
                                   </div>
                                   <div class="product-rating">
                                      <i class="fas fa-star"></i>
                                      <i class="fas fa-star"></i>
                                      <i class="fas fa-star"></i>
                                      <i class="fas fa-star"></i>
                                      <i class="fas fa-star"></i>
                                   </div>
                                </div>
                             </div>
                             <div class="pack-item-single">
                                <div class="product-image pos-rel">
                                   <a href="shop-details.html" class=""><img src="{{ asset('assets/clients/img/combo_pack/pack-1-1.jpg') }}" alt="procuct img"></a>
                                </div>
                                <div class="product-desc">
                                   <div class="product-name"><a href="shop-details.html">Pure Cotton Polo
                                         T-Shirt SSS</a>
                                   </div>
                                   <div class="product-price">
                                      <span class="price-now">£28.00</span>
                                   </div>
                                   <div class="product-rating">
                                      <i class="fas fa-star"></i>
                                      <i class="fas fa-star"></i>
                                      <i class="fas fa-star"></i>
                                      <i class="fas fa-star"></i>
                                      <i class="fas fa-star"></i>
                                   </div>
                                </div>
                             </div>
                             <div class="pack-price-btn">
                                <div class="pack-total-price">£82.00</div>
                                <button class="add-cart-btn">Add to Cart</button>
                             </div>
                          </div>
                       </div>
                    </div>
                 </div>
              </div>

           </div>
        </div>
     </section>
     <!-- bundle area style end -->

     <!-- blog area start  -->
     <section class="blog-area pt-120 pb-110">
        <div class="container">
           <div class="row justify-content-center">
              <div class="col-xl-8">
                 <div class="section-title text-center">
                    <h2 class="section-main-title mb-50">Latest fashion news</h2>
                 </div>
              </div>
           </div>
           <div class="blog-items-wrapper">
              <div class="blog-single">
                 <div class="blog-single-inner">
                    <div class="blog-img">
                       <a href="blog-details.html">
                          <img src="{{ asset('assets/clients/img/blog/b-1.jpg') }}" alt="blog-img">
                       </a>
                    </div>
                    <div class="blog-content">
                       <div class="blog-meta-list">
                          <div class="blog-meta-item">
                             <div class="blog-meta-icon">
                                <i class="fal fa-folder-open"></i>
                             </div>
                             <div class="blog-meta-content">
                                <a href="blog.html">Fashion</a>
                             </div>
                          </div>
                          <div class="blog-meta-item">
                             <div class="blog-meta-icon">
                                <i class="fal fa-clock"></i>
                             </div>
                             <div class="blog-meta-content">
                                <a href="blog.html">31 Mar 2021</a>
                             </div>
                          </div>
                       </div>
                       <h4 class="blog-title"><a href="blog-details.html">Worthy Cyber Monday Fashion
                             From Ecomart</a></h4>
                    </div>
                 </div>

              </div> 
              
             <div class="blog-single">
                 <div class="blog-single-inner">
                    <div class="blog-img">
                       <a href="blog-details.html">
                          <img src="{{ asset('assets/clients/img/blog/b-2.jpg') }}" alt="clients/blog-img">
                       </a>
                    </div>
                    <div class="blog-content">
                       <div class="blog-meta-list">
                          <div class="blog-meta-item">
                             <div class="blog-meta-icon">
                                <i class="fal fa-folder-open"></i>
                             </div>
                             <div class="blog-meta-content">
                                <a href="blog.html">Fashion</a>
                             </div>
                          </div>
                          <div class="blog-meta-item">
                             <div class="blog-meta-icon">
                                <i class="fal fa-clock"></i>
                             </div>
                             <div class="blog-meta-content">
                                <a href="blog.html">31 Mar 2021</a>
                             </div>
                          </div>
                       </div>
                       <h4 class="blog-title"><a href="blog-details.html"></a></h4>
                    </div>
                 </div>

              </div>
              <div class="blog-single">
                <div class="blog-single-inner">
                   <div class="blog-img">
                      <a href="blog-details.html">
                         <img src="{{ asset('assets/clients/img/blog/b-3.jpg') }}" alt="clients/blog-img">
                      </a>
                   </div>
                   <div class="blog-content">
                      <div class="blog-meta-list">
                         <div class="blog-meta-item">
                            <div class="blog-meta-icon">
                               <i class="fal fa-folder-open"></i>
                            </div>
                            <div class="blog-meta-content">
                               <a href="blog.html">Fashion</a>
                            </div>
                         </div>
                         <div class="blog-meta-item">
                            <div class="blog-meta-icon">
                               <i class="fal fa-clock"></i>
                            </div>
                            <div class="blog-meta-content">
                               <a href="blog.html">31 Mar 2021</a>
                            </div>
                         </div>
                      </div>
                      <h4 class="blog-title"><a href="blog-details.html"></a></h4>
                   </div>
                </div>

             </div>

           </div>
        </div>
     </section>
     <!-- blog area end  -->
@endsection