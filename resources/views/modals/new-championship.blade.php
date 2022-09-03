<!-- Modal New Championship -->
<div class="modal fade" id="modal-new-championship" tabindex="-1" aria-labelledby="modal-new-championship" aria-hidden="true" style="color:black">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title">Novo Campeonato</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <div class="container-fluid">
                <form method="POST" action="{{route('simulation')}}" id="form-new-championship">
                    @csrf
                    <div class="row">
                        <span style="text-align:left; margin-bottom:10px;">Informe o nome dos times.</span>
                        <div class="col-6">
                            <div class="input-group mb-3">
                                <span class="input-group-text">Time 01</span>
                                <input type="text" class="form-control" name="time01" id="time01" required>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="input-group mb-3">
                                <span class="input-group-text">Time 02</span>
                                <input type="text" class="form-control" name="time02" id="time02" required>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="input-group mb-3">
                                <span class="input-group-text">Time 03</span>
                                <input type="text" class="form-control" name="time03" id="time03" required>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="input-group mb-3">
                                <span class="input-group-text">Time 04</span>
                                <input type="text" class="form-control" name="time04" id="time04" required>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="input-group mb-3">
                                <span class="input-group-text">Time 05</span>
                                <input type="text" class="form-control" name="time05" id="time05" required>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="input-group mb-3">
                                <span class="input-group-text">Time 06</span>
                                <input type="text" class="form-control" name="time06" id="time06" required>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="input-group mb-3">
                                <span class="input-group-text">Time 07</span>
                                <input type="text" class="form-control" name="time07" id="time07" required>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="input-group mb-3">
                                <span class="input-group-text">Time 08</span>
                                <input type="text" class="form-control" name="time08" id="time08" required>
                            </div>
                        </div>
                        <span class="field-text-error" style="color:red"></span>
                    </div>
                </form>
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
            <button type="button" class="btn btn-primary" id="simulate">Simular</button>
        </div>
        </div>
    </div>
</div>