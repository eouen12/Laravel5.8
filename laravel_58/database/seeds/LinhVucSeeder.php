<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LinhVucSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('linh_vucs')->insert([
        	'ten_linh_vuc' => 'Toán'
        ]);
    }
}
