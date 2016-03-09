@extends('storeowner.registration.layout.main_layout')
@section('content')
 <section class="reg_area">
            <div class="container">
                <div class="row clearfix">
                    <div class="col-md-6">
                        <h4 class="h-reg">STORE REGISTRATION</h4>
                        <p class="p-bl">My Bodega Online App wants to be your new business partner. 

                            Please complete these information to have your own app and 

                            webpage. Bienvenido ! Welcome !</p>
                    </div>
                    <div class="col-md-6">
                        <ul class="reg-cycle">
                            <li>
                                <div class="circle">
                                    About<br>
                                    You
                                </div>
                            </li>
                            <li>
                                <div class="circle  active">
                                    About<br>
                                    Your<br>
                                    Store
                                </div>
                            </li>
                            <li>
                                <div class="circle">
                                    Hours<br>
                                    Legal
                                </div>
                            </li>
                            <li>
                                <div class="circle">
                                    Delivery<br>
                                    Fees
                                </div>
                            </li>
                            <div class="connector"></div>
                        </ul>
                    </div>
                </div>
                <div class="row clearfix">
                    <div class="col-md-12">
                        <h4 class="h-reg">ABOUT YOUR STORE</h4>
                        <div class="row clearfix">
                            <form class="owner-reg" method='post' action="{{URL::to('storeowner/registrationstep3')}}" enctype="multipart/form-data">
                                <input type="hidden" value="{{csrf_token()}}" name="_token"/>
                                <div class="col-md-6">
                                    <input type="hidden" name="firstname" value="{{$store['firstname']}}" placeholder="First name of the Manager or Owner">
                                    <input type="hidden" name="lastname" value="{{$store['lastname']}}" placeholder="Last name of the Manager or Owner">
                                    <input type="hidden" name="email" value="{{$store['email']}}" placeholder="Email of the Manager or Owner">
                                    <input type="hidden" name="password" value="{{$store['password']}}" placeholder="Password">
                                    <input type="hidden" name="profilePic" value="{{$image['profilepic']}}" placeholder="profilepic">
                                    <input type="text" name="storename" value="" placeholder="Commercial Name of your Store" required>
                                    <input type="text" name="storeaddress" value="" placeholder="Store Address" required id="placeAuto" onfocus="geolocate()">
                                    <input type="text" name="storelandphone" value="" placeholder="Store Land Line Phone" >
                                    <input type="text" name="storecellphone" value="" placeholder="Cell Phone" name="" required>
                                   
                                </div>
                                <div class="col-md-6">
                                    <div class="pic-upload">
                                        <div class="fileUpload btn btn-success">
                                            <span><i class="fa fa-camera fa-3x"></i></span>
                                            <input type="file" class="upload" name="storeimage"/>
                                        </div>
                                        <p class="ins-lg p-bl">Add Picture of your Store</p>  
                                    </div>
                                    <div class="pic-upload">
                                        <div class="fileUpload btn btn-success">
                                            <span><i class="fa fa-camera fa-3x"></i></span>
                                            <input type="file" class="upload" name="morestoreimage"/>
                                        </div>
                                        <p class="ins-lg p-bl">More Pictures of your Store</p>  
                                    </div>
                                    
                                    <div class="web-add">
                                        <h4 class="h-reg">YOUR OWN WEB ADDRESS</h4>
                                        <span>mybodega.online/</span><input type="text" class="short" style="margin-top: -10px; margin-left:0; padding-bottom: 0;" value="" name="storewebaddress" required>
                                        
                                    </div>
                                </div>
                           
                            <input type="submit" class="btn-save" value="save">
                             </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
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
@stop