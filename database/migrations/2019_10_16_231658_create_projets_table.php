<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::disableForeignKeyConstraints();
        Schema::create('projets', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('author');
            $table->string('title');
            $table->string('sub_title');
            $table->string('article');
            $table->string('sub_article');
            $table->timestamps();
            $table->unsignedBigInteger('category_id');
            $table->foreign('category_id')
                ->references('id')
                ->on('categories')
                ->onDelete('restrict')
                ->onUpdate('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('projets');
    }
}
