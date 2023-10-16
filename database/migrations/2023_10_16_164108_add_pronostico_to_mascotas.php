<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddPronosticoToMascotas extends Migration
{
    public function up()
    {
        Schema::table('mascotas', function (Blueprint $table) {
            $table->enum('pronostico', ['Bueno', 'En observación', 'Reservado'])->nullable();
        });
    }

    public function down()
    {
        Schema::table('mascotas', function (Blueprint $table) {
            $table->dropColumn('pronostico');
        });
    }
}
