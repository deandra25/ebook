<x-layout-app title="Data Category">
	<div class="app-content pt-0 p-md-3 p-lg-4">
		<div class="container-xl">
			<div class="app-card alert alert-dismissible shadow-sm mb-4 border-left-decoration" role="alert">
				<div class="inner">
					<div class="app-card-body  p-lg-0">
						<h3 class="mb-3">Create Category</h3>
					</div>
				</div>
			</div>

            @if (Session::get('success'))
			<div class="alert alert-success">
				{{ Session::get('success') }}
			</div>
			@endif
            @if (Session::get('successDelete'))
            <div class="alert alert-success">
                 {{ Session::get('successDelete') }}
            </div>
            @endif
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif

            <div class="card mt-2 mx-auto p-4 bg-light">
                <form method="POST" action="{{ route('create_category') }}" id="create-form">
                    @csrf
                    <div class="landing py-2"><b><h3>Form Create Book</h3></b></div>

                    <div class="controls">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="form_name">Category Name</label>
                                    <input id="form_name" type="text" name="category_name" class="form-control"
                                        required="required" data-error="Firstname is required.">
                                </div>
                            </div>
                            
                            <br>

                            <div class="row">
                                <div class="col-md-12"><br>
                                    <button type="submit" id="contactus-submit" class="btn-success btn-lg btn"
                                        action="/" style="background-color:dodgerblue">Submit</button>
                                    <a href="/admin" class="btn-dark btn-lg btn" style="background-color: gray">Cancel</a>
                                </div>
                            </div>


                        </div>
                </form>
            </div>

        </div>

        <br>

            <div class="app-card">
                <table class="table table-hover shadow-sm">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">ID</th>
                            <th scope="col">Category Name</th>
                            <th scope="col">Action</th>
                        </tr>

                        @foreach($categories as $c)
                            
                        <tr>
                            <td>{{$loop->iteration}}</td>   
                            <td>{{$c->id}}</td>
                            <td>{{$c->category_name}}</td>
                            <td>
                                <form action="{{ route('delete_category', $c['id']) }}" method="POST">
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
    <!-- /.8 -->

</div>
<!-- /.row-->

</div>

</x-layout-app>
