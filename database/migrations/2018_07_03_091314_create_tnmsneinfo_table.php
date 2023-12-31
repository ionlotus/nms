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
        Schema::create('tnmsneinfo', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('device_id')->index();
            $table->integer('neID')->index();
            $table->string('neType', 128);
            $table->string('neName', 128);
            $table->string('neLocation', 128);
            $table->string('neAlarm', 128);
            $table->string('neOpMode', 128);
            $table->string('neOpState', 128);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(): void
    {
        Schema::drop('tnmsneinfo');
    }
};
