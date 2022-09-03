@extends('home')

@section('main')
<div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
    <div class="container" style="max-width: 800px;">
        <div class="fs-2">Meu Campeonato</div>
        <button type="button" class="btn btn-primary" style="margin-top: 20px" id="view-championship">Campeonatos Anteriores</button>
        <button type="button" class="btn btn-success" style="margin-top: 20px" id="init-championship">Iniciar Campeonato</button>

        {{-- Quartas de final --}}
        <div class="row" style="border: solid 1px #11944a;border-radius: 10px;padding: 8px 0px 20px 0px;margin-top: 30px;">
            <span class="fs-3">Quartas de final</span>
            <div class="col-6" style="margin-top: 20px;">
                <img src="{{asset('images/flags/flag01.svg')}}" alt="" style="width:30px; position:relative; top:-2px;">
                <span class="fs-5">Brasil - 0</span>
                <span class="fs-5"> X </span>
                <span class="fs-5">0 - Alemanha</span>
                <img src="{{asset('images/flags/flag02.svg')}}" alt="" style="width:30px; position:relative; top:-2px;">
            </div>
            <div class="col-6" style="margin-top: 20px;">
                <img src="{{asset('images/flags/flag01.svg')}}" alt="" style="width:30px; position:relative; top:-2px;">
                <span class="fs-5">Brasil - 0</span>
                <span class="fs-5"> X </span>
                <span class="fs-5">0 - Alemanha</span>
                <img src="{{asset('images/flags/flag02.svg')}}" alt="" style="width:30px; position:relative; top:-2px;">
            </div>
            <div class="col-6" style="margin-top: 20px;">
                <img src="{{asset('images/flags/flag01.svg')}}" alt="" style="width:30px; position:relative; top:-2px;">
                <span class="fs-5">Brasil - 0</span>
                <span class="fs-5"> X </span>
                <span class="fs-5">0 - Alemanha</span>
                <img src="{{asset('images/flags/flag02.svg')}}" alt="" style="width:30px; position:relative; top:-2px;">
            </div>
            <div class="col-6" style="margin-top: 20px;">
                <img src="{{asset('images/flags/flag01.svg')}}" alt="" style="width:30px; position:relative; top:-2px;">
                <span class="fs-5">Brasil - 0</span>
                <span class="fs-5"> X </span>
                <span class="fs-5">0 - Alemanha</span>
                <img src="{{asset('images/flags/flag02.svg')}}" alt="" style="width:30px; position:relative; top:-2px;">
            </div>
        </div>

        {{-- Semifinal --}}
        <div class="row" style="border: solid 1px #dae726;border-radius: 10px;padding: 8px 0px 20px 0px;margin-top: 30px;">
            <span class="fs-3">Semifinal</span>
            <div class="col-6" style="margin-top: 20px;">
                <img src="{{asset('images/flags/flag01.svg')}}" alt="" style="width:30px; position:relative; top:-2px;">
                <span class="fs-5">Brasil - 0</span>
                <span class="fs-5"> X </span>
                <span class="fs-5">0 - Alemanha</span>
                <img src="{{asset('images/flags/flag02.svg')}}" alt="" style="width:30px; position:relative; top:-2px;">
            </div>
            <div class="col-6" style="margin-top: 20px;">
                <img src="{{asset('images/flags/flag01.svg')}}" alt="" style="width:30px; position:relative; top:-2px;">
                <span class="fs-5">Brasil - 0</span>
                <span class="fs-5"> X </span>
                <span class="fs-5">0 - Alemanha</span>
                <img src="{{asset('images/flags/flag02.svg')}}" alt="" style="width:30px; position:relative; top:-2px;">
            </div>
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
            <div class="col-6" style="margin-top: 20px;">
                <img src="{{asset('images/flags/flag01.svg')}}" alt="" style="width:30px; position:relative; top:-2px;">
                <span class="fs-5">Brasil - 0</span>
                <span class="fs-5"> X </span>
                <span class="fs-5">0 - Alemanha</span>
                <img src="{{asset('images/flags/flag02.svg')}}" alt="" style="width:30px; position:relative; top:-2px;">
            </div>
            <div class="col-6" style="margin-top: 20px;">
                <img src="{{asset('images/flags/flag01.svg')}}" alt="" style="width:30px; position:relative; top:-2px;">
                <span class="fs-5">Brasil - 0</span>
                <span class="fs-5"> X </span>
                <span class="fs-5">0 - Alemanha</span>
                <img src="{{asset('images/flags/flag02.svg')}}" alt="" style="width:30px; position:relative; top:-2px;">
            </div>
        </div>
        {{-- Vencedor --}}
        <div class="row" style="margin-top: 30px;">
            <span class="fs-3">Vencedor</span>
            <div class="col-12" style="margin-top: 20px;">
                <img src="{{asset('images/flags/flag01.svg')}}" alt="" style="width:50px; position:relative; top:-2px;">
                <span class="fs-4">Brasil</span>
            </div>
        </div>
    </div>
</div>  
@include('modals.new-championship') 
@include('modals.view-championship')
@stop