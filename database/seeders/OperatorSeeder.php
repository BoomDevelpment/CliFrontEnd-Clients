<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;

use Carbon\Carbon;

class OperatorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('operators')->insert([ 
            'name'          =>  strtoupper('Admin'),
            'username'      =>  strtoupper('Admin'),
            'ext_pr'        =>  0,
            'ext_vz'        =>  0,
            'ext_us'        =>  0,
            'role_id'       =>  1,
            'status_id'     =>  1,
            'created_at'    =>  Carbon::now()->format('Y-m-d H:i:s'), 
            'updated_at'    =>  Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('operators')->insert([ 
            'name'          =>  strtoupper('Luis Campos'),
            'username'      =>  strtoupper('lcampos'),
            'ext_pr'        =>  0,
            'ext_vz'        =>  0,
            'ext_us'        =>  0,
            'role_id'       =>  1,
            'status_id'     =>  1,
            'created_at'    =>  Carbon::now()->format('Y-m-d H:i:s'), 
            'updated_at'    =>  Carbon::now()->format('Y-m-d H:i:s')
        ]);
    }
}
