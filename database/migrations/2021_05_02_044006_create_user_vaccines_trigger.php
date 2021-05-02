<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateUserVaccinesTrigger extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::unprepared(<<<EOD
        CREATE TRIGGER insert_user_vaccine
            AFTER INSERT ON users
            FOR EACH ROW
        INSERT INTO user_vaccines (user_id) VALUES (NEW.id);
        EOD
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::unprepared('DROP TRIGGER insert_user_vaccine');
    }
}
