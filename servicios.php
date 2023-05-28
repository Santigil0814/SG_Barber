<?php
include "views/layouts/nav.php"
?>
<br>

<div class="container">
    <form action="" method="post">
        <div class="card-group">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Servicio</h4>
                    <input type="hidden" name="servicio" value="<?php echo $servicio["nomSer"] ?>">

                    <p class="card-text">Descripción</p>
                    <input type="hidden" name="descripcion" value="<?php echo $servicio["descriSer"] ?>">

                    <p class="card-text">precio</p>
                    <input type="hidden" name="precio" value="<?php echo $servicio["preSer"] ?>">

                    <button type="submit" class="btn btn-primary">Reservar.</button>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Title</h4>
                    <p class="card-text">Text</p>
                </div>
            </div>
        </div>
    </form>

</div>

<br>
<?php
include "views/layouts/footer.php"
?>