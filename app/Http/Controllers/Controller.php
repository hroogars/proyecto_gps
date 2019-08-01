<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\Session;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    protected $hourcontrol_url = null;

    public function __construct()
    {   
        $this->middleware('auth');
        $this->middleware(function ($request, $next) {
            $this->hourcontrol_url = config('constants.hourcontrol.url');
            date_default_timezone_set('America/Santiago');
            return $next($request);
        });
    }
}
