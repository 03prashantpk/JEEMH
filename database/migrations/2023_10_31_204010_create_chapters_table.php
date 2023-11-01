<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChaptersTable extends Migration
{
    public function up()
    {
        Schema::create('chapters', function (Blueprint $table) {
            $table->id();
            $table->string('chaptername');
            $table->string('subject');
            $table->enum('price', ['Free', 'Paid']);
            $table->decimal('amount', 8, 2)->default(0.00);
            $table->string('teachername');
            $table->text('description');
            $table->string('url');
            $table->string('password');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('chapters');
    }
}

