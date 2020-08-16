<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class InsertProfiles extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::table('profiles')->insert([
            ['id' => 1, 'description' => 'Nivel de acesso de administrador', 'nivel' => 1],
            ['id' => 2, 'description' => 'Nivel de acesso de Cliente', 'nivel' => 0]
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::delete('DELETE FROM profiles WHERE id = 1');
        DB::delete('DELETE FROM profiles WHERE id = 0');
    }
}
