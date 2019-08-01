<?php

namespace App\Http\Controllers\View;

use Illuminate\Http\Request;
use App\Permission;
use App\Http\Controllers\Controller;
use GuzzleHttp\Client;
use GuzzleHttp\Psr7\Request as RQ;
use Carbon\Carbon;  

class CareerViewController extends Controller
{

	 public function index()
	 {   
	 	$client = new \GuzzleHttp\Client(['http_errors' => 'false']);
	 	$header = ['Authorization' => 'TerribleTokenZi', 'Content-Type' => 'application/json'];

	 	$request = new RQ('GET', $this->hourcontrol_url.'/api/career', $header);
	 	$response = $client->send($request, ['timeout' => 10]);
	 	$data = json_decode($response->getBody());

	 	return view('career.index',['career'=>$data]);
	 }

	 public function AñadirCarrera(Request $request)
	 {   

	 	$client = new \GuzzleHttp\Client(['http_errors' => 'false']);
	 	$header = ['Authorization' => 'TerribleTokenZi', 'Content-Type' => 'application/json'];
	 	$request = new RQ('POST', $this->hourcontrol_url.'/api/career', $header, \GuzzleHttp\json_encode($request->all()));
	 	$response = $client->send($request, ['timeout' => 10]);
	 	$data = json_decode($response->getBody());
	 	return json_encode($data,true);
	 }

	 public function EditarCarrera(Request $request){
		//dd($request->all());
		$client = new \GuzzleHttp\Client(['http_errors' => 'false']);
        $header = ['Authorization' => \Session::get('sessionERP')['token'], 'Content-Type' => 'application/json'];
        $request = new RQ('PUT', $this->hourcontrol_url.'/api/career', $header, \GuzzleHttp\json_encode($request->all()));
        $response = $client->send($request, ['timeout' => 10]);
	 	$data = json_decode($response->getBody());
	 	return json_encode($data,true);
	}

	public function data2()
	 {   

	 	$client = new \GuzzleHttp\Client(['http_errors' => 'false']);
	 	$header = ['Authorization' => 'TerribleTokenZi', 'Content-Type' => 'application/json'];

	 	$request = new RQ('GET', $this->hourcontrol_url.'/api/institution', $header);
	 	$response = $client->send($request, ['timeout' => 10]);
	 	$data= json_decode($response->getBody(), true);
	 	$data2=[];
	 	foreach ($data as $key) {
	 		if ($key['active']!=0) {
	 			$data2[]=$key;
	 		}
	 		
	 	}
	 	return $data2;
	 }
}

