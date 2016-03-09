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
                                <div class="circle active">
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
                        <h4 class="h-reg">Hours</h4>
                        <div class="row clearfix">
                            <form class="owner-reg clearfix" method='post' action="{{URL::to('storeowner/registrationstep4')}}" enctype="multipart/form-data">
                                <input type="hidden" value="{{csrf_token()}}" name="_token"/>   
                                <input type="hidden" name="firstname" value="{{$store['firstname']}}" placeholder="First name of the Manager or Owner">
                                    <input type="hidden" name="lastname" value="{{$store['lastname']}}" placeholder="Last name of the Manager or Owner">
                                    <input type="hidden" name="email" value="{{$store['email']}}" placeholder="Email of the Manager or Owner">
                                    <input type="hidden" name="password" value="{{$store['password']}}" placeholder="Password">
                                    <input type="hidden" name="storename" value="{{$store['storename']}}" placeholder="Commercial Name of your Store">
                                    <input type="hidden" name="storeaddress" value="{{$store['storeaddress']}}" placeholder="Store Address">
                                    <input type="hidden" name="storelandphone" value="{{$store['storelandphone']}}" placeholder="Store Land Line Phone">
                                    <input type="hidden" name="storecellphone" value="{{$store['storecellphone']}}" placeholder="Cell Phone">
                                    <input type="hidden" name="storewebaddress" value="{{$store['storewebaddress']}}" placeholder="storewebaddress">
                                    <input type="hidden" name="profilepic" value="{{$image['profilepic']}}" placeholder="profilepic">
                                    <input type="hidden" name="storeimage" value="{{$image['storeimage']}}" placeholder="storeimage">
                                    
                                    
                                <div class="col-md-5">
                                    <p class="p-bl">
                                        You will be able to modify your hours of operation in the future 
                                        using the app or the website.
                                    </p>
                                    <table class="table table-responsive table-schedule">
                                        <tr>
                                            <td>Monday</td>
                                            <td>
                                        <select name='start[]'>
                                            
                                            <option value='06.00|am'>6:00am</option>
                                            <option value='07.00|am'>7:00am</option>
                                            <option value='08.00|am'>8:00am</option>
                                            <option value='09.00|am'>9:00am</option>
                                            <option value='10.00|am'>10:00am</option>
                                            <option value='11.00|am'>11:00am</option>
                                            <option value='12.00|am'>12:00pm</option>
                                            <option value='01.00|am'>1:00pm</option>
                                            <option value='02.00|am'>2:00pm</option>
                                            <option value='03.00|am'>3:00pm</option>
                                            <option value='04.00|am'>4:00pm</option>
                                            <option value='05.00|am'>5:00pm</option>
                                            <option value='06.00|am'>6:00pm</option>
                                            <option value='07.00|am'>7:00pm</option>
                                            <option value='08.00|am'>8:00pm</option>
                                            <option value='09.00|am'>9:00pm</option>
                                            <option value='10.00|am'>10:00pm</option>
                                            <option value='11.00|am'>11:00pm</option>
                                            <option value='12.00|am'>12:00am</option>
                                            
                                            
                                            </select> -
                                                 <select name='end[]'>
                                            
                                            <option value='06.00|am'>6:00am</option>
                                            <option value='07.00|am'>7:00am</option>
                                            <option value='08.00|am'>8:00am</option>
                                            <option value='09.00|am'>9:00am</option>
                                            <option value='10.00|am'>10:00am</option>
                                            <option value='11.00|am'>11:00am</option>
                                            <option value='12.00|am'>12:00pm</option>
                                            <option value='01.00|am'>1:00pm</option>
                                            <option value='02.00|am'>2:00pm</option>
                                            <option value='03.00|am'>3:00pm</option>
                                            <option value='04.00|am'>4:00pm</option>
                                            <option value='05.00|am'>5:00pm</option>
                                            <option value='06.00|am'>6:00pm</option>
                                            <option value='07.00|am'>7:00pm</option>
                                            <option value='08.00|am'>8:00pm</option>
                                            <option value='09.00|am'>9:00pm</option>
                                            <option value='10.00|am'>10:00pm</option>
                                            <option value='11.00|am'>11:00pm</option>
                                            <option value='12.00|am'>12:00am</option>
                                            
                                            </select>
                                          </td>
                                        </tr>
                                         <tr>
                                            <td>Tuesday</td>
                                            <td>
                                        <select name='start[]'>
                                            
                                            <option value='06.00|am'>6:00am</option>
                                            <option value='07.00|am'>7:00am</option>
                                            <option value='08.00|am'>8:00am</option>
                                            <option value='09.00|am'>9:00am</option>
                                            <option value='10.00|am'>10:00am</option>
                                            <option value='11.00|am'>11:00am</option>
                                            <option value='12.00|am'>12:00pm</option>
                                            <option value='01.00|am'>1:00pm</option>
                                            <option value='02.00|am'>2:00pm</option>
                                            <option value='03.00|am'>3:00pm</option>
                                            <option value='04.00|am'>4:00pm</option>
                                            <option value='05.00|am'>5:00pm</option>
                                            <option value='06.00|am'>6:00pm</option>
                                            <option value='07.00|am'>7:00pm</option>
                                            <option value='08.00|am'>8:00pm</option>
                                            <option value='09.00|am'>9:00pm</option>
                                            <option value='10.00|am'>10:00pm</option>
                                            <option value='11.00|am'>11:00pm</option>
                                            <option value='12.00|am'>12:00am</option>
                                            
                                            
                                            </select> -
                                                 <select name='end[]'>
                                            
                                           <option value='06.00|am'>6:00am</option>
                                            <option value='07.00|am'>7:00am</option>
                                            <option value='08.00|am'>8:00am</option>
                                            <option value='09.00|am'>9:00am</option>
                                            <option value='10.00|am'>10:00am</option>
                                            <option value='11.00|am'>11:00am</option>
                                            <option value='12.00|am'>12:00pm</option>
                                            <option value='01.00|am'>1:00pm</option>
                                            <option value='02.00|am'>2:00pm</option>
                                            <option value='03.00|am'>3:00pm</option>
                                            <option value='04.00|am'>4:00pm</option>
                                            <option value='05.00|am'>5:00pm</option>
                                            <option value='06.00|am'>6:00pm</option>
                                            <option value='07.00|am'>7:00pm</option>
                                            <option value='08.00|am'>8:00pm</option>
                                            <option value='09.00|am'>9:00pm</option>
                                            <option value='10.00|am'>10:00pm</option>
                                            <option value='11.00|am'>11:00pm</option>
                                            <option value='12.00|am'>12:00am</option>
                                            
                                            </select>
                                                </td>
                                        </tr>
                                         <tr>
                                            <td>Wednesday</td>
                                            <td>
                                        <select name='start[]'>
                                            
                                            <option value='06.00|am'>6:00am</option>
                                            <option value='07.00|am'>7:00am</option>
                                            <option value='08.00|am'>8:00am</option>
                                            <option value='09.00|am'>9:00am</option>
                                            <option value='10.00|am'>10:00am</option>
                                            <option value='11.00|am'>11:00am</option>
                                            <option value='12.00|am'>12:00pm</option>
                                            <option value='01.00|am'>1:00pm</option>
                                            <option value='02.00|am'>2:00pm</option>
                                            <option value='03.00|am'>3:00pm</option>
                                            <option value='04.00|am'>4:00pm</option>
                                            <option value='05.00|am'>5:00pm</option>
                                            <option value='06.00|am'>6:00pm</option>
                                            <option value='07.00|am'>7:00pm</option>
                                            <option value='08.00|am'>8:00pm</option>
                                            <option value='09.00|am'>9:00pm</option>
                                            <option value='10.00|am'>10:00pm</option>
                                            <option value='11.00|am'>11:00pm</option>
                                            <option value='12.00|am'>12:00am</option>
                                            
                                            
                                            </select> -
                                                 <select name='end[]'>
                                            
                                            <option value='06.00|am'>6:00am</option>
                                            <option value='07.00|am'>7:00am</option>
                                            <option value='08.00|am'>8:00am</option>
                                            <option value='09.00|am'>9:00am</option>
                                            <option value='10.00|am'>10:00am</option>
                                            <option value='11.00|am'>11:00am</option>
                                            <option value='12.00|am'>12:00pm</option>
                                            <option value='01.00|am'>1:00pm</option>
                                            <option value='02.00|am'>2:00pm</option>
                                            <option value='03.00|am'>3:00pm</option>
                                            <option value='04.00|am'>4:00pm</option>
                                            <option value='05.00|am'>5:00pm</option>
                                            <option value='06.00|am'>6:00pm</option>
                                            <option value='07.00|am'>7:00pm</option>
                                            <option value='08.00|am'>8:00pm</option>
                                            <option value='09.00|am'>9:00pm</option>
                                            <option value='10.00|am'>10:00pm</option>
                                            <option value='11.00|am'>11:00pm</option>
                                            <option value='12.00|am'>12:00am</option>
                                            
                                            </select>
                                                </td>
                                        </tr>
                                         <tr>
                                            <td>Thursday</td>
                                            <td>
                                        <select name='start[]'>
                                            
                                            <option value='06.00|am'>6:00am</option>
                                            <option value='07.00|am'>7:00am</option>
                                            <option value='08.00|am'>8:00am</option>
                                            <option value='09.00|am'>9:00am</option>
                                            <option value='10.00|am'>10:00am</option>
                                            <option value='11.00|am'>11:00am</option>
                                            <option value='12.00|am'>12:00pm</option>
                                            <option value='01.00|am'>1:00pm</option>
                                            <option value='02.00|am'>2:00pm</option>
                                            <option value='03.00|am'>3:00pm</option>
                                            <option value='04.00|am'>4:00pm</option>
                                            <option value='05.00|am'>5:00pm</option>
                                            <option value='06.00|am'>6:00pm</option>
                                            <option value='07.00|am'>7:00pm</option>
                                            <option value='08.00|am'>8:00pm</option>
                                            <option value='09.00|am'>9:00pm</option>
                                            <option value='10.00|am'>10:00pm</option>
                                            <option value='11.00|am'>11:00pm</option>
                                            <option value='12.00|am'>12:00am</option>
                                            
                                            
                                            </select> -
                                                 <select name='end[]'>
                                            
                                            <option value='06.00|am'>6:00am</option>
                                            <option value='07.00|am'>7:00am</option>
                                            <option value='08.00|am'>8:00am</option>
                                            <option value='09.00|am'>9:00am</option>
                                            <option value='10.00|am'>10:00am</option>
                                            <option value='11.00|am'>11:00am</option>
                                            <option value='12.00|am'>12:00pm</option>
                                            <option value='01.00|am'>1:00pm</option>
                                            <option value='02.00|am'>2:00pm</option>
                                            <option value='03.00|am'>3:00pm</option>
                                            <option value='04.00|am'>4:00pm</option>
                                            <option value='05.00|am'>5:00pm</option>
                                            <option value='06.00|am'>6:00pm</option>
                                            <option value='07.00|am'>7:00pm</option>
                                            <option value='08.00|am'>8:00pm</option>
                                            <option value='09.00|am'>9:00pm</option>
                                            <option value='10.00|am'>10:00pm</option>
                                            <option value='11.00|am'>11:00pm</option>
                                            <option value='12.00|am'>12:00am</option>
                                            
                                            </select>
                                                </td>
                                        </tr>
                                         <tr>
                                            <td>Friday</td>
                                            <td>
                                        <select name='start[]'>
                                            
                                            <option value='06.00|am'>6:00am</option>
                                            <option value='07.00|am'>7:00am</option>
                                            <option value='08.00|am'>8:00am</option>
                                            <option value='09.00|am'>9:00am</option>
                                            <option value='10.00|am'>10:00am</option>
                                            <option value='11.00|am'>11:00am</option>
                                            <option value='12.00|am'>12:00pm</option>
                                            <option value='01.00|am'>1:00pm</option>
                                            <option value='02.00|am'>2:00pm</option>
                                            <option value='03.00|am'>3:00pm</option>
                                            <option value='04.00|am'>4:00pm</option>
                                            <option value='05.00|am'>5:00pm</option>
                                            <option value='06.00|am'>6:00pm</option>
                                            <option value='07.00|am'>7:00pm</option>
                                            <option value='08.00|am'>8:00pm</option>
                                            <option value='09.00|am'>9:00pm</option>
                                            <option value='10.00|am'>10:00pm</option>
                                            <option value='11.00|am'>11:00pm</option>
                                            <option value='12.00|am'>12:00am</option>
                                            
                                            
                                            </select> -
                                                 <select name='end[]'>
                                            
                                            <option value='06.00|am'>6:00am</option>
                                            <option value='07.00|am'>7:00am</option>
                                            <option value='08.00|am'>8:00am</option>
                                            <option value='09.00|am'>9:00am</option>
                                            <option value='10.00|am'>10:00am</option>
                                            <option value='11.00|am'>11:00am</option>
                                            <option value='12.00|am'>12:00pm</option>
                                            <option value='01.00|am'>1:00pm</option>
                                            <option value='02.00|am'>2:00pm</option>
                                            <option value='03.00|am'>3:00pm</option>
                                            <option value='04.00|am'>4:00pm</option>
                                            <option value='05.00|am'>5:00pm</option>
                                            <option value='06.00|am'>6:00pm</option>
                                            <option value='07.00|am'>7:00pm</option>
                                            <option value='08.00|am'>8:00pm</option>
                                            <option value='09.00|am'>9:00pm</option>
                                            <option value='10.00|am'>10:00pm</option>
                                            <option value='11.00|am'>11:00pm</option>
                                            <option value='12.00|am'>12:00am</option>
                                            
                                            </select>
                                                </td>
                                        </tr>
                                         <tr>
                                            <td>Saturday</td>
                                            <td>
                                        <select name='start[]'>
                                            
                                            <<option value='06.00|am'>6:00am</option>
                                            <option value='07.00|am'>7:00am</option>
                                            <option value='08.00|am'>8:00am</option>
                                            <option value='09.00|am'>9:00am</option>
                                            <option value='10.00|am'>10:00am</option>
                                            <option value='11.00|am'>11:00am</option>
                                            <option value='12.00|am'>12:00pm</option>
                                            <option value='01.00|am'>1:00pm</option>
                                            <option value='02.00|am'>2:00pm</option>
                                            <option value='03.00|am'>3:00pm</option>
                                            <option value='04.00|am'>4:00pm</option>
                                            <option value='05.00|am'>5:00pm</option>
                                            <option value='06.00|am'>6:00pm</option>
                                            <option value='07.00|am'>7:00pm</option>
                                            <option value='08.00|am'>8:00pm</option>
                                            <option value='09.00|am'>9:00pm</option>
                                            <option value='10.00|am'>10:00pm</option>
                                            <option value='11.00|am'>11:00pm</option>
                                            <option value='12.00|am'>12:00am</option>
                                            
                                            
                                            </select> -
                                                 <select name='end[]'>
                                            
                                            <option value='06.00|am'>6:00am</option>
                                            <option value='07.00|am'>7:00am</option>
                                            <option value='08.00|am'>8:00am</option>
                                            <option value='09.00|am'>9:00am</option>
                                            <option value='10.00|am'>10:00am</option>
                                            <option value='11.00|am'>11:00am</option>
                                            <option value='12.00|am'>12:00pm</option>
                                            <option value='01.00|am'>1:00pm</option>
                                            <option value='02.00|am'>2:00pm</option>
                                            <option value='03.00|am'>3:00pm</option>
                                            <option value='04.00|am'>4:00pm</option>
                                            <option value='05.00|am'>5:00pm</option>
                                            <option value='06.00|am'>6:00pm</option>
                                            <option value='07.00|am'>7:00pm</option>
                                            <option value='08.00|am'>8:00pm</option>
                                            <option value='09.00|am'>9:00pm</option>
                                            <option value='10.00|am'>10:00pm</option>
                                            <option value='11.00|am'>11:00pm</option>
                                            <option value='12.00|am'>12:00am</option>
                                            
                                            </select>
                                                </td>
                                        </tr>
                                         <tr>
                                            <td>Sunday</td>
                                            <td>
                                        <select name='start[]'>
                                            
                                            <option value='06.00|am'>6:00am</option>
                                            <option value='07.00|am'>7:00am</option>
                                            <option value='08.00|am'>8:00am</option>
                                            <option value='09.00|am'>9:00am</option>
                                            <option value='10.00|am'>10:00am</option>
                                            <option value='11.00|am'>11:00am</option>
                                            <option value='12.00|am'>12:00pm</option>
                                            <option value='01.00|am'>1:00pm</option>
                                            <option value='02.00|am'>2:00pm</option>
                                            <option value='03.00|am'>3:00pm</option>
                                            <option value='04.00|am'>4:00pm</option>
                                            <option value='05.00|am'>5:00pm</option>
                                            <option value='06.00|am'>6:00pm</option>
                                            <option value='07.00|am'>7:00pm</option>
                                            <option value='08.00|am'>8:00pm</option>
                                            <option value='09.00|am'>9:00pm</option>
                                            <option value='10.00|am'>10:00pm</option>
                                            <option value='11.00|am'>11:00pm</option>
                                            <option value='12.00|am'>12:00am</option>
                                            
                                            
                                            </select> -
                                                 <select name='end[]'>
                                            
                                            <option value='06.00|am'>6:00am</option>
                                            <option value='07.00|am'>7:00am</option>
                                            <option value='08.00|am'>8:00am</option>
                                            <option value='09.00|am'>9:00am</option>
                                            <option value='10.00|am'>10:00am</option>
                                            <option value='11.00|am'>11:00am</option>
                                            <option value='12.00|am'>12:00pm</option>
                                            <option value='01.00|am'>1:00pm</option>
                                            <option value='02.00|am'>2:00pm</option>
                                            <option value='03.00|am'>3:00pm</option>
                                            <option value='04.00|am'>4:00pm</option>
                                            <option value='05.00|am'>5:00pm</option>
                                            <option value='06.00|am'>6:00pm</option>
                                            <option value='07.00|am'>7:00pm</option>
                                            <option value='08.00|am'>8:00pm</option>
                                            <option value='09.00|am'>9:00pm</option>
                                            <option value='10.00|am'>10:00pm</option>
                                            <option value='11.00|am'>11:00pm</option>
                                            <option value='12.00|am'>12:00am</option>
                                            
                                            </select>
                                                </td>
                                        </tr>
                                        
                                    </table>
                                </div>
                                <div class="col-md-6 col-md-offset-1">
                                    <div class="row clearfix">
                                        <h4 class="h-reg">Legal</h4>
                                       
                                        <input type="text" name='legalname' value="" placeholder="Legal Name of the Store " required>
                                    </div>
                                    <div class="pic-upload">
                                        <div class="fileUpload btn btn-success">
                                            <span><i class="fa fa-camera fa-3x"></i></span>
                                            <input type="file" class="upload" name="legalimage"/>
                                        </div>
                                        <p class="ins-lg p-bl">Picture of your Legal Permit</p>  
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