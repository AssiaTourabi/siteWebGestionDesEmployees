<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use PHPUnit\Framework\MockObject\Builder\Identity;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employes', function (Blueprint $table) {
            $table->integer('id_emp');
            $table->string('nom_emp',20);
            $table->string('prenom_emp',20);
            $table->string('email_emp',50);
            $table->string('sexe_emp',["F","M"]);
            $table->string('tele_emp',10);
            $table->string('sitFam_emp',20);
            $table->string('cin_emp',20);
            $table->string('dip_emp', 20);
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
        Schema::dropIfExists('employes');
    }
};
