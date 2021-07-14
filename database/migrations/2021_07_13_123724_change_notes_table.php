<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ChangeNotesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('notes', function (Blueprint $table) {
            $table->string('opponent')->nullable()->change();
            $table->integer('match_result_home')->nullable()->change();
            $table->integer('match_result_away')->nullable()->change();
            $table->string('url')->nullable()->change();
            $table->text('impressions')->nullable()->change();
            $table->text('comment')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('notes', function (Blueprint $table) {
            $table->string('opponent')->nullable(false)->change();
            $table->integer('match_result_home')->nullable(false)->change();
            $table->integer('match_result_away')->nullable(false)->change();
            $table->string('url')->nullable(false)->change();
            $table->text('impressions')->nullable(false)->change();
            $table->text('comment')->nullable(false)->change();
        });
    }
}
