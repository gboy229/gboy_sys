<?php

namespace App\Modules\Admin\Http\Controllers;


use App\Modules\Admin\Services\Admin;

class AdminController extends BaseController
{


    public function __construct()
    {
        parent::__construct();


    }

    public function index()
    {



        return view('admin::index');
    }



}
