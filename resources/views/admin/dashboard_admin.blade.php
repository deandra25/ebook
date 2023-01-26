<x-layout-app title="Dashboard Admin">
	<div class="app-content pt-3 p-md-3 p-lg-4">
		<div class="container-xl">

				<h1 class="app-page-title">Admin Dashboard</h1>

			<div class="app-card alert alert-dismissible shadow-sm mb-4 border-left-decoration" role="alert">
				<div class="inner">
					<div class="app-card-body p-3 p-lg-4">
						<h3 class="mb-3">Hi {{Auth::user()->name}}!</h3>
						<div class="row gx-5 gy-3">
							<div class="col-12 col-lg-9">
								<div>Selamat Datang!</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			@if (Session::get('success'))
			<div class="alert alert-success">
				{{ Session::get('success') }}
			</div>
			@endif

		</div>
	</div>
</x-layout-app>