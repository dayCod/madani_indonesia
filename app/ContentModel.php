<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;

class ContentModel extends Model
{
	use Notifiable;
    protected $table = 'tb_content';
    protected $guarded = [];

public function email()
{
	return $this->hasOne('App\SubsAction','id','email');			
}
    
}
