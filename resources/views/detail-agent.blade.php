@foreach ($agentCollect as $agent)
@extends('layout.main-header')
@section('title',$agent['displayName'])
@section('content')
<section class="agents-section" id="agent">
    <h1 class="text-center py-5">Agents</h1>
    <div class="container">
        <div class="row">
          @foreach($data as $agents)
          <div class="col align-self-start my-2">
            <a href="#detail-agent" data-value="{{$agents['uuid']}}" class="agent-name uuid">
                {{-- <input type="hidden" value="{{$agents['uuid']}}"> --}}
              <div class="card bg-blackx border border-danger border-2 zoom" style="width: 8rem;">
                  <img src="{{$agents['displayIconSmall']}}" class="card-img-top p-4" alt="{{$agents['displayName']}}">
                  <div class="card-body">
                    <p class="card-text text-center">{{$agents['displayName']}}</p>
                  </div>
                </div>
            </a>
          </div>
          @endforeach
        </div>
    </div>
</section>
<div class="detail-agent" id="detail-agent">
    
</div>
<div class="container-fluid my-3" id="content-agent">
    <div class="row">
        <div class="col-lg-4 col-sm-12">
            <div class="badge text-wrap container-fluid">                
                    <img src="{{$agent['fullPortrait']}}" style="max-width:40rem" class="card-img-top p-2" alt="{{$agent['displayName']}}">                                                            
            </div>
        </div>
        <div class="col-lg-4 col-sm-12 container-fluid">
            <div class="my-radio">
                <input type="radio" name="ability" id="Q" checked="checked" value="Q"  />
                <input type="radio" name="ability" id="E" value="E"  />
                <input type="radio" name="ability" id="C" value="C"  />
                <input type="radio" name="ability" id="X" value="X"  />
            </div>
            <div class="row">
                <div class="col-12">
                    <label for="Q">
                        <img src="{{$agent['abilities'][0]['displayIcon']}}" style="width: 4rem;" alt="" class="zoom text-center p-2 img-fluid border border-2 border border-danger">
                        <h5 class="text-center text-capitalize">C-{{$agent['abilities'][0]['displayName']}}</h5>                    
                    </label>
                </div>                
            </div>
            <div class="row py-2">
                <div class="col-12">
                    <label for="E">
                        <img src="{{$agent['abilities'][1]['displayIcon']}}" style="width: 4rem;" alt="" class="zoom text-center p-2 img-fluid border border-2 border border-danger">
                        <h5 class="text-center text-capitalize">E-{{$agent['abilities'][1]['displayName']}}</h5>                    
                    </label>
                </div>                
            </div>
            <div class="row py-2">
                <div class="col-12">
                    <label for="C">
                        <img src="{{$agent['abilities'][2]['displayIcon']}}" style="width: 4rem;" alt="" class="zoom text-center p-2 img-fluid border border-2 border border-danger">
                        <h5 class="text-center text-capitalize">Q-{{$agent['abilities'][2]['displayName']}}</h5>                    
                    </label>
                </div>                
            </div>
            <div class="row py-2">
                <div class="col-12">
                    <label for="X">
                        <img src="{{$agent['abilities'][3]['displayIcon']}}" style="width: 4rem;" alt="" class="zoom text-center p-2 img-fluid border border-2 border border-danger">
                        <h5 class="text-center text-capitalize">X-{{$agent['abilities'][3]['displayName']}}</h5>                    
                    </label>
                </div>                
            </div>
        </div>
        <div class="col-lg-4 col-sm-12 d-flex align-items-center">
            <div>
                <div id="abilityQ" class="desc text-center py-3">
                    <h1>Q-{{$agent['abilities'][0]['displayName']}}</h1>
                    <p>{{$agent['abilities'][0]['description']}}</p>
                </div>
            </div>
            <div>
                <div id="abilityE" class="desc text-center py-3">
                    <h1>E-{{$agent['abilities'][1]['displayName']}}</h1>
                    <p>{{$agent['abilities'][1]['description']}}</p>
                </div>
            </div>
            <div>
                <div id="abilityC" class="desc text-center py-3">
                    <h1>C-{{$agent['abilities'][2]['displayName']}}</h1>
                    <p>{{$agent['abilities'][2]['description']}}</p>
                </div>
            </div>
            <div>
                <div id="abilityX" class="desc text-center py-3">
                    <h1>X-{{$agent['abilities'][3]['displayName']}}</h1>
                    <p>{{$agent['abilities'][3]['description']}}</p>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
   $(document).on('click','.zoom', function() {
    $("input[name$='ability']").click(function() {
        var num = $(this).val();

        $("div.desc").hide();
        $("#ability" + num).show();
    });
});
</script>
@endsection
@endforeach