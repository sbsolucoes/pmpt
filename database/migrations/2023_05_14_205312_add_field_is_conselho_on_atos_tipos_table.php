<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFieldIsConselhoOnAtosTiposTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('atos_tipos', function (Blueprint $table) {
            $table->boolean('is_conselho')->default(0)->after('status');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('atos_tipos', function (Blueprint $table) {
            $table->dropColumn(['is_conselho']);
        });
    }
}
