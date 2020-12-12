<?php

namespace App\Http\Controllers;

use App\Carwork;
use App\Services;
use Illuminate\Http\Request;

class ServicesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
          //if method == GET
        //show a view to create a new resource
        $service = Services::all();
        $matchedResults = [];


        //hanya masuk dlm if method == POST
//      if(request()->isMethod('POST')){
//          $isPost = true;
//
//          request()->validate([
//              'service_id' => 'required|exists:services,id'
//          ]);
//
//          $data = request()->input();
//
//          $client = new \GuzzleHttp\Client();
//
//          //pgil data dri engine
//          $response = $client->request("POST", "http://localhost:8000/queries.json", [
//              'json' => [
//                  "user" => data_get($data, 'service_id'), // kena ambik dari name form input
//                  "num" => 100, // result nk ambik
//              ],
//              'verify' => false,
//              'headers' => [
//                  'Content-Type' => 'application/json',
//              ],
//          ]);
//
//          $body = json_decode($response->getBody()->getContents());
//
//          if (!empty($body->itemScores)) {
//              $matchedResults = collect($body->itemScores)->map(function($data) {
//                  return [
  //                     'workshop' => \App\Carwork::find($data->item),
  //                     'score' => $data->score,
  //                     'item' => $data->item,
  //                 ];
  //             })->unique('item')->sortByDesc('score');
  //         }
//
//
//       }

       

        return view('service.create',['service' => $service, 'matchedResults' => $matchedResults]);

    }

    public function view(Request $request)
    {

        

        $matchedResults = [];


        //hanya masuk dlm if method == POST
//      if(request()->isMethod('POST')){
//          $isPost = true;
//
          request()->validate([
            'service_id' => 'required|exists:services,id'
          ]);
          $data = request()->input();
          $client = new \GuzzleHttp\Client();
         //pgil data dri engine
            $response = $client->request("POST", "http://localhost:8000/queries.json", [
                    'json' => [
                        "user" => data_get($data, 'service_id'), // kena ambik dari name form input
                        "num" => 100, // result nk ambik
                    ],
                    'verify' => false,
                    'headers' => [
                        'Content-Type' => 'application/json',
                    ],
        ]);
        $body = json_decode($response->getBody()->getContents());
        if (!empty($body->itemScores)) {
            $matchedResultsList = collect($body->itemScores)->map(function($data) {
                return [
                     'workshop' => \App\Carwork::find($data->item),
                     'score' => $data->score,
                     'item' => $data->item,
                 ];
             })->unique('item')->sortByDesc('score');
         }

         $matchedResults = [];



         $i = 0;
          foreach($matchedResultsList as $matches){
           // dd($matches);

            //dd($matches["workshop"]);
            $workShop = $matches["workshop"];
            $serviceType = $workShop->service_type;

           // dd($serviceType);
           // dd($request);

            
            if($serviceType ===$request->service_id){
              $matchedResults[$i] = $matches;
              $i++;
            }
          }

       

        return view('service.view',[ 'matchedResults' => $matchedResults]);

    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        //if method == GET
        //show a view to create a new resource
        $service = Services::all();
        $isPost = false;
        $matchedResults = [];


        //hanya masuk dlm if method == POST
        if(request()->isMethod('POST')){
            $isPost = true;

            request()->validate([
                'service_id' => 'required|exists:services,id'
            ]);

            $data = request()->input();

            $client = new \GuzzleHttp\Client();

            //pgil data dri engine
            $response = $client->request("POST", "http://localhost:8000/queries.json", [
                'json' => [
                    "user" => data_get($data, 'service_id'), // kena ambik dari name form input
                    "num" => 100, // result nk ambik
                ],
                'verify' => false,
                'headers' => [
                    'Content-Type' => 'application/json',
                ],
            ]);

            $body = json_decode($response->getBody()->getContents());

            if (!empty($body->itemScores)) {
                $matchedResults = collect($body->itemScores)->map(function($data) {
                    return [
                        'workshop' => \App\Carwork::find($data->item),
                        'score' => $data->score,
                        'item' => $data->item,
                    ];
                })->unique('item')->sortByDesc('score');
            }


        }

       

        return view('service.create',['service' => $service, 'matchedResults' => $matchedResults, 'isPost' => $isPost]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        $service = new Services();
        $service->ServiceTypes = request('ServiceTypes');

        $service->save();
        return redirect('/service');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $service = Services::find($id);
        return view ('service.show', ['service'=> $service]);
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
