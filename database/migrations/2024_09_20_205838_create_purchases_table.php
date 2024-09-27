<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePurchasesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('purchases')) {
            Schema::create('purchases', function (Blueprint $table) {
                $table->bigIncrements('id');
                $table->string('clients_email');
                $table->string('clients_password');
                $table->unsignedBigInteger('stars_id');
                $table->index('clients_email','clientd_email_idx');
                $table->foreign('clients_email','clientd_email_fk')->references('clients_email')->on('clients');
                $table->index('clients_password','cliente_password_idx');
                $table->foreign('clients_password','cliente_password_fk')->references('clients_password')->on('clients');
                $table->index('stars_id','stars_idx');
                $table->foreign('stars_id','stars_fk')->references('id')->on('stars');
                $table->timestamps();
            });
        }
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('purchases');
    }
}
