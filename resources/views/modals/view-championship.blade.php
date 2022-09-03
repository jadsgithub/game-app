<!-- Modal New Championship -->
<div class="modal fade" id="modal-view-championship" tabindex="-1" aria-labelledby="modal-view-championship" aria-hidden="true" style="color:black">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title">Ver Campeonatos Anteriores</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <div class="container-fluid">
            <table class="table table-dark table-striped" id="table-view-championship" style="text-align: left !important;">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Data</th>
                        <th scope="col">Nome</th>
                        <th scope="col">Vencedor</th>
                        <th scope="col">2° Lugar</th>
                        <th scope="col">3° Lugar</th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>02/03/1989</td>
                        <td>Campeonato 01</td>
                        <td>Brasil</td>
                        <td>Alemanha</td>
                        <td>Argentina</td>
                        <td><img src="{{asset('images/flags/eye.svg')}}" alt="" style="cursor:pointer; width:27px;"></td>
                    </tr>
                </tbody>
                </table>
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
        </div>
        </div>
    </div>
</div>