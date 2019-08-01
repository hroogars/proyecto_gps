<?php

namespace App\Http\Controllers\View;

use Illuminate\Http\Request;
use App\Permission;
use App\Http\Controllers\Controller;
use GuzzleHttp\Client;
use GuzzleHttp\Psr7\Request as RQ;
use Carbon\Carbon;  

class InstitutionViewController extends Controller
{

	 public function index()
	 {   
	 	$client = new \GuzzleHttp\Client(['http_errors' => 'false']);
	 	$header = ['Authorization' => 'TerribleTokenZi', 'Content-Type' => 'application/json'];

	 	$request = new RQ('GET', $this->hourcontrol_url.'/api/institution', $header);
	 	$response = $client->send($request, ['timeout' => 10]);
	 	$data = json_decode($response->getBody());
	 	return view('institution.index',['institution'=>$data]);
	 }

	 public function AñadirInstitucion(Request $request)
	 {   

	 	$client = new \GuzzleHttp\Client(['http_errors' => 'false']);
	 	$header = ['Authorization' => 'TerribleTokenZi', 'Content-Type' => 'application/json'];
	 	$request = new RQ('POST', $this->hourcontrol_url.'/api/institution', $header, \GuzzleHttp\json_encode($request->all()));
	 	$response = $client->send($request, ['timeout' => 10]);
	 	$data = json_decode($response->getBody());
	 	return json_encode($data,true);
	 }

	 public function EditarInstitucion(Request $request){
		//dd($request->all());
		$client = new \GuzzleHttp\Client(['http_errors' => 'false']);
        $header = ['Authorization' => \Session::get('sessionERP')['token'], 'Content-Type' => 'application/json'];
        $request = new RQ('PUT', $this->hourcontrol_url.'/api/institution', $header, \GuzzleHttp\json_encode($request->all()));
        $response = $client->send($request, ['timeout' => 10]);
	 	$data = json_decode($response->getBody());
	 	return json_encode($data,true);
	}
}