<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('roles', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->boolean('is_editable')->default(true);
            $table->timestamps();
        });

        DB::table('roles')->insert([
            'name' => 'SUPER_ADMIN',
            'is_editable'=> false,
        ]);
        DB::table('roles')->insert([
            'name' => 'ADMIN',
            'is_editable'=> false,

        ]);

        DB::table('roles')->insert([
            'name' => 'CUSTOMER',
            'is_editable'=> false,

        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('roles');
    }
};
