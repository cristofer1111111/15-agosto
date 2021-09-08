<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <title>ELEMENTO</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <form action="{{route('users.update',$user->id)}}" method="post">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="">Nombre</label>
                        <input type="text" class="form-control" name="name" value="{{$user->name}}">
                    </div>
                    <div class="form-group">
                        <label for="">Apellidos</label>
                        <input type="text" class="form-control" name="lastnames" value="{{$user->lastnames}}">
                    </div>
                    <div class="form-group">
                        <label for="">CORREO</label>
                        <input type="text" class="form-control" name="email" value="{{$user->email}}">
                    </div><br>
                    <button class="btm btn-primary">Editar Usuario</button>
                    <a href="{{url('users')}}">Cancelar</a>
            </form>
            </div>
        </div>
    </div>
</body>
</html>