<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;

use Carbon\Carbon;

class OperatorUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('operator_users')->insert([ 
            'operator_id'   =>  strtoupper('1'),
            'user_id'       =>  strtoupper('1'),
            'created_at'    =>  Carbon::now()->format('Y-m-d H:i:s'), 
            'updated_at'    =>  Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('operator_users')->insert([ 
            'operator_id'   =>  strtoupper('1'),
            'user_id'       =>  strtoupper('3'),
            'created_at'    =>  Carbon::now()->format('Y-m-d H:i:s'), 
            'updated_at'    =>  Carbon::now()->format('Y-m-d H:i:s')
        ]);
    }
}
