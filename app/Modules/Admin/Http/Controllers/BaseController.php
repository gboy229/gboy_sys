<?php

namespace App\Modules\Admin\Http\Controllers;

use Illuminate\Routing\Controller;
use App\Modules\Admin\Services\Admin;
use Illuminate\Support\Facades\Auth;

class BaseController extends Controller
{


    public function __construct()
    {

//        $admin=new Admin();
//         $admin->init();
        $this->middleware(function ($request, $next) {
            if (!Auth::guard('admin')->id()) {
                Auth::guard('admin')->logout();
                return redirect()->route('login');
            }
            return $next($request);
        });

    }

}
