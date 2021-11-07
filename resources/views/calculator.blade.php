@extends('layout.main-header')
@section('title',"$title")
@section('content')
<div class="container-fluid">
    <h1 class="text-center red-text py-5">Valorant Battlepass Calculator</h1>
</div>
<div class="container">
    <div class="card">
        <div class="card-body calculator-form">
          <form>        
              @csrf                 
              <div class="form-group row align-items-center">
                  <div class="col-sm-4">
                      <label for="current-xp">Current Tier</label>
                  </div>
                  <div class="col-sm-8">
                      <input type="number" name="current-tier" id="current-tier" class="form-custom" placeholder="Current XP">
                  </div>
              </div>
              <div class="form-group row align-items-center">
                <div class="col-sm-4">
                    <label for="current-tier-xp">Current Tier XP</label>
                </div>
                <div class="col-sm-8">
                    <input type="number" name="current-tier-xp" id="current-tier-xp" class="form-custom" placeholder="Current Tier XP">
                </div>
            </div>
            <div class="form-group row align-items-center">
                <div class="col-sm-4">
                    <label for="target-tier">Target Tier</label>
                </div>
                <div class="col-sm-8">
                    <input type="number" name="target-tier" id="target-tier" class="form-custom" placeholder="Target Tier">
                </div>
            </div>
            <div class="form-group row align-items-center">
                <div class="col-sm-4">
                    <label for="current-date">Current Date</label>
                </div>
                <div class="col-sm-8">
                    <input type="date" name="current-date" id="current-date" class="form-custom" placeholder="Current Date">
                </div>
            </div>
            <div class="form-group row align-items-center py-3">
                <div class="col-sm-4">
                    <label for="end-date">End Date</label>
                </div>
                <div class="col-sm-8">
                    <input type="date" name="end-date" id="end-date" class="form-custom" placeholder="End Date">
                </div>
            </div>
            <div class="text-center">
                <button class="btn btn-transparant col-sm-8" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">Advanced</button>
            </div>
            <div class="collapse py-3" id="collapseExample">
                <div class="form-group row align-items-center">
                    <div class="col-sm-4">
                        <label for="average-xp">Average Gain XP</label>
                    </div>
                    <div class="col-sm-8">
                        <input type="number" value="4000" name="average-xp" id="average-xp" class="form-custom" placeholder="Average Gain XP">
                    </div>
                </div>
              </div>
              <div class="text-center py-5">
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="daily-mission" name="daily-mission" value="4000">
                    <label class="form-check-label" for="daily-mission">Daily Mission Complete</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="weekly-mission" name="weekly-mission" value="324000">
                    <label class="form-check-label" for="weekly-mission">Weekly Mission Complete</label>
                  </div>
                  <div class="py-3">
                      <a class="btn btn-transparant col-sm-4 submit">Calculate</a>
                  </div>
              </div>
          </form>
        </div>
      </div>
      <div class="result py-5">
        {{-- <div class="card">
            <div class="card-body calculator-form">
              <h1 class="text-center py-3">Result</h1>
              <div class="progress">
                <div class="progress-bar progress-bar-striped bg-danger" role="progressbar" style="width: {{max(($xpTotal/($totalNeed))*100,0)}}%"  aria-valuemin="0" aria-valuemax="100">Current XP :{{round(($xpTotal/($totalNeed))*100)}}%</div>
                <div class="progress-bar progress-bar-striped bg-warning" role="progressbar" style="width: {{(($totalNeed-$xpTotal)/($totalNeed))*100}}%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">XP Needed :{{round((($totalNeed-$xpTotal)/($totalNeed))*100)}}%</div>                            
              </div>
              <p><b>Your Current Tier &nbsp</b>{{$currTier}}</p> 
            <p><b>Your Target Tier &nbsp</b> {{$targetTier}}</p>
            <p><b>Your Total XP &nbsp</b> {{$xpTotal}}</p>
            <p><b>Your XP Needed &nbsp</b> {{max($xpNeed,0)}}</p>
            <p><b>Your Total XP Needed &nbsp</b> {{max($totalNeed,0)}}</p>
            <p><b>Days Left &nbsp</b> {{$days}} days</p>            
              <div class="table-responsive">
                <table class="table table-sm" style="color: white">
                  <thead>
                    <th></th>
                    <th>Unrated/Competitve</th>
                    <th>Spike Rush</th>
                    <th>Deathmatch</th>
                    <th>Others</th>
                  </thead>
                  <tbody>
                    <tr>
                      <td><b>Estimate Games</b></td>
                      <td><b>{{$playComp}}</b></td>
                      <td><b>{{$playSpike}}</b></td>
                      <td><b>{{$playDm}}</b></td>
                      <td><b>{{$playRepli}}</b></td>
                    </tr>
                    <tr>
                      <td><b>Estimate Times</b></td>
                      <td><b>{{$timeComp}} minutes</b></td>
                      <td><b>{{$timeSpike}} minutes</b></td>
                      <td><b>{{$timeDm}} minutes</b></td>
                      <td><b>{{$timeRepli}} minutes</b></td>
                    </tr>
                    <tr>
                      <td><b>Games Per Day</b></td>
                      <td><b>{{ceil($playComp / $days)}}</b></td>
                      <td><b>{{ceil($playSpike / $days)}}</b></td>
                      <td><b>{{ceil($playDm / $days)}}</b></td>
                      <td><b>{{ceil($playRepli / $days)}}</b></td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div> --}}
      </div>
</div>
@endsection