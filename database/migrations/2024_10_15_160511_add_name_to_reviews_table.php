<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::table('reviews', function (Blueprint $table) {
        $table->string('name'); // Adiciona o campo 'name'
    });
}

public function down()
{
    Schema::table('reviews', function (Blueprint $table) {
        $table->dropColumn('name'); // Remove o campo 'name' na reversão
    });
}
};