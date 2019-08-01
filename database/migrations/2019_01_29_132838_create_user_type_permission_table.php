<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserTypePermissionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::create('user_type_permission', function (Blueprint $table) {
            $table->increments('id');
            $table->string('type');
            $table->integer('user_type_id')->unsigned();
            $table->integer('permission_id')->unsigned();
            $table->foreign('user_type_id')->references('id')->on('users_type')->onDelete('cascade');
            $table->foreign('permission_id')->references('id')->on('permission')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
