<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterTableUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable('users')) {
            Schema::table('users', function (Blueprint $table) {
                $table->string('name')->nullable();
                $table->string('username')->unique()->nullable();
                $table->string('email')->unique()->nullable();
                $table->string('ava')->nullable();
                $table->string('password')->nullable();
                $table->unsignedTinyInteger('role');
                $table->longText('description');
                $table->float('experience');
                $table->string('slack')->nullable();
                $table->string('facebook')->nullable();
                $table->softDeletes();
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
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn(['name', 'username', 'email', 'ava', 'password', 'role', 'description', 'experience', 'slack', 'facebook']);
        });
    }
}
