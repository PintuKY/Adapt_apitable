<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Mail;
use Illuminate\Pagination\Paginator;
use App\Models\ApiData;
use Carbon\Carbon;

class GetApiController extends Controller
{


        public function index()
        {

            $data = ApiData::paginate(1);
            return view('/datatable.apitable',compact('data'));

        }

        /*****
         * 
         * Get API Data and Store in data table
         * 
         */

        public function StoreApi()
        {
            
            $api_url ='https://api.publicapis.org/entries';
            $created_at = carbon::now()->timezone('Asia/Kolkata'); 
            $response = Http::get($api_url);
            $response =$response->body();
            $data = json_decode($response,true);  
            //dd((array)$data['entries']);         

            foreach((array)$data['entries'] as $val){   
                // dd($val);
               
                ApiData::updateOrCreate([

                    'api'         => $val['API'],
                    'description' =>$val['Description'],
                    'auth'        => $val['Auth'],
                    'https'       => $val['HTTPS'],
                    'cors'        => $val['Cors'],
                    'link'        => $val['Link'],
                    'category'    => $val['Category'],
                    'created_at'  => $created_at                    
                ]);

                return response()->json(['status' => 'success','message' =>'save data'],200);
            }

        }
}
