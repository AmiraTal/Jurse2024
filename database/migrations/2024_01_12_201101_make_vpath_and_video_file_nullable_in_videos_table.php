<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */

    public function up()
    {
        Schema::table('videos', function (Blueprint $table) {
            $table->string('vpath')->nullable()->change();
            $table->string('video_file')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::table('videos', function (Blueprint $table) {
            $table->string('vpath')->nullable(false)->change();
            $table->string('video_file')->nullable(false)->change();
        });
    }

};
