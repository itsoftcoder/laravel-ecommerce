<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
   // view welcome page	
   public function welcome()
   {
   	 return view('welcome');
   }

  // view about page
   public function about()
   {
   	 return view('about',['about_us'=>'we are laravel developer']);
   }
   
   // view contact page
   public function contact()
   {
   	 $contacts = [
   	 	           'email'     => 'alamingemamin@gmail.com',
   	 	           'address'   => 'phulpur,mymensingh' ,
   	 	           'phone'     => '01759216367'
   	            ];
   	 return view('contact',compact('contacts'));
   }

   // view service page
   public function service()
   {
   	 $services = ['laravel','php','python','c#','java','wordpress','dinanjo'];
   	 return view('service', compact('services'));
   }


}
