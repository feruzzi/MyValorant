<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;

class TrackerController extends Controller
{
    public function tracker(Request $request)
    {
        //!GET AGENT ABILITY IMG
        $response = Http::get('https://valorant-api.com/v1/agents');
        $data = $response->json();
        $dataAgent = $data['data'];
        //!END
        $username = $request->input('username');
        $tagline = $request->input('tagline');
        //!Get User and region
        $response = Http::get('https://api.henrikdev.xyz/valorant/v1/account/' . $username . '/' . $tagline . '');
        $data = $response->json();
        if ($data['status'] != "200") {
            // dd($data['message']);
            return redirect()->route('home')->with('message', $data['message']);
            // dd($data['status']);
        } else {
            $data = $data['data'];
            $region = $data['region'];
            $player_id = $data['puuid'];
            $player_name = $data['name'];
            $banner = $data['card']['large'];
            //!end Get user and Region
            //!Get MMR Change
            $response = Http::get('https://api.henrikdev.xyz/valorant/v1/mmr/' . $region . '/' . $username . '/' . $tagline . '');
            $data = $response->json();
            $data = $data['data'];
            $rank = strtoupper($data['currenttierpatched']);
            $mmrChange = $data['mmr_change_to_last_game'];
            $mmr = $data['ranking_in_tier'];
            $elo = $data['elo'];
            //!END Get MMR Change
            //!GET Rank Image Tier
            $response = Http::get('https://valorant-api.com/v1/competitivetiers');
            $data = $response->json();
            $data = $data['data'];
            foreach ($data as $ranks) {
                if ($ranks['uuid'] == "e4e9a692-288f-63ca-7835-16fbf6234fda") {
                    foreach ($ranks['tiers'] as $rankImages) {
                        if ($rankImages['tierName'] == $rank) {
                            $rankImage = $rankImages['largeIcon'];
                        }
                    }
                }
            }
            // dd($rank);
            //!END GET Tier
            //!GET Match History
            $response = Http::get('https://api.henrikdev.xyz/valorant/v3/matches/' . $region . '/' . $username . '/' . $tagline . '?filter=competitive');
            $data = $response->json();
            $data = $data['data'];
            // dd($data);
            // foreach ($data as $metadata) {

            //     $map = $metadata['metadata']['map'];
            // }
            // dd($map);
            $matchCollection = collect($data);
            $matchs = $matchCollection->all();
            // dd($matchs);
            return view('tracker', [
                'title' => "Tracker",
                'player_id' => $player_id,
                'player_name' => $player_name,
                'region' => $region,
                'rank' => $rank,
                'mmrChange' => $mmrChange,
                'mmr' => $mmr,
                'elo' => $elo,
                'rankImage' => $rankImage,
                'banner' => $banner,
            ], compact('matchs', 'dataAgent'));
        }
    }
}
