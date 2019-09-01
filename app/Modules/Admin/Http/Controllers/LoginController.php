<?php

namespace App\Modules\Admin\Http\Controllers;


use App\Modules\Admin\Http\Requests\Login;
use App\Modules\Admin\Services\Admin as service;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{

    /*
       |--------------------------------------------------------------------------
       | Login Controller
       |--------------------------------------------------------------------------
       |
       | This controller handles authenticating users for the application and
       | redirecting them to your home screen. The controller uses a trait
       | to conveniently provide its functionality to your applications.
       |
       */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    //protected $redirectTo = '/home';


    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(service $service)
    {
        //$this->middleware('guest')->except('logout');
        $this->service = $service;
    }


    public function index()
    {

        echo Auth::guard('admin')->id();
       // event(new Admin());
        return view('admin::login');
    }


    public function login(Login $request)
    {

        $username = $request->input('username');
        $password = $request->input('password');

        if (!$this->service->login($username, $password)) {
            return redirect()->route('login')->withErrors(['msg' => $this->service->errors]);
        }
        return redirect('admin');

    }


}
