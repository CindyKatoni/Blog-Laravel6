<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTagsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tags', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique();
            $table->timestamps();
        });

        //Pivot table linking the two tables(article and user.) convenction for naming article_tag
        Schema::create('article_tag', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('article_id')->unsigned()->index()->nullable();
            $table->bigInteger('tag_id')->unsigned()->index()->nullable();
            $table->timestamps();

            $table->unique(['article_id', 'tag_id']); //Ensures no duplication

            $table->foreign('article_id')->references('id')->on('articles')->onDelete('cascade');
            $table->foreign('tag_id')->references('id')->on('tags')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tags');
    }
}
