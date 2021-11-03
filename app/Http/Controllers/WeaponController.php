<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class WeaponController extends Controller
{
    public function show()
    {
        // $response = Http::get('https://valorant-api.com/v1/weapons');
        // $data = $response->json();
        // $data = $data['data'];
        // $weaponCollection = collect($data);
        // $unique = $weaponCollection->where('displayName', "Odin");;
        // dd($unique);
        return view('weapons', [
            'title' => "Weapons",
        ]);
    }
    public function detail($weaponName)
    {
        $response = Http::get('https://valorant-api.com/v1/weapons');
        $data = $response->json();
        $data = $data['data'];
        $weaponCollection = collect($data);
        $weapon = $weaponCollection->where('displayName', $weaponName);
        // dd($weapon);
        return view('detail-weapon', [
            'title' => $weaponName,
        ], compact('weapon'));
        // dd($unique);
    }
}
