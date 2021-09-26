<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Authenticatable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticableContract;

class AdminModel extends Model implements AuthenticableContract
{
	use Authenticatable;
    protected $table = 'tb_admin';
    protected $guarded = [];
}
