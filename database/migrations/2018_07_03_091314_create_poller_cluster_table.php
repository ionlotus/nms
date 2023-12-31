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
        Schema::create('poller_cluster', function (Blueprint $table) {
            $table->increments('id');
            $table->string('node_id')->unique();
            $table->string('poller_name');
            $table->string('poller_version')->default('');
            $table->string('poller_groups')->default('');
            $table->dateTime('last_report');
            $table->boolean('master');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(): void
    {
        Schema::drop('poller_cluster');
    }
};
