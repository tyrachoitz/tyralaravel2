<?php

namespace App\Http\Controllers;

use App\Carwork;
use Illuminate\Http\Request;

class CarworksController extends Controller
{
    public function show(Request $req , $car)
   {
       $carwork = Carwork::find($car);
       $rating = $req->rating;
       return view('detail', compact('carwork','rating'));
   }

   public function addCsvView(){
    return view('carwork.addCsvView');

   }

   public function addCsv(Request $req){

    $file_handle = fopen($req->file, 'r');
    while (!feof($file_handle)) {
        $line_of_text[] = fgetcsv($file_handle, 0, ",");
    }
    fclose($file_handle);
   
    $client = new \GuzzleHttp\Client();
    $i = 0;


    foreach ($line_of_text as $carWorkDetail) {

     
        if($i != 0){

            $services = \App\Services::where('ServiceTypes',$carWorkDetail[1])->first();
            $carwork = \App\Carwork::where('Shopname',$carWorkDetail[3])->first();

         
            


         $accessKey = "uptDeraMTRzZ7Pcdae-HyAD6nPCOZ66K8CXZMj8VvBhq3XXzSb8hzA0Qipysormn";

            $response = $client->request("POST", "http://localhost:7070/events.json?accessKey=" .$accessKey, [
                'json' => [
                    "event" => "rate", // tukar jd rate
                    "entityType" => "user", // react as a service
                    "entityId" => $services->id, // id dalam table services, random set 1 dan 2
                    "targetEntityType" => "item", // react as a workshop
                    "targetEntityId" => $carwork->id, // id dalam table carworks, random set 1 - 6
                    "properties" => [
                        "rating" =>  (int)$carWorkDetail[2]// random give  raing 1-5
                    ],
                    "eventTime" => now()->toIso8601String() // generate current date ISO 8601
                ],
                'verify' => false,
                'headers' => [
                    //'Accept' => 'application/json',
                    'Content-Type' => 'application/json',
                ],
            ]);
            echo $i .": ";
            echo $response->getBody()->getContents();
            echo "<br>";
            echo implode(" ",$carWorkDetail) ;
            echo "<br>";
//dd($response);
        }
            
            $i++;
          
        }
 
   }

}
