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

              <h1>Mijoz Malumotlari</h1>
                <hr>
                <ol>
                    <li>Ismingiz: {{ $show->name }}</li>
                    <li>Emailinggiz: {{ $show->email }}</li>
                    <li>Parolingiz: {{ $show->password }}</li>
                    <li>
                        Status: @if ($show->role == 1)
                        Aktive
               

                    @endif
                    </li>
                </ol>
      
     
             
        </div>
    </div>
   

</body>
</html>