<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */


     // crea tabella
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            //creazione colonne tabella specificando tipo di dato
            $table->id(); 
            $table->string('name');
            $table->text('description');
            $table->float('price', 6,2); //nome colonna, MAX caratteri,n decimali
            $table->timestamps(); // colonna data creazione & data di modifica

           
        });
        // x lanciare la funzione up e quindi creare la tabella lanciare : php artisan migrate
    }

    /**
     * Reverse the migrations.
     */

     // cancella tabella
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
