<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->id();
            $table->string("titre");
            $table->string("description")->nullable();
            $table->string("photo");
            $table->unsignedBigInteger("user_id");
            $table->unsignedBigInteger("type_id");
            $table->integer("etat");
            $table->foreign("user_id")->references("id")->on("users")->onUpdate("cascade")->onDelete("cascade");
            $table->foreign("type_id")->references("id")->on("types")->onUpdate("cascade")->onDelete("cascade");
            $table->string("numero_telepone_1")->nullable();
            $table->string("numero_telepone_2")->nullable();
            $table->string("numero_telepone_3")->nullable();

            
            $table->string("references")->nullable();
            $table->date("jour")->nullable();
            $table->string("envoyeur")->nullable();

            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('articles');
    }
};
