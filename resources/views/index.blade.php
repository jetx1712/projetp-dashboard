@extends("layouts.app")
@section("style")
<link href="{{ asset('assets/plugins/vectormap/jquery-jvectormap-2.0.2.css') }}" rel="stylesheet" />
@endsection

@section("wrapper")
<div class="page-wrapper">
	<div class="page-content">

		<div class="card radius-10">
			<div class="row row-cols-1 row-cols-md-2 row-cols-xl-4 row-group g-0">
				<div class="col">
					<div class="card-body">
						<div class="d-flex align-items-center">
							<h5 class="mb-0">9526</h5>
							<div class="ms-auto">
								<i class='bx bx-cart fs-3 text-white'></i>
							</div>
						</div>
						<div class="progress my-3" style="height:3px;">
							<div class="progress-bar" role="progressbar" style="width: 55%" aria-valuenow="25"
								aria-valuemin="0" aria-valuemax="100"></div>
						</div>
						<div class="d-flex align-items-center text-white">
							<p class="mb-0">Gráfico 1</p>
							<p class="mb-0 ms-auto">+4.2%<span><i class='bx bx-up-arrow-alt'></i></span></p>
						</div>
					</div>
				</div>
				<div class="col">
					<div class="card-body">
						<div class="d-flex align-items-center">
							<h5 class="mb-0">$8323</h5>
							<div class="ms-auto">
								<i class='bx bx-dollar fs-3 text-white'></i>
							</div>
						</div>
						<div class="progress my-3" style="height:3px;">
							<div class="progress-bar" role="progressbar" style="width: 55%" aria-valuenow="25"
								aria-valuemin="0" aria-valuemax="100"></div>
						</div>
						<div class="d-flex align-items-center text-white">
							<p class="mb-0">Gráfico 2</p>
							<p class="mb-0 ms-auto">+1.2%<span><i class='bx bx-up-arrow-alt'></i></span></p>
						</div>
					</div>
				</div>
				<div class="col">
					<div class="card-body">
						<div class="d-flex align-items-center">
							<h5 class="mb-0">6200</h5>
							<div class="ms-auto">
								<i class='bx bx-group fs-3 text-white'></i>
							</div>
						</div>
						<div class="progress my-3" style="height:3px;">
							<div class="progress-bar" role="progressbar" style="width: 55%" aria-valuenow="25"
								aria-valuemin="0" aria-valuemax="100"></div>
						</div>
						<div class="d-flex align-items-center text-white">
							<p class="mb-0">Gráfico 3</p>
							<p class="mb-0 ms-auto">+5.2%<span><i class='bx bx-up-arrow-alt'></i></span></p>
						</div>
					</div>
				</div>
				<div class="col">
					<div class="card-body">
						<div class="d-flex align-items-center">
							<h5 class="mb-0">5630</h5>
							<div class="ms-auto">
								<i class='bx bx-envelope fs-3 text-white'></i>
							</div>
						</div>
						<div class="progress my-3" style="height:3px;">
							<div class="progress-bar" role="progressbar" style="width: 55%" aria-valuenow="25"
								aria-valuemin="0" aria-valuemax="100"></div>
						</div>
						<div class="d-flex align-items-center text-white">
							<p class="mb-0">Gráfico 4</p>
							<p class="mb-0 ms-auto">+2.2%<span><i class='bx bx-up-arrow-alt'></i></span></p>
						</div>
					</div>
				</div>
			</div><!--end row-->
		</div>

		<div class="row">
			<div class="col-12 col-lg-8 col-xl-8 d-flex">
				<div class="card radius-10 w-100">
					<div class="card-body">
						<div class="d-flex align-items-center">
							<div>
								<h6 class="mb-0">Gráfico de geração de energia</h6>
							</div>
							<div class="font-22 ms-auto text-white"><i class="bx bx-dots-horizontal-rounded"></i>
							</div>
						</div>
						<div class="d-flex align-items-center ms-auto font-13 gap-2 my-3">
							<span class="border px-1 rounded cursor-pointer"><i
									class="bx bxs-circle text-white me-1"></i>Ano atual</span>
							<span class="border px-1 rounded cursor-pointer"><i
									class="bx bxs-circle text-light-1 me-1"></i>Ano anterior</span>
						</div>
						<div class="chart-container-1">
							<canvas id="chart1"></canvas>
						</div>
					</div>
					<div class="row row-cols-1 row-cols-md-3 row-cols-xl-3 g-0 row-group text-center border-top">
						<div class="col">
							<div class="p-3">
								<h5 class="mb-0">45.87M</h5>
								<small class="mb-0">Produção total<span> <i
											class="bx bx-up-arrow-alt align-middle"></i> 2.43%</span></small>
							</div>
						</div>
						<div class="col">
							<div class="p-3">
								<h5 class="mb-0"><div id="clock"></div></h5>
								<small class="mb-0">Horário</small>
							</div>
						</div>
						<div class="col">
							<div class="p-3">
								<h5 class="mb-0">245.65</h5>
								<small class="mb-0">Meta<span> <i class="bx bx-up-arrow-alt align-middle"></i>
										5.62%</span></small>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="col-12 col-lg-4 col-xl-4 d-flex">
				<div class="card radius-10 overflow-hidden w-100">
					<div class="card-body">
						<div class="d-flex align-items-center">
							<div>
								<h6 class="mb-0">Gráfico sob demanda</h6>
							</div>
							<div class="font-22 ms-auto text-white"><i class="bx bx-dots-horizontal-rounded"></i>
							</div>
						</div>
						<div class="chart-container-2 my-3">
							<canvas id="chart2"></canvas>
						</div>
					</div>
					<div class="table-responsive">
						<table class="table align-items-center mb-0">
							<tbody>
								<tr>
									<td><i class="bx bxs-circle text-white me-2"></i> Texto</td>
									<td>5856</td>
									<td>+55%</td>
								</tr>
								<tr>
									<td><i class="bx bxs-circle text-light-2 me-2"></i>Texto</td>
									<td>2602</td>
									<td>+25%</td>
								</tr>
								<tr>
									<td><i class="bx bxs-circle text-light-3 me-2"></i>Texto</td>
									<td>1802</td>
									<td>+15%</td>
								</tr>
								<tr>
									<td><i class="bx bxs-circle text-light-4 me-2"></i>Texto</td>
									<td>1105</td>
									<td>+5%</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div><!--End Row-->


		<div class="row row-cols-1 row-cols-lg-3">
			<div class="col">
				<div class="card radius-10">
					<div class="card-body">
						<div class="d-flex align-items-center">
							<div class="w_chart easy-dash-chart" data-percent="60">
								<span class="w_percent"></span>
							</div>
							<div class="ms-3">
								<h6 class="mb-0">Texto</h6>
								<small class="mb-0">22.14% <i class='bx bxs-up-arrow align-middle me-1'></i>Texto</small>
							</div>
							<div class="ms-auto text-white fs-1"></div>
						</div>
					</div>
				</div>
			</div>
			<div class="col">
				<div class="card radius-10">
					<div class="card-body">
						<div class="d-flex align-items-center">
							<div class="w_chart easy-dash-chart" data-percent="65">
								<span class="w_percent"></span>
							</div>
							<div class="ms-3">
								<h6 class="mb-0">Texto</h6>
								<small class="mb-0">32.15% <i class='bx bxs-up-arrow align-middle me-1'></i>Texto</small>
							</div>
							<div class="ms-auto text-white fs-1"></div>
						</div>
					</div>
				</div>
			</div>
			<div class="col">
				<div class="card radius-10">
					<div class="card-body">
						<div class="d-flex align-items-center">
							<div class="w_chart easy-dash-chart" data-percent="75">
								<span class="w_percent"></span>
							</div>
							<div class="ms-3">
								<h6 class="mb-0">Texto</h6>
								<small class="mb-0">58.24% <i class='bx bxs-up-arrow align-middle me-1'></i>Texto</small>
							</div>
							<div class="ms-auto text-white fs-1"></div>
						</div>
					</div>
				</div>
			</div>
		</div><!--End Row-->


		<div class="row">
			<div class="col-12 col-lg-12 col-xl-6">
				<div class="card radius-10">
					<div class="card-body">
						<div class="d-flex align-items-center mb-3">
							<div>
								<h6 class="mb-0">Mapa do mundo</h6>
							</div>
							<div class="font-22 ms-auto text-white"><i class="bx bx-dots-horizontal-rounded"></i>
							</div>
						</div>
						<div id="dashboard-map" style="height: 330px;"></div>
					</div>
					<div class="table-responsive">
						<table class="table table-hover align-items-center">
							<thead class="table-light">
								<tr>
									<th>Região</th>
									<th>texto</th>
									<th>texto</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td><i class="flag-icon flag-icon-ca me-2"></i> USA</td>
									<td>4,586$</td>
									<td><span id="trendchart1"></span></td>
								</tr>
								<tr>
									<td><i class="flag-icon flag-icon-us me-2"></i>Canada</td>
									<td>2,089$</td>
									<td><span id="trendchart2"></span></td>
								</tr>

								<tr>
									<td><i class="flag-icon flag-icon-in me-2"></i>India</td>
									<td>3,039$</td>
									<td><span id="trendchart3"></span></td>
								</tr>

								<tr>
									<td><i class="flag-icon flag-icon-gb me-2"></i>UK</td>
									<td>2,309$</td>
									<td><span id="trendchart4"></span></td>
								</tr>

								<tr>
									<td><i class="flag-icon flag-icon-de me-2"></i>Germany</td>
									<td>7,209$</td>
									<td><span id="trendchart5"></span></td>
								</tr>

							</tbody>
						</table>
					</div>
				</div>
			</div>

			<div class="col-12 col-lg-12 col-xl-6">
				<div class="row">
					<div class="col-12 col-lg-6">
						<div class="card radius-10 overflow-hidden">
							<div class="card-body">
								<p>Texto</p>
								<h4 class="mb-0">8,293 <small class="font-13">5.2% <i
											class="zmdi zmdi-long-arrow-up"></i></small></h4>
							</div>
							<div class="chart-container-2">
								<canvas id="chart3"></canvas>
							</div>
						</div>
					</div>
					<div class="col-12 col-lg-6">
						<div class="card radius-10 overflow-hidden">
							<div class="card-body">
								<p>Texto</p>
								<h4 class="mb-0">7,493 <small class="font-13">1.4% <i
											class="zmdi zmdi-long-arrow-up"></i></small></h4>
							</div>
							<div class="chart-container-2">
								<canvas id="chart4"></canvas>
							</div>
						</div>
					</div>
					<div class="col-12 col-lg-6">
						<div class="card radius-10">
							<div class="card-body text-center">
								<p class="mb-4">Texto</p>
								<input class="knob" data-width="190" data-height="190" data-readOnly="true"
									data-thickness=".2" data-angleoffset="90" data-linecap="round"
									data-bgcolor="rgba(255, 255, 255, 0.14)" data-fgcolor="#fff" data-max="15000"
									value="8550" />
								<hr>
								<p class="mb-0 small-font text-center">3.4% <i class="zmdi zmdi-long-arrow-up"></i>
								Texto</p>
							</div>
						</div>
					</div>
					<div class="col-12 col-lg-6">
						<div class="card radius-10">
							<div class="card-body">
								<p>Texto</p>
								<h4 class="mb-3">42620/50000</h4>
								<hr>
								<div class="progress-wrapper mb-4">
									<p>Texto <span class="float-right">12GB</span></p>
									<div class="progress" style="height:5px;">
										<div class="progress-bar" style="width:80%"></div>
									</div>
								</div>

								<div class="progress-wrapper mb-4">
									<p>Texto <span class="float-right">10GB</span></p>
									<div class="progress" style="height:5px;">
										<div class="progress-bar" style="width:60%"></div>
									</div>
								</div>

								<div class="progress-wrapper mb-4">
									<p>Texto <span class="float-right">5GB</span></p>
									<div class="progress" style="height:5px;">
										<div class="progress-bar" style="width:40%"></div>
									</div>
								</div>

							</div>
						</div>
					</div>
				</div>
			</div>
		</div><!--End Row-->
	</div>
