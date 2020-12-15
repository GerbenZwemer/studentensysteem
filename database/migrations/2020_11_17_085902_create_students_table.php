<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('roepnaam', 45);
            $table->string('voorvoegsel', 45)->nullable();
            $table->string('achternaam', 45);
            $table->string('voorletters', 45);
            $table->string('officielenaam', 45);
            $table->string('postcode', 45);
            $table->string('straat', 45);
            $table->integer('huisnummer');
            $table->string('toevoeging', 45)->nullable();
            $table->string('woonplaats', 45);
            $table->string('opleiding', 45);
            $table->string('klas', 45);
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
        Schema::dropIfExists('students');
    }
}
