@extends('layout.main-header')
@section('title',"Home")
@section('content')
@foreach($weapon as$detail)
@php
$penetration=substr($detail['weaponStats']['wallPenetration'],strpos($detail['weaponStats']['wallPenetration'],":")+2);
// dd($penetration);
@endphp
<div class="container detail-weapon" id="detail-weapon">
    <hr class="bg-danger fw-bold armory-divider">
    <h1 class="text-center text-uppercase">{{$detail['displayName']}}</h1>
    <div class="row">
        <div class="col-12">
            <div class="card bg-blackx border border-danger border-2 badge text-wrap container-fluid">
                <div class="row">
                    <div class="col-sm-12 col-lg-8">
                        <img src="{{$detail['displayIcon']}}" class="img-fluid card-img-top p-1" alt="Marshal">
                    </div>
                    <div class="col-sm-12 col-lg-4">
                        <div class="vstack gap-1 mt-2">
                            <div><h5>Cost : <span class="mx-2"><img src="https://dak.gg/valorant/images/agents/abilities/ico-cost.png" alt=""></span> {{$detail['shopData']['cost']}}</h5></div>
                            <div><h5>Fire Rate : {{$detail['weaponStats']['fireRate']}}</h5></div>
                            <div><h5>Magazine : {{$detail['weaponStats']['magazineSize']}} round/sec</h5></div>
                            <div><h5 style="display: inline;">Penetration : </h5><h5 class="@if($penetration=='Low') text-danger @elseif($penetration=='Medium') text-warning @elseif($penetration=='High') text-success @endif" style="display: inline;">  {{$penetration}}</h5></div>
                        </div>                                             
                    </div>
                </div>
                <div class="text-start row p-3">                    
                    @foreach($detail['weaponStats']['damageRanges'] as $range)
                    <div class="col">
                        <hr class="bg-danger fw-bold armory-divider">
                        <div class="vstack gap-2">
                            <div><h5 class="text-center">{{$range['rangeStartMeters']}} - {{$range['rangeEndMeters']}} M</h5></div>
                            <div class="progress">
                                <div class="progress-bar bg-danger" role="progressbar" style="width: {{($range['headDamage']/150)*100}}%;" aria-valuenow="{{$range['headDamage']}}" aria-valuemin="0" aria-valuemax="150">Head {{$range['headDamage']}}</div>
                            </div>
                            <div class="progress">
                                <div class="progress-bar bg-danger" role="progressbar" style="width: {{($range['bodyDamage']/150)*100}}%;" aria-valuenow="{{$range['bodyDamage']}}" aria-valuemin="0" aria-valuemax="150">Body {{$range['bodyDamage']}}</div>
                            </div>
                            <div class="progress">
                                <div class="progress-bar bg-danger" role="progressbar" style="width: {{($range['legDamage']/150)*100}}%;" aria-valuenow="{{$range['legDamage']}}" aria-valuemin="0" aria-valuemax="150">Leg {{$range['legDamage']}}</div>
                            </div>
                        </div>   
                    </div>                   
                    @endforeach
                </div>               
              </div>
        </div>
        {{-- <div class="col-4">
            @foreach($detail['skins'] as $skin)
            <img src="{{$skin['displayIcon']}}" class="img-fluid" alt="">
            @endforeach
        </div> --}}
    </div>
    <div class="row my-2">
        <div class="col-12">
            <div class="card bg-blackx border border-danger border-2 badge text-wrap container-fluid">
                <h1 class="text-center text-uppercase">{{$detail['displayName']}} Skins</h1>       
                <div class="row">
                    @foreach($detail['skins'] as $skin)
                    <div class="col-4 my-2">
                        <div class="card bg-blackx border border-danger border-2 zoom badge text-wrap container-fluid">
                            <img src="{{$skin['displayIcon']}}" class="img-fluid" style="max-height: 200px" alt="">
                            <div class="card-body">
                                <h6 class="card-text text-center">{{$skin['displayName']}}</h6>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>         
              </div>
        </div>
    </div>
</div>
@endforeach
@endsection