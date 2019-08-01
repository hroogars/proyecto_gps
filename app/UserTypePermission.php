<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserTypePermission extends Model
{
   protected $table = 'user_type_permission';

   protected $fillable = ['type','user_type_id','permission_id'];

   public $timestamps = false; //Ignora las fechas de laravel (created_at, updated_at)
}
