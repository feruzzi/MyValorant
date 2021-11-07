<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;

class AgentController extends Controller
{
    public function show()
    {
        $response = Http::get('https://valorant-api.com/v1/agents');
        $data = $response->json();
        $data = $data['data'];
        // dd($data);
        return view('index', [
            'title' => "Home",

        ], compact('data'));
    }
    public function detail($agentName)
    {
        $response = Http::get('https://valorant-api.com/v1/agents');
        $data = $response->json();
        $data = $data['data'];
        // dd($data);
        $agentCollection = collect($data);
        $agentCollect = $agentCollection->where('uuid', $agentName);
        // dd($agent);
        return view('detail-agent', [
            'title' => $agentName,
        ], compact('data', 'agentCollect'));
    }
    public function detailed()
    {
        $agentName = $_GET['agentId'];
        $response = Http::get('https://valorant-api.com/v1/agents');
        $data = $response->json();
        $data = $data['data'];
        // dd($data);
        $agentCollection = collect($data);
        $agentCollect = $agentCollection->where('uuid', $agentName);
        foreach ($agentCollect as $agent) {
            // dd($agent['fullPortrait']);
            echo '<div class="container-fluid my-3">
            <div class="row">
            <div class="col-lg-4 col-sm-12">
            <div class="badge text-wrap container-fluid">                
            <img src="' . $agent['fullPortrait'] . '" style="max-width:40rem" class="card-img-top p-2" alt="' . $agent["displayName"] . '">                                                            
            </div>
            </div>
            <div class="col-lg-4 col-sm-12 container-fluid">
            <div class="text-center">
            <h1 class="text-uppercase">' . $agent['displayName'] . '</h1>
            <h2 class="text-uppercase"><span><img src="' . $agent['role']['displayIcon'] . '" style="max-width:2rem" class="img-fluid px-1" alt=""></span>' . $agent['role']['displayName'] . '</h2>
            </div>
                <div class="my-radio">
                    <input type="radio" name="ability" id="Q" checked="checked" value="Q"  />
                    <input type="radio" name="ability" id="E" value="E"  />
                    <input type="radio" name="ability" id="C" value="C"  />
                    <input type="radio" name="ability" id="X" value="X"  />
                    </div>
                    <div class="row">
                    <div class="col-12">
                    <label for="Q">
                    <img src="' . $agent["abilities"][0]["displayIcon"] . '" style="width: 4rem;" alt="" class="zoom text-center p-2 img-fluid border border-2 border border-danger">
                    <h5 class="text-center text-capitalize">Q-' . $agent["abilities"][0]["displayName"] . '</h5>                    
                    </label>
                    </div>                
                    </div>
                    <div class="row py-2">
                    <div class="col-12">
                    <label for="E">
                    <img src="' . $agent["abilities"][1]["displayIcon"] . '" style="width: 4rem;" alt="" class="zoom text-center p-2 img-fluid border border-2 border border-danger">
                    <h5 class="text-center text-capitalize">E-' . $agent["abilities"][1]["displayName"] . '</h5>                    
                    </label>
                    </div>                
                    </div>
                    <div class="row py-2">
                    <div class="col-12">
                    <label for="C">
                    <img src="' . $agent["abilities"][2]["displayIcon"] . '" style="width: 4rem;" alt="" class="zoom text-center p-2 img-fluid border border-2 border border-danger">
                    <h5 class="text-center text-capitalize">Q-' . $agent["abilities"][2]["displayName"] . '</h5>                    
                    </label>
                    </div>                
                    </div>
                    <div class="row py-2">
                    <div class="col-12">
                    <label for="X">
                    <img src="' . $agent["abilities"][3]["displayIcon"] . '" style="width: 4rem;" alt="" class="zoom text-center p-2 img-fluid border border-2 border border-danger">
                    <h5 class="text-center text-capitalize">X-' . $agent["abilities"][3]["displayName"] . '</h5>                    
                    </label>
                    </div>                
                    </div>
                    </div>
                    <div class="container col-lg-4 col-sm-12 d-flex align-items-center px-4">
                    <div>
                    <div id="abilityQ" class="desc text-center py-3">
                    <h1>Q-' . $agent["abilities"][0]["displayName"] . '</h1>
                    <p>' . $agent["abilities"][0]["description"] . '</p>
                    </div>
                    </div>
                    <div>
                    <div id="abilityE" class="desc text-center py-3">
                    <h1>E-' . $agent["abilities"][1]["displayName"] . '</h1>
                    <p>' . $agent["abilities"][1]["description"] . '</p>
                    </div>
                    </div>
                    <div>
                    <div id="abilityC" class="desc text-center py-3">
                    <h1>C-' . $agent["abilities"][2]["displayName"] . '</h1>
                    <p>' . $agent["abilities"][2]["description"] . '</p>
                    </div>
                    </div>
                    <div>
                    <div id="abilityX" class="desc text-center py-3">
                    <h1>X-' . $agent["abilities"][3]["displayName"] . '</h1>
                    <p>' . $agent["abilities"][3]["description"] . '</p>
                    </div>
                    </div>
                    </div>
                    </div>
                    </div>';
        }
    }
}
