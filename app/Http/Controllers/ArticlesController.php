<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;

use Illuminate\Http\Request;

class ArticlesController extends Controller
{
    public function index($filter)
    {
        $response = Http::get('https://api.henrikdev.xyz/valorant/v1/website/en-us?filter=' . $filter . '');
        $data = $response->json();
        $data = $data['data'];
        return view('articles', [
            'title' => "Articles",
            'filter' => $filter,
        ], compact('data'));
        // dd($unique);
    }
}
