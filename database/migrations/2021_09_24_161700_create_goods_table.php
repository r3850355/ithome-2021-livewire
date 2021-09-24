<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGoodsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('goods', function (Blueprint $table) {
            $table->id();
            $table->string('name')->comment('商品名稱');
            $table->integer('price')->comment('商品價格');
            $table->string('slogan')->nullable()->comment('廣告標語');
            $table->text('specs')->nullable()->comment('商品規格');
            $table->text('content')->nullable()->comment('商品內容');
            $table->string('image_url')->nullable()->comment('商品圖片網址');
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
        Schema::dropIfExists('goods');
    }
}
