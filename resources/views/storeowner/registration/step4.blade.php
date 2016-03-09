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
                                <div class="circle ">
                                    About<br>
                                    You
                                </div>
                            </li>
                            <li>
                                <div class="circle">
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
                                <div class="circle active">
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
                        <h4 class="h-reg">DELIVERY FEES</h4>
                        <div class="row clearfix">
                            <form class="owner-reg clearfix" method='post' action="{{URL::to('storeowner/saveregistration')}}">
                               <input type="hidden" value="{{csrf_token()}}" name="_token"/>
                                <input type="hidden" name="userFirstName" value='' placeholder="First name of the Manager or Owner">
                                     <input type="hidden" name="firstname" value="{{$store['firstname']}}" placeholder="First name of the Manager or Owner">
                                    <input type="hidden" name="lastname" value="{{$store['lastname']}}" placeholder="Last name of the Manager or Owner">
                                    <input type="hidden" name="email" value="{{$store['email']}}" placeholder="Email of the Manager or Owner">
                                    <input type="hidden" name="password" value="{{$store['password']}}" placeholder="Password">
                                    <input type="hidden" name="storename" value="{{$store['storename']}}" placeholder="Commercial Name of your Store">
                                    <input type="hidden" name="storeaddress" value="{{$store['storeaddress']}}" placeholder="Store Address">
                                    <input type="hidden" name="storelandphone" value="{{$store['storelandphone']}}" placeholder="Store Land Line Phone">
                                    <input type="hidden" name="storecellphone" value="{{$store['storecellphone']}}" placeholder="Cell Phone">
                                    <input type="hidden" name='legalname' value="{{$store['legalname']}}" placeholder="Legal Name of the Store ">
                                    <input type="hidden" name='storewebaddress' value="{{$store['storewebaddress']}}" placeholder="Legal Name of the Store ">
                                    <input type="hidden" name="profilepic" value="{{$image['profilepic']}}" placeholder="profilepic">
                                    <input type="hidden" name="storeimage" value="{{$image['storeimage']}}" placeholder="storeimage">
                                    <input type="hidden" name="legalimage" value="{{$image['legalimage']}}" placeholder="storeimage">
                                    
                                <div class="col-md-5">
                                    <p class="p-bl">
                                        This is your opportunity to add any delivery charge for your own
                                        store. You will be able to modify this in the future, using your app 
                                        or your website.
                                    </p>
                                </div>
                                <div class="col-md-12">
                                    <div class="row clearfix">
                                        <div class="col-md-6 single-radio">
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="optionsRadios" id="optionsRadios1" value="d1" checked>
                                                    Free Delivery all the time
                                                </label>
                                                <input type="hidden" class="input-price" placeholder="$0.00" name='d1' value='00'>
                                            </div>
                                        </div>
                                        <div class="col-md-6 single-radio">
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="optionsRadios" id="optionsRadios2" value="d2">
                                                    Free Delivery after a minimum of
                                                </label>
                                                <input type="text" class="input-price" placeholder="$0.00" name='d2'>
                                            </div>
                                        </div>
                                        <div class="col-md-6 single-radio">
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="optionsRadios" id="optionsRadios2" value="d3">
                                                    Fee Delivery all the time of
                                                </label>
                                                <input type="text" class="input-price" placeholder="$0.00" name='d3'>
                                            </div>
                                        </div>
                                        <div class="col-md-6 single-radio">
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="optionsRadiosextra" id="optionsRadios2" value="d4">
                                                    Additional Rush Delivery Fee
                                                </label>
                                                
                                                <input type="text" class="input-price" placeholder="$0.00" name='d4'>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <input type="submit" class="btn-save pull-left" value="save">
                            </form>
                            
                        </div>
                    </div>
                </div>
            </div>
        </section>
@stop