<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('skills', function (Blueprint $table) {
            $table->foreignId('ability_score_id')->constrained('ability_scores')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::table('skills', function (Blueprint $table) {
            $table->dropForeign(['ability_score_id']);
            $table->dropColumn('ability_score_id');
        });
    }
};
