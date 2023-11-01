<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('chapters', function (Blueprint $table) {
            $table->string('url')->nullable(); // Add the 'url' column
            $table->string('password')->nullable(); // Add the 'password' column
        });
    }

    public function down()
    {
        Schema::table('chapters', function (Blueprint $table) {
            $table->dropColumn('url'); // Remove the 'url' column
            $table->dropColumn('password'); // Remove the 'password' column
        });
    }
};
