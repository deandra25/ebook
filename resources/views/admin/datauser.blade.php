<x-layout-app title="Data User">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <div class="app-content pt-0 p-md-3 p-lg-4">
		@if (Session::get('success'))
			<div class="alert alert-success">
				{{ Session::get('success') }}
			</div>
			@endif
		<div class="container-xl">
			<div class="app-card alert alert-dismissible shadow-sm mb-4 border-left-decoration" role="alert">
				<div class="inner">
					<div class="app-card-body  p-lg-0">
						<h3 class="mb-3">Data User</h3>
					</div>
				</div>
			</div>

			{{-- <div class="app-card alert alert-dismissible shadow-sm mb-4 border-left-decoration" role="alert"> --}}
				<div class="inner">
					<div class="app-card-body  p-lg-0">
						<a href="{{url('/admin/printuser')}}"><button type="submit" class="btn btn-success">Download PDF</button></a>
						{{-- <a href="{{url('/admin/printuser')}}"><button type="submit" class="btn btn-warning">Download Excel</button></a>   --}}
					</div>
				</div>
			{{-- </div> --}}

			<br>

			@if (Session::get('successDelete'))
            <div class="alert alert-success">
                 {{ Session::get('successDelete') }}
            </div>
            @endif

			<div class="app-card">
				<table class="table table-hover shadow-sm">
					<thead>
						<tr>
							<th scope="col">No</th>
							<th scope="col">Name</th>
							<th scope="col">Address</th>
							<th scope="col">No Handphone</th>
							<th scope="col">Email</th>
                            <th scope="col">Action</th>
							<th scope="col"></th>
						
							
						</tr>

                        @foreach ($users as $user )
                            
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td> {{$user->name}} </td>
                            <td> {{$user->address}} </td>
                            <td> {{$user->phone_number}} </td>
                            <td> {{$user->email}} </td>
                            <td><a href="/admin/edit_datauser/{{$user['id']}}" type="submit" class="btn btn-warning" style="background-color: orange" > Edit </a></td>
							<td>
								<form action="{{ route('delete_datauser', $user['id']) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn" style="background-color:red;">Delete</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
					</thead>
					<tbody>
				
					</tbody>
				</table>
			</div>
		</div>
	</div>

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
</x-layout-app>