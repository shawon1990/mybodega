<!-- footer area start -->



<section id="footer_area">

    <div class="container">

        <div class="row">

            <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">

                <div class="footer_logo">



                    <a href="#"><img src="{{URL::to('../resources/assets/img/home-v1/icon.png')}}" alt="" /> <span class="footer-icon">  &copy;MyBodegaOnlineLLC</span></a>

                </div>

            </div>



            <div class="col-lg-3 col-md-3 col-sm-5 col-xs-12">

                <div class="footer_list">

                    <ul>

                        <li><a href="{{URL::to('storeowner/storeowner')}}">FOR STORE OWNERS</a></li>

                        <li><a href="">BORN IN WASHINTONG HEIGHTS</a></li>

                    </ul>

                </div>

            </div>



            <div class="col-lg-2 col-md-2 col-sm-3 col-xs-12">

                <div class="footer_list">

                    <ul>

                        <li><a href="#">ABOUT US</a></li>

                        <li><a href="#">CONTACT US</a></li>

                    </ul>

                </div>

            </div>

            <div class="col-lg-2 col-md-1 col-sm-6 col-xs-12">

                <div class="footer_list ">

                    <ul>

                        <li><a href="#">TERMS</a></li>

                        <li><a href="#">PRIVACY</a></li>

                    </ul>

                </div>

            </div>



            <div class="col-lg-2 col-md-3 col-sm-6 col-xs-12">

                <div class="footer_social pull-right">

                    <ul>

                        <li><a href="https://www.facebook.com/mybodegaonline/" target="_blank"><i class="fa fa-facebook"></i></a></li>

                        <li><a href="https://twitter.com/mybodegaonline" target="_blank"><i class="fa fa-twitter"></i></a></li>

                        <!-- <li><a href=""><i class="fa fa-skype"></i></a></li> -->

                    </ul>

                </div>

            </div>

        </div>

    </div>

</section>
<section>
    <div hidden>
        <form action="#" method="post" id="mapForm">
            <input name="data[address]" value="New York, NY, United States">
        </form>
    </div>
</section>

<!-- send me a link popup js starts -->
<script>
    jQuery(document).ready(function($) {
       $(document).on('click', '#popsub', function(evt) {
          evt.preventDefault();
          var number = $('#popnum').val();
          
          if(number == '' || number == null) return false;
          
          $.ajax({
             url: "#",
             method: 'post',
             data: {'number': number},
             dataType: 'json',
             success: function(response) {
                 
             }
          });
       }); 
    });
</script>
<script>
    jQuery(document).ready(function($) {
       $(document).on('click', '.btn-signup', function() {
          
          $('.clientRegResponse').html(''); 
       
       });
       
       $(document).on('click', '.log', function() {
          
          $('.clientLogRes').html(''); 
       
       });
       
       $('.mybodegaClientSignUp').submit(function(evt) {
          evt.preventDefault();
          var data = {
            'userFirstName' : $('.signup_fname').val(),
            'userLastName'  : $('.signup_lname').val(),
            'userEmail'     : $('.signup_email').val(),
            'userPassword'  : $('.signup_pass').val()
            
          };
          //console.log(data);
          
          $.ajax({
             url: "{{ 'client/signup'}}",
             method: 'post',
             data: data,
             dataType: 'json',
             success: function(response) {
                 
                 $('.clientRegResponse').html(response.message);
                 
             }
          });
       });
       
       $('.mybodegaClientSignIn').submit(function(evt) {
          evt.preventDefault();
          var data = {
            'userEmail' : $('.signin_email').val(),
            'userPassword'  : $('.signin_pass').val()
            
          };
          //console.log(data);
          console.log(data);
//          return false;
          $.ajax({
             url: "{{ 'client/signin'}}",
             method: 'post',
             data: data,
             dataType: 'json',
             success: function(response) {
                 
                 if(response.success == 0)
                   $('.clientLogRes').html(response.message);
                 
                 else {
                    
                     $('#mapForm').submit();
                 }
             }
          });
       });
       
    });
