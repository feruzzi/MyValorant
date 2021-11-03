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
}
