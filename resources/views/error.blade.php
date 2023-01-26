@extends('main')

@section('content')

            <center>
                <img src="{{asset('assets/img/error.jpg')}}" alt="" srcset="" width="300">
                <br>
                <h3>Anda tidak diperbolehkan mengakses halaman ini.</h3>
                <br>
                @if (Auth::user()->role == 'admin')
                <div class="tombol">
                    <a href="{{route('admin')}}" class="btn btn-primary">Kembali</a>
                </div>
                @elseif (Auth::user()->role == 'user')
                <div class="tombol">
                    <a href="{{route('dashboard.users')}}" class="btn btn-primary">Kembali</a>
                </div>
                @endif
            </center>

@endsection