<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('listings', function (Blueprint $table) {
            $table->id();
            $table->enum('category',['Furniture', 'Electronics', 'Cars', 'Property']);
            $table->string("title");
            $table->string("slug");
            $table->longText("description");
            $table->string("email");
            $table->decimal("price", 5, 2);
            $table->string("currency");
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
        Schema::dropIfExists('listings');
    }
};
