<?php ?>

<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script src="https://code.highcharts.com/modules/export-data.js"></script>
<script src="https://code.highcharts.com/modules/accessibility.js"></script>

<style type="text/css">
	.card-notaria{
		background-color: white;
		box-shadow: black;
		border-radius: 15px;
		height: auto;
		text-align: left;
		border-color: rgb(0,0,0,.25);

	}
	.text-title-card{
		font-size: 16px;
		margin: 20px;
		color: rgb(0,0,0,.6);
	}
	.text-content-card{
		display: table;
		margin: 0 auto;
		font-size: 25px;
		color: rgb(0,0,0,.7);
		padding-bottom: 15px;
	}

	.highcharts-figure,
	.highcharts-data-table table {
		min-width: 310px;
		max-width: 800px;
		margin: 1em auto;
		padding: 1rem;
	}

	#container {
		height: 400px;
	}

	.highcharts-data-table table {
		font-family: Verdana, sans-serif;
		border-collapse: collapse;
		border: 1px solid #ebebeb;
		margin: 10px auto;
		text-align: center;
		width: 100%;
		max-width: 500px;
	}

	.highcharts-data-table caption {
		padding: 1em 0;
		font-size: 1.2em;
		color: #555;
	}

	.highcharts-data-table th {
		font-weight: 600;
		padding: 0.5em;
	}

	.highcharts-data-table td,
	.highcharts-data-table th,
	.highcharts-data-table caption {
		padding: 0.5em;
	}

	.highcharts-data-table thead tr,
	.highcharts-data-table tr:nth-child(even) {
		background: #f8f8f8;
	}

	.highcharts-data-table tr:hover {
		background: #f1f7ff;
	}

</style>
<div class="container" id="container">
	<h1 class="mt-2 text-black-50">¡Bienvenido {{ Nombre de usuario }}!</h1>


		<div class="row">
			<div class="col-lg-3 col-md-6 col-sm-12 mt-3">
				<div class="card-notaria shadow">
						<p class="text-title-card mt-1">
							INGRESOS
						</p>
					<span class="text-content-card">
						$<?= "Cantidad .00"?>
					</span>
				</div>
			</div>
			<div class="col-lg-3 col-md-6 col-sm-12 mt-3">
				<div class="card-notaria shadow">
					<p class="text-title-card mt-1">
						SALIDAS
					</p>
					<span class="text-content-card">
						$<?= "Cantidad .00"?>
					</span>
				</div>
			</div>
			<div class="col-lg-3 col-md-6 col-sm-12 mt-3">
				<div class="card-notaria shadow">
					<p class="text-title-card mt-1">
						PAGOS
					</p>
					<span class="text-content-card">
						$<?= "Cantidad .00"?>
					</span>
				</div>
			</div>
			<div class="col-lg-3 col-md-6 col-sm-12 mt-3">
				<div class="card-notaria shadow">
					<p class="text-title-card mt-1">
						CAJA
					</p>
					<span class="text-content-card">
						$<?= "Cantidad .00"?>
					</span>
				</div>
			</div>

		</div>

	<div class="row">
		<div class="col-lg-12 col-md-12 col-sm-12 mt-3">
			<div class="card-notaria shadow">

				<!--- GRAFICAS --->

				<figure class="highcharts-figure">
					<div id="graphicContainer"></div>
					<p class="highcharts-description">
						Chart showing stacked horizontal bars. This type of visualization is
						great for comparing data that accumulates up to a sum.
					</p>
				</figure>
				<!-- END GRAFICA -->

			</div>
		</div>



</div>

<script type="text/javascript">
	Highcharts.chart('graphicContainer', {
		chart: {
			type: 'bar'
		},
		title: {
			text: 'Procesos de trámites por modulo'
		},
		xAxis: {
			categories: ['Apples', 'Oranges', 'Pears', 'Grapes', 'Bananas','Potato']
		},
		yAxis: {
			min: 0,
			title: {
				text: 'Total fruit consumption'
			}
		},
		legend: {
			reversed: true
		},
		plotOptions: {
			series: {
				stacking: 'normal'
			}
		},
		series: [{
			name: 'John',
			data: [5, 3, 4, 7, 2]
		}, {
			name: 'Jane',
			data: [2, 2, 3, 2, 1]
		}, {
			name: 'Joe',
			data: [3, 4, 4, 2, 5]
		}, {
			name: 'Juan',
			data: [4, 5, 2, 1, 7]
		}]
	});
</script>

