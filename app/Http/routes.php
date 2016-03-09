<?php

Route::group(array('prefix'=>'storeowner'),function(){
    Route::get('storeowner','storeowner\HomeController@ownerdashboard');
    Route::get('registrationstep1','storeowner\HomeController@registerstep1');
    Route::post('registrationstep2','storeowner\HomeController@registerstep2');
    Route::post('registrationstep3','storeowner\HomeController@registerstep3');
    Route::post('registrationstep4','storeowner\HomeController@registerstep4');
    Route::post('saveregistration','storeowner\HomeController@registrationsave');
    
   
    
    
});




Route::get('/','HomeController@index' );
