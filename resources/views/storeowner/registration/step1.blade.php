@extends('storeowner.registration.layout.main_layout')
@section('content')
 <style>
            body {
                padding-top: 50px;
                /* Required padding for .navbar-fixed-top. Remove if using .navbar-static-top. Change if height of navigation changes. */
            }
        </style>
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
                                <div class="circle active">
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
                        <h4 class="h-reg">About You</h4>
                        <div class="row clearfix">
                            <form method="post" class="owner-reg" action="{{URL::to('storeowner/registrationstep2')}}" enctype="multipart/form-data">
                               <input type="hidden" value="{{csrf_token()}}" name="_token"/>
                                <div class="col-md-6">
                                   
                                    <input type="text" value=""  name="firstname" placeholder="First name of the Manager or Owner" required>
                                    <input type="text" value="" name="lastname" placeholder="Last name of the Manager or Owner" required>
                                    <input type="email" value="" name="email" placeholder="Email of the Manager or Owner" required>
                                    
                                    <input value="" name="password" placeholder="Password" type="password" required>
                                </div>
                                <div class="col-md-6">
                                    <div class="pic-upload">
                                        <div class="fileUpload btn btn-success">
                                            <span><i class="fa fa-camera fa-3x"></i></span>
                                            <input type="file" class="upload" name='ownerimage' />
                                        </div>
                                        <p class="ins-lg p-bl">Add a picture of the Manager or Owner</p>
                                        <p class="ins-sm p-bl">After you register you

                                            will be able to add 

                                            pictures using your 

                                            mobile app.</p>
                                    </div>
                                </div>
                            
                            <input type="submit" class="btn-save" value="save">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
@stop