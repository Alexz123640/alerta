<?php
require_once './controlador/_registro.php';

?>
<div class="card">
    <div class="card-body">
        <h4 class="card-title">Registro de alertas </h4>
<!--        <p class="card-description"> Add class <code>.table-dark</code>
        </p>-->
        <div class="table-responsive">
            <table class="table table-dark">
                <thead>
                    <tr>
                        <th>#</th>
                        <th> Fecha </th>
                        <th> Nombre </th>
                        <th> Apellido </th>
                        <th> Edad </th>
                        <th> Mensaje </th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    _registro::resumen();
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
