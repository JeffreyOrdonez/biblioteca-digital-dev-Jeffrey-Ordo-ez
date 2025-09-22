<h1>Prestamos</h1>
<table border="1" cellpadding="5">
    <thead>
    <tr>
        <th>ID</th>
        <th>Usuario ID</th>
        <th>Libro ID</th>
        <th>Fecha de Préstamo</th>
        <th>Fecha de Devolución</th>
        <th>Fecha real de Devolución</th>
        <th>Estado</th>
    </tr>
    </thead>
    <tbody>
        @foreach($prestamos as $prestamo)
        <tr>
            <td>{{$prestamo->prestamo_id}}</td>
            <td>{{$prestamo->usuario_id}}</td>
            <td>{{$prestamo->libro_id}}</td>
            <td>{{$prestamo->fecha_prestamo}}</td>
            <td>{{$prestamo->fecha_devolucion}}</td>
            <td>{{$prestamo->fecha_devolucion_real}}</td>
            <td>{{$prestamo->estado}}</td>
        </tr>
        @endforeach
    </tbody>
</table>

    </tbody>
</table>