<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCandidatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('candidates', function (Blueprint $table) {

            $table->increments('id');
            $table->string('name', 300);
            $table->enum('gender', ['L', 'P']);
            $table->string('city_of_birth', 150);
            $table->date('date_of_birth');
            $table->foreignId('religion_id', 11);
            $table->string('email')->unique();
            $table->string('phone', 45);
            $table->string('identity_number', 150);
            $table->string('identity_file', 150);
            $table->foreignId('bank_id', 11);
            $table->string('bank_account');
            $table->string('bank_name');
            $table->text('address');
            $table->foreignId('education_id', 11);
            $table->foreignId('university_id', 11);
            $table->string('university_other');
            $table->text('major');
            $table->string('graduation_year', 12);
            $table->dropPrimary('in_college');
            $table->tinyInteger('in_college')->unsigned();
            $table->string('semseter');
            $table->text('skill');
            $table->string('file_cv', 150);
            $table->string('file_photo', 150);
            $table->string('file_portofolio', 150);
            $table->foreignId('source_information_id', 11);
            $table->string('source_information_other');
            $table->string('work_unit');
            $table->smallInteger('ranking')->unsigned();
            $table->smallInteger('asssesment_score')->unsigned();
            $table->tinyInteger('mail_sent');
            $table->string('twitter');
            $table->string('instagram');
            $table->string('linkedin');
            $table->string('facebook');
            $table->foreignId('candidate_status_id', 11);
            $table->timestamps();
            $table->string('created_by');
            $table->string('updated_by');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('candidates');
    }
}
