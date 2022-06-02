<?php
require_once 'controlador/_registro.php';
_registro::reportes();
?>


<div class="row">

    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
                <h4 class="card-title">Casos Por Tipo de mensaje</h4>
                <canvas id="barChart" style="height: 170px; display: block; width: 100%;" width="340" height="170" class="chartjs-render-monitor"></canvas>
            </div>
        </div>
    </div>
</div>

<script src="chart.min.js"></script>

<script src="config.js"></script>

