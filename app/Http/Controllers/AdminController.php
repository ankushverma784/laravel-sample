<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;


class AdminController extends Controller
{
    function __construct()
    {
        //$this->middleware('admin');
    }

    public function index()
    {
        if (!empty(session('auth_token')) && !empty(session('user'))) {
            return redirect()->route('admin.dashboard');
        }
        return view('admin.login');
    }

    function login(Request $request)
    {
        $fields = $this->validate($request, [
            'email' => 'required',
            'password' => 'required',
        ]);
        $apiUrl = env('API_URL').'signin';
        $response = Http::post($apiUrl, [
            'email' => $fields['email'],
            'password' => $fields['password'],
        ]);


        $response = json_decode($response->body(),true);

        if ($response['success']) {
            $request->session()->put('auth_token', $response['token']);
            //$request->session()->put('user', $response['user_details']);

            return redirect()->route('admin.dashboard');
        } else {
            return redirect()->back()->with('message', 'email/password is wrong.');
        }
    }

    public function dashboard()
    {
        return view('admin.dashboard');
    }

    function logout(Request $request)
    {
        $request->session()->forget(['auth_token', 'user']);
        $request->session()->flush();
        return redirect('admin');
    }

    function updateProfile(Request $request){
        $apiUrl = env('API_URL').'updateUserProfile';
        $token = $request->session()->get('auth_token');

        $userDataresponse = Http::withHeaders(
            ['Authorization'=>'Bearer '.$token,
                'Content-Type'=>'application/json']
        )->post($apiUrl, [
            "id"=>'pqM6Pd6GzuVNuKXPt9ppaEWagtl1'
        ]);

        //dd($userDataresponse);

        if($request->isMethod('post')){
            $request->validate([
                'fname' => 'required',
                'lname' => 'required',
                'language' => 'required'
            ]);

            $response = Http::withHeaders(
                ['Authorization'=>'Bearer '.$token,
                    'Content-Type'=>'application/json']
            )->post($apiUrl, [
                "user_id"=>'pqM6Pd6GzuVNuKXPt9ppaEWagtl1',
                "fname"=>$request->input('fname'),
                "lname"=>$request->input('lname'),
                "language"=>$request->input('language')
            ]);
        }

        return view('admin.updateProfile');
    }

    function changePassword(Request $request){

        $apiUrl = env('API_URL').'updateUserProfile';
        $token = $request->session()->get('auth_token');
        if($request->isMethod('post')){
            $request->validate([
                'fname' => 'required',
                'lname' => 'required',
                'language' => 'required'
            ]);

            $response = Http::withHeaders(
                ['Authorization'=>'Bearer '.$token,
                    'Content-Type'=>'application/json']
            )->post($apiUrl, [
                "user_id"=>'pqM6Pd6GzuVNuKXPt9ppaEWagtl1',
            ]);
        }
        return view('admin.changePassword');
    }
    function getProfile(Request $request){
        $apiUrl = env('API_URL').'getUserProfile';
        $token = $request->session()->get('auth_token');
        $response = Http::withHeaders(
            ['Authorization'=>'Bearer '.$token,
                'Content-Type'=>'application/json']
        )->post($apiUrl, [
            "id"=>'pqM6Pd6GzuVNuKXPt9ppaEWagtl1'
        ]);
        $response = json_decode($response->body(),true);

    }


    //pages

    function homePage(Request $request){
        return view('admin.homePage');
    }
}
