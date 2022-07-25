<?php ?>

<style type="text/css">
	/*	.card-body {

		}

		.icon-notaria {
			width: 100px;
			height: 80px;
			background-color: #621132;

			border-radius: 20px;
			font-size: 30px;
			text-align: center;

			position: fixed;
			align-items: center;
		}
		.card-header{
			background-color: black;
		 }
	*/
	.info-box {
		box-shadow: 0 0 1px rgba(0, 0, 0, 0.125), 0 1px 3px rgba(0, 0, 0, 0.2);
		border-radius: 1rem;
		background-color: #fff;
		display: -ms-flexbox;
		display: flex;
		margin-bottom: 1rem;
		min-height: 80px;
		padding: .0rem;
		position: relative;
		width: 100%;
	}

	.info-box .progress {
		background-color: rgba(255, 255, 255, 1);
		height: 2px;
		margin: 5px 0;
	}

	.info-box .progress .progress-bar {
		background-color: #fff;
	}

	.info-box .info-box-icon {
		//border-radius: 1rem;
		border-bottom-left-radius: .40rem;
		border-top-left-radius: .40rem;
		-ms-flex-align: center;
		align-items: center;
		display: -ms-flexbox;
		display: flex;
		font-size: 1.875rem;
		-ms-flex-pack: center;
		justify-content: center;
		text-align: center;
		width: 70px;
	}

	.info-box .info-box-icon > img {
		max-width: 100%;
	}

	.info-box .info-box-content {
		display: -ms-flexbox;
		display: flex;
		-ms-flex-direction: column;
		flex-direction: column;
		-ms-flex-pack: center;
		justify-content: center;
		line-height: 1.8;
		-ms-flex: 1;
		flex: 1;
		padding: 0 10px;
		overflow: hidden;
	}

	.info-box .info-box-number {
		display: block;
		margin-top: .25rem;
		font-weight: 700;
	}

	.info-box .progress-description,
	.info-box .info-box-text {
		display: block;
		overflow: hidden;
		text-overflow: ellipsis;
		white-space: nowrap;
	}

	.info-box .info-box .bg-primary,
	.info-box .info-box .bg-gradient-primary {
		color: #fff;
	}

	.info-box .info-box .bg-primary .progress-bar,
	.info-box .info-box .bg-gradient-primary .progress-bar {
		background-color: #fff;
	}

	.info-box .info-box .bg-secondary,
	.info-box .info-box .bg-gradient-secondary {
		color: #fff;
	}

	.info-box .info-box .bg-secondary .progress-bar,
	.info-box .info-box .bg-gradient-secondary .progress-bar {
		background-color: #fff;
	}

	.info-box .info-box .bg-success,
	.info-box .info-box .bg-gradient-success {
		color: #fff;
	}

	.info-box .info-box .bg-success .progress-bar,
	.info-box .info-box .bg-gradient-success .progress-bar {
		background-color: #fff;
	}

	.info-box .info-box .bg-info,
	.info-box .info-box .bg-gradient-info {
		color: #fff;
	}

	.info-box .info-box .bg-info .progress-bar,
	.info-box .info-box .bg-gradient-info .progress-bar {
		background-color: #fff;
	}

	.info-box .info-box .bg-warning,
	.info-box .info-box .bg-gradient-warning {
		color: #621132;
	}

	.info-box .info-box .bg-warning .progress-bar,
	.info-box .info-box .bg-gradient-warning .progress-bar {
		background-color: #621132;
	}

	.info-box .info-box .bg-danger,
	.info-box .info-box .bg-gradient-danger {
		color: #fff;
	}

	.info-box .info-box .bg-danger .progress-bar,
	.info-box .info-box .bg-gradient-danger .progress-bar {
		background-color: #fff;
	}

	.info-box .info-box .bg-light,
	.info-box .info-box .bg-gradient-light {
		color: #621132;
	}

	.info-box .info-box .bg-light .progress-bar,
	.info-box .info-box .bg-gradient-light .progress-bar {
		background-color: #621132;
	}

	.info-box .info-box .bg-dark,
	.info-box .info-box .bg-gradient-dark {
		color: #fff;
	}

	.info-box .info-box .bg-dark .progress-bar,
	.info-box .info-box .bg-gradient-dark .progress-bar {
		background-color: #fff;
	}

	.info-box .info-box-more {
		display: block;
	}

	.info-box .progress-description {
		margin: 0;
	}

	@media (min-width: 768px) {
		.col-xl-2 .info-box .progress-description,
		.col-lg-2 .info-box .progress-description,
		.col-md-2 .info-box .progress-description {
			display: none;
		}

		.col-xl-3 .info-box .progress-description,
		.col-lg-3 .info-box .progress-description,
		.col-md-3 .info-box .progress-description {
			display: none;
		}
	}

	@media (min-width: 992px) {
		.col-xl-2 .info-box .progress-description,
		.col-lg-2 .info-box .progress-description,
		.col-md-2 .info-box .progress-description {
			font-size: 0.75rem;
			display: block;
		}

		.col-xl-3 .info-box .progress-description,
		.col-lg-3 .info-box .progress-description,
		.col-md-3 .info-box .progress-description {
			font-size: 0.75rem;
			display: block;
		}
	}

	@media (min-width: 1200px) {
		.col-xl-2 .info-box .progress-description,
		.col-lg-2 .info-box .progress-description,
		.col-md-2 .info-box .progress-description {
			font-size: 1rem;
			display: block;
		}

		.col-xl-3 .info-box .progress-description,
		.col-lg-3 .info-box .progress-description,
		.col-md-3 .info-box .progress-description {
			font-size: 1rem;
			display: block;
		}
	}

	.bg-notaria {
		background-color: #621132;
	}

</style>
<div class="container" id="container">
	<h1 class="mt-3">Caja</h1>

	<div class="row mt-3">
		<div class="col-lg-4 col-sm-12 col-md-6">

			<div class="info-box shadow">

				<span class="info-box-icon bg-notaria elevation-1"><i class="fa-solid fa-file-circle-plus text-light"></i></span>
				<a href="#" class="text-black-50 info-box-content" >
					<span class="h5">Nuevo trámite</span>
				</a>
			</div>
		</div>
		<div class="col-lg-4 col-sm-12 col-md-6">
			<div class="info-box shadow">
				<span class="info-box-icon bg-notaria elevation-1"><i class="fa-solid fa-folder-open text-light"></i> </span>
				<a href="#" class="text-black-50 info-box-content" >


						<span class="h5">Consultar trámite</span>

				</a>
			</div>
		</div>

	</div>

</div>

