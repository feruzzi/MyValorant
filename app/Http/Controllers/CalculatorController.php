<?php

namespace App\Http\Controllers;

use DateTime;

use Illuminate\Http\Request;

class CalculatorController extends Controller
{
    public function calculator()
    {
        return view('calculator', [
            'title' => "BPCalculator",
        ]);
    }
    public function calculate()
    {
        // $cal = (int) $cal;
        $currentXP = $_POST['currentXP'];
        $currentTier = $_POST['currentTier'];
        $targetTier = $_POST['targetTier'];
        $currentDate = $_POST['currentDate'];
        $endDate = $_POST['endDate'];
        $averageXP = $_POST['averageXP'];
        $dailyXP = $_POST['dailyXP'];
        $weeklyXP = $_POST['weeklyXP'];
        // dd($cal);        
        $currentDate = new DateTime($currentDate);
        $endDate = new DateTime($endDate);
        $dateDiff = $currentDate->diff($endDate);
        $dateCount = $dateDiff->format('%a');
        $xpNeed = 0 - ($currentXP + ($dailyXP * $dateCount) + ($weeklyXP));
        $xpNeeded = 0;
        $j = $currentTier;
        for ($j; $j <= $targetTier; $j++) {
            $xpNeed = (($j * 750) + 500) + $xpNeed;
            $xpNeeded = (($j * 750) + 500) + $xpNeeded;
        }
        $xpTotal = 0;
        for ($i = 2; $i <= $currentTier; $i++) {
            $xpTotal = (($i * 750) + 500) + $xpTotal;
        }
        $totalNeed = 0;
        for ($k = 2; $k <= $targetTier; $k++) {
            $totalNeed = (($k * 750) + 500) + $totalNeed;
        }
        $xpDm = 900;
        $xpRepli = 1700;
        $xpSpike = 1000;
        $playComp = max(round($xpNeed / ($averageXP)), 0);
        $playDm = max(round($xpNeed / ($xpDm)), 0);
        $playSpike = max(round($xpNeed / ($xpSpike)), 0);
        $playRepli = max(round($xpNeed / ($xpRepli)), 0);
        $timeComp = $playComp * 2400;
        $timeDm = $playDm * 300;
        $timeSpike = $playSpike * 600;
        $timeRepli = $playRepli * 1500;
        echo '<div class="card">
        <div class="card-body result-form">
          <h1 class="text-center py-3">Result</h1>
          <div class="progress">
            <div class="progress-bar progress-bar-striped bg-danger" role="progressbar" style="width: ' . max(($xpTotal / ($totalNeed)) * 100, 0) . '%"  aria-valuemin="0" aria-valuemax="100">Current XP :' . round(($xpTotal / ($totalNeed)) * 100) . '%</div>
            <div class="progress-bar progress-bar-striped bg-warning" role="progressbar" style="width: ' . ((($totalNeed - $xpTotal) / ($totalNeed)) * 100) . '%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">XP Needed :' . round((($totalNeed - $xpTotal) / ($totalNeed)) * 100) . '%</div>                            
          </div>
          <div class="text-center">
          <p><b>Your Current Tier &nbsp</b>' . $currentTier . '</p> 
        <p><b>Your Target Tier &nbsp</b> ' . $targetTier . '</p>
        <p><b>Your Total XP &nbsp</b> ' . $xpTotal . '</p>
        <p><b>Your XP Needed &nbsp</b> ' . max($xpNeed, 0) . '</p>
        <p><b>Your Total XP Needed &nbsp</b> ' . max($totalNeed, 0) . '</p>
        <p><b>Days Left &nbsp</b> ' . $dateCount . ' days</p>  
        </div>          
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
                  <td><b>' . $playComp . '</b></td>
                  <td><b>' . $playSpike . '</b></td>
                  <td><b>' . $playDm . '</b></td>
                  <td><b>' . $playRepli . '</b></td>
                </tr>
                <tr>
                  <td><b>Estimate Times</b></td>
                  <td><b>' . $timeComp . ' minutes</b></td>
                  <td><b>' . $timeSpike . ' minutes</b></td>
                  <td><b>' . $timeDm . ' minutes</b></td>
                  <td><b>' . $timeRepli . ' minutes</b></td>
                </tr>
                <tr>
                  <td><b>Games Per Day</b></td>
                  <td><b>' . ceil($playComp / $dateCount) . '</b></td>
                  <td><b>' . ceil($playSpike / $dateCount) . '</b></td>
                  <td><b>' . ceil($playDm / $dateCount) . '</b></td>
                  <td><b>' . ceil($playRepli / $dateCount) . '</b></td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>';
    }
}
