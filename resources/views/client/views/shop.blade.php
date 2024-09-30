@extends('client.layouts.master')
@section('body', 'archive post-type-archive post-type-archive-product wp-embed-responsive theme-panpie woocommerce-shop woocommerce woocommerce-page woocommerce-no-js rtwpvg rtwpvs rtwpvs-rounded rtwpvs-attribute-behavior-hide rtwpvs-archive-align-left rtwpvs-tooltip sticky-header header-style-5 footer-style-1 trheader has-sidebar left-sidebar product-grid-view fmp-food-menu elementor-default elementor-kit-106')
@section('content')
    <style id="panpie-dynamic-inline-css" type="text/css">
        @media (min-width: 1200px) {
            .container {
                max-width: 1200px;
            }
        }

        a {
            color: #f43127;
        }

        a:hover {
            color: #fcb302;
        }

        .primary-color {
            color: #f43127;
        }

        .secondary-color {
            color: #fcb302;
        }

        #preloader {
            background-color: #ffffff;
        }

        body {
            color: #646464;
            font-family: "Roboto", sans-serif;
            font-size: 16px;
            line-height: 30px;
            font-weight: normal;
            font-style: normal;
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            font-family: "Barlow", sans-serif;
            font-weight: 700;
        }

        h1 {
            font-family: "Barlow", sans-serif;
            font-weight: 700;
        }

        h1 {
            font-size: 38px;
            line-height: 40px;
            font-style: normal;
        }

        h2 {
            font-family: "Barlow", sans-serif;
            font-weight: 700;
        }

        h2 {
            font-size: 30px;
            line-height: 36px;
            font-style: normal;
        }

        h3 {
            font-family: "Barlow", sans-serif;
            font-weight: 700;
        }

        h3 {
            font-size: 24px;
            line-height: 34px;
            font-style: normal;
        }

        h4 {
            font-family: "Barlow", sans-serif;
            font-weight: 700;
        }

        h4 {
            font-size: 20px;
            line-height: 32px;
            font-style: normal;
        }

        h5 {
            font-family: "Barlow", sans-serif;
            font-weight: 700;
        }

        h5 {
            font-size: 18px;
            line-height: 26px;
            font-style: normal;
        }

        h6 {
            font-family: "Barlow", sans-serif;
            font-weight: 700;
        }

        h6 {
            font-size: 16px;
            line-height: 24px;
            font-style: normal;
        }

        .topbar-style-1 .header-top-bar {
            background-color: #ffffff;
            color: #646464;
        }

        .topbar-style-1 .header-top-bar a {
            color: #646464;
        }

        .topbar-style-1 .tophead-left i,
        .topbar-style-1 .tophead-right .header-button i,
        .topbar-style-1 .tophead-right .tophead-social a:hover {
            color: #ff0302;
        }

        .topbar-style-1.trheader .header-top-bar {
            color: #ffffff;
        }

        .topbar-style-1.trheader .header-top-bar a {
            color: #ffffff;
        }

        .topbar-style-1.trheader .header-top-bar .tophead-right i,
        .topbar-style-1.trheader .header-top-bar .tophead-left i:before {
            color: #ffffff;
        }

        .topbar-style-1 .header-top-bar a:hover {
            color: #ff0302;
        }

        .topbar-style-2 .header-top-bar {
            background-color: #f3f4f7;
            color: #646464;
        }

        .topbar-style-2 .header-top-bar a {
            color: #646464;
        }

        .topbar-style-2 .tophead-left i {
            color: #646464;
        }

        .topbar-style-2 .header-top-bar .tophead-right a:hover i,
        .topbar-style-2 .header-top-bar .tophead-left a:hover {
            color: #f43127;
        }

        .topbar-style-2.trheader .header-top-bar,
        .topbar-style-2.trheader .header-top-bar a {
            color: #ffffff;
        }

        .topbar-style-2.trheader .header-top-bar .tophead-right i,
        .topbar-style-2.trheader .header-top-bar .tophead-left i:before {
            color: #ffffff;
        }

        .site-header .main-navigation nav ul li a {
            font-family: "Barlow", sans-serif;
            font-size: 16px;
            line-height: 22px;
            font-weight: 600;
            color: #010101;
            font-style: normal;
        }

        .site-header .main-navigation ul li ul li a {
            font-family: "Barlow", sans-serif;
            font-size: 15px;
            line-height: 22px;
            font-weight: 600;
            color: #010101;
            font-style: normal;
        }

        .mean-container .mean-nav ul li a {
            font-family: "Barlow", sans-serif;
            font-size: 15px;
            line-height: 22px;
            font-weight: 600;
            font-style: normal;
        }

        .site-header .main-navigation ul.menu>li>a:hover,
        .site-header .main-navigation ul.menu>li.current-menu-item>a,
        .site-header .main-navigation ul.menu>li.current>a {
            color: #f43127;
        }

        .header-style-1 .site-header .rt-sticky-menu .main-navigation nav>ul>li>a,
        .header-style-2 .site-header .rt-sticky-menu .main-navigation nav>ul>li>a,
        .header-style-3 .site-header .rt-sticky-menu .main-navigation nav>ul>li>a,
        .header-style-4 .site-header .rt-sticky-menu .main-navigation nav>ul>li>a {
            color: #010101;
        }

        .header-style-1 .site-header .rt-sticky-menu .main-navigation nav>ul>li>a:hover,
        .header-style-2 .site-header .rt-sticky-menu .main-navigation nav>ul>li>a:hover,
        .header-style-3 .site-header .rt-sticky-menu .main-navigation nav>ul>li>a:hover,
        .header-style-4 .site-header .rt-sticky-menu .main-navigation nav>ul>li>a:hover {
            color: #f43127;
        }

        .site-header .main-navigation nav ul li a.active {
            color: #f43127;
        }

        .trheader .site-header .main-navigation nav>ul>li>a,
        .trheader .site-header .main-navigation .menu>li>a {
            color: #010101;
        }

        .header-style-1 .site-header .main-navigation ul.menu>li.current>a:hover,
        .header-style-1 .site-header .main-navigation ul.menu>li.current-menu-item>a:hover,
        .header-style-1 .site-header .main-navigation ul li a.active,
        .header-style-1 .site-header .main-navigation ul.menu>li.current-menu-item>a,
        .header-style-1 .site-header .main-navigation ul.menu>li.current>a {
            color: #f43127;
        }

        .info-menu-bar .cart-icon-area .cart-icon-num,
        .header-search-field .search-form .search-button:hover {
            background-color: #f43127;
        }

        .header-search-field .search-form .search-button,
        .additional-menu-area .sidenav .closebtn {
            background-color: #fcb302;
        }

        .additional-menu-area .sidenav ul li a:hover {
            color: #fcb302;
        }

        .additional-menu-area .sidenav-social span a:hover {
            background-color: #f43127;
        }

        .site-header .main-navigation ul li ul li {
            background-color: #ffffff;
        }

        .site-header .main-navigation ul.menu li ul.sub-menu li a:hover {
            color: #fcb302;
        }

        .site-header .main-navigation ul.menu li ul.sub-menu li a:hover:after {
            background-color: #ffffff;
        }

        .site-header .main-navigation ul li.mega-menu ul.sub-menu li a:hover {
            color: #fcb302;
        }

        .offscreen-navigation li.current-menu-item>a,
        .offscreen-navigation li.current-menu-parent>a {
            color: #f43127;
        }

        .rt-sticky-menu-wrapper {
            border-color: #f43127;
        }

        .site-header .main-navigation ul li.mega-menu>ul.sub-menu {
            background-color: #ffffff;
        }

        .site-header .main-navigation ul li.mega-menu ul.sub-menu li a {
            color: #010101;
        }

        .site-header .main-navigation ul li.mega-menu>ul.sub-menu li:before {
            color: #f43127;
        }

        .mean-container a.meanmenu-reveal,
        .mean-container .mean-nav ul li a.mean-expand {
            color: #f43127;
        }

        .mean-container a.meanmenu-reveal span {
            background-color: #f43127;
        }

        .mean-container .mean-bar {
            border-color: #f43127;
        }

        .mean-container .mean-nav ul li a:hover,
        .mean-container .mean-nav>ul>li.current-menu-item>a {
            color: #f43127;
        }

        .mean-container .mean-nav ul li.current_page_item>a,
        .mean-container .mean-nav ul li.current-menu-item>a,
        .mean-container .mean-nav ul li.current-menu-parent>a {
            color: #f43127;
        }

        .additional-menu-area a.side-menu-trigger:hover,
        .trheader.non-stick .additional-menu-area a.side-menu-trigger:hover {
            color: #f43127;
        }

        .site-header .search-box .search-text {
            border-color: #f43127;
        }

        .header-style-1 .site-header .header-top .icon-left {
            border-color: #fcb302;
        }

        .header-style-2 .header-icon-area .header-search-box a:hover i {
            background-color: #f43127;
        }

        .header-style-3 .site-header .header-button .button-btn:before {
            background: #fcb302;
        }

        .header-style-3 .site-header .header-button .button-btn {
            background: #f43127;
        }

        .header-style-4.trheader .site-header .main-navigation nav>ul>li>a:hover {
            color: #f43127;
        }

        .header-style-5 .header-icon-area .contact-info .icon-left {
            background-color: #f43127;
        }

        .header-style-6 .header-icon-area .contact-info .info-text a {
            color: #f43127;
        }

        .header-style-8 .header-icon-area .cart-icon-area .cart-icon-num {
            background-color: #fcb302;
        }

        .entry-banner .entry-banner-content h1 {
            color: #111111;
        }

        .breadcrumb-area .entry-breadcrumb span a,
        .breadcrumb-trail ul.trail-items li a {
            color: #9e9586;
        }

        .breadcrumb-area .entry-breadcrumb span a:hover,
        .breadcrumb-trail ul.trail-items li a:hover {
            color: #f43127;
        }

        .breadcrumb-trail ul.trail-items li,
        .entry-banner .entry-breadcrumb .delimiter,
        .entry-banner .entry-breadcrumb .dvdr {
            color: #9e9586;
        }

        .breadcrumb-area .entry-breadcrumb>span:last-child,
        .breadcrumb-trail ul.trail-items li>span {
            color: #f43127;
        }

        .entry-banner:after {
            background: rgba(0, 0, 0, 0);
        }

        .entry-banner .entry-banner-content {
            padding-top: 120px;
            padding-bottom: 150px;
        }

        a.scrollup {
            background-color: #f43127;
        }

        a.scrollup:hover {
            color: #f43127;
        }

        .footer-top-area {
            background-color: #1a1a1a;
            color: #c8c9cc;
        }

        .footer-area .widgettitle {
            color: #ffffff;
        }

        .footer-top-area .widget a,
        .footer-style-1 .footer-area .copyright a,
        .footer-top-area .widget ul.menu li a:before,
        .footer-top-area .widget_archive li a:before,
        .footer-top-area ul li.recentcomments a:before,
        .footer-top-area ul li.recentcomments span a:before,
        .footer-top-area .widget_categories li a:before,
        .footer-top-area .widget_pages li a:before,
        .footer-top-area .widget_meta li a:before,
        .footer-top-area .widget_recent_entries ul li a:before {
            color: #c8c9cc;
        }

        .footer-top-area .widget a:hover,
        .footer-top-area .widget a:active,
        .footer-top-area ul li a:hover i,
        .footer-style-1 .footer-area .copyright a:hover,
        .footer-top-area .widget ul.menu li a:hover:before,
        .footer-top-area .widget_archive li a:hover:before,
        .footer-top-area .widget_categories li a:hover:before,
        .footer-top-area .widget_pages li a:hover:before,
        .footer-top-area .widget_meta li a:hover:before,
        .footer-top-area .widget_recent_entries ul li a:hover:before {
            color: #ffffff;
        }

        .footer-top-area .rt_footer_social_widget .footer-social li a:hover {
            background: #f43127;
        }

        .widget-open-hour ul.opening-schedule li .os-close {
            color: #fcb302;
        }

        .footer-style-2 .footer-top-area .rt_footer_social_widget .footer-social li a:hover {
            background-color: #f43127;
        }

        .rt-box-title-1 span {
            border-top-color: #f43127;
        }

        .search-form button,
        .woocommerce.widget_product_search button {
            background-color: #f43127;
        }

        .search-form input:focus,
        .woocommerce.widget_product_search .search-field:focus {
            border-color: #f43127;
        }

        .sidebar-widget-area .rt_widget_recent_entries_with_image .media-body .posted-date a,
        .sidebar-widget-area .widget ul li.active a,
        .sidebar-widget-area .widget ul li.active a:before,
        .footer-top-area .search-form input.search-submit,
        .footer-top-area ul li:before,
        .footer-top-area ul li a:before {
            color: #f43127;
        }

        .footer-top-area .search-form input.search-submit,
        .footer-top-area ul li a:before,
        .footer-top-area .stylish-input-group .input-group-addon button i {
            color: #f43127;
        }

        .footer-top-area .stylish-input-group .input-group-addon button:hover {
            background: #f43127;
        }

        .rt-box-title-1 {
            background-color: #f43127;
        }

        .footer-topbar,
        .footer-topbar .emergrncy-content-holder {
            background: #f43127;
        }

        .footer-topbar .emergrncy-content-holder:before {
            border-color: transparent #f43127;
        }

        .sidebar-widget-area .widget_recent_comments ul li.recentcomments:hover>span:before {
            background-color: #fcb302;
        }

        .post-box-style .post-box-date ul li a,
        .post-tab-layout .post-box-date ul li:first-child {
            color: #f43127;
        }

        .widget ul li a:hover,
        .sidebar-widget-area .widget ul li a:hover,
        .post-box-style .media-body h3 a:hover,
        .post-tab-layout .entry-title a:hover,
        .feature-post-layout .entry-title a:hover {
            color: #f43127;
        }

        .feature-post-layout .post-box-date ul li.feature-date,
        .rt_widget_recent_entries_with_image .topic-box .widget-recent-post-title a:hover {
            color: #f43127;
        }

        .rt_widget_recent_entries_with_image .topic-box .post-date1 span {
            background-color: #f43127;
        }

        .sidebar-widget-area .mc4wp-form .form-group .item-btn {
            background-color: #f43127;
        }

        .sidebar-widget-area .mc4wp-form .form-group .item-btn:hover {
            background-color: #fcb302;
        }

        .post-tab-layout ul.btn-tab li .active {
            background-color: #f43127;
        }

        .call-to-action-content .rtin-des .item-btn:hover,
        .sidebar-widget-area .widget .download-list ul li a {
            background-color: #f43127;
        }

        .sidebar-widget-area .widget .download-list ul li a:hover {
            background-color: #fcb302;
        }

        .sidebar-widget-area .widget_calendar td a,
        .sidebar-widget-area .widget_calendar a:hover {
            color: #f43127;
        }

        .entry-footer .about-author .media-body .author-title,
        .entry-title h1 a {
            color: #f43127;
        }

        .comments-area .main-comments .replay-area a:hover {
            background-color: #f43127;
        }

        .blog-style-2 .readmore-btn:hover {
            background-color: #f43127;
            color: #ffffff;
        }

        .blog-box .entry-content h3 a:hover,
        .blog-layout-2 .entry-content h3 a:hover {
            color: #f43127;
        }

        .blog-box .blog-bottom-content-holder ul li i,
        .blog-box .blog-bottom-content-holder ul li a:hover {
            color: #f43127;
        }

        .blog-box .blog-bottom-content-holder ul li,
        .blog-box .blog-bottom-content-holder ul li a,
        .rt-news-box .post-date-dark ul li i,
        .entry-header .entry-meta .post-date i {
            color: #fcb302;
        }

        .error-page-area {
            background-color: #ffffff;
        }

        .error-page-area .text-1 {
            color: #ffffff;
        }

        .error-page-area .text-2 {
            color: #000000;
        }

        .error-page-area .error-page-content .go-home a:after {
            background: #f43127;
        }

        .error-page-area .error-page-content .go-home a:before {
            background: #fcb302;
        }

        #respond form .btn-send {
            background-color: #f43127;
        }

        #respond form .btn-send:hover {
            background: #fcb302;
        }

        .item-comments .item-comments-list ul.comments-list li .comment-reply {
            background-color: #f43127;
        }

        .title-bar35:after {
            background: #f43127;
        }

        form.post-password-form input[type="submit"] {
            background: #f43127;
        }

        form.post-password-form input[type="submit"]:hover {
            background: #fcb302;
        }

        .panpie-button-1,
        .panpie-button-3 {
            color: #f43127;
        }

        .panpie-button-1:hover,
        .panpie-button-2:hover,
        .panpie-button-2:hover i {
            color: #fcb302;
        }

        .panpie-button-3:hover,
        .btn-read-more:hover {
            background-color: #f43127;
        }

        .submit-btn:hover {
            background-color: #fcb302;
        }

        .footer-top-area .mc4wp-form .form-group .item-btn:hover {
            background-color: #fcb302;
        }

        .submit-btn:after {
            background: #f43127;
        }

        .submit-btn:before {
            background: #fcb302;
        }

        .shop-layout-4 .food-box .item-content .cart-btn:after {
            background: #f43127;
        }

        .shop-layout-4 .food-box .item-content .cart-btn:before {
            background: #fcb302;
        }

        .header-style-1 .masthead-container {
            background: linear-gradient(to left, #fc4b33 0%, #ff0000 100%);
        }

        .header-style-2 .site-header .info-wrap .info a {
            background: linear-gradient(to left, #fc4b33 0%, #ff0000 100%);
        }

        .header-style-4 .header-area .header-menu {
            background: linear-gradient(to left, #fc4b33 0%, #ff0000 100%);
        }

        .sidebar-widget-area .widget_calendar caption,
        .sidebar-widget-area .widget_calendar table td#today {
            background: #f43127;
        }

        .footer-top-area .mc4wp-form .form-group .item-btn {
            background: #f43127;
        }

        .entry-footer ul.item-tags li a:hover,
        .entry-header .entry-meta ul li a:hover {
            color: #f43127;
        }

        .rt-related-post-info .post-title a:hover,
        .rt-related-post-info .post-date ul li.post-relate-date {
            color: #f43127;
        }

        .about-author ul.author-box-social li a:hover {
            color: #f43127;
        }

        .entry-header .post-date,
        .entry-footer .post-share .share-links a:hover {
            color: #f43127;
        }

        .post-navigation .post-nav-title a:hover,
        .post-navigation .prev-article:hover,
        .post-navigation .next-article:hover,
        .post-navigation .prev-article a:hover,
        .post-navigation .next-article a:hover {
            color: #f43127;
        }

        .post-navigation .next-article i,
        .post-navigation .prev-article i {
            color: #f43127;
        }

        .entry-header .entry-meta ul li i,
        .entry-header .entry-post-meta ul li a {
            color: #fcb302;
        }

        .single-post .entry-content ol li:before,
        .entry-content ol li:before {
            background-color: #f43127;
        }

        .rt-related-post .title-section h2:after {
            background-color: #f43127;
        }

        .wp-block-quote,
        blockquote {
            border-color: #f43127;
        }

        .entry-footer .item-tags a:hover,
        .rt-swiper-slider .rt-swiper-container .swiper-button>div:hover {
            background-color: #f43127;
        }

        .rt-blog-layout .entry-thumbnail-area ul li i {
            color: #f43127;
        }

        .rt-blog-layout .entry-thumbnail-area ul li a:hover,
        .blog-layout-1 .blog-box .entry-content .blog-btn:hover {
            color: #f43127;
        }

        .rt-blog-layout .entry-thumbnail-area ul .active,
        .blog-layout-1 .blog-box .blog-img .date-meta {
            background: #f43127;
        }

        .rt-blog-layout .entry-content h3 a:hover {
            color: #f43127;
        }

        .blog-box .blog-social li a:hover i {
            color: #f43127;
        }

        .blog-box .blog-img-holder .entry-content {
            background: #f43127;
        }

        .blog-box .entry-content ul li i,
        .blog-layout-2 .entry-content ul li i {
            color: #fcb302;
        }

        .blog-box .entry-content ul li a:hover,
        .blog-layout-2 .entry-content ul li a:hover {
            color: #f43127;
        }

        .pagination-area li.active a:hover,
        .pagination-area ul li.active a,
        .pagination-area ul li a:hover,
        .pagination-area ul li span.current {
            background-color: #fcb302;
        }

        .woocommerce nav.woocommerce-pagination ul li a:hover,
        .woocommerce nav.woocommerce-pagination ul li .current,
        .woocommerce nav.woocommerce-pagination ul li span.current,
        .woocommerce nav.woocommerce-pagination ul li.active a {
            background-color: #fcb302;
        }

        .contact-form h3:after {
            background-color: #f43127;
        }

        .fluentform .contact-form .ff-el-form-control:focus,
        .fluentform .team-form .ff-el-form-control:focus {
            border-color: #f43127;
        }

        .fluentform .contact-form .text-danger,
        .fluentform .team-form .text-danger {
            color: #fcb302 !important;
        }

        .fluentform .contact-form .ff-el-is-error .ff-el-form-control,
        .fluentform .contact-form.ff-el-is-error .ff-el-form-control,
        .fluentform .team-form .ff-el-is-error .ff-el-form-control,
        .fluentform .team-form.ff-el-is-error .ff-el-form-control {
            border-color: #fcb302;
        }

        .team-details-social li a {
            background: #f43127;
            border: 1px solid #f43127;
        }

        .team-details-social li:hover a {
            border: 1px solid #f43127;
        }

        .team-details-social li:hover a i {
            color: #f43127;
        }

        .skill-area .progress .lead {
            border: 2px solid #f43127;
        }

        .skill-area .progress .progress-bar {
            background: #f43127;
        }

        .team-details-info li i {
            color: #f43127;
        }

        .rt-woo-nav .owl-custom-nav .owl-prev:hover,
        .rt-woo-nav .owl-custom-nav .owl-next:hover {
            background-color: #fcb302;
        }

        .woocommerce ul.products li.product .onsale,
        .woocommerce span.onsale,
        .woocommerce a.added_to_cart,
        .woocommerce input.button:hover,
        p.demo_store,
        .woocommerce #respond input#submit.disabled:hover,
        .woocommerce #respond input#submit:disabled:hover,
        .woocommerce #respond input#submit[disabled]:disabled:hover,
        .woocommerce a.button.disabled:hover,
        .woocommerce a.button:disabled:hover,
        .woocommerce a.button[disabled]:disabled:hover,
        .woocommerce button.button.disabled:hover,
        .woocommerce button.button:disabled:hover,
        .woocommerce button.button[disabled]:disabled:hover,
        .woocommerce input.button.disabled:hover,
        .woocommerce input.button:disabled:hover,
        .woocommerce input.button[disabled]:disabled:hover,
        .woocommerce-account .woocommerce .woocommerce-MyAccount-navigation ul li a {
            background-color: #f43127;
        }

        .woocommerce ul.products li.product h3 a,
        .woocommerce div.product .product-meta a:hover,
        .woocommerce a.woocommerce-review-link:hover {
            color: #f43127;
        }

        .woocommerce div.product p.price,
        .woocommerce div.product span.price {
            color: #f43127;
        }

        .woocommerce .widget_price_filter .ui-slider .ui-slider-handle {
            background-color: #f43127;
        }

        .header-icon-area .cart-icon-area>a {
            background-color: #fcb302;
        }

        .woocommerce-message,
        .woocommerce-info {
            border-color: #f43127;
        }

        .woocommerce .product-thumb-area .overlay {
            background-color: rgba(244, 49, 39, 0.8);
        }

        .woocommerce .product-thumb-area:after {
            background-color: rgba(252, 179, 2, 0.9);
        }

        .woocommerce .product-thumb-area .product-info ul li a:hover,
        .single-product.woocommerce .entry-summary a.compare:hover,
        .single-product.woocommerce .entry-summary a.add_to_wishlist:hover,
        .single-product.woocommerce .entry-summary .yith-wcwl-wishlistaddedbrowse a:hover,
        .single-product.woocommerce .entry-summary .yith-wcwl-wishlistexistsbrowse a:hover {
            background-color: #f43127;
        }

        .woocommerce #respond input#submit:hover,
        .woocommerce a.button:hover,
        .woocommerce button.button:hover,
        .woocommerce input.button:hover,
        .woocommerce div.product form.cart .button:hover,
        .woocommerce a.added_to_cart:hover,
        .woocommerce #respond input#submit.alt:hover,
        .woocommerce a.button.alt:hover,
        .woocommerce button.button.alt:hover,
        .woocommerce input.button.alt:hover {
            background-color: #fcb302;
        }

        .rt-woo-nav .section-title p {
            color: #f43127;
        }

        .woocommerce ul.products li.product h3 a:hover,
        .woocommerce ul.products li.product .price {
            color: #fcb302;
        }

        .woocommerce div.product .woocommerce-tabs .panel ul li:before {
            color: #f43127;
        }

        .cart-icon-products .widget_shopping_cart .mini_cart_item a:hover {
            color: #f43127;
        }

        .woocommerce ul.product_list_widget li span.amount {
            color: #f43127;
        }

        .cart-icon-products .woocommerce.widget_shopping_cart .cart_list li a.remove {
            color: #f43127 !important;
        }

        .cart-icon-products .woocommerce.widget_shopping_cart .cart_list li a.remove:hover {
            background: #f43127;
        }

        .woocommerce.product-list-view .product-info-area .product-list-info ul li a:hover {
            background-color: #f43127;
        }

        .woocommerce #review_form #respond .comment-form .form-submit input.submit {
            background: #f43127;
        }

        .woocommerce div.product .woocommerce-tabs ul.tabs li.active,
        .woocommerce #review_form #respond .comment-form .form-submit input.submit:hover {
            background: #fcb302;
        }

        .product-grid-view .filter-heading .view-mode ul li.grid-view-nav a,
        .product-list-view .filter-heading .view-mode ul li.list-view-nav a {
            background-color: #f43127;
            border-color: #f43127;
        }

        .food-menu-inner .filter-heading .isotope-classes-tab .nav-item.current {
            background: #fcb302;
            border-color: #fcb302;
        }

        .woocommerce #respond input#submit:after,
        .woocommerce a.button:after,
        .woocommerce button.button:after,
        .woocommerce input.button:after {
            background: #f43127;
        }

        .woocommerce #respond input#submit:before,
        .woocommerce a.button:before,
        .woocommerce button.button:before,
        .woocommerce input.button:before {
            background: #fcb302;
        }

        .shop-layout-4 .food-box .entry-meta .select2-container--default .select2-selection--single .select2-selection__arrow {
            background: #fcb302;
        }

        .product-grid-view .woo-shop-top .view-mode ul li.grid-view-nav a,
        .product-list-view .woo-shop-top .view-mode ul li.list-view-nav a {
            background-color: #fcb302;
            border-color: #fcb302;
        }

        .woocommerce div.product form.variations_form .variations td.value input[type="radio"]:checked+label::after {
            background: #fcb302;
        }

        .rt-drop,
        .post-detail-style3 .breadcrumbs-area2 .breadcrumbs-content ul li,
        .post-detail-style3 .breadcrumbs-area2 .breadcrumbs-content ul li a,
        .post-detail-style3 .breadcrumbs-area2 .breadcrumbs-content ul li a:hover,
        .breadcrumbs-area2 .breadcrumbs-content h3 a:hover,
        .post-detail-style3 .post-3-no-img-meta ul.post-info-light li a:hover,
        .post-detail-style3 .entry-meta li a:hover,
        .sidebar-widget-area .widget .corporate-address li i,
        .sidebar-widget-area .widget .corporate-address li i.fa-map-marker,
        .rt-news-box .post-cat span a:hover,
        .rt-news-box .topic-box .post-date1 span a:hover,
        .rt_widget_recent_entries_with_image .topic-box .post-date1 span a:hover,
        .sidebar-widget-area .widget.title-style-1 h3.widgettitle,
        .search-form input.search-submit,
        ul.news-info-list li i,
        .search-form input.search-submit:hover,
        .rt-cat-list-widget li:hover a,
        .footer-top-area .search-form input.search-submit,
        .ui-cat-tag a:hover,
        .entry-post-meta .post-author a:hover,
        .post-detail-style2 .post-info-light ul li a:hover,
        .post-detail-style2 .entry-meta li a:hover,
        .entry-title a:hover,
        .rt-blog-layout .entry-thumbnail-area ul li i,
        .rt-blog-layout .entry-thumbnail-area ul li a:hover,
        .rt-blog-layout .entry-content h3 a:hover,
        .blog-layout-1 .entry-meta ul li a:hover,
        .blog-box .blog-bottom-content-holder ul li i,
        .footer-top-area .rt-news-box .dark .rt-news-box-widget .media-body a:hover,
        .entry-footer .share-social ul a:hover {
            color: #f43127;
        }

        .woocommerce-cart .woocommerce table.shop_table td.product-name>a:hover {
            color: #f43127;
        }

        .rt-box-title-2,
        .blog-box .blog-img-holder .entry-content,
        button,
        input[type="button"],
        input[type="reset"],
        input[type="submit"],
        .sidebar-widget-area .widget.title-style-1 h3.widgettitle,
        .rt-cat-list-widget li:before,
        .elementor-widget-wp-widget-categories ul li:before,
        .cat-holder-text,
        .rt-blog-layout .entry-thumbnail-area ul .active,
        .blog-layout-2 .entry-meta .blog-cat ul li a:hover,
        .blog-layout-3 .entry-meta ul li.blog-cat li a:hover {
            background-color: #f43127;
        }

        .elementor-widget-wp-widget-categories ul li a:before {
            color: #f43127;
        }

        .elementor-widget-wp-widget-categories ul li:hover a {
            color: #fcb302;
        }

        .post-detail-style2 .cat-holder:before {
            border-top: 8px solid #f43127;
        }

        .footer-top-area .widget_tag_cloud a:hover {
            background-color: #f43127 !important;
        }

        .entry-content .wpb_layerslider_element a.layerslider-button,
        .comments-area h3.comment-num:after {
            background: #f43127;
        }

        .entry-content .btn-read-more-h-b,
        .pagination-area ul li span .header-style-10.trheader #tophead .tophead-social li a:hover {
            border: 1px solid #f43127;
        }

        .woocommerce nav.woocommerce-pagination ul li span {
            border-color: #f43127;
        }

        .woocommerce div.product .share-links a:hover {
            color: #f43127;
        }

        .bottomBorder {
            border-bottom: 2px solid #f43127;
        }

        .search-form input.search-field {
            border-color: #f43127;
        }

        #respond form input:focus,
        #respond form textarea:focus {
            border-color: #f43127;
        }

        .search-form input.search-submit {
            background-color: #f43127;
            border: 2px solid #f43127;
        }

        .sidebar-widget-area .widget.title-style-1 h3.widgettitle span {
            border-top: 10px solid #f43127;
        }

        .sidebar-widget-area .widget_tag_cloud a:hover,
        .sidebar-widget-area .widget_product_tag_cloud a:hover {
            background-color: #f43127;
        }

        .cat-holder:before {
            border-top: 8px solid #f43127;
        }

        .footer-bottom-social ul li a {
            background-color: #f43127;
        }

        .footer-bottom-social ul li a:hover {
            background-color: #fcb302;
        }

        .page-links span.current .page-number,
        .page-links a.post-page-numbers:hover .page-number {
            background-color: #fcb302;
        }

        .btn-fill-light {
            background-color: #fcb302;
        }

        .btn-fill-dark,
        .btn-fill-red-white {
            background: #f43127;
        }

        .btn-fill-black:before {
            background-color: #f43127;
        }

        a.slider-button:before,
        .btn-fill-dark:before,
        a.slider-button-2 {
            background-color: #fcb302;
        }

        a.slider-button:after,
        .btn-fill-white:before {
            background: #f43127;
        }

        .panpie-style-style5 .food-box .img-wrap .cart-btn:after,
        .food-menu-combo .food-box-3 .item-content .btn-wrap .cart-btn:after {
            background: #f43127;
        }

        .panpie-style-style5 .food-box .img-wrap .cart-btn:before,
        .food-menu-combo .food-box-3 .item-content .btn-wrap .cart-btn:before {
            background-color: #fcb302;
        }

        .panpie-style-style5 .food-box .entry-meta .select2-container--default .select2-selection--single .select2-selection__arrow {
            background-color: #fcb302;
        }

        .rt-button .button {
            background: #f43127;
        }

        .sec-title .sub-title {
            color: #f43127;
        }

        .section-title h2:after,
        .sec-title.style2 .rtin-title:before,
        .sec-title.style2 .rtin-title:after {
            background: #f43127;
        }

        .sec-title.style2 .section-title span {
            color: #f43127;
        }

        .barshow .title-bar,
        .about-info-text h2:after {
            background-color: #f43127;
        }

        .sec-title.style4 .rtin-title:after {
            background-color: #f43127;
        }

        .free-delivery {
            background: #f43127;
        }

        .wp-block-themepunch-revslider .custom.tparrows:before {
            color: #f43127 !important;
        }

        .wp-block-themepunch-revslider .custom.tparrows:hover {
            background: #f43127 !important;
        }

        .custom .tp-bullet.selected {
            background: #f43127 !important;
        }

        ul.slide-feature-list li i {
            color: #f43127;
        }

        .custom2 .hephaistos.tparrows:hover {
            background: #fcb302 !important;
        }

        .title-text-button ul.single-list li:after,
        .title-text-button ul.dubble-list li:after {
            color: #f43127;
        }

        .title-text-button .subtitle {
            color: #f43127;
        }

        .title-text-button.text-style1 .subtitle:after {
            background: #fcb302;
        }

        .about-image-text .about-content .sub-rtin-title {
            color: #f43127;
        }

        .about-image-text ul li:before {
            color: #f43127;
        }

        .about-image-text ul li:after {
            color: #f43127;
        }

        .limited-offer:before {
            background: #fcb302;
        }

        .rt-owl-nav-1.slider-nav-enabled .owl-carousel .owl-nav>div {
            background-color: #f43127;
        }

        .rt-owl-nav-1.slider-nav-enabled .owl-carousel .owl-nav>div:hover {
            background-color: #fcb302;
        }

        .rt-owl-nav-1.slider-dot-enabled .owl-carousel .owl-dot:hover span,
        .rt-owl-nav-1.slider-dot-enabled .owl-carousel .owl-dot.active span {
            background-color: #f43127;
        }

        .rt-owl-nav-2.slider-dot-enabled .owl-carousel .owl-dot:hover span,
        .rt-owl-nav-2.slider-dot-enabled .owl-carousel .owl-dot.active span {
            background-color: #f43127;
        }

        .rt-owl-nav-2.slider-nav-enabled .owl-carousel .owl-nav>div:hover {
            background: #fcb302;
        }

        .info-box .rtin-title a:hover,
        .info-style1 .rtin-item .rtin-icon,
        .info-box .rtin-item .rtin-price {
            color: #f43127;
        }

        .info-style3 .rtin-item .rtin-serial,
        .info-style4 .rtin-item .rtin-button a:before,
        .info-style5 .rtin-item .rtin-button .info-button:before,
        .info-style7 .rtin-item .rtin-button .info-button:before {
            background: #fcb302;
        }

        .info-style3 .rtin-item:hover .rtin-serial {
            background-color: #f43127;
        }

        .info-style5 .rtin-item .rtin-header,
        .info-style7 .rtin-item .rtin-button .info-button {
            background-color: #f43127;
        }

        .info-style5 .rtin-item .rtin-button .info-button {
            border-color: #fcb302;
        }

        .rt-counter .rtin-item .rtin-counter,
        .rtin-skills .rtin-skill-each .progress .progress-bar>span,
        .rtin-progress-bar .progress .progress-bar>span {
            color: #f43127;
        }

        .rt-counter.rtin-counter-style3 .rtin-item,
        .rtin-skills .rtin-skill-each .progress .progress-bar {
            background-color: #f43127;
        }

        .rtin-skills .rtin-skill-each .progress .progress-bar>span:before,
        .rtin-progress-bar .progress .progress-bar>span:before {
            border-top-color: #f43127;
        }

        .rtin-progress-bar .progress .progress-bar {
            background-color: #fcb302;
        }

        .rt-counter.rtin-counter-style2 .rtin-item svg path {
            stroke: #fcb302;
        }

        .team-default .rtin-content .rtin-title a:hover {
            color: #f43127;
        }

        .team-default .rtin-content .rtin-designation {
            color: #f43127;
        }

        .team-single .rtin-heading .designation,
        .team-single .rtin-heading .designation span {
            color: #f43127;
        }

        .team-single ul.rtin-social li a {
            background-color: #fcb302;
        }

        .team-multi-layout-4 .rtin-social li a:hover,
        .team-multi-layout-4 .rtin-item .mask-wrap:after,
        .team-single .rtin-content ul.rtin-social li a:hover {
            background-color: #f43127;
        }

        .team-single .rtin-content a:hover,
        .team-single .rtin-team-info a:hover {
            color: #f43127;
        }

        .team-single .rtin-skills h3:after,
        .team-single .team-contact-wrap h3:after,
        .team-single .rtin-team-skill-info h3:after {
            background-color: #f43127;
        }

        .team-multi-layout-1 .rtin-item .rtin-social li a:hover {
            color: #f43127;
        }

        .team-multi-layout-1 .rtin-item .rtin-social,
        .team-multi-layout-2 .rtin-social li a {
            background-color: #fcb302;
        }

        .team-multi-layout-2 .rtin-content-wrap .mask-wrap,
        .team-multi-layout-2 .rtin-social li a:hover {
            background-color: #f43127;
        }

        .team-multi-layout-3 .rtin-item .rtin-content-wrap .rtin-content:after {
            background-color: #f43127;
        }

        .team-multi-layout-3 .rtin-social li a:hover {
            color: #fcb302;
        }

        .gallery-multi-layout-2 .rtin-item h3 a:hover {
            color: #f43127;
        }

        .gallery-multi-layout-1 .rtin-item h3 a:hover {
            color: #fcb302;
        }

        .gallery-multi-layout-1 .rtin-item:after,
        .gallery-multi-layout-2 .rtin-item .rtin-figure:after {
            background-color: rgba(244, 49, 39, 1);
        }

        .gallery-multi-layout-1 .rtin-item .item-icon a:hover,
        .gallery-multi-layout-2 .rtin-item .item-icon a:hover {
            background-color: #fcb302;
        }

        .event-grid-layout1 .rtin-figure .event-date,
        .event-grid-layout2 .rtin-figure .event-date {
            background-color: #fcb302;
        }

        .event-grid-layout1 .rtin-content .rtin-title a:hover,
        .event-grid-layout2 .rtin-item .rtin-title a:hover {
            color: #f43127;
        }

        .rtin-event-wrap .rtin-event-info li i,
        .event-grid-layout1 .rtin-content .rtin-info span i,
        .event-grid-layout2 .rtin-content .rtin-info span i {
            color: #fcb302;
        }

        .event-single .single-event-inner .post-thumb .event-date {
            background-color: #fcb302;
        }

        .event-grid-layout2 .rtin-item .rtin-btn,
        .event-grid-layout2 .rtin-item .rtin-icon i:before {
            color: #f43127;
        }

        .event-grid-layout1 .rtin-item:before {
            background: -webkit-linear-gradient(bottom, #f43127, transparent);
            background: linear-gradient(to top, #f43127, transparent);
        }

        .rtin-service-wrap,
        .event-grid-layout2 .rtin-item:after {
            background-color: #f43127;
        }

        .rtin-testimonial-3 .slick-carousel-nav .slick-list .slick-track .slick-slide.slick-current .nav-item img {
            border-color: #f43127;
        }

        .rtin-testimonial-1 .rtin-item .rtin-content svg path {
            fill: #f43127;
            stroke: #f43127;
        }

        .post-default .rtin-item-post .rtin-content h3 a:hover,
        .post-grid-style3 .blog-box .rtin-content h3 a:hover,
        .post-grid-style2 .rtin-item-post .post-grid-more i {
            color: #f43127;
        }

        .post-default ul.post-grid-meta li i {
            color: #fcb302;
        }

        .post-default ul.post-grid-meta li a:hover,
        .post-grid-style3 .blog-box .blog-btn:hover,
        .post-default.post-grid-style2 .blog-btn:hover,
        .post-default.post-grid-style4 .blog-btn:hover {
            color: #f43127;
        }

        .offer-active .rt-price-table-box .offer,
        .offer-active .rt-price-table-box .popular-shape:after {
            background: #f43127;
        }

        .rtin-pricing-layout1 .rtin-pricing-price .rtin-price,
        .default-pricing .rt-price-table-box ul li i {
            color: #f43127;
        }

        .rtin-pricing-layout2:hover .rt-price-table-box .price-header .rtin-title,
        .rtin-pricing-layout2.active-class .rt-price-table-box .price-header .rtin-title,
        .rtin-pricing-layout2 .rt-price-table-box .header-wrap {
            background: #f43127;
        }

        .rtin-pricing-layout2 .price-header .rtin-title,
        .rtin-pricing-layout2:hover .rt-price-table-box .header-wrap,
        .rtin-pricing-layout2.active-class .rt-price-table-box .header-wrap {
            background: #fcb302;
        }

        .tab-form-1 .elementor-tabs .elementor-tab-title.elementor-active,
        .tab-form-1 .elementor-tabs .elementor-tabs-wrapper .elementor-tab-title a:hover {
            color: #f43127;
        }

        .tab-form-1 .elementor-tabs .elementor-tabs-wrapper .elementor-tab-title a:after {
            background-color: #f43127;
        }

        .fixed-sidebar-left .elementor-widget-wp-widget-nav_menu ul>li>a:hover,
        .fix-bar-bottom-copyright .rt-about-widget ul li a:hover,
        .fixed-sidebar-left .rt-about-widget ul li a:hover {
            color: #f43127;
        }

        .element-side-title h5:after {
            background: #fcb302;
        }

        .element-side-title h5 {
            color: #f43127;
        }

        .fixed-sidebar-addon .elementor-widget-wp-widget-nav_menu ul>li>a:hover,
        .fixed-sidebar-addon .rt-about-widget .footer-social li a:hover {
            color: #f43127;
        }

        .rt-cat-list-widget li:before,
        .rtin-faq .faq-item .faq-number span {
            background: #f43127;
        }

        .elementor-icon-list-items .elementor-icon-list-item i,
        .address-style2 .rtin-item:hover .rtin-icon i {
            color: #f43127;
        }

        .rtin-address-default .rtin-item .rtin-info a:hover,
        .rtin-address-default .rtin-item .rtin-icon i {
            color: #fcb302;
        }

        .rtin-logo-slider .rtin-item:hover {
            border-color: #f43127;
        }

        .video-style2 .rtin-video .item-icon .rtin-play,
        .video-style1 .rtin-video .item-icon .rtin-play:hover,
        .video-style3 .rtin-video .item-icon .rtin-play {
            color: #f43127;
        }

        .video-style1 .rtin-video .item-icon .rtin-play:before {
            background: #f43127;
        }

        .elementor-accordion .elementor-tab-title.elementor-active .elementor-accordion-icon-opened {
            color: #f43127;
        }

        .elementor-accordion .elementor-accordion-item .elementor-tab-title:before,
        .elementor-accordion .elementor-accordion-item .elementor-tab-content:before {
            background: #f43127;
        }

        .cta-style2 .action-box .rtin-phone {
            background: #fcb302;
        }

        .cta-style5 .action-box .rtin-title:before {
            background: #f43127;
        }

        .category-box-style2 .media:hover .rt-categoty-icon .svg-shape .shape-1 {
            fill: #fcb302;
        }

        .multiscroll-wrapper .ms-social-link li a:hover,
        .multiscroll-wrapper .ms-copyright a:hover {
            color: #f43127;
        }

        .ms-menu-list li.active {
            background: #f43127;
        }

        .cta-style6 .action-box .rtin-title:after {
            border-color: transparent #f43127 transparent transparent;
        }

        .select2-container--open .select2-dropdown--below,
        .select2-container--open .select2-dropdown--above {
            background-color: #fcb302;
        }

        .food-box .img-wrap .item-img .cart-btn:after,
        .food-box-5 .item-content .variable-icon a:hover,
        .food-menu-combo .food-box-2 .img-wrap .item-img .cart-btn:after {
            background: #f43127;
        }

        .food-box-5 .item-content .variable-icon a,
        .food-box .img-wrap .item-img .cart-btn:before,
        .food-menu-combo .food-box-2 .img-wrap .item-img .cart-btn:before,
        .food-menu-isotop-style11 .item-box .btn-wrap .cart-btn:before {
            background: #fcb302;
        }

        .food-box .item-content .item-title a:hover,
        .food-menu-isotop .media .media-body .item-title a:hover,
        .food-menu-combo .food-box-2 .item-content .item-title a:hover,
        .food-menu-combo .food-box-3 .item-content .item-title a:hover,
        .food-menu-isotop-style9 .media .media-body .item-title a:hover,
        .food-box-5 .item-content .item-title a:hover {
            color: #f43127;
        }

        .food-box .entry-meta .select2-container .select2-selection--single {
            background-color: #fcb302;
        }

        .food-menu-isotop .media .media-body .item-price,
        .food-menu-combo .food-box-2 .item-content .item-price,
        .food-box .item-content .entry-meta .other-prices,
        .food-box .item-content .entry-meta .item-price,
        .food-box .item-content .entry-meta li,
        .food-menu-isotop-style9 .media .media-body .item-price,
        .food-box-5 .item-price .price,
        .food-menu-isotop-style11 .item-box .item-body .item-price {
            color: #f43127;
        }

        .food-menu-isotop .isotope-classes-tab .nav-item.current {
            background-color: #fcb302;
            border-color: #fcb302;
        }

        .food-menu-combo .food-box-3 .item-content .item-price {
            color: #f43127;
        }

        .food-menu-isotop-style11 .item-box .btn-wrap .cart-btn {
            color: #fcb302;
        }

        .shop-layout-style7 .food-box .item-header .item-title a:hover,
        .shop-layout-style7 .food-box .item-header .item-price,
        .food-menu-isotop-style8 .media .media-body .item-price,
        .food-menu-isotop-style8 .media .media-body .item-title a:hover,
        .food-menu-isotop-style11 .item-box .item-body .item-title a:hover {
            color: #f43127;
        }

        .shop-layout-style7 .food-box .entry-meta .select2-container--default .select2-selection--single .select2-selection__arrow {
            background-color: #fcb302;
        }

        .shop-layout-style7 .food-box .variable-icon a:hover {
            background-color: #f43127;
        }

        .food-menu-isotop-style8 .isotope-classes-tab .nav-item.current,
        .food-menu-isotop-style11 .isotope-classes-tab .nav-item.current {
            border-color: #f43127;
        }

        .food-menu-isotop-style9 .isotope-classes-tab .nav-item.current,
        .food-menu-isotop-style11 .item-box .btn-wrap .cart-btn:after {
            border-color: #fcb302;
        }

        .fmp-layout3 .fmp-title h3 a:hover,
        .fmp-layout4 .fmp-media-body h3 a:hover {
            color: #f43127;
        }

        .fmp-isotope-layout .fmp-isotope-buttons>button.selected {
            border-color: #f43127;
        }
    </style>
    <div id="content" class="site-content">

        <div class="entry-banner">
            <div class="container">
                <div class="entry-banner-content">
                    <h1 class="entry-title">Shop</h1>
                    <div class="breadcrumb-area">
                        <div class="entry-breadcrumb"><!-- Breadcrumb NavXT 7.3.1 -->
                            <span property="itemListElement" typeof="ListItem"><a property="item" typeof="WebPage"
                                    title="Go to Panpie - Restaurant WordPress Theme."
                                    href="https://radiustheme.com/demo/wordpress/themes/panpie" class="home"><span
                                        property="name">Home</span></a>
                                <meta property="position" content="1">
                            </span><span class="dvdr"> - </span><span property="itemListElement" typeof="ListItem"><span
                                    property="name" class="archive post-product-archive current-item">Shop</span>
                                <meta property="url" content="https://radiustheme.com/demo/wordpress/themes/panpie/shop/">
                                <meta property="position" content="2">
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="primary" class="content-area shop-page ">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-12 col-12">
                        <aside class="sidebar-widget-area">
                            <div id="woocommerce_product_search-2" class="widget woocommerce widget_product_search">
                                <form role="search" method="get" class="woocommerce-product-search"
                                    action="https://radiustheme.com/demo/wordpress/themes/panpie/">
                                    <label class="screen-reader-text" for="woocommerce-product-search-field-0">Search
                                        for:</label>
                                    <input type="search" id="woocommerce-product-search-field-0" class="search-field"
                                        placeholder="Search products&hellip;" value="" name="s" />
                                    <button type="submit" value="Search" class="">Search</button>
                                    <input type="hidden" name="post_type" value="product" />
                                </form>
                            </div>
                            <div id="woocommerce_product_categories-2" class="widget woocommerce widget_product_categories">
                                <h3 class="widgettitle">Categories</h3>
                                <ul class="product-categories">
                                    <li class="cat-item cat-item-43"><a
                                            href="../product-category/chicken/index.html">Chicken</a> <span
                                            class="count">(4)</span></li>
                                    <li class="cat-item cat-item-46"><a
                                            href="../product-category/donuts/index.html">Donuts</a> <span
                                            class="count">(2)</span></li>
                                    <li class="cat-item cat-item-48"><a
                                            href="../product-category/drinks/index.html">Drinks</a> <span
                                            class="count">(1)</span></li>
                                    <li class="cat-item cat-item-45"><a
                                            href="../product-category/fries/index.html">Fries</a> <span
                                            class="count">(2)</span></li>
                                    <li class="cat-item cat-item-44"><a
                                            href="../product-category/pizza/index.html">Pizza</a> <span
                                            class="count">(6)</span></li>
                                    <li class="cat-item cat-item-47"><a
                                            href="../product-category/sandwich/index.html">Sandwich</a> <span
                                            class="count">(3)</span></li>
                                    <li class="cat-item cat-item-35"><a
                                            href="../product-category/uncategorized/index.html">Uncategorized</a> <span
                                            class="count">(0)</span></li>
                                </ul>
                            </div>
                            <div id="woocommerce_price_filter-3" class="widget woocommerce widget_price_filter">
                                <h3 class="widgettitle">Filter By Price</h3>
                                <form method="get" action="https://radiustheme.com/demo/wordpress/themes/panpie/shop/">
                                    <div class="price_slider_wrapper">
                                        <div class="price_slider" style="display:none;"></div>
                                        <div class="price_slider_amount" data-step="10">
                                            <label class="screen-reader-text" for="min_price">Min price</label>
                                            <input type="text" id="min_price" name="min_price" value="0"
                                                data-min="0" placeholder="Min price" />
                                            <label class="screen-reader-text" for="max_price">Max price</label>
                                            <input type="text" id="max_price" name="max_price" value="40"
                                                data-max="40" placeholder="Max price" />
                                            <button type="submit" class="button">Filter</button>
                                            <div class="price_label" style="display:none;">
                                                Price: <span class="from"></span> &mdash; <span class="to"></span>
                                            </div>
                                            <div class="clear"></div>
                                        </div>
                                    </div>
                                </form>

                            </div>
                            <div id="woocommerce_top_rated_products-2"
                                class="widget woocommerce widget_top_rated_products">
                                <h3 class="widgettitle">Today’s Best Deals</h3>
                                <ul class="product_list_widget">
                                    <li>

                                        <a href="../product/chocolate-donuts/index.html">
                                            <img fetchpriority="high" width="300" height="300"
                                                src="../wp-content/uploads/2020/11/pro_04-300x300.png"
                                                class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail wp-post-image"
                                                alt="" decoding="async"
                                                srcset="https://radiustheme.com/demo/wordpress/themes/panpie/wp-content/uploads/2020/11/pro_04-300x300.png 300w, https://radiustheme.com/demo/wordpress/themes/panpie/wp-content/uploads/2020/11/pro_04-150x150.png 150w, https://radiustheme.com/demo/wordpress/themes/panpie/wp-content/uploads/2020/11/pro_04-400x400.png 400w, https://radiustheme.com/demo/wordpress/themes/panpie/wp-content/uploads/2020/11/pro_04-200x200.png 200w, https://radiustheme.com/demo/wordpress/themes/panpie/wp-content/uploads/2020/11/pro_04-100x100.png 100w, https://radiustheme.com/demo/wordpress/themes/panpie/wp-content/uploads/2020/11/pro_04.png 600w"
                                                sizes="(max-width: 300px) 100vw, 300px" /> <span
                                                class="product-title">Chocolate Donuts</span>
                                        </a>

                                        <div class="star-rating" role="img" aria-label="Rated 5.00 out of 5"><span
                                                style="width:100%">Rated <strong class="rating">5.00</strong> out of
                                                5</span></div>
                                        <span class="woocommerce-Price-amount amount"><bdi><span
                                                    class="woocommerce-Price-currencySymbol">&#36;</span>5.00</bdi></span>
                                        &ndash; <span class="woocommerce-Price-amount amount"><bdi><span
                                                    class="woocommerce-Price-currencySymbol">&#36;</span>28.00</bdi></span>
                                    </li>
                                    <li>

                                        <a href="../product/french-fries/index.html">
                                            <img width="300" height="300"
                                                src="../wp-content/uploads/2020/11/pro_09-300x300.png"
                                                class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail wp-post-image"
                                                alt="" decoding="async"
                                                srcset="https://radiustheme.com/demo/wordpress/themes/panpie/wp-content/uploads/2020/11/pro_09-300x300.png 300w, https://radiustheme.com/demo/wordpress/themes/panpie/wp-content/uploads/2020/11/pro_09-150x150.png 150w, https://radiustheme.com/demo/wordpress/themes/panpie/wp-content/uploads/2020/11/pro_09-400x400.png 400w, https://radiustheme.com/demo/wordpress/themes/panpie/wp-content/uploads/2020/11/pro_09-200x200.png 200w, https://radiustheme.com/demo/wordpress/themes/panpie/wp-content/uploads/2020/11/pro_09-100x100.png 100w, https://radiustheme.com/demo/wordpress/themes/panpie/wp-content/uploads/2020/11/pro_09.png 600w"
                                                sizes="(max-width: 300px) 100vw, 300px" /> <span
                                                class="product-title">French Fries</span>
                                        </a>

                                        <div class="star-rating" role="img" aria-label="Rated 5.00 out of 5"><span
                                                style="width:100%">Rated <strong class="rating">5.00</strong> out of
                                                5</span></div>
                                        <span class="woocommerce-Price-amount amount"><bdi><span
                                                    class="woocommerce-Price-currencySymbol">&#36;</span>7.00</bdi></span>
                                        &ndash; <span class="woocommerce-Price-amount amount"><bdi><span
                                                    class="woocommerce-Price-currencySymbol">&#36;</span>25.00</bdi></span>
                                    </li>
                                    <li>

                                        <a href="../product/chessey-pizza-2/index.html">
                                            <img width="300" height="300"
                                                src="../wp-content/uploads/2020/11/pro_03-300x300.png"
                                                class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail wp-post-image"
                                                alt="" decoding="async"
                                                srcset="https://radiustheme.com/demo/wordpress/themes/panpie/wp-content/uploads/2020/11/pro_03-300x300.png 300w, https://radiustheme.com/demo/wordpress/themes/panpie/wp-content/uploads/2020/11/pro_03-150x150.png 150w, https://radiustheme.com/demo/wordpress/themes/panpie/wp-content/uploads/2020/11/pro_03-400x400.png 400w, https://radiustheme.com/demo/wordpress/themes/panpie/wp-content/uploads/2020/11/pro_03-200x200.png 200w, https://radiustheme.com/demo/wordpress/themes/panpie/wp-content/uploads/2020/11/pro_03-100x100.png 100w, https://radiustheme.com/demo/wordpress/themes/panpie/wp-content/uploads/2020/11/pro_03.png 600w"
                                                sizes="(max-width: 300px) 100vw, 300px" /> <span
                                                class="product-title">Chessey Pizza</span>
                                        </a>

                                        <div class="star-rating" role="img" aria-label="Rated 5.00 out of 5"><span
                                                style="width:100%">Rated <strong class="rating">5.00</strong> out of
                                                5</span></div>
                                        <span class="woocommerce-Price-amount amount"><bdi><span
                                                    class="woocommerce-Price-currencySymbol">&#36;</span>3.00</bdi></span>
                                        &ndash; <span class="woocommerce-Price-amount amount"><bdi><span
                                                    class="woocommerce-Price-currencySymbol">&#36;</span>30.00</bdi></span>
                                    </li>
                                    <li>

                                        <a href="../product/bbq-pizza-tintin/index.html">
                                            <img loading="lazy" width="300" height="300"
                                                src="../wp-content/uploads/2020/11/pro_06-300x300.png"
                                                class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail wp-post-image"
                                                alt="" decoding="async"
                                                srcset="https://radiustheme.com/demo/wordpress/themes/panpie/wp-content/uploads/2020/11/pro_06-300x300.png 300w, https://radiustheme.com/demo/wordpress/themes/panpie/wp-content/uploads/2020/11/pro_06-150x150.png 150w, https://radiustheme.com/demo/wordpress/themes/panpie/wp-content/uploads/2020/11/pro_06-400x400.png 400w, https://radiustheme.com/demo/wordpress/themes/panpie/wp-content/uploads/2020/11/pro_06-200x200.png 200w, https://radiustheme.com/demo/wordpress/themes/panpie/wp-content/uploads/2020/11/pro_06-100x100.png 100w, https://radiustheme.com/demo/wordpress/themes/panpie/wp-content/uploads/2020/11/pro_06.png 600w"
                                                sizes="(max-width: 300px) 100vw, 300px" /> <span class="product-title">BBQ
                                                Pizza TinTin</span>
                                        </a>

                                        <div class="star-rating" role="img" aria-label="Rated 5.00 out of 5"><span
                                                style="width:100%">Rated <strong class="rating">5.00</strong> out of
                                                5</span></div>
                                        <span class="woocommerce-Price-amount amount"><bdi><span
                                                    class="woocommerce-Price-currencySymbol">&#36;</span>10.00</bdi></span>
                                        &ndash; <span class="woocommerce-Price-amount amount"><bdi><span
                                                    class="woocommerce-Price-currencySymbol">&#36;</span>26.00</bdi></span>
                                    </li>
                                </ul>
                            </div>
                            <div id="media_image-2" class="widget widget_media_image"><a href="#"><img
                                        loading="lazy" width="370" height="473"
                                        src="../wp-content/uploads/2021/01/add05.jpg"
                                        class="image wp-image-3332  attachment-full size-full wp-post-image"
                                        alt="" style="max-width: 100%; height: auto;" decoding="async"
                                        srcset="https://radiustheme.com/demo/wordpress/themes/panpie/wp-content/uploads/2021/01/add05.jpg 370w, https://radiustheme.com/demo/wordpress/themes/panpie/wp-content/uploads/2021/01/add05-235x300.jpg 235w"
                                        sizes="(max-width: 370px) 100vw, 370px" /></a></div>
                        </aside>
                    </div>

                    <div class="col-lg-8 col-md-12 col-12">
                        <main id="main" class="site-main isotope-wrap">
                            <header class="woocommerce-products-header">

                            </header>
                            <div class="woocommerce-notices-wrapper"></div>
                            <div class="woo-shop-top">
                                <div class="col-md-5 col-sm-12 col-12 top-left">
                                    <div class="limit-show media-body">
                                        <div>
                                            <p class="woocommerce-result-count">
                                                Showing 1&ndash;8 of 12 results</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-7 col-sm-12 col-12 top-right">
                                    <div class="sort-list">
                                        <form class="woocommerce-ordering" method="get">
                                            <select name="orderby" class="orderby" aria-label="Shop order">
                                                <option value="menu_order" selected='selected'>Default sorting</option>
                                                <option value="popularity">Sort by popularity</option>
                                                <option value="rating">Sort by average rating</option>
                                                <option value="date">Sort by latest</option>
                                                <option value="price">Sort by price: low to high</option>
                                                <option value="price-desc">Sort by price: high to low</option>
                                            </select>
                                            <input type="hidden" name="paged" value="1" />
                                        </form>
                                    </div>
                                    <div class="view-mode pull-right" id="shop-view-mode">
                                        <ul>
                                            <li class="grid-view-nav"><a href="#"><i
                                                        class="fa fa-th-large"></i></a></li>
                                            <li class="list-view-nav"><a href="#"><i class="fa fa-list"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>



                            <div class="row row-cols-xl-2 row-cols-md-2 featuredContainer">

                                @foreach ($menus as $menu)
                                    <div class="col shop-layout-4 {{ $menu->namec }}">
                                        <div class="food-box variation-number-1" data-product_id="{{ $menu->id }}">
                                            <div class="img-wrap">
                                                <div class="item-img">
                                                    <a href="#">
                                                        <img width="400" height="400" src="{{ $menu->img }}"
                                                            class="img-fluid mb-10 width-100 wp-post-image wp-post-image"
                                                            alt="" decoding="async" srcset="{{ $menu->img }}"
                                                            sizes="(max-width: 400px) 100vw, 400px" /> </a>
                                                </div>

                                                <div class="btn-wrap">
                                                    <a href="#" class="cart-btn"><i
                                                            class="fas fa-shopping-cart"></i>View options
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="item-content">

                                                <h3 class="item-title"><a href="#">
                                                        {{ $menu->name }}</a></h3>
                                                <p>{{ $menu->subtitle }}</p>


                                                <ul class="entry-meta">
                                                    <li class="variable-prod-price">
                                                        <select class="variable-prod-select" data-attribute="select-size">
                                                            <option value="large">large</option>
                                                            <option value="medium">medium</option>
                                                            <option value="small">small</option>
                                                        </select>
                                                    </li>
                                                    <li class="text-center">
                                                        <div class="item-price">
                                                            <span class="price"><span
                                                                    class="woocommerce-Price-amount amount"><span
                                                                        class="woocommerce-Price-currencySymbol">&#036;</span>{{ $menu->price }}</span></span>
                                                        </div>
                                                    </li>
                                                </ul>

                                            </div>
                                        </div>
                                    </div>
                                @endforeach


                            </div>
                    </div>
                    <nav class="woocommerce-pagination">
                        <ul class='page-numbers'>
                            <li><span aria-current="page" class="page-numbers current">1</span></li>
                            <li><a class="page-numbers" href="page/2/index.html">2</a></li>
                            <li><a class="next page-numbers" href="page/2/index.html">&rarr;</a></li>
                        </ul>
                    </nav>

                    </main>
                </div>

            </div><!-- .row -->
        </div><!-- container -->
    </div><!-- #primary --></div>
@endsection
