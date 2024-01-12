<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ChangeDescriptionToTextInSpecialSessionsTable extends Migration
{
    public function up()
    {
        Schema::table('special_sessions', function (Blueprint $table) {
            $table->text('description')->change();
        });
    }

    public function down()
    {
        Schema::table('special_sessions', function (Blueprint $table) {
            $table->string('description')->change();
        });
    }
}
