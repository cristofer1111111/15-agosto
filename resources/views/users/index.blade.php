<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <br>
                <a href="{{url('users/create')}}" class="btn btn-primary">Crear Nuevo Usuario</a>
                @if (session('status'))
                <div class="alert alert-success mt-3">
                    {{session('status')}}
                </div>
                @endif
                <div class="table-responsive">
                    <table class="table table-striped mt-2">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>NOMBRES</th>
                                <th>APELLIDOS</th>
                                <th>CORREO</th>
                                <th>FECHA DE CREACION</th>
                                <th>FECHA DE ACTUALIZACION</th>
                                <th>ACCIONES</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($users as $user)
                            <tr>
                                <th>{{$user->id}}</th>
                                <th>{{$user->name}}</th>
                                <th>{{$user->lastnames}}</th>
                                <th>{{$user->email}}</th>
                                <th>{{$user->created_at}}</th>
                                <th>{{$user->updated_at}}</th>
                                <td>
                                    <form action="{{route('users.destroy',$user->id)}}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <a class="btn btn-sm btn-info" href="{{route('users.show',$user->id)}}">detalles</a>
                                        <a class="btn btn-sm btn-warning" href="{{route('users.edit',$user->id)}}">editar</a>
                                        <button class="btn btn-sm btn-danger" type="submit">eliminar</button>
                                    </form>   
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                {{$users->links()}}    
            </div>
        </div>
    </div>
</body>
</html>