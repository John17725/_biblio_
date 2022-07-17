<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->mediumText('title');
            $table->mediumText('author');
            $table->mediumText('pages');
            $table->mediumText('ISBN');
            $table->mediumText('edition');
            $table->bigInteger('pieces');
            $table->mediumText('clasification');
            $table->mediumText('editorial');
            $table->mediumText('place');
            $table->bigInteger('serialnumber');
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
        Schema::dropIfExists('books');
    }
}
