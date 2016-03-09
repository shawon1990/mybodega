<?php

namespace App\Http\Controllers\storeowner;

use App\Http\Controllers\Controller;
use \Illuminate\Support\Facades\Input;
use \Illuminate\Support\Facades\Session;
use App\Models\storeusermodel;
use App\Models\imagemodel;

class HomeController extends Controller {

    public function ownerdashboard() {
        return view('storeowner.home');
    }

    public function registerstep1() {
        return view('storeowner.registration.step1');
    }

    public function registerstep2() {

        
        
        $dir_prefix = "http://apis.glaction.com/images";
        $file            = Input::file('ownerimage');       
        $destinationPath = public_path() . '/../../apis/images/profile_picture';
        $filename        = $dir_prefix."/profile_picture/".$file->getClientOriginalName();
        
        $uploadSuccess   = $file->move($destinationPath, $filename);
        
        $store = Input::only(array(
                    'firstname',
                    'lastname',
                    'email',
                    'password'
                    
                    
        ));
        $image['profilepic']=$filename;
        

        return view('storeowner.registration.step2', array('store' => $store,'image'=>$image));
    }

    public function registerstep3() {
        $dir_prefix = "http://apis.glaction.com/images";
        
        //storeimageinput
        $file1=  Input::file('storeimage');
        $destinationPath = public_path() . '/../../apis/images/office_picture';
        $filename1        = $dir_prefix."/profile_picture/".$file1->getClientOriginalName();        
        $uploadSuccess   = $file1->move($destinationPath, $filename1);
        
        //morestoreimageinput
//        $file2=  Input::file('storeimage');
//        $destinationPath = public_path() . '/../../apis/images/additional_picture';
//        $filename2        = $dir_prefix."/profile_picture/".$file2->getClientOriginalName();        
//        $uploadSuccess   = $file2->move($destinationPath, $filename2);
        
        $store = Input::only(array(
                    'firstname', 'lastname', 'email', 'password', 'storename', 'storeaddress', 'storelandphone', 'storecellphone', 'storewebaddress'
        ));
        
        $image['profilepic']=  Input::get('profilePic');
        $image['storeimage']=$filename1;
        
        

        return view('storeowner.registration.step3', array('store' => $store,'image'=>$image));
    }

    public function registerstep4() {
        $dir_prefix = "http://apis.glaction.com/images";
        $file=  Input::file('legalimage');
        $destinationPath = public_path() . '/../../apis/images/legal_picture';
        $filename        = $dir_prefix."/legal_picture/".$file->getClientOriginalName();        
        $uploadSuccess   = $file->move($destinationPath, $filename);
        
        $image['profilepic']=  Input::get('profilepic');
        $image['storeimage']=  Input::get('storeimage');
        $image['legalimage']=$filename;
        
        
        $store = Input::only(array(
                    'firstname', 'lastname', 'email', 'password', 'storename',
                    'storeaddress', 'storelandphone', 'storecellphone', 'legalname', 'storewebaddress'
        ));
        $start = Input::get('start');
        $end = Input::get('end');
        $sessiondata = array();
        $sessiondata['start'] = $start;
        $sessiondata['end'] = $end;
        Session::put($sessiondata);


        return view('storeowner.registration.step4', array('store' => $store,'image'=>$image));
    }

