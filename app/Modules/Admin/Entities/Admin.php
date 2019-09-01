<?php

namespace App\Modules\Admin\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User;

class Admin extends User
{
    protected $fillable = [];

    protected $table='admin';


}
