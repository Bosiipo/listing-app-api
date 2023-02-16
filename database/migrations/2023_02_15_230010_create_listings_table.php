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
            $table->longText("description")->nullable();
            $table->string("email");
            $table->decimal("price", 5, 2);
            $table->string("currency");
            // $table->timestamp("date_online");  
            // $table->timestamp("date_offline");  
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
