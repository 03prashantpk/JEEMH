<!DOCTYPE html>
<html lang="en">

@include('admin.components.head', ['title' => 'Dashboard'])

<body>
	<div class="container-scroller">

		<!-- partial:partials/_horizontal-navbar.html -->

		@include('admin.components.navbar')


		<!-- partial -->

		<div class="container-fluid page-body-wrapper">
			<div class="main-panel">
				<div class="content-wrapper">

					<div class="col-lg-12 d-flex align-items-center justify-content-center">
						<div class="row">
							<div class="col-lg-4 d-flex grid-margin stretch-card">
								<div class="card bg-primary">
									<div class="card-body text-white">
										<h3 class="font-weight-bold mb-3">18,39 (75GB)</h3>
										<div class="progress mb-3">
											<div class="progress-bar  bg-warning" role="progressbar" style="width: 40%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
										</div>
										<p class="pb-0 mb-0">Bandwidth usage</p>
									</div>
								</div>
							</div>
							<div class="col-lg-4 d-flex grid-margin stretch-card">
								<div class="card sale-diffrence-border">
									<div class="card-body">
										<h2 class="text-dark mb-2 font-weight-bold">$6475</h2>
										<h4 class="card-title mb-2">Sales Difference</h4>
										<small class="text-muted">APRIL 2019</small>
									</div>
								</div>
							</div>
							<div class="col-lg-4 d-flex grid-margin stretch-card">
								<div class="card sale-visit-statistics-border">
									<div class="card-body">
										<h2 class="text-dark mb-2 font-weight-bold">$3479</h2>
										<h4 class="card-title mb-2">Visit Statistics</h4>
										<small class="text-muted">APRIL 2019</small>
									</div>
								</div>
							</div>
							<div class="col-lg-4 d-flex grid-margin stretch-card">
								<div class="card sale-visit-statistics-border">
									<div class="card-body">
										<h2 class="text-dark mb-2 font-weight-bold">$3479</h2>
										<h4 class="card-title mb-2">Visit Statistics</h4>
										<small class="text-muted">APRIL 2019</small>
									</div>
								</div>
							</div>
							<div class="col-lg-8 d-flex grid-margin stretch-card">
								<div class="card sale-visit-statistics-border">
									<div class="card-body">
										<h2 class="text-dark mb-2 font-weight-bold">$3479</h2>
										<h4 class="card-title mb-2">Visit Statistics</h4>
										<small class="text-muted">APRIL 2019</small>
									</div>
								</div>
							</div>
						</div>
					</div>




				</div>
				<!-- content-wrapper ends -->

				<!-- Footer -->
				@include('admin.components.footer')

				<!-- partial -->
			</div>
			<!-- main-panel ends -->
		</div>
		<!-- page-body-wrapper ends -->
	</div>
	<!-- container-scroller -->

	@include('admin.components.scriptsLists')

</body>

</html>