<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSources extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sources', function (Blueprint $table) {
            $table->id();
            $table->foreignId('district_id')->nullable()->constrained();
            $table->string('source_name')->nullable();
            $table->string('village')->nullable();
            $table->string('parish')->nullable();
            $table->string('sub_county')->nullable();
            $table->string('county')->nullable();
            $table->string('g_p_s_location')->nullable();
            $table->string('lab_identifier_code')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sources');
    }
}
