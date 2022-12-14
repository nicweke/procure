<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateShopsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shops', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('ownername');
            $table->string('email');
            $table->string('tel');
            $table->string('license');
            $table->string('cert');
            $table->string('account_name');
            $table->string('account_number');
            $table->string('bank_name');
            $table->string('branch_name');
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->boolean('is_active')->default(false);
            $table->text('description')->nullable();
            $table->text('specialization')->nullable();
            $table->float('rating')->nullable();
            $table->string('cover_img')->nullable();
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
        Schema::dropIfExists('shops');
    }
}
