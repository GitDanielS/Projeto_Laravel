<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Importação do tailwind e do daisy -->
    <link href="https://cdn.jsdelivr.net/npm/daisyui@3.7.7/dist/full.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>

    <title>Cadastro de Usuarios</title>
</head>
<body>
  <h1 class="w-full text-center font-bold mt-6">Cadastro de Usuários</h1>

  <form action="{{route('salva-usuario')}}" method="post" class="form-control max-w-md m-auto">

  @csrf

    <div class="form-control">
      <label class="label">
      <span class="label-text font-bold">Usuário</span>
      </label>
      <input name="usuario" type="text" placeholder="Usuário" class="input input-bordered" required />
    </div>

    <div class="form-control">
      <label class="label">
      <span class="label-text font-bold">Nome</span>
      </label>
      <input name="nome" type="text" placeholder="Nome" class="input input-bordered" required />  
    </div>

    <div class="form-control">
      <label class="label">
      <span class="label-text font-bold">E-mail</span>
      </label>
      <input name="email" type="email" placeholder="E-mail" class="input input-bordered" required />  
    </div>
    
    <div class="form-control">
      <label class="label">
      <span class="label-text font-bold">Senha</span>
      </label>
      <input name="senha" type="password" placeholder="Senha" class="input input-bordered" required />  
    </div>

    <div class="form-control">
      <label class="label">
      <span class="label-text font-bold">Bio</span>
      </label>
      <input name="bio" type="text" placeholder="Bio" class="input input-bordered" required />  
    </div>

    <br>  
    <button class="text-white bg-gradient-to-br from-purple-600 to-blue-500 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">Salvar</button>

  </form>

 
</body>
</html>