<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Importação do tailwind e do daisy -->
    <link href="https://cdn.jsdelivr.net/npm/daisyui@3.7.7/dist/full.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>

    <title>Lista de usuários</title>
</head>
<body>
    <h1 class="w-full text-center">Lista de Usuários </h1>

    <div class="overflow-x-auto">
  <table class="table table-zebra">
    <!-- head -->
    <thead>
      <tr>
        <th>Usuário</th>
        <th>Name</th>
        <th>Email</th>
      </tr>
    </thead>
    <tbody>

        @foreach ($usuarios as $usuario)
      <tr>
        <th>{{$usuario->usuario}}</th>
        <td>{{$usuario->name}}</td>
        <td>{{$usuario->email}}</td>
      </tr>
        @endforeach


    </tbody>
  </table>
</div>
</body>
</html>