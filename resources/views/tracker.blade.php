@extends('layout.main-header')
@section('title',$title)
@section('content')
<div class="container-fluid my-5">
    <div class="row">
        <div class="col-lg-3 col-sm-12">
            <div class="card bg-blackx border border-danger border-2 badge text-wrap container-fluid bg-banner my-2" style="background-image:linear-gradient(transparent, black 75%),url('{{$banner}}')">
                <div class="container position-absolute bottom-0 start-50 translate-middle-x">
                    <h1 class="text-center">{{$player_name}}</h1>
                    <img src="{{$rankImage}}" style="width:60%;" class="card-img-top p-1" alt="Shorty">
                    <div class="card-body">
                        <h3 class="card-text text-center">{{$rank}}</h3>
                    </div>
                    <div class="row text-center p-3">
                        <div class="col-9">
                            <div class="progress">
                                <div class="progress-bar bg-danger" style="width:{{$mmr}}px" role="progressbar" aria-valuenow="{{$mmr}}" aria-valuemin="0" aria-valuemax="100"></div>
                              </div>
                        </div>
                        <div class="col-3">
                            <div class="hstack gap-2">
                                <div class="@if($mmrChange<0) triangle-down @else triangle-up @endif"></div>
                                <span>{{$mmrChange}}</span>
                            </div>
                            {{-- <p>18+</p> --}}
                        </div>
                        <p>ELO : {{$elo}}</p>
                    </div>
                </div>
              </div>
        </div>       
        <div class="col-lg-9 col-sm-12">
            @foreach ($matchs as $match)
            @foreach ($match['players']['all_players'] as $detail)
            @if($detail['puuid']==$player_id)
            <div class="card bg-blackx border border-danger border-2 badge text-wrap container-fluid my-2">
                <div class="card-body">                    
                    <div class="row">
                        <div class="col-lg-2 col-sm-12 badge text-wrap">                        
                            <div class="badge text-wrap">
                                <div class="text-center">
                                    <div class="vstack gap-2">
                                        <img src="{{$detail['assets']['agent']['small']}}" style="width: 8rem;" alt="" class="text-center img-fluid border border-3 border border-danger">
                                        <h5>{{$detail['character']}}</h5>
                                    </div>
                                </div>
                                {{-- <div>
                                    <div class="vstack gap-2">
                                        <h5>Victory</h5>
                                        <h6>12:10</h6>
                                    </div>
                                </div>                                 --}}
                            </div>
                        </div> 
                        <div class="col-lg-10 col-sm-12">
                            <div class="row">
                                <div class="col-lg-2 col-sm-12">
                                    <div>
                                        @php
                                            foreach ($match['teams'] as $team){
                                                if($detail['team']=="Red"){
                                                    $roundWon=$team['rounds_won'];
                                                    $roundLost=$team['rounds_lost'];
                                                    $has_won=$team['has_won'];
                                                    break;
                                                } else{
                                                    $roundWon=$team['rounds_won'];
                                                    $roundLost=$team['rounds_lost'];
                                                    $has_won=$team['has_won'];
                                                }
                                            }
                                            @endphp
                                        <div class="vstack">
                                            @if($has_won==1)
                                            <h1 class="text-lime">Victory</h1>
                                            @else
                                            <h1 class="text-danger">Defeat</h1>
                                            @endif
                                            <h3>{{$roundWon}}:{{$roundLost}}</h3>
                                        </div>
                                    </div>       
                                </div>                       
                                <div class="col-lg-7 col-sm-12 badge text-wrap">
                                    <div>
                                        <div class="text-center">
                                            <h1>{{$match['metadata']['map']}}</h1>
                                            <h3>Competitve</h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-sm-12">
                                   <p>{{$match['metadata']['game_start_patched']}}</p>
                                </div>
                            </div>
                            <div class="text-center py-2">
                                <hr class="bg-danger fw-bold armory-divider">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="row">
                                            <div class="col">
                                                <h4>Combat Score</h4>
                                                <h6>{{$detail['stats']['score']}}</h6>
                                            </div>
                                            <div class="col">
                                                <h4>K/D Ratio</h4>
                                                <h6>{{round($detail['stats']['kills']/$detail['stats']['deaths'],2)}}</h6>
                                            </div>
                                            <div class="col">
                                                <h4>Kills</h4>
                                                <h6>{{$detail['stats']['kills']}}</h6>
                                            </div>
                                            <div class="col">
                                                <h4>Deaths</h4>
                                                <h6>{{$detail['stats']['deaths']}}</h6>
                                            </div>
                                            <div class="col">
                                                <h4>Assist</h4>
                                                <h6>{{$detail['stats']['assists']}}</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            <hr class="bg-danger fw-bold armory-divider">
            @foreach($dataAgent as $agent)
            @if($agent['displayName']==$detail['character'])
                    <div class="row">
                        <div class="col-12">
                            <div class="row">
                                <div class="col">
                                    <img src="{{$agent['abilities'][0]['displayIcon']}}" style="width: 4rem;" alt="" class="zoom text-center p-2 img-fluid border border-2 border border-danger">
                                    <h5 class="text-capitalize">{{$agent['abilities'][0]['displayName']}}</h5>
                                    <h6>{{$detail['ability_casts']['c_cast']}}</h6>
                                </div>
                                <div class="col">
                                    <img src="{{$agent['abilities'][1]['displayIcon']}}" style="width: 4rem;" alt="" class="zoom text-center p-2 img-fluid border border-2 border border-danger">
                                    <h5 class="text-capitalize">{{$agent['abilities'][1]['displayName']}}</h5>
                                    <h6>{{$detail['ability_casts']['q_cast']}}</h6>
                                </div>
                                <div class="col">
                                    <img src="{{$agent['abilities'][2]['displayIcon']}}" style="width: 4rem;" alt="" class="zoom text-center p-2 img-fluid border border-2 border border-danger">
                                    <h5 class="text-capitalize">{{$agent['abilities'][2]['displayName']}}</h5>
                                    <h6>{{$detail['ability_casts']['e_cast']}}</h6>
                                </div>
                                <div class="col">
                                    <img src="{{$agent['abilities'][3]['displayIcon']}}" style="width: 4rem;" alt="" class="zoom text-center p-2 img-fluid border border-2 border border-danger">
                                    <h5 class="text-capitalize">{{$agent['abilities'][3]['displayName']}}</h5>
                                    <h6>{{$detail['ability_casts']['x_cast']}}</h6>
                                </div>                                
                            </div>
                        </div>
                    </div>
                @endif
                @endforeach
                </div>
              </div>
              @endif
              @endforeach    
              @endforeach
        </div>   
    </div>
</div>
@endsection