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
        Schema::create('ports_fdb', function (Blueprint $table) {
            $table->unsignedBigInteger('ports_fdb_id', true);
            $table->unsignedInteger('port_id')->index();
            $table->string('mac_address', 32)->index();
            $table->unsignedInteger('vlan_id')->index();
            $table->unsignedInteger('device_id')->index();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(): void
    {
        Schema::drop('ports_fdb');
    }
};
