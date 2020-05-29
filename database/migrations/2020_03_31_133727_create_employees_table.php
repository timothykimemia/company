<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('department');
            $table->string('location');
            $table->string('telephone');
            $table->decimal('salary',16);
            $table->string('Job_grade');
            $table->string('paterson_grade');
            $table->decimal('min_salary',16);
            $table->decimal('max_salary',16);
            $table->decimal('salary_pm',16);
            $table->decimal('transport_allowance',16);
            $table->decimal('accomodation_allowance',16);
            $table->decimal('entertainment_allowance',16);
            $table->decimal('lunch_allowance',16);
            $table->string('cash_allowance',16);
            $table->decimal('allowancepaid',16);
            $table->decimal('taxperdiem',16);
            $table->decimal('benefits_payed',16);
            $table->decimal('amount',16);
            $table->timestamps();

            $table->foreign('department')->references('name')->on('departments')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('employees');
    }
}
