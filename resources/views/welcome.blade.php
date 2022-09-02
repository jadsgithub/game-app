<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>

    </head>
    <body class="d-flex h-100 text-center text-white bg-dark">
        <div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
            <div class="container" style="max-width: 800px;">
                <div class="fs-2">Meu Campeonato</div>
                <button type="button" class="btn btn-success" style="margin-top: 20px">Campeonatos Anteriores</button>
                <button type="button" class="btn btn-success" style="margin-top: 20px">Iniciar Campeonato</button>

                {{-- Quartas de final --}}
                <div class="row" style="border: solid 1px #11944a;border-radius: 10px;padding: 8px 0px 20px 0px;margin-top: 30px;">
                    <span class="fs-3">Quartas de final</span>
                    <div class="col-6" style="margin-top: 20px;">
                        <img src="{{asset('images/flags/brasil.svg')}}" alt="" style="width:30px; position:relative; top:-2px;">
                        <span class="fs-5">Brasil - 0</span>
                        <span class="fs-5"> X </span>
                        <span class="fs-5">0 - Alemanha</span>
                        <img src="{{asset('images/flags/alemanha.svg')}}" alt="" style="width:30px; position:relative; top:-2px;">
                    </div>
                    <div class="col-6" style="margin-top: 20px;">
                        <img src="{{asset('images/flags/brasil.svg')}}" alt="" style="width:30px; position:relative; top:-2px;">
                        <span class="fs-5">Brasil - 0</span>
                        <span class="fs-5"> X </span>
                        <span class="fs-5">0 - Alemanha</span>
                        <img src="{{asset('images/flags/alemanha.svg')}}" alt="" style="width:30px; position:relative; top:-2px;">
                    </div>
                    <div class="col-6" style="margin-top: 20px;">
                        <img src="{{asset('images/flags/brasil.svg')}}" alt="" style="width:30px; position:relative; top:-2px;">
                        <span class="fs-5">Brasil - 0</span>
                        <span class="fs-5"> X </span>
                        <span class="fs-5">0 - Alemanha</span>
                        <img src="{{asset('images/flags/alemanha.svg')}}" alt="" style="width:30px; position:relative; top:-2px;">
                    </div>
                    <div class="col-6" style="margin-top: 20px;">
                        <img src="{{asset('images/flags/brasil.svg')}}" alt="" style="width:30px; position:relative; top:-2px;">
                        <span class="fs-5">Brasil - 0</span>
                        <span class="fs-5"> X </span>
                        <span class="fs-5">0 - Alemanha</span>
                        <img src="{{asset('images/flags/alemanha.svg')}}" alt="" style="width:30px; position:relative; top:-2px;">
                    </div>
                </div>

                {{-- Semifinal --}}
                <div class="row" style="border: solid 1px #dae726;border-radius: 10px;padding: 8px 0px 20px 0px;margin-top: 30px;">
                    <span class="fs-3">Semifinal</span>
                    <div class="col-6" style="margin-top: 20px;">
                        <img src="{{asset('images/flags/brasil.svg')}}" alt="" style="width:30px; position:relative; top:-2px;">
                        <span class="fs-5">Brasil - 0</span>
                        <span class="fs-5"> X </span>
                        <span class="fs-5">0 - Alemanha</span>
                        <img src="{{asset('images/flags/alemanha.svg')}}" alt="" style="width:30px; position:relative; top:-2px;">
                    </div>
                    <div class="col-6" style="margin-top: 20px;">
                        <img src="{{asset('images/flags/brasil.svg')}}" alt="" style="width:30px; position:relative; top:-2px;">
                        <span class="fs-5">Brasil - 0</span>
                        <span class="fs-5"> X </span>
                        <span class="fs-5">0 - Alemanha</span>
                        <img src="{{asset('images/flags/alemanha.svg')}}" alt="" style="width:30px; position:relative; top:-2px;">
                    </div>
                </div>

                {{-- Final --}}
                <div class="row" style="border: solid 1px #1b5ef0;border-radius: 10px;padding: 8px 0px 20px 0px;margin-top: 30px;">
                    <span class="fs-3">Final</span>
                    <div class="col-6" style="margin-top: 20px;">
                        <img src="{{asset('images/flags/brasil.svg')}}" alt="" style="width:30px; position:relative; top:-2px;">
                        <span class="fs-5">Brasil - 0</span>
                        <span class="fs-5"> X </span>
                        <span class="fs-5">0 - Alemanha</span>
                        <img src="{{asset('images/flags/alemanha.svg')}}" alt="" style="width:30px; position:relative; top:-2px;">
                    </div>
                    <div class="col-6" style="margin-top: 20px;">
                        <img src="{{asset('images/flags/brasil.svg')}}" alt="" style="width:30px; position:relative; top:-2px;">
                        <span class="fs-5">Brasil - 0</span>
                        <span class="fs-5"> X </span>
                        <span class="fs-5">0 - Alemanha</span>
                        <img src="{{asset('images/flags/alemanha.svg')}}" alt="" style="width:30px; position:relative; top:-2px;">
                    </div>
                </div>

                <button type="button" class="btn btn-success" style="margin-top: 30px">Novo Jogo</button>
            </div>

            
            
            {{-- <div class='container' style="width: 500px; height:500px; background-color: #FFF; border-radius: 20px; border-color: transparent;">
                
            </div> --}}
            
        </div>   
    </body>
</html>
