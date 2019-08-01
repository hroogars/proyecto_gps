<?php

namespace App\Http\Controllers\Rest;

use GuzzleHttp\Client;
use GuzzleHttp\Psr7\Request as RQ;
use Carbon\Carbon;  
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\UserType;
use App\UserTypePermission;


class UserTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   

        
        $client = new \GuzzleHttp\Client(['http_errors' => 'false']);
        $header = ['Authorization' => 'TerribleTokenZi', 'Content-Type' => 'application/json'];

        $request = new RQ('GET', $this->hourcontrol_url.'/api/institution', $header);
        $response = $client->send($request, ['timeout' => 10]);
        $data = json_decode($response->getBody());

        //dd($data);

        $userType = UserType::all();
        //dd($userType);
        return view('userType.index',['userType'=>$userType]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
