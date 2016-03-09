<section id="footer_area">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                <div class="footer_logo">

                    <a href="#"><img src="{{URL::to('../resources/assets/asset/img/home-v1/icon.png')}}" alt="" /> <span class="footer-icon">  &copy;MyBodegaOnlineLLC</span></a>
                </div>
            </div>

            <div class="col-lg-3 col-md-3 col-sm-5 col-xs-12">
                <div class="footer_list">
                    <ul>
                        <li><a href="">FOR Users</a></li>
                        <li><a href="">BORN IN WASHINTONG HEIGHTS</a></li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-2 col-md-2 col-sm-3 col-xs-12">
                <div class="footer_list">
                    <ul>
                        <li><a href="">ABOUT US</a></li>
                        <li><a href="">CONTACT US</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-2 col-md-1 col-sm-6 col-xs-12">
                <div class="footer_list ">
                    <ul>
                        <li><a href="">TERMS</a></li>
                        <li><a href="">PRIVACY</a></li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-2 col-md-3 col-sm-6 col-xs-12">
                <div class="footer_social pull-right">
                    <ul>
                        <li><a href=""><i class="fa fa-facebook"></i></a></li>
                        <li><a href=""><i class="fa fa-twitter"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- jQuery Version 1.11.1 -->
<script src="{{URL::to('../resources/assets/asset/js/jquery.js')}}"></script>

<!-- Bootstrap Core JavaScript -->
<script src="{{URL::to('../resources/assets/asset/js/bootstrap.min.js')}}"></script>
<script src="{{URL::to('../resources/assets/asset/js/jquery.easing.min.js')}}"></script>

<!-- MixIt UP JS -->
<script src="{{URL::to('../resources/assets/asset/js/jquery.mixitup.min.js')}}"></script>
<!--         SmartMenus jQuery plugin
        <script src="js/jquery.smartmenus.js"></script>
        <script src="js/jquery.smartmenus.bootstrap.js"></script>-->
<!-- Revolution Slider Tools -->
<script src="{{URL::to('../resources/assets/asset/js/revolution.min.js')}}"></script>
<!-- FancyBox -->
<script src="{{URL::to('../resources/assets/asset/js/jquery.fancybox.pack.js')}}"></script>
<!-- video player -->
<script src="{{URL::to('../resources/assets/asset/js/simplePlayer.js')}}"></script>
<!-- owlcarousel -->
<script src="{{URL::to('../resources/assets/asset/js/owl.carousel.js')}}"></script>
<!-- my js -->
<script src="{{URL::to('../resources/assets/asset/js/main.js')}}"></script>
<script>
    $('#sticker').affix({
        offset: {
            top: 100,
            bottom: function() {
                return (this.bottom = $('.footer').outerHeight(true));
            }
        }
    });
</script>
</body>
</html>

