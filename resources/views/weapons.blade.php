@extends('layout.main-header')
@section('title',$title)
@section('content')
<div class="container mt-3">
    <h1 class="text-center text-uppercase">Weapons Armory</h1>
    <div class="row mt-2">
        <div class="col">
            <h5 class="fw-bold text-start">Sidearm</h5>
            <hr class="bg-danger fw-bold armory-divider">
            <div class="my-2">
                <a href="/detail-weapon/Classic" class="weapon-name">
                  <div class="card bg-blackx border border-danger border-2 zoom badge text-wrap container-fluid">
                      <img src="https://media.valorant-api.com/weapons/29a0cfab-485b-f5d5-779a-b59f85e204a8/shop/newimage.png" style="width:35%" class="card-img-top p-1" alt="Classic">
                      <div class="card-body">
                        <h6 class="card-text text-center">Classic</h6>
                      </div>
                    </div>
                </a>
              </div>
              <div class="my-2">
                <a href="/detail-weapon/Shorty" class="weapon-name">
                  <div class="card bg-blackx border border-danger border-2 zoom badge text-wrap  container-fluid">
                      <img src="https://media.valorant-api.com/weapons/42da8ccc-40d5-affc-beec-15aa47b42eda/shop/newimage.png" style="width:60%" class="card-img-top p-1" alt="Shorty">
                      <div class="card-body">
                        <h6 class="card-text text-center">Shorty</h6>
                      </div>
                    </div>
                </a>
              </div>
              <div class="my-2">
                <a href="/detail-weapon/Frenzy" class="weapon-name">
                  <div class="card bg-blackx border border-danger border-2 zoom badge text-wrap  container-fluid">
                      <img src="https://media.valorant-api.com/weapons/44d4e95c-4157-0037-81b2-17841bf2e8e3/shop/newimage.png" style="width:35%" class="card-img-top p-1" alt="Frenzy">
                      <div class="card-body">
                        <h6 class="card-text text-center">Frenzy</h6>
                      </div>
                    </div>
                </a>
              </div>
              <div class="my-2">
                <a href="/detail-weapon/Ghost" class="weapon-name">
                  <div class="card bg-blackx border border-danger border-2 zoom badge text-wrap  container-fluid">
                      <img src="https://media.valorant-api.com/weapons/1baa85b4-4c70-1284-64bb-6481dfc3bb4e/shop/newimage.png" style="width:70%" class="card-img-top p-1" alt="Ghost">
                      <div class="card-body">
                        <h6 class="card-text text-center">Ghost</h6>
                      </div>
                    </div>
                </a>
              </div>
              <div class="my-2">
                <a href="/detail-weapon/Sheriff" class="weapon-name">
                  <div class="card bg-blackx border border-danger border-2 zoom badge text-wrap  container-fluid">
                      <img src="https://media.valorant-api.com/weapons/e336c6b8-418d-9340-d77f-7a9e4cfe0702/shop/newimage.png" style="width:60%" class="card-img-top p-1" alt="Sheriff">
                      <div class="card-body">
                        <h6 class="card-text text-center">Sheriff</h6>
                      </div>
                    </div>
                </a>
              </div>
        </div>
        <div class="col">
            <h5 class="fw-bold text-start">SMGS</h5>
            <hr class="bg-danger fw-bold armory-divider">
            <div class="my-2">
                <a href="/detail-weapon/Stinger" class="weapon-name">
                  <div class="card bg-blackx border border-danger border-2 zoom badge text-wrap  container-fluid">
                      <img src="https://media.valorant-api.com/weapons/f7e1b454-4ad4-1063-ec0a-159e56b58941/shop/newimage.png" style="width:80%" class="card-img-top p-1" alt="Stinger">
                      <div class="card-body">
                        <h6 class="card-text text-center">Stinger</h6>
                      </div>
                    </div>
                </a>
              </div>
              <div class="my-2">
                <a href="/detail-weapon/Spectre" class="weapon-name">
                  <div class="card bg-blackx border border-danger border-2 zoom badge text-wrap  container-fluid">
                      <img src="https://media.valorant-api.com/weapons/462080d1-4035-2937-7c09-27aa2a5c27a7/shop/newimage.png" style="width:80%" class="card-img-top p-1" alt="Spectre">
                      <div class="card-body">
                        <h6 class="card-text text-center">Spectre</h6>
                      </div>
                    </div>
                </a>
              </div>
            <h5 class="my-3 fw-bold text-start">Shotguns</h5>
            <hr class="bg-danger fw-bold armory-divider">
            <div class="my-2">
                <a href="/detail-weapon/Bucky" class="weapon-name">
                  <div class="card bg-blackx border border-danger border-2 zoom badge text-wrap  container-fluid">
                      <img src="https://media.valorant-api.com/weapons/910be174-449b-c412-ab22-d0873436b21b/shop/newimage.png" style="width:100%" class="card-img-top p-1" alt="Bucky">
                      <div class="card-body">
                        <h6 class="card-text text-center">Bucky</h6>
                      </div>
                    </div>
                </a>
              </div>
              <div class="my-2">
                <a href="/detail-weapon/Judge" class="weapon-name">
                  <div class="card bg-blackx border border-danger border-2 zoom badge text-wrap  container-fluid">
                      <img src="https://media.valorant-api.com/weapons/ec845bf4-4f79-ddda-a3da-0db3774b2794/shop/newimage.png" style="width:100%" class="card-img-top p-1" alt="Judge">
                      <div class="card-body">
                        <h6 class="card-text text-center">Judge</h6>
                      </div>
                    </div>
                </a>
              </div>
        </div>
        <div class="col">
            <h5 class="fw-bold text-start">Rifles</h5>
            <hr class="bg-danger fw-bold armory-divider">
            <div class="my-2">
                <a href="/detail-weapon/Bulldog" class="weapon-name">
                  <div class="card bg-blackx border border-danger border-2 zoom badge text-wrap  container-fluid">
                      <img src="https://media.valorant-api.com/weapons/ae3de142-4d85-2547-dd26-4e90bed35cf7/shop/newimage.png" style="width:100%" class="card-img-top p-1" alt="Bulldog">
                      <div class="card-body">
                        <h6 class="card-text text-center">Bulldog</h6>
                      </div>
                    </div>
                </a>
              </div>
              <div class="my-2">
                <a href="/detail-weapon/Guardian" class="weapon-name">
                  <div class="card bg-blackx border border-danger border-2 zoom badge text-wrap  container-fluid">
                      <img src="https://media.valorant-api.com/weapons/4ade7faa-4cf1-8376-95ef-39884480959b/shop/newimage.png" style="width:100%" class="card-img-top p-1" alt="Guardian">
                      <div class="card-body">
                        <h6 class="card-text text-center">Guardian</h6>
                      </div>
                    </div>
                </a>
              </div>
              <div class="my-2">
                <a href="/detail-weapon/Vandal" class="weapon-name">
                  <div class="card bg-blackx border border-danger border-2 zoom badge text-wrap  container-fluid">
                      <img src="https://media.valorant-api.com/weapons/9c82e19d-4575-0200-1a81-3eacf00cf872/shop/newimage.png" style="width:100%" class="card-img-top p-1" alt="Vandal">
                      <div class="card-body">
                        <h6 class="card-text text-center">Vandal</h6>
                      </div>
                    </div>
                </a>
              </div>
              <div class="my-2">
                <a href="/detail-weapon/Phantom" class="weapon-name">
                  <div class="card bg-blackx border border-danger border-2 zoom badge text-wrap  container-fluid">
                      <img src="https://media.valorant-api.com/weapons/ee8e8d15-496b-07ac-e5f6-8fae5d4c7b1a/shop/newimage.png" style="width:100%" class="card-img-top p-1" alt="Phantom">
                      <div class="card-body">
                        <h6 class="card-text text-center">Phantom</h6>
                      </div>
                    </div>
                </a>
              </div>
        </div>
        <div class="col">
            <h5 class="fw-bold text-start">Snipers</h5>
            <hr class="bg-danger fw-bold armory-divider">
            <div class="my-2">
                <a href="/detail-weapon/Marshal" class="weapon-name">
                  <div class="card bg-blackx border border-danger border-2 zoom badge text-wrap  container-fluid">
                      <img src="https://media.valorant-api.com/weapons/c4883e50-4494-202c-3ec3-6b8a9284f00b/shop/newimage.png" style="width:100%" class="card-img-top p-1" alt="Marshal">
                      <div class="card-body">
                        <h6 class="card-text text-center">Marshal</h6>
                      </div>
                    </div>
                </a>
              </div>
              <div class="my-2">
                <a href="/detail-weapon/Operator" class="weapon-name">
                  <div class="card bg-blackx border border-danger border-2 zoom badge text-wrap  container-fluid">
                      <img src="https://media.valorant-api.com/weapons/a03b24d3-4319-996d-0f8c-94bbfba1dfc7/shop/newimage.png" style="width:100%" class="card-img-top p-1" alt="Operator">
                      <div class="card-body">
                        <h6 class="card-text text-center">Operator</h6>
                      </div>
                    </div>
                </a>
              </div>
            <h5 class="fw-bold text-start">Heavy</h5>
            <hr class="bg-danger fw-bold armory-divider">
            <div class="my-2">
                <a href="/detail-weapon/Ares" class="weapon-name">
                  <div class="card bg-blackx border border-danger border-2 zoom badge text-wrap  container-fluid">
                      <img src="https://media.valorant-api.com/weapons/55d8a0f4-4274-ca67-fe2c-06ab45efdf58/shop/newimage.png" style="width:100%" class="card-img-top p-1" alt="Ares">
                      <div class="card-body">
                        <h6 class="card-text text-center">Ares</h6>
                      </div>
                    </div>
                </a>
              </div>
              <div class="my-2">
                <a href="/detail-weapon/Odin" class="weapon-name">
                  <div class="card bg-blackx border border-danger border-2 zoom badge text-wrap  container-fluid">
                      <img src="https://media.valorant-api.com/weapons/63e6c2b6-4a8e-869c-3d4c-e38355226584/shop/newimage.png" style="width:100%" class="card-img-top p-1" alt="Odin">
                      <div class="card-body">
                        <h6 class="card-text text-center">Odin</h6>
                      </div>
                    </div>
                </a>
              </div>
        </div>
    </div>
    @include('det-weapon')
</div>
@endsection