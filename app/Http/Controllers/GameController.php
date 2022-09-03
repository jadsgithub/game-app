<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Models\Team;
use App\Models\Game;
use App\Models\Result;
use Illuminate\Support\Facades\DB;

class GameController extends Controller
{
    public function simulation(Request $request)
    {
        try {
            DB::beginTransaction();
            // Create Game
            $game = Game::create([
                'game_name' => 'Meu Campeonato - '.date('d-m-Y H:i')
            ]);

            $score01 = 0;
            $score02 = 0;
            $team01 = '';
            $team02 = '';

            // Quartas de final - Round 1
            for ($i=1; $i < 9; $i++) { 

                $team = Team::create([
                    'team_name' => $request["time0$i"]
                ]);

                if($i % 2 != 0){
                    $score01 = rand(0, 8);
                    $team01 = $team->id;
                }else{
                    $score02 = rand(0, 8);
                    $team02 = $team->id;

                    ResultController::store($team01, $team02, $score01, $score02, $game->id, 1);
                }               
            }

            // Semifinal - Round 2
            $resultRound1 = Result::where('game_id', $game->id)
                ->where('round', 1)
                ->get();

            $this->resultRound($resultRound1, $game->id, 2, "team_winner_id");    

            // Final 
            $resultRound2 = Result::where('game_id', $game->id)
                ->where('round', 2)
                ->get();

            // Round 3 - Third position
            $this->resultRound($resultRound2, $game->id, 3, "team_loser_id"); 
            
            // Round 4 - Firt and second position
            $this->resultRound($resultRound2, $game->id, 4, "team_winner_id");

            DB::commit();
        } catch (\Exception $e) {
            DB::rollback();   
            Log::info($e);        
        }     

    }

    public function resultRound($result, $game, $round, $position)
    {
        $score01 = 0;
        $score02 = 0;
        $team01 = '';
        $team02 = '';

        foreach ($result as $key => $val) {
            if($key % 2 == 0){
                if($val->team_one_id == $val->$position){
                    $score01 = rand(0, 8);
                    $team01 = $val->team_one_id;
                }else{
                    $score01 = rand(0, 8);
                    $team01 = $val->team_two_id;
                }
            }else{
                if($val->team_one_id == $val->$position){
                    $score02 = rand(0, 8);
                    $team02 = $val->team_one_id;
                }else{
                    $score02 = rand(0, 8);
                    $team02 = $val->team_two_id;
                }

                ResultController::store($team01, $team02, $score01, $score02, $game, $round);

            }
            
        }
    }
}
