<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Editar Cliente</title>
</head>
<body>
  <h1>Editar Cliente</h1>

  @if ($errors->any())
    <ul style="color:red">
      @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
      @endforeach
    </ul>
  @endif

  <form method="POST" action="{{ route('clientes.update', $cliente) }}">
    @csrf
    @method('PUT')

    <div>
      <label>Nombre</label><br>
      <input type="text" name="nombre" value="{{ old('nombre', $cliente->nombre) }}">
    </div>

    <div>
      <label>Email</label><br>
      <input type="email" name="email" value="{{ old('email', $cliente->email) }}">
    </div>

    <div>
      <label>Teléfono</label><br>
      <input type="text" name="telefono" value="{{ old('telefono', $cliente->telefono) }}">
    </div>

    <br>
    <button type="submit">Actualizar</button>
  </form>

  <a href="{{ route('clientes.index') }}">Volver</a>
</body>
</html>