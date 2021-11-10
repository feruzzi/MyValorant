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
            <a href="/detail-agent/{{$agents['uuid']}}" data-value="{{$agents['uuid']}}" class="agent-name submit-agent">
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
<div class="container-fluid my-3">
    <div class="row">
        <div class="col-4">
            <div class="card bg-blackx border border-danger border-2 badge text-wrap  container-fluid">                
                    <img src="{{$agent['fullPortrait']}}" style="max-width:28rem" class="card-img-top p-2" alt="{{$agent['displayName']}}">                                        
                    <h4><span><img src="{{$agent['role']['displayIcon']}}" style="max-width:2rem" class="img-fluid px-1" alt=""></span>{{$agent['displayName']}}</h4>
                    <p class="text-center p-2">{{$agent['role']['description']}}</p>
            </div>
        </div>
        <div class="col-8">
            <div class="container">
                <h1 class="text-end">{{$agent['displayName']}}</h1>
                <h2 class="text-end">{{$agent['role']['displayName']}}</h2>
            </div>
            <div class="card bg-blackx border border-danger border-2 badge text-wrap  container-fluid">                
                <div class="row py-3">
                    <div class="my-radio">
                        <input type="radio" name="ability" id="Q" checked="checked" value="Q"  />
                        <input type="radio" name="ability" id="E" value="E"  />
                        <input type="radio" name="ability" id="C" value="C"  />
                        <input type="radio" name="ability" id="X" value="X"  />
                    </div>
                    <div class="col-3">
                        <label for="Q">
                            <img src="{{$agent['abilities'][0]['displayIcon']}}" style="width: 4rem;" alt="" class="zoom text-center p-2 img-fluid border border-2 border border-danger">
                            <h5 class="text-capitalize">Q-{{$agent['abilities'][0]['displayName']}}</h5>                    
                        </label>
                    </div>
                    <div class="col-3">
                        <label for="E">
                            <img src="{{$agent['abilities'][1]['displayIcon']}}" style="width: 4rem;" alt="" class="zoom text-center p-2 img-fluid border border-2 border border-danger">
                            <h5 class="text-capitalize">E-{{$agent['abilities'][1]['displayName']}}</h5>                    
                        </label>
                    </div>
                        <div class="col-3">
                            <label for="C">
                                <img src="{{$agent['abilities'][2]['displayIcon']}}" style="width: 4rem;" alt="" class="zoom text-center p-2 img-fluid border border-2 border border-danger">
                                <h5 class="text-capitalize">C-{{$agent['abilities'][2]['displayName']}}</h5>                    
                            </label>
                        </div>
                        <div class="col-3">
                            <label for="X">
                                <img src="{{$agent['abilities'][3]['displayIcon']}}" style="width: 4rem;" alt="" class="zoom text-center p-2 img-fluid border border-2 border border-danger">
                                <h5 class="text-capitalize">X-{{$agent['abilities'][3]['displayName']}}</h5>                    
                            </label>
                        </div>
                        <div id="abilityQ" class="desc text-center py-3">
                            <h1>Q-{{$agent['abilities'][0]['displayName']}}</h1>
                            <p>{{$agent['abilities'][0]['description']}}</p>
                        </div>
                        <div id="abilityE" class="desc text-center py-3">
                            <h1>E-{{$agent['abilities'][1]['displayName']}}</h1>
                            <p>{{$agent['abilities'][1]['description']}}</p>
                        </div>
                        <div id="abilityC" class="desc text-center py-3">
                            <h1>C-{{$agent['abilities'][2]['displayName']}}</h1>
                            <p>{{$agent['abilities'][2]['description']}}</p>
                        </div>
                        <div id="abilityX" class="desc text-center py-3">
                            <h1>X-{{$agent['abilities'][3]['displayName']}}</h1>
                            <p>{{$agent['abilities'][3]['description']}}</p>
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    $(document).ready(function() {
    $("input[name$='ability']").click(function() {
        var num = $(this).val();

        $("div.desc").hide();
        $("#ability" + num).show();
    });
});
</script>
@endsection
@endforeach