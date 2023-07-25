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
        Schema::create('books', function (Blueprint $table) {
            $table->id();

            $table -> string('code', 13) -> unique();
            $table -> string('title',64);
            $table -> string('author') -> nullable();
            $table -> unsignedinteger('price');
            $table -> text('plot');
            $table -> string('editor')-> nullable();
            $table -> boolean('is_available') -> default(true);

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
};
