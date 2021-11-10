<?php

namespace App\Http\Controllers;

use App\Mail\ContactEmail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $this->middleware('auth');
        return view('home');
    }

    public function welcome()
    {


        return view('welcome');
    }

    public function sendContact(Request $request)
    {
        $errorCaptcha = null;
        $rules = ['captcha' => 'required|captcha'];
        $validator = validator()->make(request()->all(), $rules);
        if ($validator->fails()) {
            return response()->json([
                'message' => 'invalid captcha',
            ]);
        } else {
            Mail::to('contacto@xpertsystems.com.mx')->send(new ContactEmail($request->all()));
            return response()->json([
                'message' => 'ok',
            ]);
        }
    }
}
