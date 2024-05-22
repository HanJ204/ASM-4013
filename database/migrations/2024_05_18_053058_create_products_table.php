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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique();
            $table->string('moTa', 1000)->nullable();
            $table->string('hinh')->nullable();
            $table->double('gia', 8, 2);
            $table->double('giaKM', 8, 2)->nullable();
            $table->integer('soLuong')->default(0);
            $table->boolean('hot')->default(0);
            $table->string('luotXem')->nullable();
            $table->boolean('anHien')->default(1);
            $table->dateTime('ngayDang');
            $table->unsignedBigInteger('idCategory');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
