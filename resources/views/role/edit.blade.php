<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit</title>
</head>
<body>
    <div class="container">
        <div class="row">

              <h1>Mijoz</h1>
              <hr>
                <form action="{{ route('d',$edit->id) }}" method="POST">
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
                    {{-- @method('PUT') --}}
                    <input type="hidden" name="id" id="" value="{{ $edit->id }}">
                    <input type="text" name="name" id="" value="{{ $edit->name }}">
                    <input type="email" name="email" id="" value="{{ $edit->email }}">
                    <input type="text" name="password" id="" value="{{ $edit->password }}">
                    <input type="checkbox" name="role" id="" value="{{ $edit->role }}">
                    <input type="submit" name="" id="">
                </form>
         
      
             
        </div>
    </div>
   

</body>
</html>