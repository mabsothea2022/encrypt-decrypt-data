<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('tbl_transactions',function(Blueprint $table){
            $table->id();
            $table->string('card_name');
            $table->text('card_no');
            $table->text('exp_month');
            $table->text('exp_year');
            $table->text('cvv');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('tbl_transactions');
    }
};
