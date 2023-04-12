<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddConstraintAtosTipoIdOnTableAtosCopy2 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('atos_copy_2', function (Blueprint $table) {
            $table->unsignedBigInteger('atos_tipo_id')->after('idAtos')->nullable();
            $table->foreign('atos_tipo_id')->references('id')->on('atos_tipos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('atos_copy_2', function (Blueprint $table) {
            //
        });
    }
}
