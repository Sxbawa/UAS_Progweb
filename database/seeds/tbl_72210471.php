<?php

use Illuminate\Database\Seeder;

class tbl_72210471 extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tbl_72210471')->insert([
            'judul_artikel' => ('manik'),
            'tanggal_artikel' => ('2003/06/13'),
            'deskripsi_artikel' => ('saya jomblo'),
        ]);
    }
}
