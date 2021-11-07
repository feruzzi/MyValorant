<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script type="text/javascript">
      $.ajaxSetup({
          headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
      });
      </script>
    <script src="{{asset('assets/js/result.js')}}"></script>
    <script src="{{asset('assets/js/detail-agent.js')}}"></script>
    <link href="{{asset('assets/css/styles.css')}}" rel="stylesheet" />
    <title>MyValorant | @yield('title')</title>
</head>
<body>
    <nav class="navbar sticky-top navbar-expand-lg navbar-dark bg-blackx" id="myNavbar">
        <div class="container-fluid">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarTogglerDemo01">            
              <a class="navbar-brand" href="/">
                <img src="/assets/img/logo.png" alt="" width="30" height="24" class="d-inline-block align-text-top">
                <p style="display:inline;color:#E52828">My</p><p style="display:inline">Valorant</p>
              </a>            
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link {{($title==="BPCalculator")?'active':''}}" aria-current="page" href="/calculator">BPCalculator</a>
              </li>
              @if ($title==="Home")
              <li class="nav-item">
                <a class="nav-link" href="#tracker">Tracker</a>
              </li>
              @else
              <li class="nav-item">
                <a class="nav-link" href="/#tracker">Tracker</a>
              </li>
              @endif
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  The Basics
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="#">Credits</a></li>
                  <li><a class="dropdown-item" href="/weapons">Weapons</a></li>
                  {{-- <li><hr class="dropdown-divider"></li> --}}
                  @if ($title==="Home")
                  <li><a class="dropdown-item" href="#agent">Agents</a></li>
                  @else
                  <li><a class="dropdown-item" href="/#agent">Agents</a></li>
                  @endif
                  {{-- <li><a class="dropdown-item" href="#">Agents</a></li> --}}
                </ul>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Articles
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  {{-- <li><a class="dropdown-item" href="/articles/ ">All</a></li> --}}
                  <li><a class="dropdown-item" href="/articles/announcements">Announcements</a></li>                  
                  <li><a class="dropdown-item" href="/articles/game_updates">Game Updates</a></li>
                  <li><a class="dropdown-item" href="/articles/esports">Esports</a></li>
                  <li><a class="dropdown-item" href="/articles/dev">Dev</a></li>
                </ul>
              </li>     
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Simulations
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="#">Coin Toss</a></li>
                  <li><a class="dropdown-item" href="#">Mix Team</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="#">Pick And Ban</a></li>
                </ul>
              </li>          
            </ul>
            {{-- <form class="d-flex">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success" type="submit">Search</button>
            </form> --}}
          </div>
        </div>
      </nav>
      <div>
        @yield('content')
      </div>
    {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"></script> --}}    
    <script src="{{asset('style/js/scripts.js')}}"></script>
</body>
</html>