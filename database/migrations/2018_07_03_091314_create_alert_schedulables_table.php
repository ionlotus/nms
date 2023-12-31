<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(): void
    {
        Schema::create('alert_schedulables', function (Blueprint $table) {
            $table->increments('item_id');
            $table->unsignedInteger('schedule_id')->index();
            $table->unsignedInteger('alert_schedulable_id');
            $table->string('alert_schedulable_type');
            $table->index(['alert_schedulable_type', 'alert_schedulable_id'], 'schedulable_morph_index');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(): void
    {
        Schema::drop('alert_schedulables');
    }
};
