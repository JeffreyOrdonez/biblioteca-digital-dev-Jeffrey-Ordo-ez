<h1>Usuarios</h1>
<table border="1" cellpadding="5">
    <thead>
    <tr>
        <th>ID</th>
        <th>Nombre</th>
        <th>Apellido</th>
        <th>Email</th>
        <th>Tipo</th>
    </tr>
    </thead>
    <tbody>
        @foreach($usuarios as $usuarios)
        <tr>
            <td>{{$usuarios->usuario_id}}</td>
            <td>{{$usuarios->nombre}}</td>
            <td>{{$usuarios->apellido}}</td>
            <td>{{$usuarios->email}}</td>
            <td>{{$usuarios->tipo}}</td>

        
        </tr>
        @endforeach
    </tbody>
</table>