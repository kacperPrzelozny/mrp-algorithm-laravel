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
        Schema::table('bom', function (Blueprint $table) {
            $table->index(['item_id']);
            $table->foreign('item_id')->references('id')->on('items');
        });

        Schema::table('items_periods', function (Blueprint $table) {
            $table->index(['item_id']);
            $table->foreign('item_id')->references('id')->on('items');
            $table->index(['period_id']);
            $table->foreign('period_id')->references('id')->on('periods');
        });

        Schema::table('orders', function (Blueprint $table) {
            $table->index(['customer_id']);
            $table->foreign('customer_id')->references('id')->on('customers');
            $table->index(['period_id']);
            $table->foreign('period_id')->references('id')->on('periods');
            $table->index(['item_id']);
            $table->foreign('item_id')->references('id')->on('items');
        });

        Schema::table('required_items', function (Blueprint $table) {
            $table->index(['item_id']);
            $table->foreign('item_id')->references('id')->on('items');
            $table->index(['due_period_id']);
            $table->foreign('due_period_id')->references('id')->on('periods');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {

    }
};
