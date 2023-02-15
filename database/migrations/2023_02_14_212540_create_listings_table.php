<?php

use App\Models\Category;
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
            $table->integer('category_id')->unsigned();
            // $table->foreignIdFor(Category::class);
            // $table->foreign('category_id')->references('id')->on('categories');
            $table->string("name");
            $table->string("slug");
            $table->longText("description");
            $table->string("email");
            $table->integer("price");
            $table->string("currency");
            $table->string("mobile");
            $table->date("date_online");  
            $table->date("date_offline");  
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
