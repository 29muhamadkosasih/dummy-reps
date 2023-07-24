<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDepartementTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('departement', function (Blueprint $table) {
            $table->id();
            $table->enum('nama_departement', [
                'TDP-Marketing',
                'TDP-Admin',
                'TDP-Operation',
                'TDP-General Affair',
                'TDP-Finance',
                'TDP-LSP',
                'TDP-HR',
                'TDP-Business Development',
                'MK3-Admin',
                'MK3-Operation',
                'MK3-General',
                'TTI-Admin',
                'TTI-Marketing',
                'TTI-Project',
                'TTI-General',
                'TKKI-Admin',
                'TKKI-Marketing',
                'TKKI-General',
                'TKKI-Project',
                'TIDP-Project',
                'TIDP-General',
                'TK2I-Project',
                'TK2I-General',
            ]);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('departement');
    }
}