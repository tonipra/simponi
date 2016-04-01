<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
            Schema::create('users', function(Blueprint $table) {
                $table->increments('Emp_ID');
                $table->string('Emp_Pass');
$table->string('Emp_name');
$table->string('Emp_Email');
$table->string('Admin_ID');

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
        Schema::drop('users');
    }

}
