<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToFormTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('form', function (Blueprint $table) {
            $table->string('image8')->nullable()->after('file');
            $table->string('image7')->nullable()->after('file');
            $table->string('image6')->nullable()->after('file');
            $table->string('image5')->nullable()->after('file');
            $table->string('image4')->nullable()->after('file');
            $table->string('image3')->nullable()->after('file');
            $table->string('image2')->nullable()->after('file');
            $table->string('image1')->nullable()->after('file');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            //
        });
    }
}
