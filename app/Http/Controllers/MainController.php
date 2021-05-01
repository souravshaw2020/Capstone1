<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
//use Nexmo\Laravel\Facade\Nexmo;
use Validator;
use Auth;
use DateTime;
date_default_timezone_set("Asia/Kolkata");


class MainController extends Controller
{
    function index() {
        return view('login');
    }

    function checkLogin(Request $request) {
        $user_data = array(
            'username' => $request->get('username'),
            'password' => $request->get('password')
        );
        
        $user_entry = $user_data['username'];
        $auth_user = DB::select("select username from users where username='$user_entry'");
        if (count($auth_user) == 1) {
            foreach($auth_user as $x) {
                if ($x->username == $user_entry) {
                    if(Auth::attempt($user_data)){
                        return redirect('dashboard/');
                    }
                    else{
                        return back()->with('error', 'Invalid Credentials. Try Again.');
                    }
                } 
                else {
                    return back()->with('error', 'Invalid Credentials. Try Again.');
                }
            }
        }
        else {
            return back()->with('error', 'Invalid Credentials. Try Again.');
        }
    }

    function successLogin() {
        $details = DB::select("select id,visitor_name,purpose,date_format(departure_time,'%a, %d %b %Y %r') as departure_time from visitors");
        return view('dashboard',['details' => $details]);
    }

    function visitorForm() {
        return view('visitorform');
    }

    // function send_OTP(Request $request) {
    //     Nexmo::message()->send {[
    //         'to' => '9830577676',
    //         'from' => '9116611067',
    //         'text' => "Test message."
    //     ]};
    // }

    function dataUpload() {
        return view('dataupload');
    }

    function visitorInfo(Request $request) {
        $image = $request->image;
        $folder_path = "C:/Users/krish/Documents/Visual Studio Code/PHP/Projects/VisitorGatepass/public/img_uploads/";
        $image_parts = explode(";base64,", $image);
        $image_type_aux = explode("image/", $image_parts[0]);
        $image_type = $image_type_aux[1];
        $image_base64 = base64_decode($image_parts[1]);
        $file_name = uniqid() . '.png';
        $file = $folder_path . $file_name; 
        file_put_contents($file, $image_base64);
        print_r($file_name);

        $contact_number = $request->get('number');
        $name = $request->get('visitorname');
        $purpose = $request->get('purpose');
        $departure_date = $request->get('departuredate');
        $departure_time = $request->get('departuretime');
        $departure = $departure_date." ".$departure_time;
        $format = "%d-%m-%Y %H:%M:%S";
        $strf = strftime($format);
        print_r($strf);
        print_r($departure);

        $entry = DB::insert("insert into visitors (visitor_name,contact_number,purpose,image_path,arrival_time,departure_time) values ('$name','$contact_number','$purpose','$file','$strf','$departure')");
    }

    function logout() {
        Auth::logout();
        return redirect('/');
    }
}

?>