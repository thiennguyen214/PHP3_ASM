@extends('client.layouts.master')
@section('css')
    @include('client.css.css_ctsp')
@endsection
@section('js')
    @include('client.js.ctsp')
@endsection
@section('jsft')
    @include('client.js.fot_ctsp')
@endsection
@section('body',
    'product-template-default single single-product postid-1483 wp-embed-responsive theme-panpie
    woocommerce woocommerce-page woocommerce-no-js rtwpvg rtwpvs rtwpvs-rounded rtwpvs-attribute-behavior-hide
    rtwpvs-archive-align-left sticky-header header-style-5 footer-style-1 trheader no-sidebar right-sidebar
    product-grid-view fmp-food-menu elementor-default elementor-kit-106')
@section('content')
    <style id='panpie-style-inline-css' type='text/css'>
        .entry-banner {
            background: url(/client/all/wp-content/themes/panpie/assets/img/banner.png) no-repeat scroll center bottom / cover;
        }

        .content-area {
            padding-top: 120px;
            padding-bottom: 120px;
        }

        #page .content-area {
            background-image: url(/client/all/wp-content/uploads/2021/01/section_bg11.png);
            background-color: #ffffff;
        }

        .error-page-area .error-page-content {
            background-color: #ffffff;
        }
    </style>
    <div id="content" class="site-content">
        <div class="entry-banner">
            <div class="container">
                <div class="entry-banner-content">
                    <h1 class="entry-title">Shop</h1>
                    <div class="breadcrumb-area">
                        <div class="entry-breadcrumb">
                            <!-- Breadcrumb NavXT 7.3.1 -->
                            <span property="itemListElement" typeof="ListItem"><a property="item" typeof="WebPage"
                                    title="Go to Panpie - Restaurant WordPress Theme."
                                    href="https://radiustheme.com/demo/wordpress/themes/panpie" class="home"><span
                                        property="name">Home</span></a>
                                <meta property="position" content="1" />
                            </span><span class="dvdr"> - </span><span property="itemListElement" typeof="ListItem"><a
                                    property="item" typeof="WebPage" title="Go to Products." href="../../shop/index.html"
                                    class="archive post-product-archive"><span property="name">Products</span></a>
                                <meta property="position" content="2" />
                            </span><span class="dvdr"> - </span><span property="itemListElement" typeof="ListItem"><span
                                    property="name" class="post post-product current-item">{{ $menu->name }}</span>
                                <meta property="url"
                                    content="https://radiustheme.com/demo/wordpress/themes/panpie/product/bbq-pizza-tintin/" />
                                <meta property="position" content="3" />
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="primary" class="content-area shop-page">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-12">
                        <main id="main" class="site-main isotope-wrap">
                            <div class="woocommerce-notices-wrapper"></div>
                            <div id="product-857"
                                class="rtwpvg-product rtwpvs-product product type-product post-857 status-publish first instock product_cat-pizza product_tag-beverages has-post-thumbnail shipping-taxable purchasable product-type-variable">
                                <div style=""
                                    class="rtwpvg-images rtwpvg-images-thumbnail-columns-4 rtwpvg-has-product-thumbnail">
                                    <div class="rtwpvg-wrapper rtwpvg-thumbnail-position-bottom rtwpvg-product-type-variable"
                                        data-thumbnail_position="bottom">
                                        <div class="rtwpvg-container rtwpvg-preload-style-fade">
                                            <div class="rtwpvg-slider-wrapper">
                                                <div class="rtwpvg-slider"
                                                    data-slick='{"slidesToShow":1,"slidesToScroll":1,"arrows":false,"adaptiveHeight":true,"rtl":false,"asNavFor":".rtwpvg-thumbnail-slider","prevArrow":"&lt;i class=\"rtwpvg-slider-prev-arrow dashicons dashicons-arrow-left-alt2\"&gt;&lt;\/i&gt;","nextArrow":"&lt;i class=\"rtwpvg-slider-next-arrow dashicons dashicons-arrow-right-alt2\"&gt;&lt;\/i&gt;","rows":0}'>
                                                    <div class="rtwpvg-gallery-image rtwpvg-gallery-image-id-4712">
                                                        <div class="rtwpvg-single-image-container">
                                                            <img fetchpriority="high" width="600" height="600"
                                                                src="{{ $menu->img }}"
                                                                class="wp-post-image rtwpvg-post-image attachment-woocommerce_single size-woocommerce_single"
                                                                alt="" title="pro_06" data-caption=""
                                                                data-src="{{ $menu->img }}"
                                                                data-large_image="{{ $menu->img }}"
                                                                data-large_image_width="600" data-large_image_height="600"
                                                                srcset="
                                      {{ $menu->img }}         600w,
                                      https://radiustheme.com/demo/wordpress/themes/panpie/wp-content/uploads/2020/11/pro_06-300x300.png 300w,
                                      https://radiustheme.com/demo/wordpress/themes/panpie/wp-content/uploads/2020/11/pro_06-150x150.png 150w,
                                      https://radiustheme.com/demo/wordpress/themes/panpie/wp-content/uploads/2020/11/pro_06-400x400.png 400w,
                                      https://radiustheme.com/demo/wordpress/themes/panpie/wp-content/uploads/2020/11/pro_06-200x200.png 200w,
                                      https://radiustheme.com/demo/wordpress/themes/panpie/wp-content/uploads/2020/11/pro_06-100x100.png 100w
                                    "
                                                                sizes="(max-width: 600px) 100vw, 600px" />
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- .Slider-wrapper -->

                                            <div class="rtwpvg-thumbnail-wrapper">
                                                <div class="rtwpvg-thumbnail-slider rtwpvg-thumbnail-columns-4 rtwpvg-thumbnail-sm-columns-0 rtwpvg-thumbnail-xs-columns-0"
                                                    data-slick='{"slidesToShow":4,"slidesToScroll":4,"focusOnSelect":true,"arrows":true,"vertical":false,"asNavFor":".rtwpvg-slider","centerMode":false,"infinite":true,"rtl":false,"prevArrow":"&lt;i class=\"rtwpvg-thumbnail-prev-arrow dashicons dashicons-arrow-left-alt2\"&gt;&lt;\/i&gt;","nextArrow":"&lt;i class=\"rtwpvg-thumbnail-next-arrow dashicons dashicons-arrow-right-alt2\"&gt;&lt;\/i&gt;","responsive":[{"breakpoint":992,"settings":{"slidesToShow":0,"slidesToScroll":0}},{"breakpoint":768,"settings":{"slidesToShow":0,"slidesToScroll":0}},{"breakpoint":480,"settings":{"vertical":false,"slidesToShow":0,"slidesToScroll":0}}],"centerPadding":"0px","rows":0}'>
                                                    <div class="rtwpvg-thumbnail-image current-thumbnail">
                                                        <img loading="lazy" width="100" height="100"
                                                            src="{{ $menu->img }}"
                                                            class="attachment-100x100 size-100x100" alt=""
                                                            title="pro_06" />
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- .Thumb-wrapper -->
                                        </div>
                                        <!-- .container -->
                                    </div>
                                    <!-- .rtwpvg-wrapper -->
                                </div>

                                <div class="summary entry-summary">
                                    <h1 class="product_title entry-title">
                                        {{ $menu->name }}
                                    </h1>
                                    <div class="woocommerce-product-rating">
                                        <div class="star-rating" role="img" aria-label="Rated 5.00 out of 5">
                                            <span style="width: 100%">Rated <strong class="rating">5.00</strong> out of 5
                                                based on <span class="rating">1</span> customer
                                                rating</span>
                                        </div>
                                        <a href="#reviews" class="woocommerce-review-link" rel="nofollow">(<span
                                                class="count">1</span> customer review)</a>
                                    </div>

                                    <p class="price">
                                        <span class="woocommerce-Price-amount amount"><bdi><span
                                                    class="woocommerce-Price-currencySymbol">&#36;</span>{{ $menu->price }}</bdi></span>

                                    </p>

                                    <div class="sku"><span>Quantity:</span> {{ $menu->quantity }}</div>
                                    <div class="single-product-meta">
                                        <div class="product-meta">
                                            <span>Category:</span>
                                            <a href="../../product-category/pizza/index.html"
                                                rel="tag">{{ $menu->namec }}</a>
                                        </div>

                                    </div>

                                    <div class="short-description">
                                        <div class="woocommerce-product-details__short-description">
                                            <p>
                                                {{ $menu->subtitle }}
                                            </p>
                                        </div>
                                    </div>
                                    <form class="variations_form cart"
                                        action="https://radiustheme.com/demo/wordpress/themes/panpie/product/bbq-pizza-tintin/"
                                        method="post" enctype="multipart/form-data" data-product_id="857">
                                        <table class="variations" cellspacing="0" role="presentation">
                                            <tbody>
                                                <tr>
                                                    <th class="label">
                                                        <label for="pa_select-size">Select Size</label>
                                                    </th>
                                                    <td class="value">
                                                        <select data-id="pa_select-size"
                                                            class="hide rtwpvs-wc-select rtwpvs-wc-type-radio"
                                                            style="display: none" name="attribute_pa_select-size"
                                                            data-attribute_name="attribute_pa_select-size"
                                                            data-show_option_none="yes">
                                                            <option value="">Choose an option</option>
                                                            <option value="large">Large</option>
                                                            <option value="medium">Medium</option>
                                                            <option value="small">Small</option>
                                                        </select>
                                                        <div class="rtwpvs-terms-wrapper radio-variable-wrapper"
                                                            data-attribute_name="attribute_pa_select-size">
                                                            <div data-rtwpvs-tooltip="Large"
                                                                class="rtwpvs-term rtwpvs-radio-term radio-variable-term-large"
                                                                title="Large" data-term="large">
                                                                <input name="attribute_pa_select-size66f438f935d56"
                                                                    id="large66f438f935f02"
                                                                    class="rtwpvs-radio-button-term" type="radio"
                                                                    value="large" data-term="large" /><label
                                                                    for="large66f438f935f02">Large</label>
                                                            </div>
                                                            <div data-rtwpvs-tooltip="Medium"
                                                                class="rtwpvs-term rtwpvs-radio-term radio-variable-term-medium"
                                                                title="Medium" data-term="medium">
                                                                <input name="attribute_pa_select-size66f438f935d56"
                                                                    id="medium66f438f935f20"
                                                                    class="rtwpvs-radio-button-term" type="radio"
                                                                    value="medium" data-term="medium" /><label
                                                                    for="medium66f438f935f20">Medium</label>
                                                            </div>
                                                            <div data-rtwpvs-tooltip="Small"
                                                                class="rtwpvs-term rtwpvs-radio-term radio-variable-term-small"
                                                                title="Small" data-term="small">
                                                                <input name="attribute_pa_select-size66f438f935d56"
                                                                    id="small66f438f935f33"
                                                                    class="rtwpvs-radio-button-term" type="radio"
                                                                    value="small" data-term="small" /><label
                                                                    for="small66f438f935f33">Small</label>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>

                                            </tbody>
                                        </table>

                                        <div class="single_variation_wrap">
                                            <div class="woocommerce-variation single_variation"></div>
                                            <div class="woocommerce-variation-add-to-cart variations_button">
                                                <div class="quantity">
                                                    <label class="screen-reader-text"
                                                        for="quantity_66f438f937e32">Quantity</label>
                                                    <input type="number" id="quantity_66f438f937e32"
                                                        class="input-text qty text" step="1" min="1"
                                                        max="" name="quantity" value="1" title="Qty"
                                                        size="4" pattern="[0-9]*" inputmode="numeric" />
                                                </div>

                                                <button type="submit" class="single_add_to_cart_button button alt">
                                                    Add to cart
                                                </button>

                                                <input type="hidden" name="add-to-cart" value="857" />
                                                <input type="hidden" name="product_id" value="857" />
                                                <input type="hidden" name="variation_id" class="variation_id"
                                                    value="0" />
                                            </div>
                                        </div>
                                    </form>
                                </div>

                                <div class="woocommerce-tabs wc-tabs-wrapper">
                                    <ul class="tabs wc-tabs" role="tablist">
                                        <li class="description_tab" id="tab-title-description" role="tab"
                                            aria-controls="tab-description">
                                            <a href="#tab-description"> Description </a>
                                        </li>
                                        <li class="additional_information_tab" id="tab-title-additional_information"
                                            role="tab" aria-controls="tab-additional_information">
                                            <a href="#tab-additional_information">
                                                Additional information
                                            </a>
                                        </li>
                                        <li class="reviews_tab" id="tab-title-reviews" role="tab"
                                            aria-controls="tab-reviews">
                                            <a href="#tab-reviews"> Reviews (1) </a>
                                        </li>
                                    </ul>
                                    <div class="woocommerce-Tabs-panel woocommerce-Tabs-panel--description panel entry-content wc-tab"
                                        id="tab-description" role="tabpanel" aria-labelledby="tab-title-description">
                                        <p>
                                            {{ $menu->descrip }}
                                        </p>
                                    </div>
                                    <div class="woocommerce-Tabs-panel woocommerce-Tabs-panel--additional_information panel entry-content wc-tab"
                                        id="tab-additional_information" role="tabpanel"
                                        aria-labelledby="tab-title-additional_information">
                                        <h2>Additional information</h2>

                                        <table class="woocommerce-product-attributes shop_attributes"
                                            aria-label="Product Details">
                                            <tr
                                                class="woocommerce-product-attributes-item woocommerce-product-attributes-item--attribute_pa_select-size">
                                                <th class="woocommerce-product-attributes-item__label" scope="row">
                                                    Select Size
                                                </th>
                                                <td class="woocommerce-product-attributes-item__value">
                                                    <p>
                                                        <a href="../../select-size/large/index.html"
                                                            rel="tag">Large</a>,
                                                        <a href="../../select-size/medium/index.html"
                                                            rel="tag">Medium</a>,
                                                        <a href="../../select-size/small/index.html"
                                                            rel="tag">Small</a>
                                                    </p>
                                                </td>
                                            </tr>
                                            <tr
                                                class="woocommerce-product-attributes-item woocommerce-product-attributes-item--attribute_pa_select-crust">
                                                <th class="woocommerce-product-attributes-item__label" scope="row">
                                                    Select Crust
                                                </th>
                                                <td class="woocommerce-product-attributes-item__value">
                                                    <p>
                                                        <a href="../../select-crust/double-crust/index.html"
                                                            rel="tag">Double Crust</a>,
                                                        <a href="../../select-crust/original-crust/index.html"
                                                            rel="tag">Original Crust</a>,
                                                        <a href="../../select-crust/thick-crust/index.html"
                                                            rel="tag">Thick Crust</a>,
                                                        <a href="../../select-crust/thin-crust/index.html"
                                                            rel="tag">Thin Crust</a>
                                                    </p>
                                                </td>
                                            </tr>
                                        </table>
                                    </div>
                                    <div class="woocommerce-Tabs-panel woocommerce-Tabs-panel--reviews panel entry-content wc-tab"
                                        id="tab-reviews" role="tabpanel" aria-labelledby="tab-title-reviews">
                                        <div class="rtrs-review-wrap rtrs-review-post-type-product rtrs-review-sc-5517"
                                            id="comments">
                                            <div class="rtrs-summary">
                                                <div class="rtrs-summary-box">
                                                    <div class="rtrs-rating-box">
                                                        <div class="rtrs-rating-number">
                                                            <span class="rtrs-rating">5</span>
                                                            <span class="rtrs-rating-out">/5</span>
                                                        </div>
                                                        <div class="rtrs-rating-icon">
                                                            <i class="rtrs-star"></i><i class="rtrs-star"></i><i
                                                                class="rtrs-star"></i><i class="rtrs-star"></i><i
                                                                class="rtrs-star"></i>
                                                            <div class="rtrs-rating-text">
                                                                Based on 1 rating
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="rtrs-summary-box">
                                                    <div class="rtrs-progress-wrap">
                                                        <div class="rtrs-progress">
                                                            <label>Quality</label>
                                                            <progress class="rtrs-progress-bar service-preogress"
                                                                value="100" max="100"></progress>
                                                            <span class="progress-percent">100%</span>
                                                        </div>

                                                        <div class="rtrs-progress">
                                                            <label>Price</label>
                                                            <progress class="rtrs-progress-bar service-preogress"
                                                                value="100" max="100"></progress>
                                                            <span class="progress-percent">100%</span>
                                                        </div>

                                                        <div class="rtrs-progress">
                                                            <label>Service</label>
                                                            <progress class="rtrs-progress-bar service-preogress"
                                                                value="100" max="100"></progress>
                                                            <span class="progress-percent">100%</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="rtrs-sorting-bar">
                                                <h3 class="rtrs-sorting-title">
                                                    Reviewed by 1 user
                                                </h3>

                                                <div class="rtrs-sorting-select">
                                                    <div>
                                                        <label><i class="rtrs-sort"></i> Sort:</label>
                                                        <select class="rtrs_review_filter rtrs-sort-filter"
                                                            name="rtrs_review_sort_filter" data-type="sort">
                                                            <option value="all">All Review</option>
                                                            <option value="top_rated">Top Rated</option>
                                                            <option value="low_rated">Low Rated</option>
                                                            <option value="latest_first">
                                                                Latest First
                                                            </option>
                                                            <option value="oldest_first">
                                                                Oldest First
                                                            </option>
                                                        </select>
                                                    </div>

                                                    <div>
                                                        <label><i class="rtrs-filter"></i> Filter:</label>
                                                        <select class="rtrs_review_filter"
                                                            name="rtrs_review_rating_filter" data-type="rating">
                                                            <option value="">All Star</option>
                                                            <option value="5">5 Star</option>
                                                            <option value="4">4 Star</option>
                                                            <option value="3">3 Star</option>
                                                            <option value="2">2 Star</option>
                                                            <option value="1">1 Star</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="rtrs-review-box">
                                                <ul class="rtrs-review-list">
                                                    <li class="review byuser comment-author-admin bypostauthor even thread-even depth-1 rtrs-main-review"
                                                        id="div-comment-11">
                                                        <div class="rtrs-each-review">
                                                            <div class="rtrs-review-imgholder">
                                                                <img src="https://secure.gravatar.com/avatar/dfbbc19663285273a2f7081a843a22a3?s=70&amp;d=mm&amp;r=g"
                                                                    alt="" />
                                                            </div>

                                                            <div class="rtrs-review-body">
                                                                <ul class="rtrs-review-meta">
                                                                    <li class="rtrs-review-rating">
                                                                        <i class="rtrs-star"></i><i
                                                                            class="rtrs-star"></i><i
                                                                            class="rtrs-star"></i><i
                                                                            class="rtrs-star"></i><i
                                                                            class="rtrs-star"></i>
                                                                    </li>

                                                                    <li class="rtrs-author-link">
                                                                        by: admin
                                                                        <i class="rtrs-verified-author"></i>
                                                                    </li>

                                                                    <li class="rtrs-review-date">
                                                                        <i class="rtrs-calendar"></i>
                                                                        4 years ago
                                                                    </li>
                                                                </ul>

                                                                <p>nice</p>

                                                                <div class="rtrs-action-area"></div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <!-- #comment-## -->
                                                </ul>
                                            </div>

                                            <div id="respond" class="comment-respond rtrs-review-form">
                                                <h2 id="reply-title" class="rtrs-form-title">
                                                    Leave feedback about this
                                                    <small><a rel="nofollow" id="cancel-comment-reply-link"
                                                            href="index.html#respond" style="display: none">Cancel
                                                            Reply</a></small>
                                                </h2>
                                                <form
                                                    action="https://radiustheme.com/demo/wordpress/themes/panpie/wp-comments-post.php"
                                                    method="post" id="comment_form" class="rtrs-form-box" novalidate>
                                                    <div class="rtrs-form-group rtrs-hide-reply">
                                                        <input id="rt_title" class="rtrs-form-control"
                                                            placeholder="Title" name="rt_title" type="text"
                                                            value="" size="30" aria-required="true" />
                                                    </div>
                                                    <div class="rtrs-form-group">
                                                        <textarea id="message" class="rtrs-form-control" placeholder="Write your review* " name="comment"
                                                            required="required" aria-required="true" rows="6" cols="45"></textarea>
                                                    </div>
                                                    <input type="hidden" id="gRecaptchaResponse"
                                                        name="gRecaptchaResponse" value="" />
                                                    <div class="rtrs-form-group">
                                                        <input id="name" class="rtrs-form-control"
                                                            placeholder="Name*" name="author" type="text"
                                                            value="" size="30" required="required"
                                                            aria-required="true" />
                                                    </div>
                                                    <div class="rtrs-form-group">
                                                        <input id="email" class="rtrs-form-control"
                                                            placeholder="Email*" name="email" type="text"
                                                            value="" size="30" required="required"
                                                            aria-required="true" />
                                                    </div>
                                                    <div class="rtrs-form-group">
                                                        <input id="url" class="rtrs-form-control"
                                                            placeholder="Website" name="url" type="text"
                                                            value="" size="30" />
                                                    </div>
                                                    <div class="rtrs-form-group rtrs-hide-reply">
                                                        <ul class="rtrs-rating-category"
                                                            style="
                                    grid-template-columns: repeat(1, 270px);
                                  ">
                                                            <li>
                                                                <div class="rtrs-category-text">
                                                                    Quality
                                                                </div>
                                                                <div class="rtrs-rating-container">
                                                                    <input checked type="radio" id="1-rating-5"
                                                                        name="rt_rating_quality" value="5" /><label
                                                                        for="1-rating-5">5</label>
                                                                    <input type="radio" id="1-rating-4"
                                                                        name="rt_rating_quality" value="4" /><label
                                                                        for="1-rating-4">4</label>
                                                                    <input type="radio" id="1-rating-3"
                                                                        name="rt_rating_quality" value="3" /><label
                                                                        for="1-rating-3">3</label>
                                                                    <input type="radio" id="1-rating-2"
                                                                        name="rt_rating_quality" value="2" /><label
                                                                        for="1-rating-2">2</label>
                                                                    <input type="radio" id="1-rating-1"
                                                                        name="rt_rating_quality" value="1" /><label
                                                                        for="1-rating-1">1</label>
                                                                </div>
                                                            </li>


                                                        </ul>
                                                    </div>

                                                    <div class="rtrs-media-buttons">
                                                        <div class="rtrs-image-media-groups">
                                                            <div class="rtrs-form-group rtrs-hide-reply">
                                                                <div class="rtrs-preview-imgs"></div>
                                                            </div>
                                                            <div
                                                                class="rtrs-form-group rtrs-media-form-group rtrs-hide-reply">
                                                                <div class="rtrs-button-label">
                                                                    <label class="rtrs-input-image-label">Upload
                                                                        Image</label>
                                                                </div>

                                                                <div class="rtrs-image-button">
                                                                    <div class="rtrs-multimedia-upload">
                                                                        <div class="rtrs-upload-box"
                                                                            id="rtrs-upload-box-image">
                                                                            <span>Choose Image</span>
                                                                        </div>
                                                                    </div>
                                                                    <input type="file" id="rtrs-image"
                                                                        accept="image/*" style="display: none" />
                                                                    <div class="rtrs-image-error"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <input type="hidden" id="__rtrs_wpnonce" name="__rtrs_wpnonce"
                                                        value="d3bd85f70b" /><input type="hidden"
                                                        name="_wp_http_referer"
                                                        value="/demo/wordpress/themes/panpie/product/bbq-pizza-tintin/" />
                                                    <div class="rtrs-form-group">
                                                        <input name="submit" type="submit" id="submit"
                                                            class="rtrs-submit-btn rtrs-review-submit"
                                                            value="Submit Review" />
                                                        <input type="hidden" name="comment_post_ID" value="857"
                                                            id="comment_post_ID" />
                                                        <input type="hidden" name="comment_parent" id="comment_parent"
                                                            value="0" />
                                                    </div>
                                                </form>
                                            </div>
                                            <!-- #respond -->

                                            <script>
                                                jQuery(document).ready(function($) {
                                                    $("#comment_form").removeAttr("novalidate");
                                                });
                                            </script>
                                        </div>
                                    </div>
                                </div>

                                <div class="owl-wrap rt-woo-nav woo-related products">
                                    <div class="section-title">
                                        <div class="sec-title">
                                            <h2 class="rtin-title">Related Products</h2>
                                        </div>
                                        <div class="owl-custom-nav owl-nav">
                                            <div class="owl-prev">
                                                <i class="fas fa-arrow-left"></i>
                                            </div>
                                            <div class="owl-next">
                                                <i class="fas fa-arrow-right"></i>
                                            </div>
                                        </div>
                                        <div class="owl-custom-nav-bar"></div>
                                        <div class="clear"></div>
                                    </div>
                                    <div class="owl-carousel rt-owl-carousel"
                                        data-carousel-options='{"nav":false,"dots":false,"autoplay":true,"autoplayTimeout":"5000","autoplaySpeed":"200","autoplayHoverPause":true,"loop":true,"margin":30,"responsive":{"0":{"items":1},"480":{"items":2},"768":{"items":2},"992":{"items":3},"1199":{"items":4}}}'>
                                        @foreach ($menus as $me)
                                            <div class="products">
                                                <div class="col shop-layout-4 donuts fries">
                                                    <div class="img-wrap">
                                                        <div class="item-img">
                                                            <a href="{{ route('page.detail', $me->id) }}">
                                                                <img width="400" height="400"
                                                                    src="{{ $me->img }}"
                                                                    class="img-fluid mb-10 width-100 wp-post-image wp-post-image"
                                                                    alt="" decoding="async"
                                                                    srcset=""sizes="(max-width: 400px) 100vw, 400px" />
                                                            </a>
                                                        </div>

                                                        <div class="btn-wrap">
                                                            <a href="../french-fries/index9aea.html?attribute_pa_select-crust=double-crust&amp;attribute_pa_select-size=large"
                                                                class="cart-btn"><i class="fas fa-shopping-cart"></i>View
                                                                options
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="item-content">
                                                        <h3 class="item-title">
                                                            <a href="../french-fries/index.html">{{ $me->name }}</a>
                                                        </h3>
                                                        <p>
                                                            {{ $me->subtitle }}
                                                        </p>

                                                        <ul class="entry-meta">
                                                            <li class="variable-prod-price">
                                                                <select class="variable-prod-select"
                                                                    data-attribute="select-crust">
                                                                    <option value="double-crust">
                                                                        double-crust
                                                                    </option>
                                                                    <option value="original-crust">
                                                                        original-crust
                                                                    </option>
                                                                    <option value="thick-crust">
                                                                        thick-crust
                                                                    </option>
                                                                    <option value="thin-crust">
                                                                        thin-crust
                                                                    </option>
                                                                </select>
                                                            </li>
                                                            <li class="text-center">
                                                                <div class="item-price">
                                                                    <span class="price"><span
                                                                            class="woocommerce-Price-amount amount"><span
                                                                                class="woocommerce-Price-currencySymbol">&#036;</span>{{ $me->price }}</span></span>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>

                                </div>
                            </div>
                    </div>
                    </main>
                </div>
            </div>
            <!-- .row -->
        </div>
        <!-- container -->
    </div>
    <!-- #primary -->
    </div>
@endsection
