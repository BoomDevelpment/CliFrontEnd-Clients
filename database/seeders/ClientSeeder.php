<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;

use Carbon\Carbon;

class ClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('clients')->insert([ 
            'mikrowisp'         =>  16,
            'name'              =>  strtoupper('Development - Cliente de pruebas'),
            'birthday'          =>  "1985-11-19",
            'address'           =>  strtoupper('avenida libertador, centro metropolitano javier'),
            'latitude'          =>  strtoupper('00.000000000000000'),
            'longitude'         =>  strtoupper('-00.000000000000000'),
            'phone_principal'   =>  strtoupper('584245387921'),
            'phone_alternative' =>  strtoupper('584145659075'),
            'email_principal'   =>  strtolower('luis.924@boomsolutions.com'),
            'email_alternative' =>  strtoupper('jesus.901@boomsolutions.com'),
            'batch'             =>  1,
            'facebook'          =>  strtoupper(''),
            'instagram'         =>  strtoupper(''),
            'twitter'           =>  strtoupper(''),
            'youtube'           =>  strtoupper(''),
            'advertising'       =>  strtoupper('si'),
            'gender_id'         =>  1,
            'status_id'         =>  1,
            'created_at'        =>  Carbon::now()->format('Y-m-d H:i:s'), 
            'updated_at'        =>  Carbon::now()->format('Y-m-d H:i:s')
        ]);
    }
}
