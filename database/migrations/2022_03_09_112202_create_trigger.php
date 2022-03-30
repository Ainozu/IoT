<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
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
        DB::unprepared('
        CREATE TRIGGER fogyaszat BEFORE INSERT ON szenzor
        FOR EACH ROW
        BEGIN
        
            DECLARE tmp INT;

            SET tmp  = (SELECT fogyasztas FROM szenzor WHERE berendezes_id=new.berendezes_id order by id desc limit 1);

            
            IF tmp IS NOT NULL THEN
                SET NEW.fogyasztas=(NEW.fogyasztas-tmp);
            END IF;
            

        END');


        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::unprepared('DROP TRIGGER `fogyaszat`');
    }
};
