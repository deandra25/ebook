<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Data Buku</title>
</head>
<body>
    <h3>Data Lengkap Buku</h3>
    <div class="app-card">
        <table class="table table-hover shadow-sm">
            <thead>
                <tr>
                    <th scope="col">Title</th>
                    <th scope="col">Writer</th>
                    <th scope="col">Publisher</th>
                    <th scope="col">No ISBN</th>
                    <th scope="col">Category</th>
                    <th scope="col">Synopsis</th>
                    <th scope="col">Cover Book</th>
                    <th scope="col">Action</th>
                    <th scope="col"></th>
                </tr>

                @foreach ($books as $b )
                    
                <tr>
                    <td>{{$b->title}}</td>
                    <td>{{$b->writer}}</td>
                    <td>{{$b->publisher}}</td>
                    <td>{{$b->no_isbn}}</td>
                    <td>{{$b->category_book}}</td>
                    <td>{{$b->synopsis}}</td>
                    <td><img src="{{asset('assets/img/'.$b->cover_book)}}" width="500px" alt=""></td>

    {{-- <script>
        window.print();
    </script> --}}
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
</body>
</html>