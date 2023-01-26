<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Data User</title>
</head>
<body>
    <h3>Data Lengkap User</h3>
    <div class="app-card">
        <table class="table table-hover shadow-sm">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Address</th>
                    <th scope="col">No Handphone</th>
                    <th scope="col">Email</th>

                
                    
                </tr>

                @foreach ($users as $user )
                    
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td> {{$user->name}} </td>
                    <td> {{$user->address}} </td>
                    <td> {{$user->phone_number}} </td>
                    <td> {{$user->email}} </td>
                </tr>
                @endforeach
            </thead>
            <tbody>
        
            </tbody>
        </table>
    </div>

    <script>
        window.print();
    </script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
</body>
</html>