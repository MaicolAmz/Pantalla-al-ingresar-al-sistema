<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfessionalExperiencesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection('pgsql-job-board')->create('professional_experiences', function (Blueprint $table) {
            $table->id();
            $table->foreignId('professional_id')->constrained();
            $table->string('employer');
            $table->foreignId('position_id')->constrained('catalogues');
            $table->string('job_description');
            $table->date('start_date');
            $table->date('finish_date')->nullable();
            $table->string('reason_leave');
            $table->boolean('current_work')->nullable();
            $table->foreignId('state_id')->constrained('ignug.states');
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
        Schema::connection('pgsql-job-board')->dropIfExists('professional_experiences');
    }
}
