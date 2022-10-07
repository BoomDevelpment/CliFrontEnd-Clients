<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;

use Carbon\Carbon;

class BankSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('banks')->insert([
            'code'          =>  '0174',
            'name'          =>  'BANPLUS',
            'status_id'     =>  1,
            'created_at'    =>  Carbon::now()->format('Y-m-d H:i:s'), 
            'updated_at'    =>  Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('banks')->insert([
            'code'          =>  '0001',
            'name'          =>  'BANCO CENTRAL DE VENEZUELA',
            'status_id'     =>  1,
            'created_at'    =>  Carbon::now()->format('Y-m-d H:i:s'), 
            'updated_at'    =>  Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('banks')->insert([
            'code'          =>  '0102',
            'name'          =>  'BANCO DE VENEZUELA',
            'status_id'     =>  1,
            'created_at'    =>  Carbon::now()->format('Y-m-d H:i:s'), 
            'updated_at'    =>  Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('banks')->insert([
            'code'          =>  '0104',
            'name'          =>  'VENEZOLANO DE CREDITO',
            'status_id'     =>  1,
            'created_at'    =>  Carbon::now()->format('Y-m-d H:i:s'), 
            'updated_at'    =>  Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('banks')->insert([
            'code'          =>  '0105',
            'name'          =>  'BANCO MERCANTIL',
            'status_id'     =>  1,
            'created_at'    =>  Carbon::now()->format('Y-m-d H:i:s'), 
            'updated_at'    =>  Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('banks')->insert([
            'code'          =>  '0108',
            'name'          =>  'BANCO PROVINCIAL',
            'status_id'     =>  1,
            'created_at'    =>  Carbon::now()->format('Y-m-d H:i:s'), 
            'updated_at'    =>  Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('banks')->insert([
            'code'          =>  '0114',
            'name'          =>  'BANCARIBE',
            'status_id'     =>  1,
            'created_at'    =>  Carbon::now()->format('Y-m-d H:i:s'), 
            'updated_at'    =>  Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('banks')->insert([
            'code'          =>  '0115',
            'name'          =>  'BANCO EXTERIOR',
            'status_id'     =>  1,
            'created_at'    =>  Carbon::now()->format('Y-m-d H:i:s'), 
            'updated_at'    =>  Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('banks')->insert([
            'code'          =>  '0116',
            'name'          =>  'BANCO OCCIDENTAL DE DESCUENTO',
            'status_id'     =>  1,
            'created_at'    =>  Carbon::now()->format('Y-m-d H:i:s'), 
            'updated_at'    =>  Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('banks')->insert([
            'code'          =>  '0128',
            'name'          =>  'BANCO CARONI',
            'status_id'     =>  1,
            'created_at'    =>  Carbon::now()->format('Y-m-d H:i:s'), 
            'updated_at'    =>  Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('banks')->insert([
            'code'          =>  '0134',
            'name'          =>  'BANESCO',
            'status_id'     =>  1,
            'created_at'    =>  Carbon::now()->format('Y-m-d H:i:s'), 
            'updated_at'    =>  Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('banks')->insert([
            'code'          =>  '0137',
            'name'          =>  'BANCO SOFITASA',
            'status_id'     =>  1,
            'created_at'    =>  Carbon::now()->format('Y-m-d H:i:s'), 
            'updated_at'    =>  Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('banks')->insert([
            'code'          =>  '0138',
            'name'          =>  'BACO PLAZA',
            'status_id'     =>  1,
            'created_at'    =>  Carbon::now()->format('Y-m-d H:i:s'), 
            'updated_at'    =>  Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('banks')->insert([
            'code'          =>  '0146',
            'name'          =>  'BANCO DE LA GENTE EMPRENDEDORA',
            'status_id'     =>  1,
            'created_at'    =>  Carbon::now()->format('Y-m-d H:i:s'), 
            'updated_at'    =>  Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('banks')->insert([
            'code'          =>  '0151',
            'name'          =>  'BFC BANCO FONDO COMUN',
            'status_id'     =>  1,
            'created_at'    =>  Carbon::now()->format('Y-m-d H:i:s'), 
            'updated_at'    =>  Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('banks')->insert([
            'code'          =>  '0156',
            'name'          =>  '100% BANCO',
            'status_id'     =>  1,
            'created_at'    =>  Carbon::now()->format('Y-m-d H:i:s'), 
            'updated_at'    =>  Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('banks')->insert([
            'code'          =>  '0157',
            'name'          =>  'DELSUR BANCO UNIVERSAL',
            'status_id'     =>  1,
            'created_at'    =>  Carbon::now()->format('Y-m-d H:i:s'), 
            'updated_at'    =>  Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('banks')->insert([
            'code'          =>  '0163',
            'name'          =>  'BANCO DEL TESORO',
            'status_id'     =>  1,
            'created_at'    =>  Carbon::now()->format('Y-m-d H:i:s'), 
            'updated_at'    =>  Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('banks')->insert([
            'code'          =>  '0166',
            'name'          =>  'BANCO AGRICOLA DE VENEZUELA',
            'status_id'     =>  1,
            'created_at'    =>  Carbon::now()->format('Y-m-d H:i:s'), 
            'updated_at'    =>  Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('banks')->insert([
            'code'          =>  '0168',
            'name'          =>  'BANCRECER',
            'status_id'     =>  1,
            'created_at'    =>  Carbon::now()->format('Y-m-d H:i:s'), 
            'updated_at'    =>  Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('banks')->insert([
            'code'          =>  '0169',
            'name'          =>  'MI BANCO',
            'status_id'     =>  1,
            'created_at'    =>  Carbon::now()->format('Y-m-d H:i:s'), 
            'updated_at'    =>  Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('banks')->insert([
            'code'          =>  '0171',
            'name'          =>  'BANCO ACTIVO',
            'status_id'     =>  1,
            'created_at'    =>  Carbon::now()->format('Y-m-d H:i:s'), 
            'updated_at'    =>  Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('banks')->insert([
            'code'          =>  '0172',
            'name'          =>  'BANCAMIGA',
            'status_id'     =>  1,
            'created_at'    =>  Carbon::now()->format('Y-m-d H:i:s'), 
            'updated_at'    =>  Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('banks')->insert([
            'code'          =>  '0173',
            'name'          =>  'BANCO INTERNACIONAL DE DESARROLLO',
            'status_id'     =>  1,
            'created_at'    =>  Carbon::now()->format('Y-m-d H:i:s'), 
            'updated_at'    =>  Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('banks')->insert([
            'code'          =>  '0175',
            'name'          =>  'BANCO BICENTENARIO DEL PUEBLO DE LA CLACE OBRERA',
            'status_id'     =>  1,
            'created_at'    =>  Carbon::now()->format('Y-m-d H:i:s'), 
            'updated_at'    =>  Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('banks')->insert([
            'code'          =>  '0176',
            'name'          =>  'NOVO BANCO',
            'status_id'     =>  1,
            'created_at'    =>  Carbon::now()->format('Y-m-d H:i:s'), 
            'updated_at'    =>  Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('banks')->insert([
            'code'          =>  '0177',
            'name'          =>  'BANCO DE LA FUERZA ARMADA NACIONAL BOLIVARIANA',
            'status_id'     =>  1,
            'created_at'    =>  Carbon::now()->format('Y-m-d H:i:s'), 
            'updated_at'    =>  Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('banks')->insert([
            'code'          =>  '0190',
            'name'          =>  'CITIBANK',
            'status_id'     =>  1,
            'created_at'    =>  Carbon::now()->format('Y-m-d H:i:s'), 
            'updated_at'    =>  Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('banks')->insert([
            'code'          =>  '0191',
            'name'          =>  'BANCO NACIONAL DE CREDITO',
            'status_id'     =>  1,
            'created_at'    =>  Carbon::now()->format('Y-m-d H:i:s'), 
            'updated_at'    =>  Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('banks')->insert([
            'code'          =>  '0601',
            'name'          =>  'INSTITUTO MUNICIPAL DE CREDITO POPULAR',
            'status_id'     =>  1,
            'created_at'    =>  Carbon::now()->format('Y-m-d H:i:s'), 
            'updated_at'    =>  Carbon::now()->format('Y-m-d H:i:s')
        ]);
    }
}
