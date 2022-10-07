<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;

use Illuminate\Support\Str;

use Carbon\Carbon;

class ScrapersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('scrapers')->insert([ 
            'uuid'          =>   Str::uuid()->toString(),
            'dolar'         =>  '8.21',
            'euro'          =>  '8.07',
            'yuan'          =>  '1.15',
            'lir'           =>  '0.44',
            'rublo'         =>  '0.13',
            'status_id'     =>  '1',
            'created_at'    =>  Carbon::now()->format('Y-m-d H:i:s'), 
            'updated_at'    =>  Carbon::now()->format('Y-m-d H:i:s')
        ]);
    }
}
