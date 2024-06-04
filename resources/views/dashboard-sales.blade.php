@extends("layouts.app")
@section("style")
<link href="{{ asset('assets/plugins/highcharts/css/highcharts-white.css') }}" rel="stylesheet" />
<link href="{{ asset('assets/plugins/vectormap/jquery-jvectormap-2.0.2.css') }}" rel="stylesheet" />
@endsection


@section("wrapper")
<div class="page-wrapper">
	<div class="page-content">

		<div class="row row-cols-1 row-cols-lg-2 row-cols-xl-4">
			<div class="col">
				<div class="card radius-10 overflow-hidden">
					<div class="card-body">
						<div class="d-flex align-items-center">
							<div>
								<p class="mb-0">Gráfico 1</p>
								<h5 class="mb-0 text-white">867</h5>
							</div>
							<div class="ms-auto text-white"> <i class='bx bx-cart font-30'></i>
							</div>
						</div>
					</div>
					<div class="" id="chart1"></div>
				</div>
			</div>
			<div class="col">
				<div class="card radius-10 overflow-hidden">
					<div class="card-body">
						<div class="d-flex align-items-center">
							<div>
								<p class="mb-0">Gráfico 2</p>
								<h5 class="mb-0 text-white">$52,945</h5>
							</div>
							<div class="ms-auto text-white"> <i class='bx bx-wallet font-30'></i>
							</div>
						</div>
					</div>
					<div class="" id="chart2"></div>
				</div>
			</div>
			<div class="col">
				<div class="card radius-10 overflow-hidden">
					<div class="card-body">
						<div class="d-flex align-items-center">
							<div>
								<p class="mb-0">Gráfico 3</p>
								<h5 class="mb-0 text-white">24.5K</h5>
							</div>
							<div class="ms-auto text-white"> <i class='bx bx-group font-30'></i>
							</div>
						</div>
					</div>
					<div class="" id="chart3"></div>
				</div>
			</div>
			<div class="col">
				<div class="card radius-10 overflow-hidden">
					<div class="card-body">
						<div class="d-flex align-items-center">
							<div>
								<p class="mb-0">Gráfico 4</p>
								<h5 class="mb-0 text-white">869</h5>
							</div>
							<div class="ms-auto text-white"> <i class='bx bx-chat font-30'></i>
							</div>
						</div>
					</div>
					<div class="" id="chart4"></div>
				</div>
			</div>
		</div><!--end row-->


		<div class="row">
			<div class="col-12 col-xl-8 d-flex">
				<div class="card radius-10 w-100">
					<div class="card-body">
						<div class="" id="chart5"></div>
					</div>
				</div>
			</div>
			<div class="col-12 col-xl-4 d-flex">
				<div class="card radius-10 w-100">
					<div class="card-body">
						<div class="d-flex align-items-center">
							<div>
								<h5 class="mb-1">Texto</h5>
							</div>
							<div class="font-22 ms-auto"><i class="bx bx-dots-horizontal-rounded"></i>
							</div>
						</div>
						<div class="mt-4" id="chart6"></div>
						<div class="d-flex align-items-center">
							<div>
								<h2 class="mb-0">2248</h2>
								<p class="mb-0">/2,800 Alvo</p>
							</div>
							<div class="ms-auto d-flex align-items-center border radius-10 px-2">
								<i class='bx bxs-checkbox font-22 me-1 text-white'></i><span>Texto</span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div><!--end row-->


		<div class="row row-cols-1 row-cols-xl-2">
			<div class="col d-flex">
				<div class="card radius-10 w-100">
					<div class="card-body">
						<div class="" id="chart7"></div>
					</div>
				</div>
			</div>
			<div class="col d-flex">
				<div class="card radius-10 w-100">
					<div class="card-body">
						<div class="d-flex align-items-center">
							<div>
								<h5 class="mb-1"><div id="hora-atual"></div></h5>
							</div>
							<div class="font-22 ms-auto"><i class="bx bx-dots-horizontal-rounded"></i>
							</div>
						</div>
						<div class="" id="chart8"></div>
					</div>
				</div>
			</div>
		</div><!--end row-->

		<div class="row">
			<div class="col-12 col-xl-4 col-xxl-3 d-flex">
				<div class="card radius-10 w-100 overflow-hidden">
					<div class="card-body">
						<p class="mb-1">Performance geral</p>
						<div class="">
							<h2 class="mb-0">$84,126.5</h2>
							<p class="mb-0">+2.5% vs Ultimo mês</p>
						</div>
					</div>
					<div class="" id="chart9"></div>
				</div>
			</div>
			<div class="col-12 col-xl-8 col-xxl-9 d-flex">
				<div class="card w-100 radius-10">
					<div class="row g-0">
						<div class="col-md-4 border-end">
							<div class="card-body">
								<h5 class="card-title">Texto</h5>
								<h2 class="mt-4 mb-1">25.860 <i class="flag-icon flag-icon-us rounded"></i></h2>
								<p class="mb-0"></p>
							</div>
							<ul class="list-group mt-4 list-group-flush">
								<li class="list-group-item d-flex align-items-center bg-transparent">
									<i class='bx bxs-circle me-1 text-white'></i>
									<span>Massivo</span>
									<strong class="ms-auto">18.4k</strong>
								</li>
								<li class="list-group-item d-flex align-items-center bg-transparent">
									<i class='bx bxs-circle me-1 text-light-2'></i>
									<span>Grande</span>
									<strong class="ms-auto">6.9k</strong>
								</li>
								<li class="list-group-item d-flex align-items-center bg-transparent">
									<i class='bx bxs-circle me-1 text-light-3'></i>
									<span>Médio</span>
									<strong class="ms-auto">5.4k</strong>
								</li>
								<li class="list-group-item d-flex align-items-center bg-transparent">
									<i class='bx bxs-circle me-1 text-light-4'></i>
									<span>Pequeno</span>
									<strong class="ms-auto">875</strong>
								</li>
							</ul>
						</div>
						<div class="col-md-8">
							<div class="p-3">
								<div class="" id="geographic-map-3"></div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div><!--end row-->

		<div class="row">
			<div class="col">
				<div class="card radius-10">
					<div class="card-body">
						<div class="d-flex align-items-center">
							<div>
								<h5 class="mb-1">Recent Orders</h5>
							</div>
							<div class="ms-auto">
								<a href="javscript:;" class="btn btn-light btn-sm radius-30">View All Products</a>
							</div>
						</div>

						<div class="table-responsive mt-3">
							<table class="table align-middle mb-0">
								<thead class="table-light">
									<tr>
										<th>Tracking ID</th>
										<th>Products Name</th>
										<th>Date</th>
										<th>Status</th>
										<th>Price</th>
										<th>Actions</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>#55879</td>
										<td>
											<div class="d-flex align-items-center">
												<div class="recent-product-img">
													<img src="{{ asset('assets/images/products/15.png') }}" alt="">
												</div>
												<div class="ms-2">
													<h6 class="mb-1 font-14">Light Red T-Shirt</h6>
												</div>
											</div>
										</td>
										<td>22 Jun, 2020</td>
										<td class=""><span class="badge bg-light text-white w-100">Completed</span></td>
										<td>#149.25</td>
										<td>
											<div class="d-flex order-actions"> <a href="javascript:;"
													class="text-white bg-light border-0"><i
														class='bx bxs-trash'></i></a>
												<a href="javascript:;" class="ms-4 text-white bg-light border-0"><i
														class='bx bxs-edit'></i></a>
											</div>
										</td>
									</tr>
									<tr>
										<td>#88379</td>
										<td>
											<div class="d-flex align-items-center">
												<div class="recent-product-img">
													<img src="{{ asset('assets/images/products/16.png') }}" alt="">
												</div>
												<div class="ms-2">
													<h6 class="mb-1 font-14">Grey Headphone</h6>
												</div>
											</div>
										</td>
										<td>22 Jun, 2020</td>
										<td class=""><span class="badge bg-light text-white w-100">Cancelled</span></td>
										<td>#149.25</td>
										<td>
											<div class="d-flex order-actions"> <a href="javascript:;"
													class="text-white bg-light border-0"><i
														class='bx bxs-trash'></i></a>
												<a href="javascript:;" class="ms-4 text-white bg-light border-0"><i
														class='bx bxs-edit'></i></a>
											</div>
										</td>
									</tr>
									<tr>
										<td>#68823</td>
										<td>
											<div class="d-flex align-items-center">
												<div class="recent-product-img">
													<img src="{{ asset('assets/images/products/19.png') }}" alt="">
												</div>
												<div class="ms-2">
													<h6 class="mb-1 font-14">Grey Hand Watch</h6>
												</div>
											</div>
										</td>
										<td>22 Jun, 2020</td>
										<td class=""><span class="badge bg-light text-white w-100">Pending</span></td>
										<td>#149.25</td>
										<td>
											<div class="d-flex order-actions"> <a href="javascript:;"
													class="text-white bg-light border-0"><i
														class='bx bxs-trash'></i></a>
												<a href="javascript:;" class="ms-4 text-white bg-light border-0"><i
														class='bx bxs-edit'></i></a>
											</div>
										</td>
									</tr>
									<tr>
										<td>#54869</td>
										<td>
											<div class="d-flex align-items-center">
												<div class="recent-product-img">
													<img src="{{ asset('assets/images/products/07.png') }}" alt="">
												</div>
												<div class="ms-2">
													<h6 class="mb-1 font-14">Brown Sofa</h6>
												</div>
											</div>
										</td>
										<td>22 Jun, 2020</td>
										<td class=""><span class="badge bg-light text-white w-100">Completed</span></td>
										<td>#149.25</td>
										<td>
											<div class="d-flex order-actions"> <a href="javascript:;"
													class="text-white bg-light border-0"><i
														class='bx bxs-trash'></i></a>
												<a href="javascript:;" class="ms-4 text-white bg-light border-0"><i
														class='bx bxs-edit'></i></a>
											</div>
										</td>
									</tr>
									<tr>
										<td>#22536</td>
										<td>
											<div class="d-flex align-items-center">
												<div class="recent-product-img">
													<img src="{{ asset('assets/images/products/17.png') }}" alt="">
												</div>
												<div class="ms-2">
													<h6 class="mb-1 font-14">Black iPhone 11</h6>
												</div>
											</div>
										</td>
										<td>22 Jun, 2020</td>
										<td class=""><span class="badge bg-light text-white w-100">Completed</span></td>
										<td>#149.25</td>
										<td>
											<div class="d-flex order-actions"> <a href="javascript:;"
													class="text-white bg-light border-0"><i
														class='bx bxs-trash'></i></a>
												<a href="javascript:;" class="ms-4 text-white bg-light border-0"><i
														class='bx bxs-edit'></i></a>
											</div>
										</td>
									</tr>
									<tr>
										<td>#25796</td>
										<td>
											<div class="d-flex align-items-center">
												<div class="recent-product-img">
													<img src="{{ asset('assets/images/products/14.png') }}" alt="">
												</div>
												<div class="ms-2">
													<h6 class="mb-1 font-14">Men Yellow T-Shirt</h6>
												</div>
											</div>
										</td>
										<td>22 Jun, 2020</td>
										<td class=""><span class="badge bg-light text-white w-100">Pending</span></td>
										<td>#149.25</td>
										<td>
											<div class="d-flex order-actions"> <a href="javascript:;"
													class="text-white bg-light border-0"><i
														class='bx bxs-trash'></i></a>
												<a href="javascript:;" class="ms-4 text-white bg-light border-0"><i
														class='bx bxs-edit'></i></a>
											</div>
										</td>
									</tr>
									<tr>
										<td>#98754</td>
										<td>
											<div class="d-flex align-items-center">
												<div class="recent-product-img">
													<img src="{{ asset('assets/images/products/08.png') }}" alt="">
												</div>
												<div class="ms-2">
													<h6 class="mb-1 font-14">Grey Stand Table</h6>
												</div>
											</div>
										</td>
										<td>22 Jun, 2020</td>
										<td class=""><span class="badge bg-light text-white w-100">Cancelled</span></td>
										<td>#149.25</td>
										<td>
											<div class="d-flex order-actions"> <a href="javascript:;"
													class="text-white bg-light border-0"><i
														class='bx bxs-trash'></i></a>
												<a href="javascript:;" class="ms-4 text-white bg-light border-0"><i
														class='bx bxs-edit'></i></a>
											</div>
										</td>
									</tr>
								</tbody>
							</table>
						</div>

					</div>
				</div>
			</div>
		</div><!--end row-->

	</div>
