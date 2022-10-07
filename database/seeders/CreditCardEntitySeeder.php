<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;

use Carbon\Carbon;

class CreditCardEntitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('credit_card_entities')->insert([ 
            'name'          =>  "VISA",
            'status_id'     =>  1,
            'created_at'    =>  Carbon::now()->format('Y-m-d H:i:s'), 
            'updated_at'    =>  Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('credit_card_entities')->insert([ 
            'name'          =>  "MASTERCARD",
            'status_id'     =>  1,
            'created_at'    =>  Carbon::now()->format('Y-m-d H:i:s'), 
            'updated_at'    =>  Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('credit_card_entities')->insert([ 
            'name'          =>  "AMERICAN EXPRESS",
            'status_id'     =>  1,
            'created_at'    =>  Carbon::now()->format('Y-m-d H:i:s'), 
            'updated_at'    =>  Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('credit_card_entities')->insert([ 
            'name'          =>  "DINERS",
            'status_id'     =>  1,
            'created_at'    =>  Carbon::now()->format('Y-m-d H:i:s'), 
            'updated_at'    =>  Carbon::now()->format('Y-m-d H:i:s')
        ]);
    }
}
