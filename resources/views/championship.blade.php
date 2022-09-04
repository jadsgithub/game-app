@extends('home')

@section('main')

<div class="row" style="margin-top: 30px;">
    <div class="col-8">
        <span class='fs-6' style="float: left"> Nome Campeonato: {{$game->game_name}}</span>
    </div>
    <div class="col-4">
        <span class='fs-6' style="float: right"> Data Campeonato: {{App\Http\Controllers\ComponentsController::decodeDate($game->created_at)}}</span>
    </div>
</div>
{{-- Quartas de final --}}
<div class="row" style="border: solid 1px #11944a;border-radius: 10px;padding: 8px 0px 20px 0px;">
    <span class="fs-3">Quartas de final</span>
    @foreach($finalResult as $key)
        @if($key->round == 1)
            <div class='col-6' style='margin-top: 20px;'>
                <img src='{{asset($flags[$key->team_one_id])}}' alt='' style='width:30px; position:relative; top:-2px;'>
                <span class='fs-5'>{{$teams[$key->team_one_id]}} - {{$key->team_one_score}}</span>
                <span class='fs-5'> X </span>
                <span class='fs-5'>{{$key->team_two_score}} - {{$teams[$key->team_two_id]}}</span>
                <img src='{{asset($flags[$key->team_two_id])}}' alt='' style='width:30px; position:relative; top:-2px;'>
            </div>
        @endif
    @endforeach
</div>

{{-- Semifinal --}}
<div class="row" style="border: solid 1px #dae726;border-radius: 10px;padding: 8px 0px 20px 0px;margin-top: 30px;">
    <span class="fs-3">Semifinal</span>
    @foreach($finalResult as $key)
        @if($key->round == 2)
            <div class='col-6' style='margin-top: 20px;'>
                <img src='{{asset($flags[$key->team_one_id])}}' alt='' style='width:30px; position:relative; top:-2px;'>
                <span class='fs-5'>{{$teams[$key->team_one_id]}} - {{$key->team_one_score}}</span>
                <span class='fs-5'> X </span>
                <span class='fs-5'>{{$key->team_two_score}} - {{$teams[$key->team_two_id]}}</span>
                <img src='{{asset($flags[$key->team_two_id])}}' alt='' style='width:30px; position:relative; top:-2px;'>
            </div>
        @endif
    @endforeach
    
</div>

{{-- Final --}}
<div class="row" style="border: solid 1px #1b5ef0;border-radius: 10px;padding: 8px 0px 20px 0px;margin-top: 30px;">
    <span class="fs-3">Final</span>
    <div class="col-6" style="margin-top: 20px;">
        <span class="fs-6">Disputa - 3° Lugar</span>
    </div>
    <div class="col-6" style="margin-top: 20px;">
        <span class="fs-6">Disputa - 1° e 2° Lugar</span>
    </div>
    @foreach($finalResult as $key)
        @if($key->round > 2)
            <div class='col-6' style='margin-top: 20px;'>
                <img src='{{asset($flags[$key->team_one_id])}}' alt='' style='width:30px; position:relative; top:-2px;'>
                <span class='fs-5'>{{$teams[$key->team_one_id]}} - {{$key->team_one_score}}</span>
                <span class='fs-5'> X </span>
                <span class='fs-5'>{{$key->team_two_score}} - {{$teams[$key->team_two_id]}}</span>
                <img src='{{asset($flags[$key->team_two_id])}}' alt='' style='width:30px; position:relative; top:-2px;'>
            </div>
        @endif
    @endforeach

</div>
{{-- Vencedor --}}
<div class="row" style="margin-top: 30px;">
    <span class="fs-3">Vencedor</span>
    <div class="col-12" style="margin-top: 20px;">
        @foreach($finalResult as $key)
            @if($key->round == 4)
                <img src="{{asset($flags[$key->team_winner_id])}}" alt="" style="width:50px; position:relative; top:-2px;">
                <span class="fs-4">{{$teams[$key->team_winner_id]}}</span>
            @endif
        @endforeach
        
    </div>
</div>
  
@stop