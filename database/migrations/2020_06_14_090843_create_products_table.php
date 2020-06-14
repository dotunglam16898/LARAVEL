<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
         $table->id();
         $table->string('name');
         $table->string('slug');
         $table->text('content')->nullable();
         $table->double('origin_price')->comment('gía ban đầu sp')->default();
         $table->double('sale_price')->comment('giá sp bán ra')->default();
         $table->integer('status')->comment('đánh dấu trạng thái sp')->default();
         $table->double('discount_percent');
         
         $table->integer('user_id')->nullable();
         $table->integer('category_id')->nullable();
         
         $table->timestamps();
         $table->timestamp('deleted_at')->nullable();
     });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
