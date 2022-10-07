<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;

use Carbon\Carbon;

class TransferenceMethodSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('transference_methods')->insert([ 
            'name'          =>  strtoupper('Zelle'),
            'status_id'     =>  1,
            'created_at'    =>  Carbon::now()->format('Y-m-d H:i:s'), 
            'updated_at'    =>  Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('transference_methods')->insert([ 
            'name'          =>  strtoupper('Paypal'),
            'status_id'     =>  1,
            'created_at'    =>  Carbon::now()->format('Y-m-d H:i:s'), 
            'updated_at'    =>  Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('transference_methods')->insert([ 
            'name'          =>  strtoupper('transferencia bancaria'),
            'status_id'     =>  1,
            'created_at'    =>  Carbon::now()->format('Y-m-d H:i:s'), 
            'updated_at'    =>  Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('transference_methods')->insert([ 
            'name'          =>  strtoupper('pago movil'),
            'status_id'     =>  1,
            'created_at'    =>  Carbon::now()->format('Y-m-d H:i:s'), 
            'updated_at'    =>  Carbon::now()->format('Y-m-d H:i:s')
        ]);
    }
}
