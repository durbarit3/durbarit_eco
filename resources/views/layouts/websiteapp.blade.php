<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="format-detection" content="telephone=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="author" content="">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <title>Durbar IT Ecommerce</title>

    @include('frontend.include.header1css')
</head>

<body>
    <header class="header header--1" data-sticky="true">
        <div class="header__top">
            <div class="ps-container">
                <div class="header__left">
                    <div class="menu--product-categories">
                        <div class="menu__toggle"><i class="icon-menu"></i><span> Shop by Department</span></div>
                        <div class="menu__content">
                            <ul class="menu--dropdown">
                                <li class="current-menu-item "><a href="#"><i class="icon-star"></i> Hot Promotions</a>
                                </li>
                                <li class="current-menu-item menu-item-has-children has-mega-menu"><a href="#"><i class="icon-laundry"></i> Consumer Electronic</a>
                                    <div class="mega-menu">
                                        <div class="mega-menu__column">
                                            <h4>Electronic<span class="sub-toggle"></span></h4>
                                            <ul class="mega-menu__list">
                                                <li class="current-menu-item "><a href="#">Home Audio &amp; Theathers</a>
                                                </li>
                                                <li class="current-menu-item "><a href="#">TV &amp; Videos</a>
                                                </li>
                                                <li class="current-menu-item "><a href="#">Camera, Photos &amp; Videos</a>
                                                </li>
                                                <li class="current-menu-item "><a href="#">Cellphones &amp; Accessories</a>
                                                </li>
                                                <li class="current-menu-item "><a href="#">Headphones</a>
                                                </li>
                                                <li class="current-menu-item "><a href="#">Videosgames</a>
                                                </li>
                                                <li class="current-menu-item "><a href="#">Wireless Speakers</a>
                                                </li>
                                                <li class="current-menu-item "><a href="#">Office Electronic</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="mega-menu__column">
                                            <h4>Accessories &amp; Parts<span class="sub-toggle"></span></h4>
                                            <ul class="mega-menu__list">
                                                <li class="current-menu-item "><a href="#">Digital Cables</a>
                                                </li>
                                                <li class="current-menu-item "><a href="#">Audio &amp; Video Cables</a>
                                                </li>
                                                <li class="current-menu-item "><a href="#">Batteries</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                                <li class="current-menu-item "><a href="#"><i class="icon-shirt"></i> Clothing &amp; Apparel</a>
                                </li>
                                <li class="current-menu-item "><a href="#"><i class="icon-lampshade"></i> Home, Garden &amp; Kitchen</a>
                                </li>
                                <li class="current-menu-item "><a href="#"><i class="icon-heart-pulse"></i> Health &amp; Beauty</a>
                                </li>
                                <li class="current-menu-item "><a href="#"><i class="icon-diamond2"></i> Yewelry &amp; Watches</a>
                                </li>
                                <li class="current-menu-item menu-item-has-children has-mega-menu"><a href="#"><i class="icon-desktop"></i> Computer &amp; Technology</a>
                                    <div class="mega-menu">
                                        <div class="mega-menu__column">
                                            <h4>Computer &amp; Technologies<span class="sub-toggle"></span></h4>
                                            <ul class="mega-menu__list">
                                                <li class="current-menu-item "><a href="#">Computer &amp; Tablets</a>
                                                </li>
                                                <li class="current-menu-item "><a href="#">Laptop</a>
                                                </li>
                                                <li class="current-menu-item "><a href="#">Monitors</a>
                                                </li>
                                                <li class="current-menu-item "><a href="#">Networking</a>
                                                </li>
                                                <li class="current-menu-item "><a href="#">Drive &amp; Storages</a>
                                                </li>
                                                <li class="current-menu-item "><a href="#">Computer Components</a>
                                                </li>
                                                <li class="current-menu-item "><a href="#">Security &amp; Protection</a>
                                                </li>
                                                <li class="current-menu-item "><a href="#">Gaming Laptop</a>
                                                </li>
                                                <li class="current-menu-item "><a href="#">Accessories</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                                <li class="current-menu-item "><a href="#"><i class="icon-baby-bottle"></i> Babies &amp; Moms</a>
                                </li>
                                <li class="current-menu-item "><a href="#"><i class="icon-baseball"></i> Sport &amp; Outdoor</a>
                                </li>
                                <li class="current-menu-item "><a href="#"><i class="icon-smartphone"></i> Phones &amp; Accessories</a>
                                </li>
                                <li class="current-menu-item "><a href="#"><i class="icon-book2"></i> Books &amp; Office</a>
                                </li>
                                <li class="current-menu-item "><a href="#"><i class="icon-car-siren"></i> Cars &amp; Motocycles</a>
                                </li>
                                <li class="current-menu-item "><a href="#"><i class="icon-wrench"></i> Home Improments</a>
                                </li>
                                <li class="current-menu-item "><a href="#"><i class="icon-tag"></i> Vouchers &amp; Services</a>
                                </li>
                            </ul>
                        </div>
                    </div><a class="ps-logo" href="index.html"><img src="{{asset('public/frontend')}}/img/logo_light.png" alt=""></a>
                </div>
                <div class="header__center">
                    <form class="ps-form--quick-search" action="index.html" method="get">
                        <div class="form-group--icon"><i class="icon-chevron-down"></i>
                            <select class="form-control">
                                <option value="0" selected="selected">All</option>
                                <option class="level-0" value="babies-moms">Babies & Moms</option>
                                <option class="level-0" value="books-office">Books & Office</option>
                                <option class="level-0" value="cars-motocycles">Cars & Motocycles</option>
                                <option class="level-0" value="clothing-apparel">Clothing & Apparel</option>
                                <option class="level-1" value="accessories-clothing-apparel">   Accessories</option>
                                <option class="level-1" value="bags">   Bags</option>
                                <option class="level-1" value="kids-fashion">   Kid’s Fashion</option>
                                <option class="level-1" value="mens">   Mens</option>
                                <option class="level-1" value="shoes">   Shoes</option>
                                <option class="level-1" value="sunglasses">   Sunglasses</option>
                                <option class="level-1" value="womens">   Womens</option>
                                <option class="level-0" value="computers-technologies">Computers & Technologies</option>
                                <option class="level-1" value="desktop-pc">   Desktop PC</option>
                                <option class="level-1" value="laptop">   Laptop</option>
                                <option class="level-1" value="smartphones">   Smartphones</option>
                                <option class="level-0" value="consumer-electrics">Consumer Electrics</option>
                                <option class="level-1" value="air-conditioners">   Air Conditioners</option>
                                <option class="level-2" value="accessories">      Accessories</option>
                                <option class="level-2" value="type-hanging-cell">      Type Hanging Cell</option>
                                <option class="level-2" value="type-hanging-wall">      Type Hanging Wall</option>
                                <option class="level-1" value="audios-theaters">   Audios & Theaters</option>
                                <option class="level-2" value="headphone">      Headphone</option>
                                <option class="level-2" value="home-theater-system">      Home Theater System</option>
                                <option class="level-2" value="speakers">      Speakers</option>
                                <option class="level-1" value="car-electronics">   Car Electronics</option>
                                <option class="level-2" value="audio-video">      Audio & Video</option>
                                <option class="level-2" value="car-security">      Car Security</option>
                                <option class="level-2" value="radar-detector">      Radar Detector</option>
                                <option class="level-2" value="vehicle-gps">      Vehicle GPS</option>
                                <option class="level-1" value="office-electronics">   Office Electronics</option>
                                <option class="level-2" value="printers">      Printers</option>
                                <option class="level-2" value="projectors">      Projectors</option>
                                <option class="level-2" value="scanners">      Scanners</option>
                                <option class="level-2" value="store-business">      Store & Business</option>
                                <option class="level-1" value="refrigerators">   Refrigerators</option>
                                <option class="level-1" value="tv-televisions">   TV Televisions</option>
                                <option class="level-2" value="4k-ultra-hd-tvs">      4K Ultra HD TVs</option>
                                <option class="level-2" value="led-tvs">      LED TVs</option>
                                <option class="level-2" value="oled-tvs">      OLED TVs</option>
                                <option class="level-1" value="washing-machines">   Washing Machines</option>
                                <option class="level-2" value="type-drying-clothes">      Type Drying Clothes</option>
                                <option class="level-2" value="type-horizontal">      Type Horizontal</option>
                                <option class="level-2" value="type-vertical">      Type Vertical</option>
                                <option class="level-0" value="garden-kitchen">Garden & Kitchen</option>
                                <option class="level-1" value="cookware">   Cookware</option>
                                <option class="level-1" value="decoration">   Decoration</option>
                                <option class="level-1" value="furniture">   Furniture</option>
                                <option class="level-1" value="garden-tools">   Garden Tools</option>
                                <option class="level-1" value="home-improvement">   Home Improvement</option>
                                <option class="level-1" value="powers-and-hand-tools">   Powers And Hand Tools</option>
                                <option class="level-1" value="utensil-gadget">   Utensil & Gadget</option>
                                <option class="level-0" value="health-beauty">Health & Beauty</option>
                                <option class="level-1" value="equipments">   Equipments</option>
                                <option class="level-1" value="hair-care">   Hair Care</option>
                                <option class="level-1" value="perfumer">   Perfumer</option>
                                <option class="level-1" value="skin-care">   Skin Care</option>
                                <option class="level-0" value="jewelry-watches">Jewelry & Watches</option>
                                <option class="level-1" value="gemstone-jewelry">   Gemstone Jewelry</option>
                                <option class="level-1" value="mens-watches">   Men’s Watches</option>
                                <option class="level-1" value="womens-watches">   Women’s Watches</option>
                                <option class="level-0" value="phones-accessories">Phones & Accessories</option>
                                <option class="level-1" value="iphone-8">   Iphone 8</option>
                                <option class="level-1" value="iphone-x">   Iphone X</option>
                                <option class="level-1" value="sam-sung-note-8">   Sam Sung Note 8</option>
                                <option class="level-1" value="sam-sung-s8">   Sam Sung S8</option>
                                <option class="level-0" value="sport-outdoor">Sport & Outdoor</option>
                                <option class="level-1" value="freezer-burn">   Freezer Burn</option>
                                <option class="level-1" value="fridge-cooler">   Fridge Cooler</option>
                                <option class="level-1" value="wine-cabinets">   Wine Cabinets</option>
                            </select>
                        </div>
                        <input class="form-control" type="text" placeholder="I'm shopping for..." id="input-search">
                        <button>Search</button>
                        <div class="ps-panel--search-result">
                            <div class="ps-panel__content">
                                <div class="ps-product ps-product--wide ps-product--search-result">
                                    <div class="ps-product__thumbnail"><a href="product-default.html"><img src="{{asset('public/frontend')}}/img/products/arrivals/1.jpg" alt=""></a></div>
                                    <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">Apple iPhone Retina 6s Plus 32GB</a>
                                        <div class="ps-product__rating">
                                            <select class="ps-rating" data-read-only="true">
                                                <option value="1">1</option>
                                                <option value="1">2</option>
                                                <option value="1">3</option>
                                                <option value="1">4</option>
                                                <option value="2">5</option>
                                            </select><span></span>
                                        </div>
                                        <p class="ps-product__price">$990.50</p>
                                    </div>
                                </div>
                                <div class="ps-product ps-product--wide ps-product--search-result">
                                    <div class="ps-product__thumbnail"><a href="product-default.html"><img src="{{asset('public/frontend')}}/img/products/arrivals/1.jpg" alt=""></a></div>
                                    <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">Apple iPhone Retina 6s Plus 64GB</a>
                                        <div class="ps-product__rating">
                                            <select class="ps-rating" data-read-only="true">
                                                <option value="1">1</option>
                                                <option value="1">2</option>
                                                <option value="1">3</option>
                                                <option value="1">4</option>
                                                <option value="2">5</option>
                                            </select><span></span>
                                        </div>
                                        <p class="ps-product__price">$1120.50</p>
                                    </div>
                                </div>
                                <div class="ps-product ps-product--wide ps-product--search-result">
                                    <div class="ps-product__thumbnail"><a href="product-default.html"><img src="{{asset('public/frontend')}}/img/products/arrivals/1.jpg" alt=""></a></div>
                                    <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">Apple iPhone Retina 6s Plus 128GB</a>
                                        <div class="ps-product__rating">
                                            <select class="ps-rating" data-read-only="true">
                                                <option value="1">1</option>
                                                <option value="1">2</option>
                                                <option value="1">3</option>
                                                <option value="1">4</option>
                                                <option value="2">5</option>
                                            </select><span></span>
                                        </div>
                                        <p class="ps-product__price">$1220.50</p>
                                    </div>
                                </div>
                                <div class="ps-product ps-product--wide ps-product--search-result">
                                    <div class="ps-product__thumbnail"><a href="product-default.html"><img src="{{asset('public/frontend')}}/img/products/arrivals/2.jpg" alt=""></a></div>
                                    <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">Marshall Kilburn Portable Wireless Speaker</a>
                                        <div class="ps-product__rating">
                                            <select class="ps-rating" data-read-only="true">
                                                <option value="1">1</option>
                                                <option value="1">2</option>
                                                <option value="1">3</option>
                                                <option value="1">4</option>
                                                <option value="2">5</option>
                                            </select><span>01</span>
                                        </div>
                                        <p class="ps-product__price">$36.78 – $56.99</p>
                                    </div>
                                </div>
                                <div class="ps-product ps-product--wide ps-product--search-result">
                                    <div class="ps-product__thumbnail"><a href="product-default.html"><img src="{{asset('public/frontend')}}/img/products/arrivals/3.jpg" alt=""></a></div>
                                    <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">Herschel Leather Duffle Bag In Brown Color</a>
                                        <div class="ps-product__rating">
                                            <select class="ps-rating" data-read-only="true">
                                                <option value="1">1</option>
                                                <option value="1">2</option>
                                                <option value="1">3</option>
                                                <option value="1">4</option>
                                                <option value="2">5</option>
                                            </select><span>02</span>
                                        </div>
                                        <p class="ps-product__price">$125.30</p>
                                    </div>
                                </div>
                                <div class="ps-product ps-product--wide ps-product--search-result">
                                    <div class="ps-product__thumbnail"><a href="product-default.html"><img src="{{asset('public/frontend')}}/img/products/arrivals/4.jpg" alt=""></a></div>
                                    <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">Xbox One Wireless Controller Black Color</a>
                                        <div class="ps-product__rating">
                                            <select class="ps-rating" data-read-only="true">
                                                <option value="1">1</option>
                                                <option value="1">2</option>
                                                <option value="1">3</option>
                                                <option value="1">4</option>
                                                <option value="2">5</option>
                                            </select><span>02</span>
                                        </div>
                                        <p class="ps-product__price">$55.30</p>
                                    </div>
                                </div>
                                <div class="ps-product ps-product--wide ps-product--search-result">
                                    <div class="ps-product__thumbnail"><a href="product-default.html"><img src="{{asset('public/frontend')}}/img/products/arrivals/5.jpg" alt=""></a></div>
                                    <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">Grand Slam Indoor Of Show Jumping Novel</a>
                                        <div class="ps-product__rating">
                                            <select class="ps-rating" data-read-only="true">
                                                <option value="1">1</option>
                                                <option value="1">2</option>
                                                <option value="1">3</option>
                                                <option value="1">4</option>
                                                <option value="2">5</option>
                                            </select><span>02</span>
                                        </div>
                                        <p class="ps-product__price sale">$41.27 <del>$52.99 </del></p>
                                    </div>
                                </div>
                                <div class="ps-product ps-product--wide ps-product--search-result">
                                    <div class="ps-product__thumbnail"><a href="product-default.html"><img src="{{asset('public/frontend')}}/img/products/arrivals/6.jpg" alt=""></a></div>
                                    <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">Sound Intone I65 Earphone White Version</a>
                                        <div class="ps-product__rating">
                                            <select class="ps-rating" data-read-only="true">
                                                <option value="1">1</option>
                                                <option value="1">2</option>
                                                <option value="1">3</option>
                                                <option value="1">4</option>
                                                <option value="2">5</option>
                                            </select><span>01</span>
                                        </div>
                                        <p class="ps-product__price sale">$41.27 <del>$62.39 </del></p>
                                    </div>
                                </div>
                            </div>
                            <div class="ps-panel__footer text-center"><a href="shop-default.html">See all results</a></div>
                        </div>
                    </form>
                </div>
                <div class="header__right">
                    <div class="header__actions"><a class="header__extra" href="#"><i class="icon-chart-bars"></i><span><i>0</i></span></a><a class="header__extra" href="#"><i class="icon-heart"></i><span><i>0</i></span></a>
                        <div class="ps-cart--mini"><a class="header__extra" href="#"><i class="icon-bag2"></i><span><i>0</i></span></a>
                            <div class="ps-cart__content">
                                <div class="ps-cart__items">
                                    <div class="ps-product--cart-mobile">
                                        <div class="ps-product__thumbnail"><a href="#"><img src="{{asset('public/frontend')}}/img/products/clothing/7.jpg" alt=""></a></div>
                                        <div class="ps-product__content"><a class="ps-product__remove" href="#"><i class="icon-cross"></i></a><a href="product-default.html">MVMTH Classical Leather Watch In Black</a>
                                            <p><strong>Sold by:</strong> YOUNG SHOP</p><small>1 x $59.99</small>
                                        </div>
                                    </div>
                                    <div class="ps-product--cart-mobile">
                                        <div class="ps-product__thumbnail"><a href="#"><img src="{{asset('public/frontend')}}/img/products/clothing/5.jpg" alt=""></a></div>
                                        <div class="ps-product__content"><a class="ps-product__remove" href="#"><i class="icon-cross"></i></a><a href="product-default.html">Sleeve Linen Blend Caro Pane Shirt</a>
                                            <p><strong>Sold by:</strong> YOUNG SHOP</p><small>1 x $59.99</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="ps-cart__footer">
                                    <h3>Sub Total:<strong>$59.99</strong></h3>
                                    <figure><a class="ps-btn" href="shopping-cart.html">View Cart</a><a class="ps-btn" href="checkout.html">Checkout</a></figure>
                                </div>
                            </div>
                        </div>
                        <div class="ps-block--user-header">
                            <div class="ps-block__left"><i class="icon-user"></i></div>
                            <div class="ps-block__right"><a href="my-account.html">Login</a><a href="my-account.html">Register</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <nav class="navigation">
            <div class="ps-container">
                <div class="navigation__left">
                    <div class="menu--product-categories">
                        <div class="menu__toggle"><i class="icon-menu"></i><span> Shop by Department</span></div>
                        <div class="menu__content">
                            <ul class="menu--dropdown">
                                <li class="current-menu-item "><a href="#"><i class="icon-star"></i> Hot Promotions</a>
                                </li>
                                <li class="current-menu-item menu-item-has-children has-mega-menu"><a href="#"><i class="icon-laundry"></i> Consumer Electronic</a>
                                    <div class="mega-menu">
                                        <div class="mega-menu__column">
                                            <h4>Electronic<span class="sub-toggle"></span></h4>
                                            <ul class="mega-menu__list">
                                                <li class="current-menu-item "><a href="#">Home Audio &amp; Theathers</a>
                                                </li>
                                                <li class="current-menu-item "><a href="#">TV &amp; Videos</a>
                                                </li>
                                                <li class="current-menu-item "><a href="#">Camera, Photos &amp; Videos</a>
                                                </li>
                                                <li class="current-menu-item "><a href="#">Cellphones &amp; Accessories</a>
                                                </li>
                                                <li class="current-menu-item "><a href="#">Headphones</a>
                                                </li>
                                                <li class="current-menu-item "><a href="#">Videosgames</a>
                                                </li>
                                                <li class="current-menu-item "><a href="#">Wireless Speakers</a>
                                                </li>
                                                <li class="current-menu-item "><a href="#">Office Electronic</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="mega-menu__column">
                                            <h4>Accessories &amp; Parts<span class="sub-toggle"></span></h4>
                                            <ul class="mega-menu__list">
                                                <li class="current-menu-item "><a href="#">Digital Cables</a>
                                                </li>
                                                <li class="current-menu-item "><a href="#">Audio &amp; Video Cables</a>
                                                </li>
                                                <li class="current-menu-item "><a href="#">Batteries</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                                <li class="current-menu-item "><a href="#"><i class="icon-shirt"></i> Clothing &amp; Apparel</a>
                                </li>
                                <li class="current-menu-item "><a href="#"><i class="icon-lampshade"></i> Home, Garden &amp; Kitchen</a>
                                </li>
                                <li class="current-menu-item "><a href="#"><i class="icon-heart-pulse"></i> Health &amp; Beauty</a>
                                </li>
                                <li class="current-menu-item "><a href="#"><i class="icon-diamond2"></i> Yewelry &amp; Watches</a>
                                </li>
                                <li class="current-menu-item menu-item-has-children has-mega-menu"><a href="#"><i class="icon-desktop"></i> Computer &amp; Technology</a>
                                    <div class="mega-menu">
                                        <div class="mega-menu__column">
                                            <h4>Computer &amp; Technologies<span class="sub-toggle"></span></h4>
                                            <ul class="mega-menu__list">
                                                <li class="current-menu-item "><a href="#">Computer &amp; Tablets</a>
                                                </li>
                                                <li class="current-menu-item "><a href="#">Laptop</a>
                                                </li>
                                                <li class="current-menu-item "><a href="#">Monitors</a>
                                                </li>
                                                <li class="current-menu-item "><a href="#">Networking</a>
                                                </li>
                                                <li class="current-menu-item "><a href="#">Drive &amp; Storages</a>
                                                </li>
                                                <li class="current-menu-item "><a href="#">Computer Components</a>
                                                </li>
                                                <li class="current-menu-item "><a href="#">Security &amp; Protection</a>
                                                </li>
                                                <li class="current-menu-item "><a href="#">Gaming Laptop</a>
                                                </li>
                                                <li class="current-menu-item "><a href="#">Accessories</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                                <li class="current-menu-item "><a href="#"><i class="icon-baby-bottle"></i> Babies &amp; Moms</a>
                                </li>
                                <li class="current-menu-item "><a href="#"><i class="icon-baseball"></i> Sport &amp; Outdoor</a>
                                </li>
                                <li class="current-menu-item "><a href="#"><i class="icon-smartphone"></i> Phones &amp; Accessories</a>
                                </li>
                                <li class="current-menu-item "><a href="#"><i class="icon-book2"></i> Books &amp; Office</a>
                                </li>
                                <li class="current-menu-item "><a href="#"><i class="icon-car-siren"></i> Cars &amp; Motocycles</a>
                                </li>
                                <li class="current-menu-item "><a href="#"><i class="icon-wrench"></i> Home Improments</a>
                                </li>
                                <li class="current-menu-item "><a href="#"><i class="icon-tag"></i> Vouchers &amp; Services</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="navigation__right">
                    <ul class="menu">
                        <li class="menu-item-has-children"><a href="index.html">Home</a><span class="sub-toggle"></span>
                            <ul class="sub-menu">
                                <li class="current-menu-item "><a href="index.html">Marketplace Full Width</a>
                                </li>
                                <li class="current-menu-item "><a href="homepage-2.html">Home Auto Parts</a>
                                </li>
                                <li class="current-menu-item "><a href="homepage-10.html">Home Technology</a>
                                </li>
                                <li class="current-menu-item "><a href="homepage-9.html">Home Organic</a>
                                </li>
                                <li class="current-menu-item "><a href="homepage-3.html">Home Marketplace V1</a>
                                </li>
                                <li class="current-menu-item "><a href="homepage-4.html">Home Marketplace V2</a>
                                </li>
                                <li class="current-menu-item "><a href="homepage-5.html">Home Marketplace V3</a>
                                </li>
                                <li class="current-menu-item "><a href="homepage-6.html">Home Marketplace V4</a>
                                </li>
                                <li class="current-menu-item "><a href="homepage-7.html">Home Electronic</a>
                                </li>
                                <li class="current-menu-item "><a href="homepage-8.html">Home Furniture</a>
                                </li>
                                <li class="current-menu-item "><a href="homepage-kids.html">Home Kids</a>
                                </li>
                                <li class="current-menu-item "><a href="homepage-photo-and-video.html">Home photo and picture</a>
                                </li>
                            </ul>
                        </li>
                        <li class="menu-item-has-children has-mega-menu"><a href="shop-default.html">Shop</a><span class="sub-toggle"></span>
                            <div class="mega-menu">
                                <div class="mega-menu__column">
                                    <h4>Catalog Pages<span class="sub-toggle"></span></h4>
                                    <ul class="mega-menu__list">
                                        <li class="current-menu-item "><a href="shop-default.html">Shop Default</a>
                                        </li>
                                        <li class="current-menu-item "><a href="shop-default.html">Shop Fullwidth</a>
                                        </li>
                                        <li class="current-menu-item "><a href="shop-categories.html">Shop Categories</a>
                                        </li>
                                        <li class="current-menu-item "><a href="shop-sidebar.html">Shop Sidebar</a>
                                        </li>
                                        <li class="current-menu-item "><a href="shop-sidebar-without-banner.html">Shop Without Banner</a>
                                        </li>
                                        <li class="current-menu-item "><a href="shop-carousel.html">Shop Carousel</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="mega-menu__column">
                                    <h4>Product Layout<span class="sub-toggle"></span></h4>
                                    <ul class="mega-menu__list">
                                        <li class="current-menu-item "><a href="product-default.html">Default</a>
                                        </li>
                                        <li class="current-menu-item "><a href="product-extend.html">Extended</a>
                                        </li>
                                        <li class="current-menu-item "><a href="product-full-content.html">Full Content</a>
                                        </li>
                                        <li class="current-menu-item "><a href="product-box.html">Boxed</a>
                                        </li>
                                        <li class="current-menu-item "><a href="product-sidebar.html">Sidebar</a>
                                        </li>
                                        <li class="current-menu-item "><a href="product-default.html">Fullwidth</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="mega-menu__column">
                                    <h4>Product Types<span class="sub-toggle"></span></h4>
                                    <ul class="mega-menu__list">
                                        <li class="current-menu-item "><a href="product-default.html">Simple</a>
                                        </li>
                                        <li class="current-menu-item "><a href="product-default.html">Color Swatches</a>
                                        </li>
                                        <li class="current-menu-item "><a href="product-image-swatches.html">Images Swatches</a>
                                        </li>
                                        <li class="current-menu-item "><a href="product-countdown.html">Countdown</a>
                                        </li>
                                        <li class="current-menu-item "><a href="product-multi-vendor.html">Multi-Vendor</a>
                                        </li>
                                        <li class="current-menu-item "><a href="product-instagram.html">Instagram</a>
                                        </li>
                                        <li class="current-menu-item "><a href="product-affiliate.html">Affiliate</a>
                                        </li>
                                        <li class="current-menu-item "><a href="product-on-sale.html">On sale</a>
                                        </li>
                                        <li class="current-menu-item "><a href="product-video.html">Video Featured</a>
                                        </li>
                                        <li class="current-menu-item "><a href="product-groupped.html">Grouped</a>
                                        </li>
                                        <li class="current-menu-item "><a href="product-out-stock.html">Out Of Stock</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="mega-menu__column">
                                    <h4>Woo Pages<span class="sub-toggle"></span></h4>
                                    <ul class="mega-menu__list">
                                        <li class="current-menu-item "><a href="shopping-cart.html">Shopping Cart</a>
                                        </li>
                                        <li class="current-menu-item "><a href="checkout.html">Checkout</a>
                                        </li>
                                        <li class="current-menu-item "><a href="whishlist.html">Whishlist</a>
                                        </li>
                                        <li class="current-menu-item "><a href="compare.html">Compare</a>
                                        </li>
                                        <li class="current-menu-item "><a href="order-tracking.html">Order Tracking</a>
                                        </li>
                                        <li class="current-menu-item "><a href="my-account.html">My Account</a>
                                        </li>
                                        <li class="current-menu-item "><a href="checkout-2.html">Checkout 2</a>
                                        </li>
                                        <li class="current-menu-item "><a href="shipping.html">Shipping</a>
                                        </li>
                                        <li class="current-menu-item "><a href="payment.html">Payment</a>
                                        </li>
                                        <li class="current-menu-item "><a href="payment-success.html">Payment Success</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        <li class="menu-item-has-children has-mega-menu"><a href="#">Pages</a><span class="sub-toggle"></span>
                            <div class="mega-menu">
                                <div class="mega-menu__column">
                                    <h4>Basic Page<span class="sub-toggle"></span></h4>
                                    <ul class="mega-menu__list">
                                        <li class="current-menu-item "><a href="about-us.html">About Us</a>
                                        </li>
                                        <li class="current-menu-item "><a href="contact-us.html">Contact</a>
                                        </li>
                                        <li class="current-menu-item "><a href="faqs.html">Faqs</a>
                                        </li>
                                        <li class="current-menu-item "><a href="comming-soon.html">Comming Soon</a>
                                        </li>
                                        <li class="current-menu-item "><a href="404-page.html">404 Page</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="mega-menu__column">
                                    <h4>Vendor Pages<span class="sub-toggle"></span></h4>
                                    <ul class="mega-menu__list">
                                        <li class="current-menu-item "><a href="become-a-vendor.html">Become a Vendor</a>
                                        </li>
                                        <li class="current-menu-item "><a href="vendor-store.html">Vendor Store</a>
                                        </li>
                                        <li class="current-menu-item "><a href="vendor-dashboard-free.html">Vendor Dashboard Free</a>
                                        </li>
                                        <li class="current-menu-item "><a href="vendor-dashboard-pro.html">Vendor Dashboard Pro</a>
                                        </li>
                                        <li class="current-menu-item "><a href="store-list.html">Store List</a>
                                        </li>
                                        <li class="current-menu-item "><a href="store-list.html">Store List 2</a>
                                        </li>
                                        <li class="current-menu-item "><a href="store-detail.html">Store Detail</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="mega-menu__column">
                                    <h4>Account Pages<span class="sub-toggle"></span></h4>
                                    <ul class="mega-menu__list">
                                        <li class="current-menu-item "><a href="user-information.html">User Information</a>
                                        </li>
                                        <li class="current-menu-item "><a href="addresses.html">Addresses</a>
                                        </li>
                                        <li class="current-menu-item "><a href="invoices.html">Invoices</a>
                                        </li>
                                        <li class="current-menu-item "><a href="invoice-detail.html">Invoice Detail</a>
                                        </li>
                                        <li class="current-menu-item "><a href="notifications.html">Notifications</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        <li class="menu-item-has-children has-mega-menu"><a href="#">Blogs</a><span class="sub-toggle"></span>
                            <div class="mega-menu">
                                <div class="mega-menu__column">
                                    <h4>Blog Layout<span class="sub-toggle"></span></h4>
                                    <ul class="mega-menu__list">
                                        <li class="current-menu-item "><a href="blog-grid.html">Grid</a>
                                        </li>
                                        <li class="current-menu-item "><a href="blog-list.html">Listing</a>
                                        </li>
                                        <li class="current-menu-item "><a href="blog-small-thumb.html">Small Thumb</a>
                                        </li>
                                        <li class="current-menu-item "><a href="blog-left-sidebar.html">Left Sidebar</a>
                                        </li>
                                        <li class="current-menu-item "><a href="blog-right-sidebar.html">Right Sidebar</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="mega-menu__column">
                                    <h4>Single Blog<span class="sub-toggle"></span></h4>
                                    <ul class="mega-menu__list">
                                        <li class="current-menu-item "><a href="blog-detail.html">Single 1</a>
                                        </li>
                                        <li class="current-menu-item "><a href="blog-detail-2.html">Single 2</a>
                                        </li>
                                        <li class="current-menu-item "><a href="blog-detail-3.html">Single 3</a>
                                        </li>
                                        <li class="current-menu-item "><a href="blog-detail-4.html">Single 4</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                    </ul>
                    <ul class="navigation__extra">
                        <li><a href="#">Sell on Martfury</a></li>
                        <li><a href="#">Tract your order</a></li>
                        <li>
                            <div class="ps-dropdown"><a href="#">US Dollar</a>
                                <ul class="ps-dropdown-menu">
                                    <li><a href="#">Us Dollar</a></li>
                                    <li><a href="#">Euro</a></li>
                                </ul>
                            </div>
                        </li>
                        <li>
                            <div class="ps-dropdown language"><a href="#"><img src="{{asset('public/frontend')}}/img/flag/en.png" alt="">English</a>
                                <ul class="ps-dropdown-menu">
                                    <li><a href="#"><img src="{{asset('public/frontend')}}/img/flag/germany.png" alt=""> Germany</a></li>
                                    <li><a href="#"><img src="{{asset('public/frontend')}}/img/flag/fr.png" alt=""> France</a></li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

    </header>
    <!-- mobile -->
    @include('frontend.include.mobile_h1')
    <!-- mobile end -->

    @yield('content')


    <footer class="ps-footer">
        <div class="ps-container">
            <div class="ps-footer__widgets">
                <aside class="widget widget_footer widget_contact-us">
                    <h4 class="widget-title">Contact us</h4>
                    <div class="widget_content">
                        <p>Call us 24/7</p>
                        <h3>1800 97 97 69</h3>
                        <p>502 New Design Str, Melbourne, Australia <br><a href="mailto:contact@martfury.co">contact@martfury.co</a></p>
                        <ul class="ps-list--social">
                            <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a class="google-plus" href="#"><i class="fa fa-google-plus"></i></a></li>
                            <li><a class="instagram" href="#"><i class="fa fa-instagram"></i></a></li>
                        </ul>
                    </div>
                </aside>
                <aside class="widget widget_footer">
                    <h4 class="widget-title">Quick links</h4>
                    <ul class="ps-list--link">
                        <li><a href="#">Policy</a></li>
                        <li><a href="#">Term & Condition</a></li>
                        <li><a href="#">Shipping</a></li>
                        <li><a href="#">Return</a></li>
                        <li><a href="faqs.html">FAQs</a></li>
                    </ul>
                </aside>
                <aside class="widget widget_footer">
                    <h4 class="widget-title">Company</h4>
                    <ul class="ps-list--link">
                        <li><a href="about-us.html">About Us</a></li>
                        <li><a href="#">Affilate</a></li>
                        <li><a href="#">Career</a></li>
                        <li><a href="contact-us.html">Contact</a></li>
                    </ul>
                </aside>
                <aside class="widget widget_footer">
                    <h4 class="widget-title">Bussiness</h4>
                    <ul class="ps-list--link">
                        <li><a href="#">Our Press</a></li>
                        <li><a href="checkout.html">Checkout</a></li>
                        <li><a href="my-account.html">My account</a></li>
                        <li><a href="shop-default.html">Shop</a></li>
                    </ul>
                </aside>
            </div>
            <div class="ps-footer__links">
                <p><strong>Consumer Electric:</strong><a href="#">Air Conditioners</a><a href="#">Audios &amp; Theaters</a><a href="#">Car Electronics</a><a href="#">Office Electronics</a><a href="#">TV Televisions</a><a href="#">Washing Machines</a>
                </p>
                <p><strong>Clothing &amp; Apparel:</strong><a href="#">Printers</a><a href="#">Projectors</a><a href="#">Scanners</a><a href="#">Store &amp; Business</a><a href="#">4K Ultra HD TVs</a><a href="#">LED TVs</a><a href="#">OLED TVs</a>
                </p>
                <p><strong>Home, Garden &amp; Kitchen:</strong><a href="#">Cookware</a><a href="#">Decoration</a><a href="#">Furniture</a><a href="#">Garden Tools</a><a href="#">Garden Equipments</a><a href="#">Powers And Hand Tools</a><a href="#">Utensil &amp; Gadget</a>
                </p>
                <p><strong>Health &amp; Beauty:</strong><a href="#">Hair Care</a><a href="#">Decoration</a><a href="#">Hair Care</a><a href="#">Makeup</a><a href="#">Body Shower</a><a href="#">Skin Care</a><a href="#">Cologine</a><a href="#">Perfume</a>
                </p>
                <p><strong>Jewelry &amp; Watches:</strong><a href="#">Necklace</a><a href="#">Pendant</a><a href="#">Diamond Ring</a><a href="#">Sliver Earing</a><a href="#">Leather Watcher</a><a href="#">Gucci</a>
                </p>
                <p><strong>Computer &amp; Technologies:</strong><a href="#">Desktop PC</a><a href="#">Laptop</a><a href="#">Smartphones</a><a href="#">Tablet</a><a href="#">Game Controller</a><a href="#">Audio &amp; Video</a><a href="#">Wireless Speaker</a><a href="#">Done</a>
                </p>
            </div>
            <div class="ps-footer__copyright">
                <p>© 2018 Martfury. All Rights Reserved</p>
                <p><span>We Using Safe Payment For:</span><a href="#"><img src="{{asset('public/frontend')}}/img/payment-method/1.jpg" alt=""></a><a href="#"><img src="{{asset('public/frontend')}}/img/payment-method/2.jpg" alt=""></a><a href="#"><img src="{{asset('public/frontend')}}/img/payment-method/3.jpg" alt=""></a><a href="#"><img src="{{asset('public/frontend')}}/img/payment-method/4.jpg" alt=""></a><a href="#"><img src="{{asset('public/frontend')}}/img/payment-method/5.jpg" alt=""></a></p>
            </div>
        </div>
    </footer>
    <div class="ps-popup" id="subscribe" data-time="500">
        <div class="ps-popup__content bg--cover" data-background="{{asset('public/frontend')}}/img/bg/subscribe.jpg"><a class="ps-popup__close" href="#"><i class="icon-cross"></i></a>
            <form class="ps-form--subscribe-popup" action="index.html" method="get">
                <div class="ps-form__content">
                    <h4>Get <strong>25%</strong> Discount</h4>
                    <p>Subscribe to the Martfury mailing list <br /> to receive updates on new arrivals, special offers <br /> and our promotions.</p>
                    <div class="form-group">
                        <input class="form-control" type="text" placeholder="Email Address" required>
                        <button class="ps-btn">Subscribe</button>
                    </div>
                    <div class="ps-checkbox">
                        <input class="form-control" type="checkbox" id="not-show" name="not-show">
                        <label for="not-show">Don't show this popup again</label>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div id="back2top"><i class="pe-7s-angle-up"></i></div>
    <div class="ps-site-overlay"></div>
    <div id="loader-wrapper">
        <div class="loader-section section-left"></div>
        <div class="loader-section section-right"></div>
    </div>
    <div class="ps-search" id="site-search"><a class="ps-btn--close" href="#"></a>
        <div class="ps-search__content">
            <form class="ps-form--primary-search" action="do_action" method="post">
                <input class="form-control" type="text" placeholder="Search for...">
                <button><i class="aroma-magnifying-glass"></i></button>
            </form>
        </div>
    </div>
    <div class="modal fade" id="product-quickview" tabindex="-1" role="dialog" aria-labelledby="product-quickview" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content"><span class="modal-close" data-dismiss="modal"><i class="icon-cross2"></i></span>
                <article class="ps-product--detail ps-product--fullwidth ps-product--quickview">
                    <div class="ps-product__header">
                        <div class="ps-product__thumbnail" data-vertical="false">
                            <div class="ps-product__images" data-arrow="true">
                                <div class="item"><img src="{{asset('public/frontend')}}/img/products/detail/fullwidth/1.jpg" alt=""></div>
                                <div class="item"><img src="{{asset('public/frontend')}}/img/products/detail/fullwidth/2.jpg" alt=""></div>
                                <div class="item"><img src="{{asset('public/frontend')}}/img/products/detail/fullwidth/3.jpg" alt=""></div>
                            </div>
                        </div>
                        <div class="ps-product__info">
                            <h1>Marshall Kilburn Portable Wireless Speaker</h1>
                            <div class="ps-product__meta">
                                <p>Brand:<a href="shop-default.html">Sony</a></p>
                                <div class="ps-product__rating">
                                    <select class="ps-rating" data-read-only="true">
                                        <option value="1">1</option>
                                        <option value="1">2</option>
                                        <option value="1">3</option>
                                        <option value="1">4</option>
                                        <option value="2">5</option>
                                    </select><span>(1 review)</span>
                                </div>
                            </div>
                            <h4 class="ps-product__price">$36.78 – $56.99</h4>
                            <div class="ps-product__desc">
                                <p>Sold By:<a href="shop-default.html"><strong> Go Pro</strong></a></p>
                                <ul class="ps-list--dot">
                                    <li> Unrestrained and portable active stereo speaker</li>
                                    <li> Free from the confines of wires and chords</li>
                                    <li> 20 hours of portable capabilities</li>
                                    <li> Double-ended Coil Cord with 3.5mm Stereo Plugs Included</li>
                                    <li> 3/4″ Dome Tweeters: 2X and 4″ Woofer: 1X</li>
                                </ul>
                            </div>
                            <div class="ps-product__shopping"><a class="ps-btn ps-btn--black" href="#">Add to cart</a><a class="ps-btn" href="#">Buy Now</a>
                                <div class="ps-product__actions"><a href="#"><i class="icon-heart"></i></a><a href="#"><i class="icon-chart-bars"></i></a></div>
                            </div>
                        </div>
                    </div>
                </article>
            </div>
        </div>
    </div>
   @include('frontend.include.header1js')
</body>

</html>