    public function registrationsave() {

        $store = Input::only(array(
                    'firstname', 'lastname', 'email', 'password', 'storename', 'storeaddress', 'storelandphone',
                    'storecellphone', 'legalname', 'storewebaddress'));





//setdelivery
        $deliveryOption_d[1] = "false";
        $deliveryOption_d[2] = "false";
        $deliveryOption_d[3] = "false";
        $deliveryOption_d[4] = "false";

        $value[1] = Input::get('d1');
        $value[2] = Input::get('d2');
        $value[3] = Input::get('d3');
        $value[4] = Input::get('d4');

        $optionName[1] = 'd1';
        $optionName[2] = 'd2';
        $optionName[3] = 'd3';
        $optionName[4] = 'd4';

        $optionradios = Input::get('optionsRadios');
        $optionradiosextra = Input::get('optionsRadiosextra');



        if ($optionradios == "d1") {
            $deliveryOption_d[1] = "true";
        } else if ($optionradios == "d2") {
            $deliveryOption_d[2] = "true";
        } else if ($optionradios == "d3") {
            $deliveryOption_d[3] = "true";
        }
        if ($optionradiosextra == "d4") {
            $deliveryOption_d[4] = "true";
        }

        $data = array();
        for ($k = 1; $k <= 4; $k++) {
            $arr = array(
                'value' => $value[$k],
                'deliveryOption' => $deliveryOption_d[$k],
                'optionName' => $optionName[$k],
            );
            array_push($data, $arr);
        }
        $fees = $data;

        $feesType = array('dOne', 'dTwo', 'dThree', 'dFour');
        $feesString = "";
        $counter = 0;
        foreach ($fees as $feesKey => $fee) {
            $feesString .= $feesType[$counter] . "=>" . ((isset($fee['deliveryOption']) && (string) $fee['deliveryOption'] == "true") ? "1" : "0") . "|" . ((isset($fee['value']) && $fee['value'] != null) ? (string) $fee['value'] : "");
            if ($counter < 3)
                $feesString .= "}";
            $counter++;
        }






        // latitude longitude start 
        $location = $store['storeaddress'];
        $lat_long = array();
        $address = str_replace(array(" ", ","), "+", (string) str_replace("&", "and", $location));

        $json = file_get_contents("https://maps.google.com/maps/api/geocode/json?address=$address&key=AIzaSyCnOVBLqaQRXstkh1ptZfFPoJpOBoiaj0g");
        $json = json_decode($json);

        $lat_long[] = $json->{'results'}[0]->{'geometry'}->{'location'}->{'lat'};
        $lat_long[] = $json->{'results'}[0]->{'geometry'}->{'location'}->{'lng'};
        // latitude longitude end
        //sethours
        $start = Session::get('start');
        $end = Session::get('end');
        for ($i = 0; $i < 7; $i++) {
            $hours[$i]['time'] = $start[$i] . "-" . $end[$i];
        }

        $weekDays = array('MonDay', 'TuesDay', 'WednesDay', 'ThursDay', 'FriDay', 'SaturDay', 'SunDay');
        $hoursString = "";
        $dayCounter = 0;
        foreach ($hours as $hourKey => $hour) {
            if ($dayCounter < 6)
                $hoursString .= $weekDays[$dayCounter] . "=>" . $hour['time'] . "}";
            else
                $hoursString .= $weekDays[$dayCounter] . "=>" . $hour['time'];
            $dayCounter++;
        }

        $check=  storeusermodel::where('userEmail','=',$store['email'])->get();
        if(count($check)===0){
        $admin = new storeusermodel();
        $admin->userFirstName = $store['firstname'];
        $admin->userLastName = $store['lastname'];
        $admin->userEmail = $store['email'];
        $admin->userPassword = $store['password'];
        $admin->userStoreName = $store['storename'];
        $admin->userShopLocation = $store['storeaddress'];
        $admin->userContact = $store['storecellphone'];
        $admin->userLandLine = $store['storelandphone'];
        $admin->userWebAddress = $store['storewebaddress'];
        $admin->userLegalName = $store['legalname'];
        $admin->userType = 2;
        $admin->userHours = $hoursString;
        $admin->userDeliveryFees = $feesString;
        //  $admin->userrlMethod=$store['password'];
        $admin->userDeviceType = 2;
        $admin->userShopLatitude = $lat_long[0];
        $admin->userShopLongitude = $lat_long[1];
        
        $admin->save();
        
        $id=  storeusermodel::where('userEmail','=',$store['email'])->get();
        $userid=$id[0]->userId;
        
        
        $imagename1='profilePic';
        $imageurl1=Input::get('profilepic');
        $image1[]=$userid;
        $image1[]=1;
        $image1[]=$imagename1;
        $image1[]=$imageurl1;
        
        $imagename2='officePic';
        $imageurl2=Input::get('storeimage');
        $image2[]=$userid;
        $image2[]=1;
        $image2[]=$imagename2;
        $image2[]=$imageurl2;
        
        $imagename3='legalimage';
        $imageurl3=Input::get('legalimage');
        $image3[]=$userid;
        $image3[]=1;
        $image3[]=$imagename3;
        $image3[]=$imageurl3;
        
        $image[]=$image1;
        $image[]=$image2;
        $image[]=$image3;
        
        
       
        
       
        foreach ($image as $key => $value) {
             $admin= new imagemodel();
            $admin->userId=$value[0];
            $admin->userType=$value[1];
            $admin->imageType=$value[2];
            $admin->imageUrl=$value[3];
            
            
            $admin->save();
             
            return redirect ('/');
        }
        }else{
            
           
           return redirect('/');
        }

        
    }

}
