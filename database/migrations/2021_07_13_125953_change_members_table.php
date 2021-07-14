<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ChangeMembersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('members', function (Blueprint $table) {
            $table->string('member1')->nullable()->change();
            $table->string('member2')->nullable()->change();
            $table->string('member3')->nullable()->change();
            $table->string('member4')->nullable()->change();
            $table->string('member5')->nullable()->change();
            $table->string('member6')->nullable()->change();
            $table->string('member7')->nullable()->change();
            $table->string('member8')->nullable()->change();
            $table->string('member9')->nullable()->change();
            $table->string('member10')->nullable()->change();
            $table->string('member11')->nullable()->change();
            $table->string('member12')->nullable()->change();
            $table->string('member13')->nullable()->change();
            $table->string('member14')->nullable()->change();
            $table->string('member15')->nullable()->change();
            $table->string('member16')->nullable()->change();
            $table->string('member17')->nullable()->change();
            $table->string('member18')->nullable()->change();
            $table->integer('note_id')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('members', function (Blueprint $table) {
            $table->string('member1')->nullable(false)->change();
            $table->string('member2')->nullable(false)->change();
            $table->string('member3')->nullable(false)->change();
            $table->string('member4')->nullable(false)->change();
            $table->string('member5')->nullable(false)->change();
            $table->string('member6')->nullable(false)->change();
            $table->string('member7')->nullable(false)->change();
            $table->string('member8')->nullable(false)->change();
            $table->string('member9')->nullable(false)->change();
            $table->string('member10')->nullable(false)->change();
            $table->string('member11')->nullable(false)->change();
            $table->string('member12')->nullable(false)->change();
            $table->string('member13')->nullable(false)->change();
            $table->string('member14')->nullable(false)->change();
            $table->string('member15')->nullable(false)->change();
            $table->string('member16')->nullable(false)->change();
            $table->string('member17')->nullable(false)->change();
            $table->string('member18')->nullable(false)->change();
            $table->integer('note_id')->nullable(false)->change();
        });
    }
}
