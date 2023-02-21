<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id('user_id');
            $table->string('username')->unique();
            $table->string('password');
            $table->string('lname');
            $table->string('fname');
            $table->string('mname')->nullable();
            $table->string('extension')->nullable();
            $table->date('date_birth')->nullable();
            $table->string('place_birth')->nullable();

            $table->string('sex', 20)->nullable();
            $table->string('civil_status', 20)->nullable();
            $table->string('civil_status_others', 100)->nullable();

            $table->string('height', 30)->nullable();
            $table->string('weight', 30)->nullable();
            $table->string('blood_type', 30)->nullable();
            $table->string('gsis', 100)->nullable();
            $table->string('pagibig', 100)->nullable();
            $table->string('philhealth', 100)->nullable();
            $table->string('sss', 100)->nullable();
            $table->string('tin', 100)->nullable();
            $table->string('agency_idno', 100)->nullable();

            $table->string('citizenship', 100)->nullable();

            $table->string('res_province')->nullable();
            $table->string('res_city')->nullable();
            $table->string('res_barangay')->nullable();
            $table->string('res_street')->nullable();
            $table->string('res_houseno_blockno')->nullable();
            $table->string('res_zipcode')->nullable();

            $table->string('per_province')->nullable();
            $table->string('per_city')->nullable();
            $table->string('per_barangay')->nullable();
            $table->string('per_street')->nullable();
            $table->string('per_houseno_blockno')->nullable();
            $table->string('per_zipcode')->nullable();

            $table->string('tel_no')->nullable();
            $table->string('contact_no')->nullable();
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();

            //spouse
            $table->string('spouse_surname')->nullable();
            $table->string('spouse_fname')->nullable();
            $table->string('spouse_mname')->nullable();
            $table->string('spouse_extension')->nullable();
            $table->string('spouse_occupation')->nullable();

            $table->string('business_name')->nullable();
            $table->string('business_address')->nullable();
            $table->string('business_contact_no')->nullable();

            $table->string('father_surname')->nullable();
            $table->string('father_fname')->nullable();
            $table->string('father_mname')->nullable();
            $table->string('father_extension')->nullable();

            $table->string('mother_maiden_name')->nullable();
            $table->string('mother_fname')->nullable();
            $table->string('mother_mname')->nullable();
            $table->string('mother_extension')->nullable();

            $table->string('role')->nullable();


            $table->tinyInteger('is_verified')->default(0);

            $table->tinyInteger('related_with_third_degree')->default(0);
            $table->tinyInteger('related_with_fourth_degree')->default(0);
            $table->string('related_with_fourth_degree_yes')->nullable();

            $table->tinyInteger('is_guilty_administrative_offense')->default(0);
            $table->string('is_guilty_administrative_offense_yes')->nullable();


            $table->tinyInteger('is_criminally_charge')->default(0);
            $table->string('is_criminally_charge_yes')->nullable();

            $table->string('date_filed')->nullable();
            $table->string('case_status')->nullable();

            $table->tinyInteger('is_convicted')->default(0);
            $table->string('is_convicted_yes')->nullable();

            $table->tinyInteger('is_separated')->default(0);
            $table->string('is_separated_yes_details')->nullable();

            $table->tinyInteger('is_candidate_election')->default(0);
            $table->string('is_candidate_election_yes')->nullable();
            

            $table->tinyInteger('is_resigned')->default(0);
            $table->string('is_resigned_yes')->nullable();

            $table->tinyInteger('is_immigrant')->default(0);
            $table->string('is_immigrant_yes')->nullable();

            $table->tinyInteger('is_indigenous')->default(0);
            $table->string('is_indigenous_yes')->nullable();

            $table->tinyInteger('is_disable')->default(0);
            $table->string('is_disable_id_no')->nullable();

            $table->tinyInteger('is_solo_parent')->default(0);
            $table->string('is_solo_parent_yes')->nullable();

            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
