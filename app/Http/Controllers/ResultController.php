<?php

namespace App\Http\Controllers;

use App\Models\Result;
use Illuminate\Http\Request;

class ResultController extends Controller
{
    public static function store($team01, $team02, $score01, $score02, $game, $round)
    {
        try {

            $teamWinner = $team01;
            $teamLoser = $team02;

            if($score01 > $score02){
                $teamWinner = $team01;
                $teamLoser = $team02;
            }else if($score01 < $score02){
                $teamWinner = $team02;
                $teamLoser = $team01;
            }else if ($round != 1 && $score01 == $score02){
                $teamTotalScore01 = 0;
                $teamTotalScore02 = 0;

                $result = Result::where('game_id', $game)->get();

                foreach ($result as $key) {
                    if($key->team_one_id == $team01){
                        $teamTotalScore01 += (int)$key->team_one_score;
                    }else if($key->team_two_id == $team01){
                        $teamTotalScore01 += (int)$key->team_two_score;
                    }else if($key->team_one_id == $team02){
                        $teamTotalScore02 += (int)$key->team_one_score;
                    }else if($key->team_two_id == $team02){
                        $teamTotalScore02 += (int)$key->team_two_score;
                    }
                }

                if($teamTotalScore01 > $teamTotalScore02){
                    $teamWinner = $team01;
                    $teamLoser = $team02;
                }else if($teamTotalScore01 < $teamTotalScore02){
                    $teamWinner = $team02;
                    $teamLoser = $team01;
                }
            }

            Result::create([
                'game_id' => $game,
                'team_one_id' => $team01,
                'team_two_id' => $team02,
                'team_one_score' => $score01,
                'team_two_score' => $score02,
                'round' => $round,
                'team_winner_id' => $teamWinner,
                'team_loser_id' => $teamLoser
            ]);
        } catch (\Exception $e) {
            Log::info($e);
        }
        
    }
}
