<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CompleteUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('prenom')->default('');
            $table->text('adresse')->default('');
            $table->integer('solde')->default('');
            $table->string('type')->default('utilisateur');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('prenom');
            $table->dropColumn('adresse');
            $table->dropColumn('solde');
            $table->dropColumn('type');
        });
    }
}
