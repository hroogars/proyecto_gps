<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
   protected $table = 'permission';

   protected $fillable = ['name'];

   public $timestamps = false; //Ignora las fechas de laravel (created_at, updated_at)
}
