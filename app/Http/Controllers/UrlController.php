<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Shortener;
use DB;
use Illuminate\Support\Facades\Input;
use Tzsk\ShortenUrl\Facade\GoogleUrl;
use Validator;

use GuzzleHttp\Client;
class UrlController extends Controller
{
    public function index(){


        $link_data =  DB::table("links")->get();

         if($link_data){
             if(count($link_data)<=0){
                    return response()->json([
                        "data"=>$link_data,
                        "Message"=>"Link data is Empty"
                    ]);
             }else{
                return response()->json([
                    "data"=>$link_data,
                   "Message"=>"Success"
                ]);
             }
         }


       // return view("form");
    }


    public function create(Request $request){

          $validator = Validator::make($request->all(),[
            "url"=>"required"
          ]);

          if($validator->fails()){
              return response()->json([
                   "error"=>$validator->errors()
              ]);
          }
          else{
             $url_val = $request->input("url");


          $short_url=substr(md5($url_val.mt_rand()),0,8);
 
               $result_inserted_id = DB::table("links")->insertGetId([
                   "url"=> $url_val,
                   "short_url"=>$short_url
               ]);
               
               if($result_inserted_id){

                        $data = DB::table("links")->where("id",$result_inserted_id)->get();
                        
                        if($data){
                            return response()->json([
                                "data"=>$data,
                                "Message"=>"Url inserted successfully"
                              ]);
                        }else{
                            return response()->json([
                                "data"=>$data,
                                "Message"=>"Url not inserted successfully"
                              ]);
                        }
                               
               }else{
                return response()->json([
                    "Message"=>"error while inserting url"
                  ]);
               }
          }                        
              
    }



    public function show(Request $request,$id){
        $link_data =  DB::table("links")->where("short_url",$id)->get();

        if($link_data){
            if(count($link_data)<=0){
                   return response()->json([
                       "data"=>$link_data,
                       "Message"=>"Link data is Empty"
                   ]);
            }else{
                

        //  dd($link_data);

                return redirect($link_data[0]->url);    
 
                 

            //    return response()->json([
            //        "data"=>$link_data,
            //       "Message"=>"Success"
            //    ]);
            }
        }
    }



    public function test(){

        //  echo "hi";
        //  return;

      $url = "https://github.com/leadthread/laravel-shortener";
    //    $shortUrl = Shortener::shorten($url);
     
    //    return response()->json([
    //     "data"=>$shortUrl,
    //    "Message"=>"Success"
    // ]);
    $client = new \GuzzleHttp\Client('http://api.bit.ly/v3/shorten'); 

    //$client = new Zend_Http_Client('http://api.bit.ly/v3/shorten');
 
	$client->setParameterGet(array(
		'longUrl' => $url,
		'login' => 'satish6073@gmail.com',
		'apiKey' => 'ab10acd1302003d86a491c363ba73242ca0cd893'
	));
 
	$response = $client->request();
 
	if($response->isSuccessful())
	{
		$response = Zend_Json::decode($response->getBody());
 
		if($response['status_code'] == 200)
		{
			return $response['data']['url'];
		}
	}
 
	return (false);




    }



     public function redirectUrl(){
         return "ok";
     }




}


