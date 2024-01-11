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
        Schema::table("myroles", function (Blueprint $table) {
            $table->unsignedBigInteger('userId');
            $table->unsignedBigInteger('roleId');
            $table->foreign('userId')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('roleId')->references('id')->on('roles')->onDelete('cascade');
        });
    }
    
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
