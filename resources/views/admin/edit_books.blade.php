<x-layout-app title="Data Books">
	<div class="app-content pt-0 p-md-3 p-lg-4">
		<div class="container-xl">
			<div class="app-card alert alert-dismissible shadow-sm mb-4 border-left-decoration" role="alert">
				<div class="inner">
					<div class="app-card-body  p-lg-0">
						<h3 class="mb-3">Update Book</h3>
					</div>
				</div>
			</div>

            @if (Session::get('success'))
			<div class="alert alert-success">
				{{ Session::get('success') }}
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
                                <form method="POST" enctype="multipart/form-data" action="{{ route('update_books' , $books['id'])}}" id="create-form">
                                    @csrf
                                    @method('PATCH')
                                    <div class="landing py-2"><b><h3>Form Update Book</h3></b></div>
        
                                    <div class="controls">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="form_name">Title</label>
                                                    <input id="form_name" type="text" name="title" class="form-control"
                                                        required="required" data-error="Firstname is required.">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="form_name">Writer</label>
                                                    <input id="form_name" type="text" name="writer" class="form-control"
                                                        required="required" data-error="Firstname is required.">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="form_name">Publisher</label>
                                                    <input id="form_name" type="text" name="publisher" class="form-control"
                                                        required="required" data-error="Firstname is required.">
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="form_name">No ISBN</label>
                                                    <input id="form_name" type="number" name="no_isbn" class="form-control"
                                                        required="required" data-error="Firstname is required.">
                                                </div>
                                            </div>

                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="form_name">Category</label>
                                                    <select name="category_book" class="form-control w-100" id="category" value="" >
                                                        @foreach($categories as $c)
                                                        <option name="category_book" hidden=""></option>
                                                        <option name="category_book" value="{{$c->category_name}}">{{$c->category_name}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="form_message">Synopsis</label>
                                                    <textarea id="form_message" name="synopsis" class="form-control"
                                                         rows="4" required="required"
                                                        data-error="Please, leave us a message."></textarea>
                                                </div>
                                            </div>
                                            <div class="form-group mb-3">
                                                <label for="cover_book">Cover Book</label>
                                                <input type="file" name="cover_book" class="form-control" id="cover_book">
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