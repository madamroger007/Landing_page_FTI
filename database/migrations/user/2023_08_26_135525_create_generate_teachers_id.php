<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        DB::unprepared('
            CREATE TRIGGER id_store_mentor BEFORE INSERT ON mentor FOR EACH ROW
            BEGIN
                INSERT INTO sequence_tbl VALUES (NULL);
                SET NEW.mentor_id = CONCAT("0", LPAD(LAST_INSERT_ID(), 4, "0"));
            END
        ');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        DB::unprepared("DROP TRIGGER 'id_store'");
    }
};
