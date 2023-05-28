<?php
include "./views/layouts/nav.php"
?>
<br>
<div class="container">
    <div class="card">
        <div class="card-header">
            <h4 class="text-center">RESERVAR</h4>
        </div>
        <div class="card-body">
            <form action="" method="post">
                <div class="mb-3">
                    <label for="barbero" class="form-label">Barbero</label>
                    <select class="form-select form-select" name="barbero" id="barbero">
                        <option selected>Seleccione el barbero de su preferencia</option>
                        <option value="">Barbero</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="fechaHoraReserva" class="form-label">Fecha y hora de reserva</label>
                    <input type="datetime-local"
                    class="form-control" name="fechaHoraReserv" id="fechaHoraReserva " aria-describedby="helpId" placeholder="">
                </div>
                <div class="mb-3">
                    <label for="servicio" class="form-label">Servicio</label>
                    <select class="form-select form-select" name="servicio" id="servicio">
                        <option selected>Seleccione el servicio que desea</option>
                        <option value="">servicio</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Reservar</button>
            </form>
        </div>
        <div class="card-footer text-muted">
        </div>
    </div>
</div>

<br>
<?php
include "./views/layouts/footer.php"
?>