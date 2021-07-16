
@extends("layouts.dashboard")
@section("content")

<table class="table table-bordered">
    <tr>

        <th>Id de reserva</th>
        <th>Id de usuario</th>
        <th>Nombre</th>
        <th>id de hotel</th>
        <th>Fecha Inicio</th>
        <th>Fecha final</th>
    </tr>
    @foreach ($rsrv as $post)
    <tr>
        <td>{{ $post->id }}</td>
        <td>{{ $post->user_id }}</td>
        <td>{{ $post->nombre}}</td>
        <td>{{ $post->hotel }}</td>
        <td>{{ $post->fechaInicio }}</td>
        <td>{{ $post->fechaFinal}}</td>

        <td>
             <a class="btn btn-info" href="{{route('reserva.show',$post->id)}}">Show</a>
                <a class="btn btn-primary" href="{{route('reserva.edit',$post->id)}}">Edit</a>
            <form action="" method="POST">

                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>
@endsection
