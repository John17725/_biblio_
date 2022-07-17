<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnsToChaptersToBooks extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('books', function (Blueprint $table) {
            $table->longText('capitulo_1')->after('serialnumber')->nullable();
            $table->longText('capitulo_2')->after('capitulo_1')->nullable();
            $table->longText('capitulo_3')->after('capitulo_2')->nullable();
            $table->longText('capitulo_4')->after('capitulo_3')->nullable();
            $table->longText('capitulo_5')->after('capitulo_4')->nullable();
            $table->longText('capitulo_6')->after('capitulo_5')->nullable();
            $table->longText('capitulo_7')->after('capitulo_6')->nullable();
            $table->longText('capitulo_8')->after('capitulo_7')->nullable();
            $table->longText('capitulo_9')->after('capitulo_8')->nullable();
            $table->longText('capitulo_10')->after('capitulo_9')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('books', function (Blueprint $table) {
            //
        });
    }
}
