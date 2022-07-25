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
		min-width: 320px;
		max-width: 800px;
		margin: 1em auto;
		padding: 1rem;
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

	input[type="number"] {
		min-width: 50px;
	}

</style>
<div class="container" id="container">
	<h1 class="mt-2 text-black-50">¡Bienvenido {{ Nombre de usuario }}!</h1>


		<div class="row">
			<div class="col-lg-4 col-md-6 col-sm-12 mt-3">
				<div class="card-notaria shadow">
						<p class="text-title-card mt-1">
							TRÁMITES CONTRATADOS
						</p>
					<span class="text-content-card">
						Mensajito
					</span>
				</div>
			</div>
			<div class="col-lg-4 col-md-6 col-sm-12 mt-3">
				<div class="card-notaria shadow">
					<p class="text-title-card mt-1">
						INGRESOS
					</p>
					<span class="text-content-card">
						$<?= "Cantidad .00"?>
					</span>
				</div>
			</div>
			<div class="col-lg-4 col-md-6 col-sm-12 mt-3">
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
		<div class="col-lg-6 col-md-12 col-sm-12 mt-3">
			<div class="card-notaria shadow">
				<figure class="highcharts-figure">
					<div id="graphicContainer"></div>
					<p class="highcharts-description">
						Pie charts are very popular for showing a compact overview of a
						composition or comparison. While they can be harder to read than
						column charts, they remain a popular choice for small datasets.
					</p>
				</figure>

			</div>
		</div>
		<div class="col-lg-6 col-md-12 col-sm-12 mt-3">
			<div class="card-notaria shadow">
				<figure class="highcharts-figure">
					<div id="graphicContainer2"></div>
					<p class="highcharts-description">
						Pie charts are very popular for showing a compact overview of a
						composition or comparison. While they can be harder to read than
						column charts, they remain a popular choice for small datasets.
					</p>
				</figure>

			</div>
		</div>
	</div>


</div>

<script type="text/javascript">
	Highcharts.chart('graphicContainer', {
		chart: {
			plotBackgroundColor: null,
			plotBorderWidth: null,
			plotShadow: false,
			type: 'pie'
		},
		title: {
			text: 'Browser market shares in January, 2018'
		},
		tooltip: {
			pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
		},
		accessibility: {
			point: {
				valueSuffix: '%'
			}
		},
		plotOptions: {
			pie: {
				allowPointSelect: true,
				cursor: 'pointer',
				dataLabels: {
					enabled: true,
					format: '<b>{point.name}</b>: {point.percentage:.1f} %'
				}
			}
		},
		series: [{
			name: 'Brands',
			colorByPoint: true,
			innerSize: '40%',
			data: [{
				name: 'Chrome',
				y: 61.41,
				sliced: true,
				selected: true
			}, {
				name: 'Internet Explorer',
				y: 11.84
			}, {
				name: 'Firefox',
				y: 10.85
			}, {
				name: 'Edge',
				y: 4.67
			}, {
				name: 'Safari',
				y: 4.18
			}, {
				name: 'Sogou Explorer',
				y: 1.64
			}, {
				name: 'Opera',
				y: 1.6
			}, {
				name: 'QQ',
				y: 1.2
			}, {
				name: 'Other',
				y: 2.61
			}]
		}]
	});
	Highcharts.chart('graphicContainer2', {
		chart: {
			plotBackgroundColor: null,
			plotBorderWidth: null,
			plotShadow: false,
			type: 'pie'
		},
		title: {
			text: 'Browser market shares in January, 2018'
		},
		tooltip: {
			pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
		},
		accessibility: {
			point: {
				valueSuffix: '%'
			}
		},
		plotOptions: {
			pie: {
				allowPointSelect: true,
				cursor: 'pointer',
				dataLabels: {
					enabled: true,
					format: '<b>{point.name}</b>: {point.percentage:.1f} %'
				}
			}
		},
		series: [{
			name: 'Brands',
			colorByPoint: true,
			innerSize: '40%',
			data: [{
				name: 'Chrome',
				y: 61.41,
				sliced: true,
				selected: true
			}, {
				name: 'Internet Explorer',
				y: 11.84
			}, {
				name: 'Firefox',
				y: 10.85
			}, {
				name: 'Edge',
				y: 4.67
			}, {
				name: 'Safari',
				y: 4.18
			}, {
				name: 'Sogou Explorer',
				y: 1.64
			}, {
				name: 'Opera',
				y: 1.6
			}, {
				name: 'QQ',
				y: 1.2
			}, {
				name: 'Other',
				y: 2.61
			}]
		}]
	});
</script>

