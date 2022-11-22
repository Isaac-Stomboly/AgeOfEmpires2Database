<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empires', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('expansion');
            $table->string('army_type');
            $table->string('team_bonus');
            $table->json('civilization_bonus');
        });
        // Call API and send all the information to the database
        $response = Http::get('https://age-of-empires-2-api.herokuapp.com/api/v1/civilizations');
        $json = $response->json('civilizations');
        foreach ($json as $key => $value) {
            DB::insert('insert into empires (name, expansion, army_type, team_bonus, civilization_bonus) values (?, ?, ?, ?, ?)', [$value['name'], $value['expansion'], $value['army_type'], $value['team_bonus'], json_encode($value['civilization_bonus'])]);
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('empires');
    }
};
