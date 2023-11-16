<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.css"  rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Nova Postagem</title>
</head>
<body>
    <div class="m-4 font-bold text-2xl">Faça uma nova Postagem</div>

    {{-- <form action="/salva-post" method="post">
        @csrf
        <textarea name="mensagem" id="mensagem" cols="30" rows="10"></textarea>
        <button type="submit">Postar</button>
    </form>

     --}}
    <form action="/salva-post" method="post">
        @csrf
        <div class="w-[90%] mb-4 border border-gray-200 rounded-lg bg-gray-50 dark:bg-gray-700 dark:border-gray-600 m-3">
            <div class="px-4 py-2 bg-white rounded-t-lg dark:bg-gray-800">
                <label for="comment" class="sr-only">Seu comentario</label>
                <textarea name="mensagem" id="mensagem" cols="30" rows="10" class="w-full px-0 text-sm text-gray-900 bg-white border-0 dark:bg-gray-800 focus:ring-0 dark:text-white dark:placeholder-gray-400" placeholder="esxcreva um comentario..." required></textarea>
            </div>
            <div class="flex items-center justify-between px-3 py-2 border-t dark:border-gray-600">
                <button type="submit" class="inline-flex items-center py-2.5 px-4 text-xs font-medium text-center text-white bg-blue-700 rounded-lg focus:ring-4 focus:ring-blue-200 dark:focus:ring-blue-900 hover:bg-blue-800">
                    Postar comentario
                </button>
            </div>
        </div>
    </form>
</body>
</html>