<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->string('name',100)->nullable();
            $table->string('url',100)->nullable();
            $table->text('description')->nullable();
            $table->integer('parent_id')->nullable();
            $table->string('template_layout_file',100)->nullable();
            $table->string('sort_order',100)->nullable();
            $table->string('default_product_sort',100)->nullable();
            $table->string('category_image',100)->nullable();
            $table->string('page_title',100)->nullable();
            $table->string('meta_keywords',100)->nullable();
            $table->string('meta_description',100)->nullable();
            $table->string('search_keywords',100)->nullable();
            $table->string('creator',100)->nullable();
            $table->string('slug',100)->nullable();
            $table->integer('status')->default(1);
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
        Schema::dropIfExists('categories');
    }
}