</script>
<!-- send me a link popup js ends -->


<!-- footer area end --->



<!-- jquery library -->



<!-- MixIt UP JS -->

<script src="{{URL::to('../resources/assets/js/jquery.mixitup.min.js')}}"></script>

<!-- SmartMenus jQuery plugin -->

<script src="{{URL::to('../resources/assets/js/jquery.smartmenus.js')}}"></script>

<script src="{{URL::to('../resources/assets/js/jquery.smartmenus.bootstrap.js')}}"></script>

<!-- Revolution Slider Tools -->

<script src="{{URL::to('../resources/assets/js/revolution.min.js')}}"></script>

<!-- FancyBox -->

<script src="{{URL::to('../resources/assets/js/jquery.fancybox.pack.js')}}"></script>

<!-- video player -->

<script src="{{URL::to('../resources/assets/js/simplePlayer.js')}}"></script>

<!-- owlcarousel -->

<script src="{{URL::to('../resources/assets/js/owl.carousel.js')}}"></script>

<!-- my js -->

<script src="{{URL::to('../resources/assets/js/main.js')}}"></script>

<script src="{{URL::to('../resources/assets/js/jquery-1.11.3.js')}}"></script> <!-- jQuery JS -->
        <script src="{{URL::to('../resources/assets/js/jquery.easing.min.js')}}"></script>
        <!-- bootstrap -->
        <script src="{{URL::to('../resources/assets/js/bootstrap.min.js')}}"></script>
        <script>

                                        var placeSearch, autocomplete;
                                        /*var componentForm = {
                                         street_number: 'short_name',
                                         route: 'long_name',
                                         locality: 'long_name',
                                         administrative_area_level_1: 'short_name',
                                         country: 'long_name',
                                         postal_code: 'short_name'
                                         };*/

                                        function initAutocomplete() {
                                            // Create the autocomplete object, restricting the search to geographical
                                            // location types.
                                            autocomplete = new google.maps.places.Autocomplete(
                                                    /** @type {!HTMLInputElement} */(document.getElementById('placeAuto')),
                                                    {types: ['geocode']});

                                            // When the user selects an address from the dropdown, populate the address
                                            // fields in the form.
                                            //autocomplete.addListener('place_changed', fillInAddress);
                                        }

                                        // [START region_fillform]
                                        function fillInAddress() {
                                            // Get the place details from the autocomplete object.
                                            var place = autocomplete.getPlace();

                                            for (var component in componentForm) {
                                                document.getElementById('component').value = '';
                                                document.getElementById('component').disabled = false;
                                            }

                                            // Get each component of the address from the place details
                                            // and fill the corresponding field on the form.
                                            for (var i = 0; i < place.address_components.length; i++) {
                                                var addressType = place.address_components[i].types[0];
                                                if (componentForm[addressType]) {
                                                    var val = place.address_components[i][componentForm[addressType]];
                                                    document.getElementById(addressType).value = val;
                                                }
                                            }
                                        }
                                        // [END region_fillform]

                                        // [START region_geolocation]
                                        // Bias the autocomplete object to the user's geographical location,
                                        // as supplied by the browser's 'navigator.geolocation' object.
                                        function geolocate() {
                                            if (navigator.geolocation) {
                                                navigator.geolocation.getCurrentPosition(function(position) {
                                                    var geolocation = {
                                                        lat: position.coords.latitude,
                                                        lng: position.coords.longitude
                                                    };
                                                    var circle = new google.maps.Circle({
                                                        center: geolocation,
                                                        radius: position.coords.accuracy
                                                    });
                                                    autocomplete.setBounds(circle.getBounds());
                                                });
                                            }
                                        }
                                        // [END region_geolocation]

        </script>
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDTAchUTIQyq7B_SARLUNkG_zJQGcz20v8&signed_in=true&libraries=places&callback=initAutocomplete"
        async defer></script>