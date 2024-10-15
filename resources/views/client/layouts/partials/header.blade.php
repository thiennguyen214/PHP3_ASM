<a class="skip-link screen-reader-text" href="#content">Skip to content</a>
<header id="masthead" class="site-header">
    <div id="header-5" class="header-area">
        <div class="masthead-container mobile-menu">
            <div id="rt-sticky-placeholder"></div>
            <div class="header-menu menu-layout5" id="header-menu">
                <div class="container">
                    <div class="menu-full-wrap">
                        <div class="menu-wrap">
                            <div id="site-navigation" class="main-navigation">
                                <nav class="menu-main-menu-container">
                                    <ul id="menu-main-menu" class="menu">
                                        <li id="menu-item-25"
                                            class="menu-item menu-item-type-custom menu-item-object-custom current-menu-ancestor current-menu-parent menu-item-has-children menu-item-25">
                                            <a href="{{ route('page.home') }}">HOME</a>

                                        </li>
                                        <li id="menu-item-26"
                                            class="mega-menu menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-26">
                                            <a href="{{ route('page.menu') }}">MENU</a>
                                            {{-- <ul class="sub-menu">
                                                <li id="menu-item-5353"
                                                    class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-5353">
                                                    <a href="#">Default Menu (Woo)</a>
                                                    <ul class="sub-menu">
                                                        <li id="menu-item-3326"
                                                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3326">
                                                            <a href="food-menu-01/index.html">Food Menu 01</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul> --}}
                                        </li>
                                        <li id="menu-item-27"
                                            class="mega-menu menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-27">
                                            <a href="#">PAGES</a>

                                        </li>
                                        <li id="menu-item-287"
                                            class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-287">
                                            <a href="#">BLOG</a>
                                        </li>
                                        <li id="menu-item-28"
                                            class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-28">
                                            <a href="#">MORE</a>
                                            <ul class="sub-menu">
                                                <li id="menu-item-3327"
                                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3327">
                                                    <a href="{{ route('page.shop') }}">Shop</a>
                                                </li>
                                                <li id="menu-item-1609"
                                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1609">
                                                    <a href="cart/index.html">Cart</a>
                                                </li>
                                                <li id="menu-item-1608"
                                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1608">
                                                    <a href="checkout/index.html">Checkout</a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="site-branding">
                            <a class="dark-logo" href="index.html"><img width='600' height='218'
                                    src='/client/all/wp-content/themes/panpie/assets/img/logo-dark.png'
                                    alt='Panpie - Restaurant WordPress Theme'></a>
                            <a class="light-logo" href="index.html"><img width='600' height='218'
                                    src='/client/all/wp-content/themes/panpie/assets/img/logo-light.png'
                                    alt='Panpie - Restaurant WordPress Theme'></a>
                        </div>
                        <div class="header-icon-area">
                            <div class="contact-info">
                                <div class="icon-left">
                                    <a href="{{ route('logout') }}"><i class="fa-regular fa-user"></i></a>
                                </div>
                                <div class="info">
                                    @if (isset($user))
                                        <span class="info-label">Tài khoản: {{ $user->username }}</span>
                                        <span class="info-text">
                                            <a
                                                href="{{ $user_au->role == 'admin' ? '/admin' : '#' }}">{{ $user->fullname }}</a>
                                        </span>
                                    @else
                                        <span class="info-text">
                                            <a href="{{ route('login') }}">Sign In</a>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <div class="cart-icon-area">
                                <a href="cart/index.html"><i class="fas fa-shopping-cart" aria-hidden="true"></i><span
                                        class="cart-icon-num">0</span> <span
                                        class="woocommerce-Price-amount amount"><span
                                            class="woocommerce-Price-currencySymbol">&#036;</span>0.00</span></a>
                                <div class="cart-icon-products">
                                    <div class="widget woocommerce widget_shopping_cart">
                                        <h2 class="widgettitle">Cart</h2>
                                        <div class="widget_shopping_cart_content"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="header-search-box">
                                <a class="glass-icon" href="#header-search" title="Search">
                                    <i class="fas fa-search"></i>
                                </a>
                                <a class="cross-icon" href="#header-cross" title="Search">
                                    <i class="fa fa-times" aria-hidden="true"></i>
                                </a>
                                <div class="header-search-field">
                                    <form role="search" method="get"
                                        action="https://radiustheme.com/demo/wordpress/themes/panpie/"
                                        class="search-form">
                                        <input required="" type="text" id="search-form-5f51fb188e3b0"
                                            class="search-field" placeholder="Search …" value="" name="s">
                                        <button class="search-button" type="submit">
                                            <i class="fa fa-search" aria-hidden="true"></i>
                                        </button>
                                    </form>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

