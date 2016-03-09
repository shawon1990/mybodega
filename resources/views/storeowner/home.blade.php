@extends('storeowner.layout.main_layout')
@section('content')
<section class="main-slider">

            <div class="tp-banner-container">
                <div class="tp-banner">

                    <div id="carousel-example-generic" class="carousel carousel-fade slide" data-ride="carousel">

                        <!-- Wrapper for slides -->
                        <div class="carousel-inner" role="listbox">
                            <div class="item active">
                                <img src="{{URL::to('../resources/assets/img/home-slider/slider-1.jpg')}}"  alt="">
                            </div>

                            <div class="item">
                                <img src="{{URL::to('../resources/assets/img/home-slider/slider-2.jpg')}}"  alt="">
                            </div>

                            <div class="item">
                                <img src="{{URL::to('../resources/assets/img/home-slider/meat.jpg')}}"  alt="">
                            </div>



                        </div>

                    </div>


                    <div class="tp-bannertimer" style="display: none;"></div>
                </div>
            </div>
            <div class="slider_input_area">

                <div class="container">

                    <div class="row">

                        <div class="col-lg-6 col-md-6 ">

                            <div class="slider_heading">

                                <h2>Connect  With <br />Your store <br /><span>Delivery in 30 minutes </span></h2>

                            </div>

                        </div>



                        <div class="col-lg-6 col-md-6 sidebarwidget">

                            <div class="sidebar-widget ">

                                <form method="post" action="" class="search-form-icon">

                                    <button type="button"><i class="fa fa-map-marker"></i></button>
                                    <input class="address-input" type="text" name="data[address]" value="" placeholder="Enter Your Address" id="placeAuto" onfocus="geolocate()">
                                    <button type="submit" class="arrow"><span><i class="fa fa-play"></i></span></button>

                                </form>

                            </div>

                        </div>

                    </div>

                </div>

            </div>
        </section>
        <!-- Main slider end -->


        <!-- slider feature area start -->

        <section id="slider_feature">
            <div class="container">
                <div class="row">

                    <div class="col-md-3 col-lg-3 col-xs-6">
                        <div class="single_feature text-center">
                            <h2>Your Store</h2>
                            <p>You Know them <br /> They know You</p>
                        </div>
                    </div>
                    <div class="col-md-3 col-lg-3 col-xs-6">
                        <div class="single_feature text-center">
                            <h2>Fast Deliveries</h2>
                            <p>30 minutes or less</br>at your Door</p>
                        </div>
                    </div>
                    <div class="col-md-3 col-lg-3 col-xs-6">
                        <div class="single_feature text-center">
                            <h2>Cash or Credit</h2>
                            <p>Pay with Cash or <br />use your Credit Card</p>
                        </div>
                    </div>
                    <div class="col-md-3 col-lg-3 col-xs-6">
                        <div class="single_feature text-center">
                            <h2>Local Deals</h2>
                            <p>Things that you need</br>at Great Prices</p>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <!-- slider feature area end -->



        <!-- store count area start -->

        <section id="store_count_area">
            <div class="container">
                <div class="row">


                    <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12" style="display: none;">
                        <div class="shoping_cart">
                            <div class="col-lg-3 col-md-3 col-sm-4 col-xs-3 ">
                                <div class="cart_inpout">
                                    <ul>
                                        <li><a href="">Store</a></li>
                                        <li><a href="">Users</a></li>
                                        <li><a href="">Deliveries</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-7 col-md-7 col-sm-8 col-xs-9 pull-right">
                                <div class="input">
                                    <ul>
                                        <li><input type="" placeholder="0"/></li>
                                        <li><input type="" placeholder="0"/></li>
                                        <li><input type="" placeholder="0"/></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-6">
                        <div class="shoping_details">
                            <h3>Download our App for Fast Groceries Deliveries</h3>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 clearfix">
                        <div class="shoping_icon">
                            <a href=""><img src="{{URL::to('../resources/assets/img/home-v1/google-icon.jpg')}}" alt="" /></a>
                            <a href=""><img src="{{URL::to('../resources/assets/img/home-v1/logo-app_store.jpg')}}" alt="" /></a>
                        </div>
                        <form id="sendLink" action="" method="post">
                            <div class="shoping_input">
                                <input class="first" name="data[number]" type="text" placeholder="(212) 000-000"/>
                                <input class="second" type="submit" placeholder="Test me a link" value="Send me a link" />
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </section>
        

@stop