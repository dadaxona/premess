<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
 {{-- <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script> --}}
  
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
   
    <title>Admin</title>
</head>
<body>
    <div class="container">
        <div class="row">

              <h1>Admin</h1>
                <hr>

                @if (Session::has('success'))

                <div class="alert alert-success text-center">              
    
                    <p>{{ Session::get('success') }}</p>
    
                </div>
    
            @endif  

            @if (Session::has('neaktiv'))

            <div class="alert alert-danger text-center">              

                <p>{{ Session::get('neaktiv') }}</p>

            </div>

        @endif  
            <table class="table table-dark table-striped">
                <tr>
                    <td><h5>ID</h5></td>
                    <td><h5>Name</h5></td>
                    <td><h5>Email</h5></td>
                    <td><h5>Parol</h5></td>
                    <td><h5>Status</h5></td>
                    <td><h5>Aktve</h5></td>
                    <td><h5>Neaktiv</h5></td>
                    
                </tr>
                @foreach ($a as $b)
                <tr>
                    <td>{{ $b->id }}</td>
                    <td>{{ $b->name }}</td>
                    <td>{{ $b->email }}</td>
                    <td>{{ $b->password }}</td>
                    <td>
                        @if ($b->role == 1)
                        <p style="color: rgb(14, 218, 14)">Aktive</p>
                        @else
                                                   
                        @endif
                    </td>
                    <td>
                       <form action="{{ route('aktive') }}" method="POST">
                        @csrf
                           <input type="hidden" name="id" value="{{ $b->id }}">
                            <button type="submit" class="btn btn-primary">Aktive</button>               
                    </form>
                                 
                      </td>
                      <td>
                        <form action="{{ route('neaktiv') }}" method="POST">
                            @csrf
                            <input type="hidden" name="id" value="{{ $b->id }}">
                             <button type="submit" class="btn btn-danger">Neaktive</button>
                        </form>    
                      </td>
                </tr>
                @endforeach
              </table>
              {{ $a->links() }}
     
             
        </div>
    </div>


</body>
</html>