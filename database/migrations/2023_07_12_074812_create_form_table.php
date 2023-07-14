<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFormTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('form', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('from_id')->nullable();
            $table->foreign('from_id')->references('id')->on('users');
            $table->unsignedBigInteger('departement_id')->nullable();
            $table->foreign('departement_id')->references('id')->on('departement')->onDelete('cascade');
            $table->string('to')->nullable();
            $table->string('ketegori_pengajuan');
            $table->string('tanggal_kebutuhan');
            $table->string('payment');
            $table->string('description');
            $table->string('description2')->nullable();
            $table->string('description3')->nullable();
            $table->string('description4')->nullable();
            $table->string('description5')->nullable();
            $table->string('description6')->nullable();
            $table->string('description7')->nullable();
            $table->string('description8')->nullable();
            $table->string('unit');
            $table->string('unit2')->nullable();
            $table->string('unit3')->nullable();
            $table->string('unit4')->nullable();
            $table->string('unit5')->nullable();
            $table->string('unit6')->nullable();
            $table->string('unit7')->nullable();
            $table->string('unit8')->nullable();
            $table->string('qty');
            $table->string('qty2')->nullable();
            $table->string('qty3')->nullable();
            $table->string('qty4')->nullable();
            $table->string('qty5')->nullable();
            $table->string('qty6')->nullable();
            $table->string('qty7')->nullable();
            $table->string('qty8')->nullable();
            $table->string('price');
            $table->string('price2')->nullable();
            $table->string('price3')->nullable();
            $table->string('price4')->nullable();
            $table->string('price5')->nullable();
            $table->string('price6')->nullable();
            $table->string('price7')->nullable();
            $table->string('price8')->nullable();
            $table->string('total');
            $table->string('total2')->nullable();
            $table->string('total3')->nullable();
            $table->string('total4')->nullable();
            $table->string('total5')->nullable();
            $table->string('total6')->nullable();
            $table->string('total7')->nullable();
            $table->string('total8')->nullable();
            $table->string('jumlah_total');
            $table->string('status')->nullable();
            $table->string('checked_by')->nullable();
            $table->date('checked_date')->nullable();
            $table->string('approve_by')->nullable();
            $table->date('approve_date')->nullable();
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
        Schema::dropIfExists('form');
    }
}