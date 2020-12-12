<?php



use Illuminate\Database\Seeder;

class DummyDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $client = new GuzzleHttp\Client();

        for($i = 0; $i <= 1000; $i++) {
            $accessKey = "uptDeraMTRzZ7Pcdae-HyAD6nPCOZ66K8CXZMj8VvBhq3XXzSb8hzA0Qipysormn";

            $response = $client->request("POST", "http://localhost:7070/events.json?accessKey=$accessKey", [
                'json' => [
                    "event" => "rate", // tukar jd rate
                    "entityType" => "user", // react as a service
                    "entityId" => rand(1,2), // id dalam table services, random set 1 dan 2
                    "targetEntityType" => "item", // react as a workshop,store,homestay
                    "targetEntityId" => rand(1,14), // id dalam table carworks, random set 1 - 6
                    "properties" => [
                        "rating" => rand(1, 5) // random give  raing 1-5
                    ],
                    "eventTime" => now()->toIso8601String() // generate current date ISO 8601
                ],
                'verify' => false,
                'headers' => [
                    //'Accept' => 'application/json',
                    'Content-Type' => 'application/json',
                ],
            ]);

            //$body = json_decode($response->getBody()->getContents());
            //dd($body);
        }


//$body = json_decode($response->getBody()->getContents());
//dd($body);
    }
}
