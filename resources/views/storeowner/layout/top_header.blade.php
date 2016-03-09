<!-- start preloader -->

<div class="preloaderbox"></div>

<!-- End preloader -->



<section class="popup-tab">
    <div class="popback"></div>
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                
                <div class="popbox">
                    <div class="popform">
                        <form action="" method="POST">
                            <div class="title">
                                <i class="fa fa-close"></i>
                                <img src="{{URL::to('../resources/assets/img/home-v1/icon.png')}}" alt="" /> 
                                <h3> Mybodega Online</h3>
                            </div>
                            <div class="tag-line">
                                <p>Call the owner using your cell phone.  Give us your phone number and we will send you a link to download our mobile app.</p>
                            </div>
                            <div class="inputs">
                                <input id="popnum" name="data[number]" type="text" placeholder="(212) 000-000">
                                <input id="popsub" type="submit" placeholder="Test me a link" value="Send me a link">
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

















<!-- header start area -->

<header class="stricky-fixed  clearfix">

    <section id="header_area" class="clearfix" >

        <h2 class="hide">hide</h2>



        <div class="container" >

            <div class="row">

                <div class="nav_area">

                    <div class="manu_area">

                        <div class="navbar" role="navigation">

                            <div class="navbar-header">

                                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">

                                    <span class="sr-only">Toggle navigation</span>

                                    <span class="icon-bar"></span>

                                    <span class="icon-bar"></span>

                                    <span class="icon-bar"></span>

                                </button>

                                <a class="navbar-brand" href="#"><img src="{{URL::to('../resources/assets/img/home-v1/icon.png')}}" alt="" /><span class="first">  mybodega.</span><span class="second">online</span></a>

                            </div>

                            <div class="navbar-collapse collapse">

                                <!-- Left nav -->

                                <ul class="nav navbar-nav mainmenu pull-right">

                                    
                                   
                                    
                                    <li><a href="">NEIGHBORHOOD DELIVERY</a></li>
                                    <li><a href="#" data-toggle="modal" data-target="#loginModal"><button class="btn-info log">LOG IN </button></a></li>                   
                                    <li class="singup"><a href="{{URL::to('storeowner/registrationstep1')}}" class="btn btn-signup"><button class="btn-info sing">SIGN UP</button></a></li>
                                   
                                </ul>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>



    </section>

</header>

<!-- Header area end -->

<!--        Modal Signup-->

        <!-- Modal -->
        <div class="modal fade custom-modal" id="signUp" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel">SIGN UP</h4><br>
                    </div>
                    <div class="modal-body">
                        <form class="sign mybodegaClientSignUp">
                            <input type="text" placeholder="First name" class="signup_fname">
                            <input type="text" placeholder="Last name" class="signup_lname">
                            <input type="email" placeholder="Email" class="signup_email">
                            <input type="password" placeholder="password" class="signup_pass">
                            <p class="text-center clientRegResponse" style="color: red; font-weight: bold;"></p>
                            <p class="text-center">By Signing up you agree to the terms of service and privacy policy of mybodega online</p>
                            <button class="btn-signup-lg">Sign Up</button>
                        </form>
                        <div class="or-divider"><span>or</span></div>
                        <button class="btn-facebook"><i class="fa fa-facebook-square"></i>&nbsp;&nbsp;&nbsp;Sign Up With Facebook</button>
                    </div>
                </div>
            </div>
        </div>

        <!--        Modal Signup-->

 <!--        Modal Signup-->
        
        <!--        Modal Login-->

        <!-- Modal -->
        <div class="modal fade custom-modal" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title login-title" id="myModalLabel">Juan Arias needs you to</h4>
                    </div>
                    <div class="modal-body">
                        <button class="btn-facebook"><i class="fa fa-facebook-square"></i>&nbsp;&nbsp;&nbsp;Login With Facebook</button>
                        <div class="or-divider"><span>or</span></div>
                        <form class="sign mybodegaClientSignIn">
                            <input type="email" placeholder="Email" class="signin_email">
                            <input type="password" placeholder="password" class="signin_pass">
                            <p class="clientLogRes" style="color: red;"></p>
                            <p class="text-right text-uppercase"><a href="#">Forgot password?</a></p>
                            <button class="btn-signup-lg">Login</button>
                        </form>
                        <div class="or-divider"><span>or</span></div>
                        <button class="btn-signup-lg">Sign Up</button>
                        
                    </div>
                </div>
            </div>
        </div>

        <!--        Modal Login-->

