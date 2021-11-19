@extends('layout.main-header')
@section('title',"Home")
@section('content')
<section class="welcome-section">    
    <h1 class="text-uppercase text-center py-5">Welcome To My Valorant Tracker</h1>
    <h5 class="text-center">MY Valorant is your personal valorant assistant that will help track your stats and calculate your battlepass level</h5>
</section>
<section class="tracker-section" id="tracker">
    <h1 class="text-center py-5">Valorant Tracker</h1>
    @if(session()->has('message'))
            <div class="container col-sm-6 text-center alert my-alert alert-dismissible fade show" role="alert">
                {{session('message')}}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>
    @endif
    <form action="/tracker" method="post">
        @csrf
        <div class="row d-flex justify-content-center">
            <div class="col-sm-3">
                <input type="text" placeholder="Username" name="username" id="username" required>
            </div>
            <div class="col-sm-3">
                <input type="text" placeholder="Tagline" name="tagline" id="tagline" required>
            </div>
        </div>
        <div class="text-center p-5">
            <button class="btn btn-orange">Track</button>
            <h5 class="pt-5">You can Only track your stats if your riot ID is set to public</h5>
        </div>
    </form>
</section>
<section class="agents-section" id="agent">
    <h1 class="text-center py-5">Agents</h1>
    <div class="container">
        <div class="row justify-content-start">
          @foreach($data as $agent)
          <div class="col-auto my-2">
              <div class="card bg-blackx border border-danger border-2 zoom" style="width: 8rem;">
                <a href="/detail-agent/{{$agent['uuid']}}" class="agent-name">
                  <img src="{{$agent['displayIconSmall']}}" class="card-img-top p-4" alt="{{$agent['displayName']}}">
                  <div class="card-body">
                    <p class="card-text text-center">{{$agent['displayName']}}</p>
                  </div>
                </a>
                </div>
          </div>
          @endforeach
        </div>
    </div>
</section>
@endsection