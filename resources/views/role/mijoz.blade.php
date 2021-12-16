<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Role</title>
</head>
<body>
    <div class="container">
        <div class="row">

              <h1>Mijoz</h1>
              <hr>
                <form action="{{ route('b') }}" method="POST">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    @csrf
                    <input type="text" name="name" id="" placeholder="Ismingiz">
                    <input type="email" name="email" id="" placeholder="Emailinggiz">
                    <input type="password" name="password" id="" placeholder="Parolinggiz">
                    <input type="checkbox" name="role" value="1">  Vazifangiz:
                    <input type="submit" name="" id="">
                </form>
                <br>
              <hr>
      
            <table class="table table-dark table-striped">
             
                @foreach ($a as $b)
                <tr>
                    <td>{{ $b->id }}</td>
                    <td>{{ $b->name }}</td>
                    <td>{{ $b->email }}</td>
                    <td>{{ $b->password }}</td>
                    @if ($b->role==1)
                    <td><a href="c/{{$b->id}}" class="btn btn-success">Show</a></td>
                    <td><a href="ce/{{$b->id}}/edit" class="btn btn-info">Edit</a></td>
                    
                    @else
                        <td><a class="btn btn-dark">Show</a></td>
                        <td><a class="btn btn-dark">Edit</a></td>
                     
                    @endif
                    
                </tr>
                @endforeach
              </table>
              {{ $a->links() }}
     
             
        </div>
    </div>
   

</body>
</html>