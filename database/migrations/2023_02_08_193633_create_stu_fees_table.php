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
        Schema::create('stu_fees', function (Blueprint $table) {
            $table->id();
            $table->string('p_id');

            $table->string('s_registraion');

            $table->string('feetype');
            $table->string('c_status');
            $table->string('p_status');


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
        Schema::dropIfExists('stu_fees');
    }
};
