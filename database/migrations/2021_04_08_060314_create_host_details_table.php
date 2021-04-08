<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHostDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('host_details', function (Blueprint $table) {
            $table->unsignedBigInteger('host_id');
            $table->foreign('host_id')->references('id')->on('hosts')->onDelete('cascade');
            $table->text('HostAttributekey');
            $table->text('HostAttributeValue');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('host_details');
    }
}