</div>
@endsection
@section("script")
<script src="{{ asset('assets/plugins/vectormap/jquery-jvectormap-2.0.2.min.js') }}"></script>
<script src="{{ asset('assets/plugins/vectormap/jquery-jvectormap-world-mill-en.js') }}"></script>
<script src="{{ asset('assets/plugins/highcharts/js/highcharts.js') }}"></script>
<script src="{{ asset('assets/plugins/highcharts/js/exporting.js') }}"></script>
<script src="{{ asset('assets/plugins/highcharts/js/variable-pie.js') }}"></script>
<script src="{{ asset('assets/plugins/highcharts/js/export-data.js') }}"></script>
<script src="{{ asset('assets/plugins/highcharts/js/accessibility.js') }}"></script>
<script src="{{ asset('assets/plugins/apexcharts-bundle/js/apexcharts.min.js') }}"></script>
<script src="{{ asset('assets/js/dashboard-sales.js') }}"></script>
<script>
	// Função para atualizar a hora
	function atualizarHora() {
		fetch('/hora-atual')
			.then(response => response.json())
			.then(data => {
				document.getElementById('hora-atual').textContent = data.hora;
			})
			.catch(error => console.error('Erro ao obter a hora atual:', error));
	}

	// Atualizar a hora a cada segundo
	setInterval(atualizarHora, 1000);

	// Inicializar a hora
	atualizarHora();
</script>
<script>
	new PerfectScrollbar('.customers-list');
	new PerfectScrollbar('.store-metrics');
	new PerfectScrollbar('.product-list-2');
</script>
@endsection