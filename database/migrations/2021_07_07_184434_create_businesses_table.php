<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBusinessesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('businesses', function (Blueprint $table) {
            $table->id();
            $table->text('bizz_name');
            $table->text('owner_name');
            $table->text('gst_no');
            $table->binary('gst_certi');
            $table->binary('pic1');
            $table->binary('pic2');
            $table->binary('pic3');
            $table->integer('phn_no');
            $table->longText('address');
            $table->time('open_time');
            $table->time('close_time');
            $table->text('bizz_email');
            $table->text('pass');
            $table->text('confirm_pass');
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
        Schema::dropIfExists('businesses');
    }
}
