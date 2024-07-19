@section('sidebar')
    <!-- side toggle start -->
    <div class="fix">
        <div class="side-info">
            <div class="side-info-content">
                <div class="offset-widget offset-logo mb-40">
                    <div class="row align-items-center">
                        <div class="col-9">
                            <a href="index.html">
                                <img src="{{ asset('assets/clients/img/logo/logo-bl.png') }}" alt="Logo">
                            </a>
                        </div>
                        <div class="col-3 text-end"><button class="side-info-close"><i class="fal fa-times"></i></button>
                        </div>
                    </div>
                </div>
                <div class="mobile-menu d-lg-none fix"></div>
                <div class="offset-profile-action d-lg-none">
                    <div class="offset-widget mb-40">
                        <div class="action-list action-list-header1">
                            <div class="action-item action-item-cart">
                                <a href="javascript:void(0)" class="view-cart-button">
                                    <i class="fal fa-shopping-bag"></i>
                                    <span class="action-item-number">3</span></a>
                            </div>
                            <div class="action-item action-item-wishlist">
                                <a href="javascript:void(0)" class="view-wishlist-button">
                                    <i class="fal fa-heart"></i>
                                    <span class="action-item-number">2</span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="offset-widget offset_searchbar mb-30">
                    <form action="#" class="filter-search-input">
                        <input type="text" placeholder="Search keyword">
                        <button><i class="fal fa-search"></i></button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="offcanvas-overlay"></div>
    <div class="offcanvas-overlay-white"></div>

    <div class="fix">
        <div class="sidebar-action sidebar-cart">
            <button class="close-sidebar">Close<i class="fal fa-times"></i></button>
            <h4 class="sidebar-action-title">Shopping Cart</h4>
            <div class="sidebar-action-list">
                <div class="sidebar-list-item">
                    <div class="product-image pos-rel">
                        <a href="shop-details.html" class=""><img src="{{ asset('assets/clients/img/shirt/3/1.jpg') }}" alt="img"></a>
                    </div>
                    <div class="product-desc">
                        <div class="product-name"><a href="shop-details.html">Felted Shirt for Man</a></div>
                        <div class="product-pricing">
                            <span class="item-number">1 &times;</span>
                            <span class="price-now">$24.00</span>
                        </div>
                        <button class="remove-item"><i class="fal fa-times"></i></button>
                    </div>
                </div>
                <div class="sidebar-list-item">
                    <div class="product-image pos-rel">
                        <a href="shop-details.html" class=""><img src="{{ asset('assets/clients/img/pant/1/4.jpg') }}" alt="img"></a>
                    </div>
                    <div class="product-desc">
                        <div class="product-name"><a href="shop-details.html">Denim Jeans Pant</a></div>
                        <div class="product-pricing">
                            <span class="item-number">1 &times;</span>
                            <span class="price-now">$12.00</span>
                        </div>
                        <button class="remove-item"><i class="fal fa-times"></i></button>
                    </div>
                </div>
                <div class="sidebar-list-item">
                    <div class="product-image pos-rel">
                        <a href="shop-details.html" class=""><img src="{{ asset('assets/clients/img/jacket/2/2.jpg') }}" alt="img"></a>
                    </div>
                    <div class="product-desc">
                        <div class="product-name"><a href="shop-details.html">Denim Official Jacket</a></div>
                        <div class="product-pricing">
                            <span class="item-number">1 &times;</span>
                            <span class="price-now">$42.00</span>
                        </div>
                        <button class="remove-item"><i class="fal fa-times"></i></button>
                    </div>
                </div>

            </div>
            <div class="product-price-total">
                <span>Subtotal :</span>
                <span class="subtotal-price">$78.00</span>
            </div>
            <div class="sidebar-action-btn">
                <a href="cart.html" class="fill-btn">View cart</a>
                <a href="checkout.html" class="border-btn">Checkout</a>
            </div>
        </div>
    </div>
    <div class="fix">
        <div class="sidebar-action sidebar-wishlist">
            <button class="close-sidebar">Close<i class="fal fa-times"></i></button>
            <h4 class="sidebar-action-title">Wishlist</h4>
            <div class="sidebar-action-list">
                <div class="sidebar-list-item">
                    <div class="product-image pos-rel">
                        <a href="shop-details.html" class=""><img src="{{ asset('assets/clients/img/shirt/1/1.jpg') }}" alt="img"></a>
                    </div>
                    <div class="product-desc">
                        <div class="product-name"><a href="shop-details.html">Women's Faux-Trim Shirt</a></div>
                        <div class="product-pricing">
                            <span class="price-now">$20.00</span>
                        </div>
                        <button class="remove-item"><i class="fal fa-times"></i></button>
                    </div>
                </div>
                <div class="sidebar-list-item">
                    <div class="product-image pos-rel">
                        <a href="shop-details.html" class=""><img src="{{ asset('assets/clients/img/pant/1/1.jpg') }}"
                                alt="img"></a>
                    </div>
                    <div class="product-desc">
                        <div class="product-name"><a href="shop-details.html">Skinny Jeans Pant</a></div>
                        <div class="product-pricing">
                            <span class="price-now">$24.00</span>
                        </div>
                        <button class="remove-item"><i class="fal fa-times"></i></button>
                    </div>
                </div>

            </div>
            <div class="product-price-total">
                <span>Subtotal :</span>
                <span class="subtotal-price">$44.00</span>
            </div>
            <div class="sidebar-action-btn">
                <a href="cart.html" class="fill-btn">View cart</a>
                <a href="cart.html" class="border-btn">Checkout</a>
            </div>
        </div>
    </div>
    <!-- side toggle end -->
@endsection
