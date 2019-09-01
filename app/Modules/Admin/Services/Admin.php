<?php


namespace App\Modules\Admin\Services;
use Illuminate\Support\Facades\Auth;
use App\Modules\Admin\Entities\Admin as AdminModel;
use Illuminate\Support\Facades\DB;
use Illuminate\Routing\Controller;
class Admin extends Controller
{


    protected $model;

    public function __construct()
    {

        $this->model = new AdminModel();


    }


     public function init()
    {


        print_r(Auth::guard('admin')->user());

        $this->middleware(function ($request, $next) { echo 2323;dd(Auth::guard('admin')->user()); return $next($request);});


    }

    /**
     * 后台登录
     * @param $username
     * @param $password
     * @return bool
     */
    public function login($username, $password)
    {
        if (!Auth::guard('admin')->attempt(['username' => $username, 'password' => $password])) {
            $this->errors = trans('admin::admin.login_failure');
            return false;
        }


        $this->_dologin(Auth::guard('admin')->id());
        return true;

    }

    protected function _dologin($id)
    {


        $this->model->where(['id' => $id])->update(['login_time' => date('Y-m-d H:i:s'), 'login_ip' => request()->ip(), 'login_num' => DB::raw('login_num+1')]);


    }

}