<div class="rt-header-menu mean-container" id="meanmenu">
    <div class="mean-bar">
        <a href="index.html" alt="Panpie - Restaurant WordPress Theme"><img width='600' height='218'
                src='/client/all/wp-content/themes/panpie/assets/img/logo-dark.png'
                alt='Panpie - Restaurant WordPress Theme'></a>
        <div class="info-menu-bar">
            <div class="cart-icon-area">
                <a href="cart/index.html"><i class="fas fa-shopping-cart" aria-hidden="true"></i><span
                        class="cart-icon-num">0</span> – <span class="woocommerce-Price-amount amount"><span
                            class="woocommerce-Price-currencySymbol">&#036;</span>0.00</span></a>
            </div>
            <div class="header-search-box">
                <a class="glass-icon" href="#header-search" title="Search">
                    <i class="fas fa-search"></i>
                </a>
                <a class="cross-icon" href="#header-cross" title="Search">
                    <i class="fa fa-times" aria-hidden="true"></i>
                </a>
                <div class="header-search-field">
                    <form role="search" method="get"
                        action="https://radiustheme.com/demo/wordpress/themes/panpie/" class="search-form">
                        <input required="" type="text" id="search-form-5f51fb188e3b0" class="search-field"
                            placeholder="Search …" value="" name="s">
                        <button class="search-button" type="submit">
                            <i class="fa fa-search" aria-hidden="true"></i>
                        </button>
                    </form>
                </div>
            </div>
        </div>

        <span class="sidebarBtn ">
            <span class="bar"></span>
            <span class="bar"></span>
            <span class="bar"></span>
            <span class="bar"></span>
        </span>
    </div>

    <div class="rt-slide-nav">
        <div class="offscreen-navigation">
            <nav class="menu-main-menu-container">
                <ul id="menu-main-menu-1" class="menu">
                    <li
                        class="menu-item menu-item-type-custom menu-item-object-custom current-menu-ancestor menu-item-has-children menu-item-25">
                        <a href="{{ route('page.home') }}">HOME</a>
                    </li>
                    <li
                        class="mega-menu menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-26">
                        <a href="{{ route('page.menu') }}">MENU</a>
                        {{-- <ul class="sub-menu">
                            <li
                                class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-5353">
                                <a href="#">Default Menu (Woo)</a>
                                <ul class="sub-menu">
                                    <li
                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3326">
                                        <a href="food-menu-01/index.html">Food Menu 01</a>
                                    </li>
                                </ul>
                            </li>
                        </ul> --}}
                    </li>
                    <li
                        class="mega-menu menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-27">
                        <a href="#">PAGES</a>
                    </li>
                    <li
                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-287">
                        <a href="#">BLOG</a>
                    </li>
                    <li
                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-28">
                        <a href="#">SHOP</a>
                        <ul class="sub-menu">
                            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3327">
                                <a href="shop/index.html">Shop</a>
                            </li>
                            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1609">
                                <a href="cart/index.html">Cart</a>
                            </li>
                            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1608">
                                <a href="checkout/index.html">Checkout</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </nav>
        </div>
    </div>

</div>
