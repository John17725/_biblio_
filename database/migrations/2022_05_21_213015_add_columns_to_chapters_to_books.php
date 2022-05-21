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
            $table->text('capitulo_1')->after('serialnumber');
            $table->text('capitulo_2')->after('capitulo_1');
            $table->text('capitulo_3')->after('capitulo_2');
            $table->text('capitulo_4')->after('capitulo_3');
            $table->text('capitulo_5')->after('capitulo_4');
            $table->text('capitulo_6')->after('capitulo_5');
            $table->text('capitulo_7')->after('capitulo_6');
            $table->text('capitulo_8')->after('capitulo_7');
            $table->text('capitulo_9')->after('capitulo_8');
            $table->text('capitulo_10')->after('capitulo_9');
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