</div>
@endsection

@section("script")
<script src="{{ asset('assets/plugins/chartjs/js/Chart.min.js') }}"></script>
<script src="{{ asset('assets/plugins/vectormap/jquery-jvectormap-2.0.2.min.js') }}"></script>
<script src="{{ asset('assets/plugins/vectormap/jquery-jvectormap-world-mill-en.js') }}"></script>
<script src="{{ asset('assets/plugins/jquery.easy-pie-chart/jquery.easypiechart.min.js') }}"></script>
<script src="{{ asset('assets/plugins/sparkline-charts/jquery.sparkline.min.js') }}"></script>
<script src="{{ asset('assets/plugins/jquery-knob/excanvas.js') }}"></script>
<script src="{{ asset('assets/plugins/jquery-knob/jquery.knob.js') }}"></script>
<script>
	function atualizarRelogio() {
		// Obter a hora atual
		var agora = new Date();

		// Formatar a hora, minutos e segundos com dois dígitos
		var horas = agora.getHours().toString().padStart(2, '0');
		var minutos = agora.getMinutes().toString().padStart(2, '0');
		var segundos = agora.getSeconds().toString().padStart(2, '0');

		// Montar a string da hora no formato HH:MM:SS
		var horaAtual = horas + ':' + minutos + ':' + segundos;

		// Atualizar o conteúdo do elemento HTML com a hora atual
		document.getElementById('clock').innerText = horaAtual;
	}

	// Atualizar o relógio a cada segundo
	setInterval(atualizarRelogio, 1000);

	// Chamar a função para exibir a hora atual imediatamente
	atualizarRelogio();
</script>

<script>
	$(function () {
		$(".knob").knob();
	});
</script>
<script src="{{ asset('assets/js/index.js') }}"></script>
@endsection