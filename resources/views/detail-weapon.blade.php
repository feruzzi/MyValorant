@extends('layout.main-header')
@section('title',"Home")
@section('content')
@foreach($weapon as$detail)
<div class="container detail-weapon" id="detail-weapon">
    <hr class="bg-danger fw-bold armory-divider">
    <h1 class="text-center text-uppercase">{{$detail['displayName']}}</h1>
    <div class="row">
        <div class="col-8">
            <div class="card bg-blackx border border-danger border-2 badge text-wrap  container-fluid">
                <div class="row">
                    <div class="col-sm-12 col-lg-8">
                        <img src="{{$detail['displayIcon']}}" style="width:100%" class="card-img-top p-1" alt="Marshal">
                    </div>
                    <div class="col-sm-12 col-lg-4">
                        <div class="vstack gap-1 mt-2">
                            <div><p>Cost : <span class="mx-2"><img src="https://dak.gg/valorant/images/agents/abilities/ico-cost.png" alt=""></span> {{$detail['shopData']['cost']}}</p></div>
                            <div><p>Fire Rate : {{$detail['weaponStats']['fireRate']}}</p></div>
                            <div><p>Magazine : {{$detail['weaponStats']['magazineSize']}} round/sec</p></div>
                            <div><p>Penetration : {{substr($detail['weaponStats']['wallPenetration'],strpos($detail['weaponStats']['wallPenetration'],":")+2)}}</p></div>
                        </div>                        
                    </div>
                </div>
                <div class="table-responsive">
                    <table class="table table-borderless">
                     <thead>
                         <th></th>
                     </thead>
                    </table>
                  </div>
              </div>
        </div>
        <div class="col-4">
            ini col 4
        </div>
    </div>
</div>
@endforeach
@endsection