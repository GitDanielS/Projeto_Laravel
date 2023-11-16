<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

// Comandos executados no terminal
// Para criar o banco no laravel usa o comando "php artisan migrate"
// para atualizar usa o comando "php artisan migrate:refresh"
// Para criar uma nova tabela usa o comando "php artisan make:migration nome da Tabela"
// Para criação de coluna utiliza $table->string(email) tudo na ordem $table->tipodacoluna(nome da coluna);
// Para criar uma view pelo terminal usa o comando php artisan make:view inicial 

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('usuario');
            $table->string('foto')->nullable();
            $table->string('bio')->nullable();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
