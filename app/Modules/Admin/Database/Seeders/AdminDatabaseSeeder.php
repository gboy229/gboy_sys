<?php

namespace App\Modules\Admin\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Modules\Admin\Entities\Admin;
class AdminDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();
        Model::reguard();

        // $this->call("OthersTableSeeder");

        $admin=new Admin();
        $info=$admin::where(['username'=>'admin'])->first();
        if(!$info){
            $admin->username='admin';
            $admin->password=bcrypt('123456');
            $admin->realname='超级管理员';
            $admin->role=0;
            $admin->save();
        }


    }
}
