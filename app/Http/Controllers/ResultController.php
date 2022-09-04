<?php

namespace App\Http\Controllers;

use App\Models\Game;
use App\Models\Result;
use App\Models\Team;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Yajra\DataTables\Facades\DataTables;

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

            if($round == 3){
                Game::where('id', $game)
                    ->update([
                        'third_id' => $teamWinner
                    ]);
            }else if($round == 4){
                Game::where('id', $game)
                ->update([
                    'winner_id' => $teamWinner,
                    'second_id' => $teamLoser
                ]);
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

    public function listChampionships()
    {
        $championships = Game::query();

        $teams = Team::pluck('team_name', 'id');

        return DataTables::of($championships)
			->addColumn('id', function ($data) {
				return $data->id;
			})
            ->addColumn('date', function ($data) {
				return ComponentsController::decodeDate($data->created_at);
			})
			->addColumn('name', function ($data) {
				return $data->game_name;
			})
			->addColumn('winner', function ($data) use ($teams){
                return $teams[$data->winner_id];				
			})
			->addColumn('second', function ($data) use ($teams){
                return $teams[$data->second_id];
			})
            ->addColumn('third', function ($data) use ($teams){
                return $teams[$data->third_id];
			})
            ->addColumn('action', function ($data){
				return "<a href='/others/$data->id'>
                            VER
                        </a>";
			})
			->make(true);
    }

    public function othersChampionships($id)
    {
        $teams = Team::pluck('team_name', 'id');
        $flags = Team::pluck('flag', 'id');
        $game = Game::find($id);
        $finalResult = Result::where('game_id', $id)->get();

        return view('championship', compact('teams', 'flags', 'finalResult', 'game'));
    }
}
