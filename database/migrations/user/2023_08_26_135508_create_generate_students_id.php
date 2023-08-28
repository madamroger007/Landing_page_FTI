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
        CREATE TRIGGER id_store_siswa BEFORE INSERT ON siswa FOR EACH ROW
        BEGIN
            INSERT INTO generate_sequence_tbl_student VALUES (NULL);
            SET NEW.siswa_id = CONCAT("0", LPAD(LAST_INSERT_ID(), 4, "0"));
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
