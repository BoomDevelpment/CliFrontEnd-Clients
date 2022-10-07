<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;

use Carbon\Carbon;

class AccountBankTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('account_bank_types')->insert([ 
            'name'          =>  "NACIONAL",
            'status_id'     =>  1,
            'created_at'    =>  Carbon::now()->format('Y-m-d H:i:s'), 
            'updated_at'    =>  Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('account_bank_types')->insert([ 
            'name'          =>  "INTERNACIONAL",
            'status_id'     =>  1,
            'created_at'    =>  Carbon::now()->format('Y-m-d H:i:s'), 
            'updated_at'    =>  Carbon::now()->format('Y-m-d H:i:s')
        ]);
    }
}
