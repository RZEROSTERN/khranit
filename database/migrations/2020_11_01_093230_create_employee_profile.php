<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeeProfile extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employee_profile', function (Blueprint $table) {
            $table->id();
            $table->integer('client_id')->references('id')->on('users');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('last_name_2');
            $table->integer('gender_id');
            $table->string("street");
            $table->string("external_number");
            $table->string("internal_number");
            $table->string("suburb");
            $table->string("zip_code");
            $table->integer("id_state")->references('id')->on('cat_states');
            $table->integer("id_country")->references('id')->on('cat_countries');
            $table->timestamp('created_at')->default(\DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('updated_at')->default(\DB::raw('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'));
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('employee_profile');
    }
}
