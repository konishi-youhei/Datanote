<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMembersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('members', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('member1');
            $table->string('member2');
            $table->string('member3');
            $table->string('member4');
            $table->string('member5');
            $table->string('member6');
            $table->string('member7');
            $table->string('member8');
            $table->string('member9');
            $table->string('member10');
            $table->string('member11');
            $table->string('member12');
            $table->string('member13');
            $table->string('member14');
            $table->string('member15');
            $table->string('member16');
            $table->string('member17');
            $table->string('member18');
            $table->integer('note_id');
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
        Schema::dropIfExists('members');
    }
}
