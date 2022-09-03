<body class="d-flex h-100 text-center text-white bg-dark">
    <div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
        <div class="container" style="max-width: 800px;">
            <div class="fs-2">Meu Campeonato</div>
            <button type="button" class="btn btn-primary" style="margin-top: 20px" id="view-championship">Campeonatos Anteriores</button>
            <button type="button" class="btn btn-success" style="margin-top: 20px" id="init-championship">Iniciar Campeonato</button>
            @yield('main')
        </div>
    </div>
@include('modals.new-championship') 
@include('modals.view-championship')
<!-- Especific Page JS-->
<script src="js/script.js" ></script>
@yield('script-js')
</body>