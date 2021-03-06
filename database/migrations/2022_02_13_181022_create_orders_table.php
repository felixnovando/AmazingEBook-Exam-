<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id("order_id")->nullable(false);

            $table->foreignId("user_id")->references("id")->on("users")->onDelete("cascade");
            $table->foreignId("ebook_id")->references("ebook_id")->on("ebooks")->onDelete("cascade");

            $table->date("order_date")->nullable(false);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
}
