<x-layout-app title="Data Category">
	<div class="app-content pt-0 p-md-3 p-lg-4">
		<div class="container-xl">
			<div class="app-card alert alert-dismissible shadow-sm mb-4 border-left-decoration" role="alert">
				<div class="inner">
					<div class="app-card-body  p-lg-0">
						<h3 class="mb-3">Update User</h3>
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
                <form method="POST" action="{{ route('update_datauser' , $users['id'])}}" id="create-form">
                    @csrf
                    @method('PATCH')
                    <div class="landing py-2"><b><h3>Form Update Data User</h3></b></div>

                    <div class="controls">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="form_name">Name</label>
                                    <input id="form_name" type="text" name="name" class="form-control"
                                        required="required" data-error="Firstname is required.">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="form_name">Email</label>
                                    <input id="form_name" type="text" name="email" class="form-control"
                                        required="required" data-error="Firstname is required.">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="form_name">Address</label>
                                    <input id="form_name" type="text" name="address" class="form-control"
                                        required="required" data-error="Firstname is required.">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="form_name">Phone Number</label>
                                    <input id="form_name" type="number" name="phone_number" class="form-control"
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

    </div>
    <!-- /.8 -->

</div>
<!-- /.row-->

</div>

</x-layout-app>
