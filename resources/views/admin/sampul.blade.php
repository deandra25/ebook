<x-layout-app title="Sampul Buku">


<div class="row" style="margin-top: 20px; margin-right: 20px;">
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-bodyx">
                <div class="rounded shadow p-1 bg-dark"></div><br>
                <p style="margin-left: 20px; font-weight:bold">Sampul Buku</p>
                <img src="{{asset('assets/img/' . $books->cover_book)}}" width="500px" alt="">
                      <div class="=ml-md-2">
                        <a href="{{'/admin'}}"><i class="fa-solid fa-arrow-left mr-2"></i>Back</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-layout-app>
