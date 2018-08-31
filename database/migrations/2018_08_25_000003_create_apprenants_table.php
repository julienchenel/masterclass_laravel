<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateApprenantsTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $set_schema_table = 'apprenants';

    /**
     * Run the migrations.
     * @table apprenants
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable($this->set_schema_table)) return;
        Schema::create($this->set_schema_table, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('name', 45)->nullable();
            $table->string('prenom', 45)->nullable();
            $table->string('mail', 45)->nullable();
            $table->string('adresse', 45)->nullable();
            $table->string('telephone', 45)->nullable();
            $table->integer('formateurs_id');

        });

        if (Schema::hasTable($this->set_schema_table)) return;
        Schema::create($this->set_schema_table, function (Blueprint $table) {
            $table->index(["formateurs_id"], 'fk_apprenants_formateurs_idx');
            $table->foreign('formateurs_id', 'fk_apprenants_formateurs_idx')
                ->references('id')->on('formateurs')
                ->onDelete('no action')
                ->onUpdate('no action');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
     public function down()
     {
       Schema::dropIfExists($this->set_schema_table);
     }
}
