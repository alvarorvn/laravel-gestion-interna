<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Clientes</title>
</head>
<body>
  <h1>Listado de clientes</h1>

  @if(session('success'))
    <p style="color:green">{{ session('success') }}</p>
  @endif

  <a href="{{ route('clientes.create') }}">Crear nuevo cliente</a>

  <table border="1" cellpadding="5">
    <tr>
      <th>Nombre</th>
      <th>Email</th>
      <th>Teléfono</th>
    </tr>

    @foreach($clientes as $cliente)
      <tr>
        <td>{{ $cliente->nombre }}</td>
        <td>{{ $cliente->email }}</td>
        <td>{{ $cliente->telefono }}</td>
      </tr>
    @endforeach
  </table>
</body>
</html>